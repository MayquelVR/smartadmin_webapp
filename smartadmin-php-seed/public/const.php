<?php

// modify ROOT_PATH if you're not using public directory
define('ROOT_PATH', __DIR__.'/..');

define('DS', DIRECTORY_SEPARATOR);
define('EOL', PHP_EOL);

if (!isset($argv)) {
	$argv = [isset($_SERVER['SCRIPT_FILENAME']) ? $_SERVER['SCRIPT_FILENAME'] : __FILE__];
	$args_list = isset($_GET['argv']) && is_array($_GET['argv']) ? $_GET['argv'] : $_GET;

	foreach ($args_list as $key => $value) {
		if ($value) $argv[] = $value;
	}
}

if (php_sapi_name() == 'cli' || !isset($_SERVER["REQUEST_METHOD"])) {
	$document_root = realpath(dirname(__DIR__));
	$server_name = gethostname();
	$request_uri = str_replace(DS, '/', substr($_SERVER['PHP_SELF'], strlen($document_root)));
	$request_method = 'CLI';
} else {
	$document_root = realpath($_SERVER['DOCUMENT_ROOT']);
	$server_name = $_SERVER['SERVER_NAME'];
	$request_uri = $_SERVER['REQUEST_URI'];
	$request_method = $_SERVER['REQUEST_METHOD'];
}

$document_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on' ? 'https' : 'http').'://'.$server_name;

$app_path = $document_root;
$app_url = $document_url;

if (strpos(__DIR__, $document_root) === 0) {
	$app_uri = substr(__DIR__, strlen($document_root));
	$app_path .= $app_uri;
	$app_url .= str_replace(DS, '/', $app_uri);
}

// create root directories
$dirs = ['tmp', 'cache', 'logs'];
foreach ($dirs as $dir) {
	$path = ROOT_PATH.'/'.$dir;
	if (!file_exists($path)) {
	    mkdir($path, 0777, true);
	}
}

define('DOCUMENT_ROOT', $document_root);
define('SERVER_NAME', $server_name);
define('SERVER_URL', $document_url);
define('SERVER_REQUEST', $document_url.$request_uri);

define('REQUEST_URI', $request_uri);
define('REQUEST_METHOD', $request_method);

define('APP_PATH', $app_path);
define('APP_URL', $app_url);

define('APP_LOGS_PATH', APP_PATH.'/../logs');
define('APP_ARCHIVE_PATH', APP_PATH.'/../archive');
define('APP_CACHE_PATH', APP_PATH.'/../cache');
define('APP_TMP_PATH', APP_PATH.'/../tmp');

define('ASSETS_URL', APP_URL.'/assets');
define('ASSETS_PATH', APP_PATH);
define('DOCS_PATH', APP_PATH.'/docs');
define('INCLUDES_PATH', APP_PATH.'/includes');

define('API_URL', APP_URL.'/api');

define('AJAX_URL', APP_URL.'/ajax');