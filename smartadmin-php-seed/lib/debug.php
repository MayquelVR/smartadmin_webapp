<?php

if (!__DEV__) return;

ini_set('error_reporting', false);
set_error_handler(function($errno, $errstr, $errfile, $errline) {
    print_debug($errno, $errstr, $errfile, $errline);
});

register_shutdown_function(function() {
    $error = error_get_last();
    if ($error && $error['type'] == E_ERROR) {
        print_debug($error['type'], $error['message'], $error['file'], $error['line']);
    }
});

function pretty_text($text) {
    $is_cli = \Common\Util::is_cli();
    $is_ajax = \Common\Util::is_ajax();
    $is_pjax = \Common\Util::is_pjax();

    return !($is_cli || $is_ajax) || $is_pjax ? '<span class="text-warning">'.$text.'</span>' : $text;
}

function print_debug($errno, $errstr, $errfile, $errline) {
    \Common\Util::set_status(500);

    // $errno = $errno & error_reporting();
    if ($errno == 0) return;
    if (!defined('E_STRICT'))            define('E_STRICT', 2048);
    if (!defined('E_RECOVERABLE_ERROR')) define('E_RECOVERABLE_ERROR', 4096);

    switch ($errno) {
        case E_ERROR:               $error = 'Error';                  break;
        case E_WARNING:             $error = 'Warning';                break;
        case E_PARSE:               $error = 'Parse Error';            break;
        case E_NOTICE:              $error = 'Notice';                 break;
        case E_CORE_ERROR:          $error = 'Core Error';             break;
        case E_CORE_WARNING:        $error = 'Core Warning';           break;
        case E_COMPILE_ERROR:       $error = 'Compile Error';          break;
        case E_COMPILE_WARNING:     $error = 'Compile Warning';        break;
        case E_USER_ERROR:          $error = 'User Error';             break;
        case E_USER_WARNING:        $error = 'User Warning';           break;
        case E_USER_NOTICE:         $error = 'User Notice';            break;
        case E_STRICT:              $error = 'Strict Notice';          break;
        case E_RECOVERABLE_ERROR:   $error = 'Recoverable Error';      break;
        default:                    $error = 'Unknown error ('.$errno.')'; break;
    }
    $message = $error.': '.pretty_text($errstr).' in '.pretty_text($errfile).' on line '.pretty_text($errline).EOL;
    if (function_exists('debug_backtrace')) {
        $backtrace = debug_backtrace();
        array_shift($backtrace);
        foreach ($backtrace as $i => $l) {
            $message .= '['.$i.'] in function '.pretty_text((isset($l['class']) ? $l['class'] : '').(isset($l['type']) ? $l['type'] : '').$l['function']);
            if (isset($l['file'])) $message .= ' in '.pretty_text($l['file']);
            if (isset($l['line'])) $message .= ' on line '.pretty_text($l['line']);
            $message .= EOL;
        }
    }

    plog($message);
}