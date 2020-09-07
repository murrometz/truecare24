<?php
// Composer autoloading
require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

// Internal site logic
$curPage = $_SERVER["REQUEST_URI"];
$curPath = preg_replace("#/[^/]+$#", "/", $curPage);