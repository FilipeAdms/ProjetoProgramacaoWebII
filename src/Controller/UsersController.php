<?php

require_once "src/Models/User.php";

class UsersController{
	public function main(){
		$action = $GET['acao'] ?? null;

		switch ($action){
			case 'entrar':
			{
				$this->login();
				break;
			}
			case'registrar':
			{
				$this->register();
				break
			}
		}
	}

	public function login(){
		$email = $_POST['email'] ?? null;
		$password = $_POST['password'] ?? null;

		if($email && $password){
			$model = new User();

			$user = $model->readBy('email', $email);

			if($user[0]){
				$logged_user = user[0];
				if(logged_user['password'] == $password){
					echo "To fazendo a página ainda, espere um pouco mais rápido ai";
					exit;
				}
			}
		}
	}

	public function register(){
		$name = $_POST['name'] ?? null;
		$email = $_POST['email'] ?? null;
		$phone = $_POST['phone'] ?? null;
		$password = $_POST['password'] ?? null;
	
		if($name && $email && $phone && $password){
			$model = new User();

			$created = $model->insert($name, $email, $phone, $password);
			if($created){
				$this->login();
			}
		}
		
	}
}

?>