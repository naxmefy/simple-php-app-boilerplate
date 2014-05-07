<?php
namespace frontend;

class Home extends \helper\controller\Base {

  function __construct() {
    parent::__construct();
    echo "Home<br>";
  }

  function show() {
     echo 'Hello, Frontend!';
  }
}


?>