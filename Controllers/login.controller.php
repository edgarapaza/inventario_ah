<?php
require '../Models/login.models.php';

$user 	   = $_POST['user'];
$contra    = $_POST['contra'];

//Instanciar a la clase Login
$login = new Login();
$respuesta = $login->ResLogin($user, $contra);
var_dump($respuesta);

if($respuesta == true)
	header('Location: ../View/index.php');
else
	header('Location: ../login.html');