<?php
session_start();

$auth = $_GET["auth"];

if($auth == "logar"){
	$_SESSION["logado"] = true;
	$_SESSION["usuario"] = "VICTOR";

	if($_SESSION["logado"]){
		echo "Logado!";
	}
}

if($auth == "deslogar"){
	session_destroy();

	if($_SESSION["logado"]){
		echo "Deslogado!";
	}
}