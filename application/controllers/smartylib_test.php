<?php
class Smartylib_Test extends CI_Controller {
	public function index() {
		$this->load->library(array('unit_test', 'smartylib'));
		echo $this->unit->run($this->smartylib, 'is_object', 'Smartylib_Test');
	}
}
