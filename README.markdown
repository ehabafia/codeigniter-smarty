# codeigniter-smarty

Smarty 3 library for use with CodeIgniter 2.

## Usage

1. This project comes with [CodeIgniter] 2.0.2 and [Smarty] 3.0.8, so it's pretty hefty. A minimalistic install would consist of (i) the library itself, and (ii), (iii) the controller/view for unit testing; i.e.
	- /application/libraries/Smartylib.php
	- /application/controllers/smartylib_test.php
	- /application/views/smartylib_test.tpl
1. Once installed, you can use Smarty by loading up the library and the calling assign/render as required; e.g.

```php
class FooController extends CI_Controller {
	function bar() {
		$this->load->library('smartylib');
		$this->smartylib->assign('baz', 'qux');
		$this->smartylib->render('quux.tpl');
	}
}
```

## Unit test 

1. Using your web browser, navigate to your newly installed copy of CodeIgniter; e.g. http://aargau/CodeIgniter_2.0.2/. You should see the CodeIgniter welcome message.
1. Still using your web browser, navigate to the unit test; e.g. http://aargau/CodeIgniter_2.0.2/index.php/smartylib_test/index. This is simply an is_object() test, which should pass.

[CodeIgniter]: http://www.codeigniter.com/
[Smarty]: http://www.smarty.net/
