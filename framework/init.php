<?php
// Composer autoloading
require 'vendor/autoload.php';

// Internal site logic
$curPage = $_SERVER["REQUEST_URI"];
$curPath = preg_replace("#/[^/]+$#", "/", $curPage);