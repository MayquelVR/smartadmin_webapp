<?php

namespace App;

use \Common\Util;
use \Bootstrap\Component;

class Content {

    public static function print_empty($return = false) {
        $content = '<span class="badge badge-outline-default text-muted">empty</span>';
        if ($return) return $content;
        else echo $content;
    }

    public static function print_alert($subject, $body, $desc = '', $icon = 'ion ion-ios-information-circle-outline') {
        echo '<div class="card bg-light">
            <div class="card-body text-center p-5">
                <div class="display-1 '.$icon.' text-muted mb-4"></div>
                <div>
                    <div class="text-large font-weight-semibold mb-1">'.$subject.'</div>
                    <div class="text-muted">'.$body.'</div>
                </div>
            </div>
        </div>';
    }

    public static function print_post_token($url) {
        $token = self::get_post_token($url);
        if ($token) {
            echo '<input type="hidden" name="authenticity_token" value="'.escape(base64_encode($token)).'">'.EOL;
        }
    }

    public static function get_post_token($url) {
        $token = Util::token(64);
        if (session_id()) {
            $hashed_url = sha1($url);
            $_SESSION[$hashed_url] = $token;

            return hash_hmac('sha256', $url, $token);
        }

        return false;
    }

    public static function verify_post() {
        if (session_id() && is_post()) {
            $post_token = get('authenticity_token', $_POST);
            $session_token = get(sha1(SERVER_REQUEST), $_SESSION);
            $calc = hash_hmac('sha256', SERVER_REQUEST, $session_token);

            $result = hash_equals(base64_encode($calc), $post_token);
            if ($result) return $result;
        }

        throw new \Exception('Failed to authenticate the request');
    }

    public static function money($amount = 0.00, $format = '%(#10n', $locale = 'en_US') {
        setlocale(LC_MONETARY, $locale);
        return money_format($format, $amount);
    }

    public static function highlight($text, $subject) {
        return preg_replace('/('.$text.')/i', '<span class="bg-yellow">${1}</span>', $subject);
    }

    public static function print_years($options = [], $required = true, $return = false) {
        $years = [];
        $year_now = date('Y');
        $year_end = date('Y', strtotime('+15 year'));
        foreach (range($year_now, $year_end) as $year) {
            $years[] = [
                'value' => $year,
                'display' => $year
            ];
        }

        $options = Util::set_values([
            'class' => 'form-control',
            'name' => 'month',
            'display' => 'display',
            'value' => 'value',
            'default' => 'YYYY',
            'attr' => [$required ? 'required' : null],
            'selected' => ''
        ], $options, 'selected');

        return Component::print_select($years, $options, $return);
    }

    public static function print_months($options = [], $required = true, $return = false) {
        $months = [];
        foreach (range(1, 12) as $month) {
            $months[] = [
                'value' => $month,
                'display' => $month
            ];
        }

        $options = Util::set_values([
            'class' => 'form-control',
            'name' => 'month',
            'display' => 'display',
            'value' => 'value',
            'default' => 'MM',
            'attr' => [$required ? 'required' : null],
            'selected' => ''
        ], $options, 'selected');

        return Component::print_select($months, $options, $return);
    }

    public static function print_clients($options = [], $required = true, $return = false) {
        $clients = \Models\Client::query("SELECT id, name FROM clients WHERE active = 1 ORDER BY name");

        $options = Util::set_values([
            'class' => 'form-control',
            'name' => 'client_id',
            'display' => 'name',
            'value' => 'id',
            'default' => 'Choose client...',
            'selected' => '',
            'attr' => ['data-toggle' => 'select2', $required ? 'required' : null]
        ], $options, 'selected');

        return Component::print_select($clients, $options, $return);
    }
}