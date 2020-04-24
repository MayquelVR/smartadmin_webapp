<?php

namespace Common;

class Downloader {
	private $_filename;

	public function __construct($filename) {
		$this->_filename = $filename;
	}

	public static function with_token($token, $session) {
		if (session_id()) {
			$filename = get($token, $_SESSION);
			$calc = hash_hmac('sha256', $filename, $session->token);

			if (hash_equals($calc, $token)) {
				return new self($filename);
			}
		}

		return false;
	}

	public function get_url($session) {
		if (session_id()) {
			$token = hash_hmac('sha256', $this->_filename, $session->token);
			$_SESSION[$token] = $this->_filename;

			return APP_URL.'/dl/'.$token;
		}

		return false;
	}

	public function output() {
		if (file_exists($this->_filename)) {
			$basename = pathinfo($this->_filename, PATHINFO_BASENAME);

			header('Content-Disposition: attachment;filename="'.$basename.'"');
			header('Cache-Control: max-age=0');
			header('Content-Type: '.mime_content_type($this->_filename));

			readfile($this->_filename);
			exit;
		}
	}
}