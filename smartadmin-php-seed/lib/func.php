<?php

use \Common\Util;

function is_post() {
	return REQUEST_METHOD === 'POST';
}

function redirect($url) {
	Util::redirect($url);
}

function parse_name($name) {
	if (!$name) return false;

	$name = Util::slugify($name, false, "'");

	$parts = explode('-', $name);
	$parts_count = count($parts);

	if ($parts_count === 1) return [$parts[0], ''];

	// last word is the last name
	$lastname = $parts[$parts_count - 1];

	// get the first elements as firstname
	unset($parts[$parts_count - 1]);
	$firstname = implode(' ', $parts);

	return [$firstname, $lastname];
}

function plog($msg = '', $newline = true, $options = [], $return = false) {
	$is_cli = Util::is_cli();
    $is_ajax = Util::is_ajax();
    $is_pjax = Util::is_pjax();

    $is_html = !($is_cli || $is_ajax) || $is_pjax;

	$result = Util::debug($msg, array_merge(['newline' => $newline], $options), true);
	$result = $is_html ? '<div class="debug">'.$result.'</div>' : $result;

	if ($return) return $result;
	else echo $result;
}

function get($field, $data = null, $default = null, $possible_values = []) {
	return Util::get($field, $data, $default, $possible_values);
}

function br2nl($text) {
	return Util::br2nl($text);
}

function array_delete($array, $items) {
    return array_diff($array, is_array($items) ? $items : [$items]);
}

// formatted datetime
function dt($date, $format = \Moment\Moment::NO_TZ_MYSQL) {
	if ($date) {
		try {
			$dt = $date instanceof DateTime ? $date : new \Moment\Moment($date);
			return $dt->format($format);
		} catch (Exception $ex) {
			trigger_error($ex->getMessage());
		}
	}

	return null;
}

function token($length = 16) {
	return Util::token($length);
}

function uuid() {
	return Util::uuid();
}

function phone($input) {
	return Util::format_phone($input);
}

function escape($str, $nl2br = false) {
	return Util::escape_html($str, $nl2br);
}

?>