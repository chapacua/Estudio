<?php
session_start();
$usu=$_SESSION['caiser'];
$pas=$_SESSION['password'];

include("funciones.php");
usuarios();

$valido=mysql_query("SELECT * FROM usuarios.usuarios WHERE usuarios.Usuario='$usu' AND usuarios.Password='$pas'");
while($row = mysql_fetch_array($valido))
       {
           $user = $row['Usuario'];
           $pass = $row['Password'];
           $cai  = $row['Simon'];
       }

mysql_close();

if ($user!=$usu OR $pass!=$pas OR $com!='1' OR $cai!='2')
{
  session_destroy();
  echo "<BR><BR><BR><BR><BR><BR><BR><BR><span style='font-family: Calibri,sans-serif; font-size: 14pt;'><center><b>Datos erroneos. valide nuevamente sus datos.</b></center>";
  exit();
}


?>


