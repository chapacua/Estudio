<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<style type="text/css">
<!--
body {
	font: 100% Verdana, Arial, Helvetica, sans-serif;
	background: #666666;
	margin: 0; /* es recomendable ajustar a cero el margen y el relleno del elemento body para lograr la compatibilidad con la configuración predeterminada de los diversos navegadores */
	padding: 0;
	text-align: center; /* esto centra el contenedor en los navegadores IE 5*. El texto se ajusta posteriormente con el valor predeterminado de alineación a la izquierda en el selector #container */
	color: #000000;
	background-color: #FFF;
	margin-top: 15px;
}
.oneColFixCtrHdr #container {
	width: 1000px;  /* el uso de 20px menos que un ancho completo de 800px da cabida a los bordes del navegador y evita la aparición de una barra de desplazamiento horizontal */
	background: #FFFFFF; /* los márgenes automáticos (conjuntamente con un ancho) centran la página */
	border: 1px solid #000000; /* esto anula text-align: center en el elemento body. */
	margin-top: 0;
	margin-right: auto;
	margin-bottom: 0;
	margin-left: auto;
}
.oneColFixCtrHdr #header {
	padding: 0 10px 0 20px;  /* este relleno coincide con la alineación izquierda de los elementos de los divs que aparecen bajo él. Si se utiliza una imagen en el #header en lugar de texto, es posible que le interese quitar el relleno. */
	background-color: #006;
	font-family: Calibri, Arial, Verdana;
	font-size: 9px;
	font-style: normal;
	color: #FFF;
}
.oneColFixCtrHdr #header h1 {
	margin: 0; /* el ajuste en cero del margen del último elemento del div de #header evita la contracción del margen (un espacio inexplicable entre divs). Si el div tiene un borde alrededor, esto no es necesario, ya que también evita la contracción del margen */
	padding: 10px 0; /* el uso de relleno en lugar de margen le permitirá mantener el elemento alejado de los bordes del div */
}
.oneColFixCtrHdr #mainContent {
	padding: 0 20px; /* recuerde que el relleno es el espacio situado dentro del cuadro div y que el margen es el espacio situado fuera del cuadro div */
	background: #FFFFFF;
	font-family: Calibri, Arial, Verdana;
	font-size: 12px;
	text-align: left;
}
.oneColFixCtrHdr #container #mainContent table tr .oneColFixCtrHdr p {
	font-family: Calibri, Arial, Verdana;
	font-size: 10px;
}
.oneColFixCtrHdr #footer {
	padding: 0 10px; /* este relleno coincide con la alineación izquierda de los elementos de los divs que aparecen por encima de él. */
	background:#DDDDDD;
	font-size: 10px;
	font-family: Calibri, Arial, Verdana;
	text-align: right;
}
.oneColFixCtrHdr #footer p {
	margin: 0; /* el ajuste en cero de los márgenes del primer elemento del pie evitará que puedan contraerse los márgenes (un espacio entre divs) */
	padding: 10px 0; /* el relleno de este elemento creará espacio, de la misma forma que lo haría el margen, sin el problema de la contracción de márgenes */
}
.oneColFixCtrHdr #container #mainContent form table tr .oneColFixCtrHdr p {
  
	
}
-->
</style>
</head>

<body class="oneColFixCtrHdr">

<div id="container">
  <div id="header">
    <h1>Sistema de información de Registro</h1>
  <!-- end #header --></div>
  <div id="mainContent">
    <h2 align="right"><img src="img/loguito.png" width="194" height="65" /></h2>
    <h2 align="left">Cambio de contraseña</h2>
<?php
@session_start();
if(isset($_SESSION['USER']))
{
require_once('Connections/conec.php'); 
$usuario     = $_SESSION['USER'];
$passwordnew = md5($_POST['txtpasswordnew']);

$modificar="UPDATE usuarios.usuarios SET Password='$passwordnew' WHERE usuarios.Usuario='$usuario'";
mysql_query($modificar,$conec);

if($modificar<>0)
{
	echo "Proceso abordado. Comuniquese con el administrador del sistema";
}else{
	 echo "<span style='font-size: 11pt; color: rgb(255,0,0);'><center>El cambio de password se ha realizado con éxito.</center></span>";
	 }
	?>
     <META HTTP-EQUIV="refresh" CONTENT="3;url=http:./index.html">
    <?php
    $_SESSION = array();
    session_destroy();

}else{
	   echo "<center>Sesión inactiva. debe iniciar una sesión. clic <a href='/password/index.html'>aqui</a> para accesar</center>";
	 }
?>
    <div align="center">
      <p><img src="img/logobanner.PNG" width="150" height="43" /></p>
</div>
    <div id="centrado">
      <div id="contenedor">
        <center>
        </center>
      </div>
    </div>
  </div>
  <div id="footer">
    <p>Diseño   y desarrollo.<br />
Área de Desarrollo. Gerencia de Tecnología y   Comunicaciones<br />
Call Center S.A. Medellín - Colombia.<br />
Todos los derechos   reservados.<br />
2.010. V.B01 </p>
  <!-- end #footer --></div>
<!-- end #container --></div>
</body>
</html>

