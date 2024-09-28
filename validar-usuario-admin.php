<?php
$usuario = $_POST['usuario'];
$password = $_POST['password'];

include_once ('movimientos.php');

$movi = new Movimientos();

$movi->verificarAdmin($usuario, $password);

