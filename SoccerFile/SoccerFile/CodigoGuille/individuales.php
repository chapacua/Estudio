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
