<?php
define("ROOT_DIR", __DIR__ . "/../" );
echo "ROOT:" . ROOT_DIR;
define("SYSTEM_DIR", ROOT_DIR . "system/");

//require ROOT_DIR . "/../vendor/autoload.php";
require_once realpath(ROOT_DIR . '/vendor/autoload.php');

require(ROOT_DIR . "config/db.inc.php");
require(SYSTEM_DIR . "route.php");
