<?php
function usuarios()
{
   if (!($link=mysql_connect("localhost","desarrollo","Desarrollo_20.13")))
   {
      echo "Error conectando a la base de datos de usuarios.";
      exit();
   }
   if (!mysql_select_db("usuarios",$link))
   {
      echo "Error seleccionando la base de datos.";
      exit();
   }
   mysql_query ("SET NAMES 'utf8'");
   return $link;
}



function zonas()
{
   if (!($link=mysql_connect("localhost","desarrollo","Desarrollo_20.13")))
   {
      echo "Error conectando a la base de datos de usuarios.";
      exit();
   }
   if (!mysql_select_db("zonas",$link))
   {
      echo "Error seleccionando la base de datos.";
      exit();
   }
   mysql_query ("SET NAMES 'utf8'");
   return $link;
}

?>



