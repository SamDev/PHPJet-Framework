<?php

//Declare Pathes

define("PUBLIC_PATH", dirname(__FILE__));

define ("ROOT_PATH", dirname(PUBLIC_PATH));

define("VENDOR_PATH", ROOT_PATH.'/vendor');


require_once VENDOR_PATH."/autoload.php";

new PHPJet\TestClass();