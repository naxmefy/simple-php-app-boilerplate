<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

$f3 = require('fatfree/lib/base.php');


$f3->set('ONERROR',
  function($f3) {
    
    // custom error handler code goes here
    // use this if you want to display errors in a
    // format consistent with your site's theme
    echo $f3->get('ERROR.code');
    echo "<hr>";
    echo $f3->get('ERROR.status');
    echo "<hr>";
    echo $f3->get('ERROR.text');
    echo "<hr>";
    echo "<pre>";
    print_r($f3->get('ERROR.trace'));
    echo "</pre>";
    echo "<hr>";
    echo "<pre>";
    #print_r($f3);
    echo "</pre>";
  }
);

$f3->set('DEBUG', 3);

# load app and app modules
$f3->set('AUTOLOAD','app/;app/modules/');
$f3->config('app/setup.cfg');

$x = new helper\controller\Admin();
var_dump($x);
echo "<hr>";




/*
$f3->route('GET /',
    function() {
        echo 'Hello, world!';
    }
);
*/

$f3->run();




?>