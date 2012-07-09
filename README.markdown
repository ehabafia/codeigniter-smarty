# codeigniter-smarty

Smarty 3 library for use with CodeIgniter 2.

## Installing

1. This project comes with [CodeIgniter] 2.0.2 and [Smarty] 3.0.8, so it's pretty hefty. A minimal install would consist of 3 files only:
	1. ./application/libraries/Smartylib.php
	1. ./application/controllers/smartylib_test.php
	1. ./application/views/smartylib_test.tpl

## Usage

```php
<?php
class FooController extends CI_Controller {
	function bar() {
		$this->load->library('smartylib');
		$this->smartylib->assign('baz', 'qux');
		$this->smartylib->display('quux.tpl');
	}
}
```

## Unit test 

1. Using your web browser, navigate to your newly installed copy of CodeIgniter; e.g. http://aargau/CodeIgniter_2.0.2/. You should see the CodeIgniter welcome message.
1. Using your web browser, navigate to the unit test; e.g. http://aargau/CodeIgniter_2.0.2/index.php/smartylib_test/index. Two tests are implemented, asserting is_object() and the return value of $this->smartylib->fetch().

[CodeIgniter]: http://www.codeigniter.com/
[Smarty]: http://www.smarty.net/
