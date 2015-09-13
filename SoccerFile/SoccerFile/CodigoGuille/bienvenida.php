<?php
//include ("validar.php");
include("funciones/funciones.php");
deportes();


session_start();
$usu = $_SESSION['udeporte'];

$ced = $_POST['cedula'];
$nom = $_POST['nombre'];
$pai = $_POST['pais'];
$ciu = $_POST['ciudad'];
$mai = $_POST['correo'];
$nac = $_POST['fnacimiento'];


$valida=mysql_query("SELECT `registros`.`Correo` FROM `registros` WHERE `Correo`='$mai'");
while($row = mysql_fetch_array($valida))
      {
        $mail = $row['Correo'];
      }
      
if($mai==$mail)
{
       echo "<BR><BR><BR><BR><BR><center><hr><BR><BR><BR><span style='font-family: Calibri,sans-serif; font-size: 16pt;'><b>El usuario ingresado, ya se encuentra registrada.</b></span><BR><BR><BR><hr></center>";
       ?>
         <META HTTP-EQUIV="refresh" CONTENT="2;url=http:index.php">
       <?php
}else{


$pass=MD5("$ced***");

$guarda = "INSERT INTO `deportes`.`login`(`Usuario`, `Fecha`, `Hora`, `Accion`) VALUES ('$mai', CURDATE(), CURTIME(), '1')";
$sav = mysql_query($guarda);


$guardar = "INSERT INTO `deportes`.`registros`(`Fecha`, `Hora`, `Cedula`, `Nombre`, `Pais`, `Ciudad`, `Correo`, `Password`, `Fnacimiento`) VALUES ( CURDATE(), CURTIME(), '$ced', '$nom', '$pai', '$ciu', '$mai', '$pass', '$nac')";
$save = mysql_query($guardar);

if ($save=="")
{
   echo "Error";
}else{

       echo "<BR><BR><BR><BR><BR><center><hr><BR><BR><BR><span style='font-family: Calibri,sans-serif; font-size: 16pt;'><b>Te damos la bienvenida</b></span><BR><BR><BR><hr></center>";
       ?>
         <META HTTP-EQUIV="refresh" CONTENT="4;url=http:password.php">
       <?php
     }
mysql_close(deportes);
}
?>

