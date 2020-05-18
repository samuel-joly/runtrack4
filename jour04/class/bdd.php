<?php

session_start();
class Bdd{
	public $pdo = ""; 
	protected $config = [
	'host'=>'localhost',
	'port'=>'3336',
	'username'=>'root',
	'password'=>'',
	'dbname'=>'bigjob',
	];

	function __construct()
	{
		$config = $this->config;
		$this->pdo = new PDO('mysql:host='. $config['host'] . ';dbname=' . $config['dbname'], $config['username'], $config['password']);
	}
	
	function get_pdo()
	{
		return $this->pdo;
	}
}

?>
