<?php
//include ("validar.php");
include ("../../funciones/funciones.php");
sara();


session_start();
$usu = $_SESSION['udeporte'];

$ced = $_POST['cedula'];
$nom = $_POST['nombre'];
$pai = $_POST['pais'];
$ciu = $_POST['ciudad'];
$mai = $_POST['mail'];
$nac = $_POST['fnacimiento'];


$valida=mysql_query("SELECT `cuentas`.`Cedula` FROM `cuentas` WHERE `Cedula`='$ced'");
while($row = mysql_fetch_array($valida))
      {
        $cedula = $row['Cedula'];
      }
      
if($ced==$cedula)
{
       echo "<BR><BR><BR><BR><BR><center><hr><BR><BR><BR><span style='font-family: Calibri,sans-serif; font-size: 16pt;'><b>La c&eacute;dula ingresada ya se encuentra registrada.</b></span><BR><BR><BR><hr></center>";
       ?>
         <META HTTP-EQUIV="refresh" CONTENT="2;url=http:index.php">
       <?php
}else{


$guardar = "INSERT INTO `Sara`.`cuentas`(`Fecha`, `Hora`, `Cedula`, `Nombre`, `Pais`, `Ciudad`, `Mail`, `Fnacimiento`) VALUES ( CURDATE(), CURTIME(), '$ced', '$nom', '$pai', '$ciu', '$mai', '$nac')";
$save = mysql_query($guardar);

if ($save=="")
{
   echo "Error";
}else{

       echo "<BR><BR><BR><BR><BR><center><hr><BR><BR><BR><span style='font-family: Calibri,sans-serif; font-size: 16pt;'><b>Te damos la bienvenida</b></span><BR><BR><BR><hr></center>";
       ?>
         <META HTTP-EQUIV="refresh" CONTENT="4;url=http:home.php">
       <?php
     }
mysql_close(sara);
}
?>

