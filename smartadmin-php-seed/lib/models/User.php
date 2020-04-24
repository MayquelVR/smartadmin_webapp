<?php

namespace Models;
use \Common\Util;

class User extends Model {

    public static function validate_username($username, &$message = '') {
        $message = 'The username is already taken';

        $user = self::with_username($username) ? true : false;
        if (!$user) {
            $message = 'The username is not in use';
            return true;
        }

        return false;
    }

    public static function validate_email($email, &$message = '') {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $message = 'Email is not valid';
            return false;
        }

        $user = self::with_email($email) ? true : false;
        if (!$user) {
            $message = 'The email is not in use';
            return true;
        }

        $message = 'The email is already taken';

        return false;
    }

    public function verify_email($token) {
        if ($this->verified) return true;

        $request = $this->get_request(RequestType::EMAIL_VERIFICATION);
        if ($request && $request->token === $token) {
            if (!$request->is_valid()) {
                throw new \Exception('The verification token is no longer valid');
            }

            $verified = $request->verify();
            if ($verified) {
                $request->complete();
                $this->update('verified', 1);
            }

            return $verified;
        }

        throw new \Exception('Invalid verification token');
    }

    public function name() {
        $parts = [$this->firstname, $this->lastname];
        return $this->firstname ? implode(' ', $parts) : $this->username;
    }

    public function set_password($password) {
        $salt = token();
        $hash = password_hash($salt.$password, PASSWORD_DEFAULT);

        return $this->update([
            'password' => $hash,
            'password_salt' => $salt
        ]);
    }

    public static function with_email($email) {
        return parent::instance('email', $email);
    }

    public static function with_username($username) {
        return parent::instance('username', $username);
    }

    public function verify_password($password) {
        $salted_current_password = $this->password;
        $salted_password = $this->password_salt.$password;

        if (password_verify($salted_password, $salted_current_password)) {
            if (password_needs_rehash($salted_current_password, PASSWORD_DEFAULT)) {
                $salt = token();
                $new_salted_hash = password_hash($salt.$password, PASSWORD_DEFAULT);

                $this->update([
                    'password' => $new_salted_hash,
                    'password_salt' => $salt
                ]);
            }

            return true;
        } else return false;
    }

    public function create_session($platform) {
        return Session::create($this, $platform);
    }

    public function get_avatar($size = 48) {
        $gravatar = new \Common\Gravatar($this->email);
        $gravatar->set_size($size);
        return $gravatar->get_url();
    }

    public function create_access_token() {
        $token = sha1(token());

        return AccessToken::insert([
            'user_id' => $this->id,
            'token' => $token
        ]);
    }

    public function validate_access_token($token) {
        $token = AccessToken::with_token($token);
        if ($token) {
            return $token->user_id == $this->id;
        }

        return false;
    }

    public function notify($subject, $body) {
        if (!$this->email) return false;

        $mailer = new \Common\Mailer;

        $body = $mailer->format_body($body, \Common\Mailer::TEMPLATE_DEFAULT);
        return $mailer->submit($this->email, $subject, $body);
    }

    public function get() {
        $data = $this->to_array(['id', 'username', 'created_at']);
        $data = Model::format_dates(array('created_at'), $data, \DateTime::ISO8601);

        $data['name'] = $this->name();
        $data['avatar_url'] = $this->get_avatar();

        return $data;
    }
}