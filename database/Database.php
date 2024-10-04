<?php

class Database{
	private $host = 'localhost';
	private $dbName ='concessionaria';
	private $username = 'root';
	private $pass = '';

	protected $connection;

	public function _construct()
	{
		$this->$connection = new mysqli($this->host, $this->username, $this->pass, $this->dbName );
	}
}