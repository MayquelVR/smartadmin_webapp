<?php

// global constants
require_once __DIR__.'/const.php';

// initialize composer
$autoload_file = ROOT_PATH.'/vendor/autoload.php';
if (!file_exists($autoload_file)) {
	include_once '_install.php';
	exit;
}

// check folder permissions
if (!is_writable(ROOT_PATH)) {
	include_once '_permissions.php';
	exit;
}

require_once $autoload_file;

// global requires
require_once ROOT_PATH.'/config.php';
require_once ROOT_PATH.'/lib/func.php';
require_once ROOT_PATH.'/lib/debug.php';

// Moment
\Moment\Moment::setDefaultTimezone(date_default_timezone_get());

// initialize app class
$app = \App\App::instance();

// get authenticated user and the session
// $app->init_web_session();
// $_user = $app->get_authenticated_user();

require_once __DIR__.'/init.ui.php';