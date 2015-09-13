<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>..::Partner::..</title>
<style type="text/css">
<!--
.maquetacion {
	border: 1px solid #CCC;
}
-->
</style>

<style type="text/css">
<!--
body {
 background="./img/Fondo.png" no-repeat;
 background-size: 100% 120%
}

-->
</style>

<script>
<!--
function soloNumeros(evt)
{
// NOTE: Backspace = 8, Enter = 13, '0' = 48, '9' = 57
var key = evt.keyCode ? evt.keyCode : evt.which ;
return (key <= 40 || (key >= 48 && key <= 57)); }
-->
</script>
</head>

<body  background="./img/Fondo.png" style="background-repeat:no-repeat;">
<p>&nbsp;</p>
<table width="60%" border="0" align="center" cellpadding="0" cellspacing="0" class="maquetacion" bgcolor="#FFFFFF">
  <tr>
    <td width="208" bgcolor="#4682B4" height="64" valign="top" style="border-bottom:#CCC solid 1px">&nbsp;</td>
    <td colspan="2" rowspan="5" align="center" valign="middle" style="border-right:#CCC solid 1px; border-left:#CCC solid 1px"><img src="img/deporte.png" width="154" height="182" /></td>
    <td width="564" bgcolor="#4682B4" align="center" valign="middle" style="border-bottom:#CCC solid 1px; font-family: Calibri; color: #ffffff;"></td>
  </tr>
  <tr>
    <td height="33" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    <td rowspan="3"  align="center" valign="middle" style="border-bottom:#CCC solid 1px; font-family: Calibri; color: #666;">
    <form id="form1" name="form1" method="POST" action="login.php">
      <p>&nbsp;        </p>
      <p>
        Usuario:<span id="sprytextfield1">
        <label>
          <input type="text" name="usuario" id="usuario" style="font-family:Calibri; font-size:14px" size="11" maxlength="200"/>
        Contrase&ntilde;a:<span id="sprytextfield1">
          <input type="password" name="clave" id="clave" style="font-family:Calibri; font-size:14px" size="11" maxlength="15"/> <BR><BR>
          <input type="submit" name="button" id="button" value="Ingresar" />
        </label>
        <label>&nbsp;&nbsp;&nbsp;<br />
        </label>
      </p>
    </form>
    <form id="form2" name="form2" method="post" action="bienvenida.php">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td align="center" bgcolor="#999999" style="color: #FFF; font-size: 12px; font-weight: bold;">Registrate</td>
        </tr>
      </table>
      <br>
      <table width="100%" border="0" cellpadding="0" cellspacing="0" class="maquetacion">
        <tr>
          <td align="center"><span id="sprytextfield2">
            <label>
              <br>
              Cedula
            </label>
            <label>
            </label></td>
          <td align="center"><span id="sprytextfield2">
            <label>
              <br>
              <input type="text" name="cedula" id="cedula" style="font-family:Calibri; font-size:14px" size="15" maxlength="10" onkeypress="return soloNumeros(event);"/>
            </label>
            <label>
          <td align="center"><span id="sprytextfield2">
            <label>
              <br>
              Nombre
            </label>
            <label>
            </label></td>            </label></td>
          <td align="center"><span id="sprytextfield2">
            <label>
              <br>
              <input type="text" name="nombre" id="nombre"  style="font-family:Calibri; font-size:14px" size="15" maxlength="10"/>
            </label>
            <label>
            </label></td>
          </tr>
        <tr>
          <td align="center"><span id="sprytextfield2">
            <label>
              <br>
              Pais
            </label>
            <label>
            </label></td>
          <td align="center"><span id="sprytextfield2">
            <label>
              <br>
              <input type="text" name="pais" id="pais"  style="font-family:Calibri; font-size:14px" size="15" maxlength="10"/>
            </label>
            <label>
          <td align="center"><span id="sprytextfield2">
            <label>
              <br>
              Ciudad
            </label>
            <label>
            </label></td>            </label></td>
          <td align="center"><span id="sprytextfield2">
            <label>
              <br>
              <input type="text" name="ciudad" id="ciudad"  style="font-family:Calibri; font-size:14px" size="15" maxlength="10"/>
            </label>
            <label>
            </label></td>
          </tr>
        <tr>
          <td align="center"><span id="sprytextfield2">
            <label>
              <br>
              Correo Electronico
            </label>
            <label>
            </label></td>
          <td align="center"><span id="sprytextfield2">
            <label>
              <br>
              <input type="mail" name="correo" id="correo"  style="font-family:Calibri; font-size:14px" size="15" maxlength="200"/>
            </label>
            <label>
          <td align="center"><span id="sprytextfield2">
            <label>
              <br>
              Fecha de nacimiento
            </label>
            <label>
            </label></td>            </label></td>
          <td align="center"><span id="sprytextfield2">
            <label>
              <br>
              <input type="text" name="fnacimiento" id="fnacimiento"  style="font-family:Calibri; font-size:14px" size="15" maxlength="10"/>
            </label>
            <label>
            </label></td>
          </tr>
        <tr>
          <td colspan="4"><BR><BR><center><input type="submit" name="button2" id="button2" value="Registrar" /></center></td>
          </tr>
        </table>
    </form>
    <p>&nbsp;</p></td>
  </tr>
  <tr>
    <td height="20" valign="top" bgcolor="#4682B4" style="border-bottom:#CCC solid 1px">&nbsp;</td>
  </tr>
  <tr>
    <td height="44" valign="top" style="border-bottom:#CCC solid 1px">&nbsp;</td>
  </tr>
  <tr>
    <td height="19" valign="top"  bgcolor="#4682B4">&nbsp;</td>
    <td height="64" valign="top"  bgcolor="#4682B4">&nbsp;</td>
  </tr>
</table>
<center><p style="font-family: Calibri; font-size: 10px; center;color: #999;">Diseño   y desarrollo.<br />
Área de Desarrollo. Gerencia de Tecnología y  Comunicaciones<br />
Call Center S.A. Medellín - Colombia.<br />
Todos los derechos   reservados.<br />
2.011. v.01</p></center>
<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "integer", {minChars:10, maxChars:10, hint:"Ingrese PIN"});
var spryradio1 = new Spry.Widget.ValidationRadio("spryradio1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none", {hint:"Ingrese el par\xE1metro"});
var spryradio2 = new Spry.Widget.ValidationRadio("spryradio2");
//-->
</script>
</body>
</html>

