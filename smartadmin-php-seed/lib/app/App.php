<?php

namespace App;
use \Common\Util;
use \Models\Model;

class App {
    public static function get_company() {
        $data = [
            'name' => APP_OWNER_NAME,
            'phone' => APP_OWNER_PHONE,
            'fax' => APP_OWNER_FAX,
            'email' => APP_OWNER_EMAIL,
            'address' => APP_OWNER_ADDRESS,
            'logo' => APP_OWNER_LOGO
        ];

        return $data;
    }

    public static function instance() {
        return new self();
    }

    public static function error_400($message = null) {
        self::include_error(400, $message);
    }

    public static function error_404($message = null) {
        self::include_error(404, $message);
    }

    public static function error_403($message = null) {
        self::include_error(403, $message);
    }

    public static function include_error($code, $message = '') {
        if (!Util::is_pjax() && !Util::is_ajax()) {
            include_once self::get_include($code);
        } else {
            Util::set_status($code);
            if ($message) Util::encode_result(is_string($message) ? ['message' => $message] : $message);
        }
    }

    public static function get_include($path) {
        $path = Util::in_string('.php', $path) ? $path : $path.'.php';
        return INCLUDES_PATH.'/'.$path;
    }

    public static function get_ajax_partial($path) {
        $path = Util::in_string('.php', $path) ? $path : $path.'.php';
        $path = str_replace('/', DS, $path);
        return APP_PATH.DS.'ajax'.DS.$path;
    }

    public static function add_client($data) {
        if (!Util::verify_fields(['name'], $data, $missing)) {
            throw new \Exception('Missing fields: '.Util::implode_and($missing));
        }

        return \Models\Client::insert([
            'name' => get('name', $data),
            'email' => get('email', $data),
            'phone' => get('phone', $data)
        ]);
    }
}