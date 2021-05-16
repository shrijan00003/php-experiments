<?php

class BaseModel
{
	protected $pdo;
	public function BaseModel()
	{
		/** TODO: these values should be loaded from CONFIG file. */

		$host = 'localhost';
		$user = 'root';
		$pass = '';
		$db = 'test';

		try {
			$dsn = "mysql:host=$host;dbname=$db";
			$this->pdo = new PDO($dsn, $user, $pass);
		} catch (Exception $e) {
			echo $e->getMessage();
			die;
		}
	}
}