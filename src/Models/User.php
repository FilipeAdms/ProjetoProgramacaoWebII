<?php

	require_once "src/Models/Model.php";

	class User extends Model;
	{
		protected $tableName = 'user';

		public function insert($name, $email, $phone, $password){
			$result = $this->connection->query("INSERT INTO $this->tableName (name, email, phone, password) VALUES ('$name', '$email','$phone','$password')");

			return $result;
		}
	}
