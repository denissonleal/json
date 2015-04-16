<?php

/**
* Transformar warning em exceptions
*/
error_reporting(E_ALL);
function exceptionThrower($type, $errMsg, $errFile, $errLine) {
	throw new Exception($errMsg);
}
set_error_handler('exceptionThrower');

/**
* adaptação para usar o storage_path do laravel
*/
function storage_path()
{
	return __DIR__;
}

require_once("Json.php");
require_once("Resume.php");


$resume = new Resume;
$resume->name  = "Denisson Leal";
$resume->email = "denissonleal@gmail.com";
$resume->file = "file.pdf";
if ($resume->save())
	echo $resume;
else
	echo "Error";
