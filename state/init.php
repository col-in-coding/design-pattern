<?php

spl_autoload_register(function ($class) {
	include './config.php';
	require_once "interfaces/ATMState.interface.php";
    require_once "classes/{$class}.class.php";
});