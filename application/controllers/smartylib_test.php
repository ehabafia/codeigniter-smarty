<?php
class Smartylib_Test extends CI_Controller {
	public function index() {
		$this->load->library(array('unit_test', 'smartylib'));
	
		// Test #1.

		$this->unit->run($this->smartylib, 'is_object');

		// Test #2.

		$expected = 'bar';
		$this->smartylib->assign('foo', $expected);
		$actual = trim($this->smartylib->fetch('smartylib_test.tpl'));
		$this->unit->run($expected, $actual);
		echo $this->unit->report();
	}
}
