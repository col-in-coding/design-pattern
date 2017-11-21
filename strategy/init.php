<?php

spl_autoload_register(function ($class) {
	include './config.php';
    require_once "classes/{$class}.php";
});