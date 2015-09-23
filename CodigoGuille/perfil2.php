<html>
 <head>
<LINK rel="stylesheet" type="text/css" href="estilos/BASE.css">

<SCRIPT language="javascript">
function addRow(tableID) {
     var table = document.getElementById(tableID);

     var rowCount = table.rows.length;
     var row = table.insertRow(rowCount);


      var cell1 = row.insertCell(0);
      var element1 = document.createElement("input");
      element1.type = "text";
      cell1.appendChild(element1);
      }
      

          function deleteRow(tableID) {

               try {

               var table = document.getElementById(tableID);

               var rowCount = table.rows.length;


for(var i=0; i<rowCount; i++) {

var row = table.rows[i];

var chkbox = row.cells[0].childNodes[0];

if(null != chkbox && true == chkbox.checked) {

table.deleteRow(i);

rowCount--;

i--;
  }
}
  }catch(e) {
    alert(e);
  }
}
</SCRIPT>

<script language="javascript">
function ventanaNueva(documento){
	window.open(documento,'nuevaVentana','width=900, height=500');
}
</script>
 </head>
<body>
<BR>
<center><font FACE="Times New Roman" SIZE=10 color="#D60664" ><b><i><b> PERFIL </b></i></b></font></h1></i> <BR>
<form name="nodos" method="post" action="gescentrales2.php">
<table id="dataTable" width="80%" border="0">
  <tr>
    <td><p class="style7"><b><input type="radio">Entrenador de Arqueros</b></p></td>
    <td><p class="style7"><b><input type="radio">Manager</b></p></td>
    <td><p class="style7"><b><input type="radio">Fisioterapeuta</b></p></td>
    <td><p class="style7"><b><input type="radio">Tecnico</b></p></td>
    <td><p class="style7"><b><input type="radio">Asistente</b></p></td>
    <td><p class="style7"><b><input type="radio">Medico</b></p></td>
    <td><p class="style7"><b><input type="radio">Otro</b></p></td>
  </tr>
</table>
<BR><BR>
<table id="dataTable" width="80%" border="0">
  <tr>
    <td><p class="style7"><b>C&Eacute;DULA:</b></p></td>
    <td><b><input type="text" size="20"></b></td>
    <td><p class="style7"><b>NOMBRES:</b></p></td>
    <td><b><input type="text" size="20"></b></td>
  </tr>
  <tr>
    <td><p class="style7"><b>APELLIDOS:</b></p></td>
    <td><b><input type="text" size="20"></b></td>
    <td><p class="style7"><b>FECHA DE NACIMIENTO:</b></p></td>
    <td><b><input type="text" size="20"></b></td>
  </tr>
  <tr>
    <td><p class="style7"><b>LUGAR DE NACIMIENTO:</b></p></td>
    <td><b><input type="text" size="20"></b></td>
    <td><p class="style7"><b>NACIONALIDAD:</b></p></td>
    <td><b><input type="text" size="20"></b></td>
  </tr>
  <tr>
    <td><p class="style7"><b>ESTADO CIVIL:</b></p></td>
    <td><b><input type="text" size="20"></b></td>
    <td><p class="style7"><b>NIVEL EDUCATIVO:</b></p></td>
    <td><b><input type="text" size="20"></b></td>
  </tr>
  <tr>
    <td><p class="style7"><b>OCUPACI&Oacute;N:</b></p></td>
    <td><b><input type="text" size="20"></b></td>
    <td><p class="style7"><b>IDIOMAS:</b></p></td>
    <td><b><input type="text" size="20"></b></td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC" colspan="4"><center><p class="style7"><b>FICHA T&Eacute;CNICA</b></p></center></td>
  </tr>
  <tr>
    <td><p class="style7"><b>NOMBRE DEPORTIVO:</b></p></td>
    <td><b><input type="text" size="20"></b></td>
    <td><p class="style7"><b>ESTATURA:</b></p></td>
    <td><b><input type="text" size="20"></b></td>
  </tr>
  <tr>
    <td><p class="style7"><b>PESO:</b></p></td>
    <td><b><input type="text" size="20"></b></td>
    <td><p class="style7"><b>PRIMERA POSICI&Oacute;N:</b></p></td>
    <td><b><input type="text" size="20"></b></td>
  </tr>
  <tr>
    <td><p class="style7"><b>SEGUNDA POSICI&Oacute;N:</b></p></td>
    <td><b><input type="text" size="20"></b></td>
    <td><p class="style7"><b>IDIOMAS:</b></p></td>
    <td><b><input type="text" size="20"></b></td>
  </tr>
</table>
<table id="dataTable" width="80%" border="0">
  <tr>
    <td bgcolor="#CCCCCC" colspan="4"><center><p class="style7"><b><a href="habilidades.php" target="_blank" onClick="window.open(this.href, this.target, 'width=900,height=500'); return false;">HABILIDADES Y FORTALEZAS</a></b></p></center></td>
    <td bgcolor="#CCCCCC" colspan="4"><center><p class="style7"><b><a href="grupales.php" target="_blank" onClick="window.open(this.href, this.target, 'width=900,height=500'); return false;">&Uacute;LTIMOS RECONOCIMIENTOS</a></b></p></center></td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC" colspan="4"><center><p class="style7"><b><a href="equipos.php" target="_blank" onClick="window.open(this.href, this.target, 'width=900,height=500'); return false;">&Uacute;LTIMOS EQUIPOS</a></b></p></center></td>
    <td bgcolor="#CCCCCC" colspan="4"><center><p class="style7"><b><a href="individuales.php" target="_blank" onClick="window.open(this.href, this.target, 'width=900,height=500'); return false;">RECONOCIMIENTOS</a></b></p></center></td>
  </tr>
  <tr>
    <td colspan="4"><center><input type="button" value="Guardar"></center></td>
  </tr>
</table>
</body>
</html>
