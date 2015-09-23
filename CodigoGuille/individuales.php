<html>
 <head>
<LINK rel="stylesheet" type="text/css" href="estilos/BASE.css">
  <link rel="stylesheet" href="../Views/Styles/Bootstrap/css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="../../Views/Styles/Bootstrap/js/bootstrap.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="icon" type="image/png" href="../../../SoccerFile/Imagenes/ico.png"/>

<script type="text/javascript">
var nextinput = 0;
function AgregarCampos(){
nextinput++;
campo = '<li id="rut'+nextinput+'">Campo:<input type="text" class="form-control" size="20" id="campo' + nextinput + '"&nbsp; name="campo' + nextinput + '"&nbsp; /></li>';
$("#campos").append(campo);
}
</script>
</head>
<body>

<table id="dataTable" width="80%" border="0">
  <tr>
    <td bgcolor="#CCCCCC" colspan="4"><center><p class="style7"><b>RECONOCIMIENTOS INDOVIDUALES</b></p></center></td>
  </tr>
  <tr>
     <TD> <INPUT type="text" /> </TD>
     <td><INPUT type="button" value="Agregar fila" onclick="addRow('dataTable');" /></td>
  </tr>
  <tr>
</table>
 <form id="form" name="form" method="post">
 <a href="#" onclick="AgregarCampos();">Agregar Campos</a>
 <div id="campos">
 </div>
