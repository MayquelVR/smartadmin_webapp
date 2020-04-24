<?php

namespace Common;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Mailer extends PHPMailer {
    const TEMPLATE_DEFAULT = 'email-default';
    const TEMPLATE_PASSWORD_RESET = 'email-password-reset';
    const TEMPLATE_VERIFY_EMAIL = 'email-verify';
    const TEMPLATE_USER_INVITE = 'user-invite';

    private static $_encryption = false;

    public function __construct() {
        parent::__construct(__DEV__);

        $this->Host = APP_EMAIL_HOST;
        $this->Port = APP_EMAIL_PORT;
        $this->SMTPSecure = APP_EMAIL_SECURE;
        $this->SMTPAuth = APP_EMAIL_USER ? true : false;
        $this->Username = APP_EMAIL_USER;
        $this->Password = APP_EMAIL_PASSWORD;
        $this->CharSet = 'utf-8';
        $this->isSMTP();
    }

    public static function set_encryption($value) {
        self::$_encryption = $value ? true : false;
    }

    public static function format_address($name, $email) {
        return '"'.str_replace('"', '\'', $name).'" <'.$email.'>';
    }

    public static function build_address($name, $email) {
        $address_info = self::parse_address(self::format_address($name, trim($email)));
        if ($address_info) {
            if (count($address_info) == 1)
                return $address_info[0];
            else return $address_info;
        } return false;
    }

    /**
     * Parse email address string
     * @param  string $str       string input
     * @param  string $separator separator, default ","
     * @return array             array
     */
    public static function parse_address($email_str, $separator = ",") {
        $email_str = str_replace(';', $separator, $email_str);
        $email_str = trim(preg_replace('/\s+/', ' ', $email_str));
        $addresses  = [];

        preg_match_all('/([^<>]*)<(.+?)>\s*,?|([^@;,\s]+@[\w.-]+\.[a-zA-Z]{2,}),?/', $email_str, $matches);
        foreach ($matches[0] as $index => $match) {

            $email = trim($matches[2][$index] ?: $matches[3][$index]);
            $name = trim($matches[1][$index] ?: $email, '"');

            $email_info = [
                'name' => $name,
                'email' => $email
            ];

            if (strpos($email, $separator) !== false) {
                if ($addtl_emails = self::parse_address($email, $separator)) {
                    foreach ($addtl_emails as $addtl_email_info) {
                        $addtl_email_info['name'] = $name;
                        $addresses[] = $addtl_email_info;
                    }
                }
            } else {
                if (filter_var($email_info['email'], FILTER_VALIDATE_EMAIL))
                    $addresses[] = $email_info;
            }
        }

        return $addresses;
    }

     //array $to should be array(<to_name>, <to_email>) as parameter
    //array $attachments should be array(<type>, <path>) as parameter
    /**
     * Emailer::send_mail()
     *
     * @param array $to
     * @param string $subject
     * @param string $message
     * @param array $attachments
     * @return
     */
    public function submit($to, $subject, $message, $attachments = []) {
        if (!$to) throw new \Exception('Empty recipient');

        if (__DEV__) $to = APP_ALERTS_EMAIL;

        $this->SetFrom(APP_EMAIL, APP_OWNER_NAME);

        if (is_string($to)) {
            $to = self::parse_address($to);
        } else if (is_object($to)) {
            $to = [Util::to_array($to)];
        }

        foreach ($to as $name => $email_info) {
            if (is_string($email_info)) {
                $email = trim($email_info);
                if ($email) {
                    $name = is_int($name) ? '' : $name;
                } else continue;
            } else {
                $email_info = Util::to_array($email_info);
                if (isset($email_info['email'])) {
                    $email = trim($email_info['email']);
                    $name = $email_info['name'] ?? '';
                } else continue;
            }

            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $this->addAddress($email, $name);
            } else {
                trigger_error($email.' is not a valid email address.');
            }
        }

        if ($attachments) {
            if (!is_array($attachments)) $attachments = [$attachments];

            foreach ($attachments as $name => $attachment) {
                if ($attachment != "")
                    $this->AddAttachment($attachment, is_string($name) ? $name : "", "base64");
            }
        }

        if (self::$_encryption) $subject = '[ENCRYPTED] '.$subject;

        $this->Subject  = $subject;
        $this->addEmbeddedImage(ASSETS_PATH.'/img/logo.png', 'logo', 'logo.png');
        $this->msgHTML($message);

        return $this->send();
    }

    public function get_error() {
        return $this->ErrorInfo;
    }

    public function set_priority($priority) {
        if (!$priority) return;

        $priorities = [
            1 => 'High',
            2 => 'Normal',
            3 => 'Low'
        ];

        $this->Priority = $priority;
        if (isset($priorities[$priority])) {
            $priority_str = $priorities[$priority];
            $this->AddCustomHeader("X-Priority: $priority");
            $this->AddCustomHeader("X-MSMail-Priority: $priority_str");
            $this->AddCustomHeader("Importance: $priority_str");
        }
    }

    public function format_body($options, $template = self::TEMPLATE_DEFAULT) {
        $content = file_get_contents(ASSETS_PATH.'/templates/'.$template.'.html');

        switch ($template) {
            case self::TEMPLATE_VERIFY_EMAIL:
            case self::TEMPLATE_PASSWORD_RESET:
            case self::TEMPLATE_USER_INVITE:
                $url = get('url', $options, '#');
                $name = get('name', $options);
                $html = sprintf($content, $name, $url, APP_TITLE, APP_OWNER_NAME, APP_OWNER_ADDRESS, APP_URL);

                break;
            default:
                if (is_string($options)) $options = ['message' => $options];

                $color = get('color', $options, 'default');
                if (!\Common\Util::in_string('#', $color)) {
                    $color = \App\Content::get_color($color);
                }

                $message = get('message', $options);
                $html = sprintf($content, $message, $color, APP_TITLE, APP_OWNER_NAME, APP_OWNER_ADDRESS, APP_URL);
        }

        return $html;
    }
}