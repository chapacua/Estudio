<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>..::Parnert::..</title>
<style type="text/css">
<!--
body {
	font: 100% Verdana, Arial, Helvetica, sans-serif;
	background: #4682B4;
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
	background-color: #4682B4;
	font-family: Calibri, Arial, Verdana;
	font-size: 120px;
	font-style: normal;
	color: #FFF;
}
.oneColFixCtrHdr #header h1 {
	margin: 0; /* el ajuste en cero del margen del último elemento del div de #header evita la contracción del margen (un espacio inexplicable entre divs). Si el div tiene un borde alrededor, esto no es necesario, ya que también evita la contracción del margen */
	padding: 30px 0; /* el uso de relleno en lugar de margen le permitirá mantener el elemento alejado de los bordes del div */
}
.oneColFixCtrHdr #mainContent {
	padding: 0 20px; /* recuerde que el relleno es el espacio situado dentro del cuadro div y que el margen es el espacio situado fuera del cuadro div */
	background: #FFFFFF;
	font-family: Calibri, Arial, Verdana;
	font-size: 15px;
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
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
<script>
<!--
function comprobar(){
clave1=document.password.password1.value
clave2=document.password.password2.value

if(clave1==clave2)
	document.password.boton.disabled=false
else
	alert("password no coinciden. intenta nuevamente")
}
-->
</script>
</head>

<body class="oneColFixCtrHdr">
<BR><BR>
<div id="container">
  <div id="header">
    <h1></h1>
  <!-- end #header --></div>
  <div id="mainContent">
    <h2 align="right"></h2>
    <h2 align="left">Cambio de contraseña</h2>
			<center>Por favor ingrese el nuevo password. <BR> NOTA: recuerde que debe tener mínimo 10 caracteres alfanumericos y un caracter especial como . _ + - , etc.
            <form method="POST" action="modificarpassword.php" name="password">
<p><span id="txtpasswordnew">
              <input type="password" name="txtpasswordnew" id="password1" />
              <p><span id="sprypassword2"><BR>
              Por favor vuelva a escribir su password <BR>
              <input type="password" name="repetirpassword" id="password2" onblur="comprobar();" />

              <p><BR>
                <input name="Cambiar" type="submit" value="Cambiar" id="boton"/>
              </p>
            </form>
			</center>
    <div align="center">
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
<script type="text/javascript">
<!--
var sprypassword2 = new Spry.Widget.ValidationPassword("sprypassword2", {minChars:10, minSpecialChars:1});
var sprypassword1 = new Spry.Widget.ValidationPassword("txtpasswordnew", {minChars:10, minSpecialChars:1});
//-->
</script>
</body>
</html>

