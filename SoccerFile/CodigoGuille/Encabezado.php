<HTML>
<head>
<style type="text/css">
html, body, div, iframe {
margin:0;
padding:0;
height:100%;
}
iframe {
display:block;
width:100%;
border:none; }
</style>

<style type="text/css">
.menudes {
position: relative;
overflow: hidden;
width: 100%;
margin: 10px auto 10px;
border-radius: 8px;
background: #4682B4;
text-align:center;
}
.menudes a {
display: inline-block;
width: 15%; /* 100% dividido por el número de elementos del menú */
box-sizing: border-box;
padding: 10px 5px;
color: #fff;
text-decoration: none;
}
.marca {
position: absolute;
bottom: 4px;
left: -12.5%; /* Al menos 1/2 del ancho de cada enlace */
width: 12.5%; /* 1/2 del ancho de cada enlace */
height: 4px;
background: #fff;
transition: 0.5s ease-in-out;
}
.menudes a:nth-child(1):hover ~ .marca {
left: 6.25%; /* 1/4 Ancho del enlace */
}
.menudes a:nth-child(2):hover ~ .marca {
left: 31.25%; /* 1/4 Ancho del enlace + 1 vez ancho enlace */
}
.menudes a:nth-child(3):hover ~ .marca {
left: 56.25%; /* 1/4 Ancho del enlace + 2 veces ancho enlace */
}
.menudes a:nth-child(4):hover ~ .marca {
left: 81.5%; /* 1/4 Ancho del enlace + 3 veces ancho enlace */
}
</style>

 <title></title>
 <LINK href='nombre.css' type=text/css rel=stylesheet>
<script language='javascript' src="popcalendar.js"></script>
<BODY >
<center>
<table border="0" width="100%" bgcolor="#4682B4">
<tr>
  <td width="5000"><font color="#4682B4"></font></td>
</tr>
<tr>
  <td width="5000"><font color="#ffffff"><span style='font-family: Calibri,sans-serif; font-size: 12pt;'><hr align="tr">&nbsp;Usted esta logueado como: <b><?php echo $_SESSION["udeporte"]; php?></b> &nbsp;&nbsp;&nbsp; Fecha y Hora: <b><?php echo  date("d-m-Y H:i:s"); php?></font></span></td>
</tr>
</table>

<table border="0" width="100%">
<tr>
  <td width="5000">
<div class="menudes">
<a href="home.php"><span style='font-family: Calibri,sans-serif; font-size: 12pt;'>Inicio</span></a>
<a href="perfil.php"><span style='font-family: Calibri,sans-serif; font-size: 12pt;'>Perfil</span></a>
<a href=""><span style='font-family: Calibri,sans-serif; font-size: 12pt;'>Amigos</span></a>
<a href=""><span style='font-family: Calibri,sans-serif; font-size: 12pt;'>Actualidad</span></a>
<a href=""><span style='font-family: Calibri,sans-serif; font-size: 12pt;'>Fotos</span></a>
<a href="salir.php"><span style='font-family: Calibri,sans-serif; font-size: 12pt;'>Salir</span></a>
<div class="marca"></div>
</div>
  </td>
</tr>
</table>

</BODY>
</HTML>


