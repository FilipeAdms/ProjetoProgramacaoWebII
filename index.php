<?php

$page = $_GET['pagina'] ?? null;

switch ($page) {
	case 'usuario':
		require 'src/Controller/UserController';
		$controller = new UserController();
		break;
	
	default:
		require 'src/Controller/StaticController.php';
		$controller = new StaticController();
		break;
}



$controller->main();
 