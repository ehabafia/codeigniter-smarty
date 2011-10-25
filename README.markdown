# codeigniter-smarty

Extending Smarty 3 for use with CodeIgniter 2.

## Usage

1. Download [CodeIgniter] 2.0.2 and [Smarty] 3.0.8.
1. Copy `Smartylib.php` into CodeIgniter's `application/libraries/` directory.
1. If the path to Smarty is to be adjusted -- currently it is simply `FCPATH . Smarty-3.0.8/` -- please adjust accordingly.
1. Using your web browser, navigate to your newly installed copy of CodeIgniter; e.g. "http://aargau/CodeIgniter_2.0.2/". You should see the CodeIgniter welcome message.
1. Still using your web browser, navigate to the unit test; e.g. "http://aargau/CodeIgniter_2.0.2/index.php/smartylib_test/index. This is simply an is_object() test, which should pass.

[CodeIgniter]: http://www.codeigniter.com/
[Smarty]: http://www.smarty.net/
