<?php

namespace Common;

class DataReader {

	private $_file = null;
	private $_reader = null;
	private $_spreadsheet = null;
	private $_with_header = true;

	private $_data = null;

	public function __construct($file, $with_header = true) {
		$this->_file = $file;
		$this->_pathinfo = pathinfo($file);
		$this->_with_header = $with_header;
		$this->init();
	}

	private function _load() {
		if (!$this->_spreadsheet) throw new \Exception('Spreadsheet not loaded');
		$this->_data = $this->_spreadsheet->getActiveSheet()->toArray();
	}

	// https://phpspreadsheet.readthedocs.io/en/develop/topics/reading-and-writing-to-file/
	public function init() {
		$this->_spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($this->_file);
	}

	public function get_headers() {
		if (!$this->_data) $this->_load();
		if ($this->_data) {
			return $this->_data[0];
		}

		return false;
	}

	public function read($limit = 0) {
		if (!$this->_data) $this->_load();

		$result = [];
		if ($this->_data) {
			if ($this->_with_header) {
				$headers = $this->get_headers();
				foreach ($this->_data as $index => $row) {
					if ($index === 0) continue;

					if ($limit && $index > $limit) break;

					$result_row = [];
					foreach ($headers as $header_index => $header) {
						$result_row[$header] = $row[$header_index];
					}

					$result[] = $result_row;
				}
			} else {
				return $this->_data;
			}
		}

		return $result;
	}
}