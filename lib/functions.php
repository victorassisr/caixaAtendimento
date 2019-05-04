<?php

function tratarPath($path){
	if(isset($path)){
		$path = $_GET["r"];
	} else {
		$path = "home";
	}
	return $path;
}

function setTitle($path){
	switch($path){
		case "home" :
			echo "Home";
			break;
		case "cadastrarCto" :
			echo "Cadastrar CTO";
			break;
		case "listarCto" :
			echo "Listar CTOs";
			break;
		case "cadastrarClientes" :
			echo "Cadastrar Clientes";
			break;
		case "listarClientes" :
			echo "Listar Clientes";
			break;
		case "cadastrarSpliters" :
			echo "Cadastrar Spliters";
			break;
		case "listarSpliters" :
			echo "Listar Spliters";
			break;
		default : echo "Home";
				  break;
	}
}

function loadPath($path){
	switch($path){
		case "home" :
			require_once("./pages/home.php");
			break;
		case "cadastrarCto" :
			require_once("./pages/cto/cadastrarCto.php");
			break;
		case "listarCto" :
			require_once("./pages/cto/listarCto.php");
			break;
		case "cadastrarCliente" :
			require_once("./pages/cliente/cadastrarCliente.php");
			break;
		case "listarCliente" :
			require_once("./pages/cliente/listarCliente.php");
			break;
		case "cadastrarSpliter" :
			require_once("./pages/spliter/cadastrarSpliter.php");
			break;
		case "listarSpliter" :
			require_once("./pages/spliter/listarSpliter.php");
			break;
		default :
			require("./pages/errors/404.php");
			break;
	}
}

function isLogged(){
	if(!$_SESSION["logado"]){
		$loginPage = "http://".$_SERVER["HTTP_HOST"]."/caixaAtendimento/login.php";
		header('location:'.$loginPage);
		exit;
	}
}

function isActive($path, $page){
	if($path == $page){
		echo 'active';
	}
	else{
		echo "";
	}
}

?>