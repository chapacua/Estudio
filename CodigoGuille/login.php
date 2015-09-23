<?php
$usu = $_POST['usuario'];
$pas = md5($_POST['clave']);

session_start();
$_SESSION["udeporte"]  = $usu;
$_SESSION["password"] = $pas;
include("validar.php");
header("location:home.php");
?>
