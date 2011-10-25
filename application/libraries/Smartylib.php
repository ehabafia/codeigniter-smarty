<?php
require('Smarty-3.0.8/libs/Smarty.class.php');
class Smartylib extends Smarty {
	public function __construct() {
		parent::__construct();
		
		// See http://www.smarty.net/docs/en/installing.smarty.extended.tpl.

		$this->caching = Smarty::CACHING_LIFETIME_CURRENT;
		$this->setCompileDir(FCPATH . APPPATH . 'cache' . DS);
		$this->setCacheDir(FCPATH . APPPATH . 'cache' . DS);
		$this->setTemplateDir(FCPATH . APPPATH . 'views' . DS);

		// Assigning get_instance(), site_url() to Smarty.

		$ci =& get_instance();
		$ci->load->helper('url'); // Otherwise site_url() is fatal.
		$this->assign('ci', $ci);
		$this->assign('site_url', site_url());
	}
}
