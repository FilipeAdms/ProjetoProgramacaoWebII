<?php

class StaticController {

	public function main(){

		$page = $_Get['pagina'] ?? null;

		switch ($page) {
	case 'entrar':
		$this->login();
		break;
	case 'registrar':
		$this->register();
		break;
	default:
		$this->home();
		break;
}

	}

	public function home() {
		require 'src/View/Static/Home.html';
	}
	public function login() {
		require 'src/View/Static/Login.html';
	}
	public function register() {
		require 'src/View/Static/Register.html';
	}
}

