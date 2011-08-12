<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
require('Smarty-3.0.8/libs/Smarty.class.php');
class Smartylib extends Smarty {
	public function __construct() {
		$this->compile_dir = FCPATH . APPPATH . 'cache'; // ./application/cache/templates_c
		$this->template_dir = FCPATH . APPPATH . 'views' . DS; // ./application/views

		$ci =& get_instance();
		//print_r($ci); die; // debug
		$ci->load->helper('url');
		$this->assign('ci', $ci);
		$this->assign('site_url', site_url());
	}
}
