<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>-Sistema Unico de Autenticacion-</title>
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
	font-weight: bold;
}
.oneColFixCtrHdr #container #mainContent table tr .oneColFixCtrHdr p {
	font-family: Calibri, Arial, Verdana;
	font-size: 10px;
	font-weight: normal;
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
-->
</style>
<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />

<script languaje="JavaScript">
<!--
pisos = new Array();
pisos[0] = new Array();
pisos[1] = new Array('Seleccione un piso','P2','P3','P4');
pisos[2] = new Array('Seleccione un piso','P2','P3');
pisos[3] = new Array('Seleccione un piso','P1','P2');
pisos[4] = new Array('Seleccione un piso','P1','P2','P3','P4');
pisos[5] = new Array('P1');
pisos[6] = new Array('MC');
pisos[7] = new Array('OS');
pisos[8] = new Array('P2');
pisos[9] = new Array('P9');
pisos[10] = new Array('CRT');
pisos[11] = new Array('Seleccione un piso','P6','P7','P8');
pisos[12] = new Array('PER');
pisos[13] = new Array('SFP');



function cambiar(id){
  var i = 0;
  var select1 = id['UBICACION'];
  var select2 = id['PISO'];
  var vector = pisos[select1.selectedIndex];
  if(vector.length)select2.length=vector.length;
  while(vector[i]){
    select2.options[i].value = vector[i];
    select2.options[i].text = vector[i];
    i++;
  }
  select2.options[0].selected = 1;
}
-->
</script>

</head>

<body class="oneColFixCtrHdr">

<div id="container">
  <div id="header"> 
    <p style="font-size: 18px; font-weight: bold;">Sistema Unico de Autenticaci&oacute;n (S.U.A.)</p>
  <!-- end #header --></div>
  <div id="mainContent">
    <h2 align="left"><img src="img/bannertop.PNG" width="963" height="101" /></h2>
    <h2 align="left">&nbsp;</h2>
    <h3 align="left">Acceso al Sistema Unico de Autenticaci&oacute;n </h3>
    <form name="id" method="POST" action="login.php">
    <table width="965" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td></td>
          <td>
          </td>
          <td>&nbsp;</td>
          <td width="623" rowspan="7" valign="top" class="oneColFixCtrHdr"><p>NORMAS DE USO GENERAL <br />
            1. Información incluida en el aplicativo  por los usuarios en general <br />
            Como usuario usted es responsable de la  información suministrada en las bases de datos del aplicativo y serán los  usuarios los únicos responsables de la veracidad de la misma.<br />
            2. Obligaciones de los usuarios en  general <br />
            (2.1) Registrar información veraz,  seria, y verificable de la exigida dentro del aplicativo, <br />
            (2.2) Reglas de Seguridad Se prohíbe a  los usuarios violar o intentar violar la seguridad del aplicativo, incluyendo  pero no limitándose a: <br />
            (2.3) acceder a datos que no estén  destinados a tal usuario o entrar en un servidor o cuenta cuyo acceso no está  autorizado al usuario, <br />
            (2.4) evaluar o probar la vulnerabilidad  de un sistema o red, o violar las medidas de seguridad o identificación sin la  adecuada autorización, <br />
            (2.5) utilizar la información consignada  en las bases de datos del sistema para fines diferentes a los procesos  netamente requeridos, así como intentar tomar información personal de los  usuarios para contactarlos, suplantar el nombre de Call Center S.A.&nbsp;o  Grupo Bancolombia o propio para obtener cualquier clase de beneficio, sin  seguir los protocolos establecidos de intermediación <br />
            3. Contraseñas <br />
          Las contraseñas para el acceso al sistema  son de carácter personal e intransferible. El mal uso de la misma acarreara las  sanciones administrativas a que diere lugar.</p></td>
        </tr>

      <tr>
        <td bgcolor="#9EBBDE"><strong>Usuario</strong></td>
        <td bgcolor="#9EBBDE"><span id="sprytextfield1"><span id="sprytextfield2">
          <label>
            <input name="USUARIO" value="" type="text" id="textfield" size="15" />
          </label>
          <br>
        </td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td bgcolor="#9EBBDE"><strong>Contraseña</strong></td>
        <td bgcolor="#9EBBDE"><span id="sprypassword1"><span id="sprypassword2">
          <input name="PASSWORD" type="password" id="textfield2" value="" size="15" />
          <br>
        </td>
        <td>&nbsp;</td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td colspan="2" align="center" valign="top">
          <label>
          <div align="center">
              <p>
                <input type="submit" name="button" id="button" value="Ingresar"/>
              </p>
          </div>
        </label>
        <a href="Coordinadores/indexadmon.php">Acceso Coordinadores</a> | <a href="Administrador/indexadmon.php">Acceso Administradores</a></td>
        <td>&nbsp;</td>
      </tr>
    </table>
    <input type="hidden" name="MM_insert" value="id" />
    </form>
    <div align="center">
      <p><img src="img/iso.jpg" width="156" height="101" /></p>
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
2.011. V.B01 </p>
  <!-- end #footer --></div>
<!-- end #container --></div>
<script type="text/javascript">
<!--
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
var spryselect2 = new Spry.Widget.ValidationSelect("spryselect2");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none", {validateOn:["blur"]});
var sprypassword2 = new Spry.Widget.ValidationPassword("sprypassword2", {minChars:10, minSpecialChars:1, validateOn:["blur"]});
var spryselect3 = new Spry.Widget.ValidationSelect("spryubicacion");
var spryselect4 = new Spry.Widget.ValidationSelect("spryselect4");
//-->
</script>
</body>
</html>

