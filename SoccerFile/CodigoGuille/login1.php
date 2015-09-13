<?php
include("../funciones/funciones.php");
usuarios();

$usu = $_POST['USUARIO'];
$pas = md5($_POST['PASSWORD']);
session_start();
$_SESSION["face"]  = $usu;
$_SESSION["password"] = $pas;
//include("validar.php");



$valido=mysql_query("SELECT * FROM usuarios.usuarios WHERE usuarios.Usuario='$usu' AND usuarios.Password='$pas'");
while($row = mysql_fetch_array($valido))
       {
           $user = $row['Usuario'];
           $nom  = $row['Nombres_apellidos'];
           $pass = $row['Password'];
           $sim  = $row['Simon'];
       }
       

 $_SESSION["permisocaiser"]=$sim;
 $_SESSION["nombre"]=$nom;
       
if($sim=='1')
{
  header("location:asignacion2.php");
}

if($sim=='2')
{
  header("location:setup2.php");
}



?>


