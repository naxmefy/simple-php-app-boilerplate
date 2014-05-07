<?php

namespace helper\controller;
use helper\controller;
class Admin extends User{
  function __construct() {
    parent::__construct();
    echo "Admin<br>";
  }
}

?>