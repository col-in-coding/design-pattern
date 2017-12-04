<?php

class Database
{
	private static $instance;

	private function __construct(){}

	public static function getInstance()
	{
		if (!isset(Database::$instance)) {
			Database::$instance = new Database();
		}
		return Database::$instance;
	}

	public function getQuery()
	{
		return "select * from someTable";
	}
}

$db = Database::getInstance();
echo $db->getQuery();