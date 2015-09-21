<html data-useragent="Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.0" style="" class="js flexbox canvas canvastext webgl no-touch geolocation postmessage no-websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients no-cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths wf-adobecaslonpro-i4-active wf-adobecaslonpro-n4-active wf-alegreyasc-n7-active wf-jafberninosanscondensed-n3-active wf-jafberninosanscondensed-n4-active wf-active" lang="en"><!--<![endif]--><head>
    <meta charset="utf-8">
    <meta property="fb:app_id" content="">
    <meta http-equiv="cleartype" content="on">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="author" content="SoccerFile">
    <meta name="description" content="Page for player biginers">
    <meta name="keywords" content="soccer, player, famous, training, futbol, futbol jugador, famoso, entrenamiento">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="rating" content="general">
    <meta name="revisit-after" content="7 days">
    <meta name="language" content="Spanish">
    <meta name="language" content="English">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<head>


  <link rel="stylesheet" href="../../Views/Styles/Bootstrap/css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="../../Views/Styles/Bootstrap/js/bootstrap.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="icon" type="image/png" href="../../../Imagenes/ico.png"/>
  <link rel="stylesheet" type="text/css" href="../../../SoccerFile/Views/Styles/Bootstrap/calendario/tcal.css" />
  <script type="text/javascript" src="../../Views/Styles/Bootstrap/calendario/tcal.js"></script>
  <title>Soccer File</title>
</head>
<body>
<br>
<div class="well">
  <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">!Ya haces parte de SoccerFile ®!</FONT>

                <div class="progress">
                    <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width:30%"> 30%
                    </div>
                </div>

                <label>Estado creacion de pefil basico: En proceso</label>

                </div>

            <div class="jumbotron">
                    <h3>Saludos amigo Director Tecnico!</h3>
                    <p>Si estas acá es por que eres la persona que se encarga y se encargará de la dirección, instrucción y entrenamiento de un deportista individual o un conjunto de ellos para un equipo, te haremos unas preguntas con el fin de crear un perfil completo con tu informacion</p>
            </div>
            
    <div class="panel-body" > 
        
    <form action="CreacionPefilDT2.php" metod="POST" class="form">
                        <div class="form-group">
                            <label for="Name" class="control-label" >Nombre(s)</label>
							<input type="text" name="Name" id="Name" class="form-control" placeholder="Nombre">
						</div>
						<div class="form-group">
							<label for="Lastname" class="control-label" >Apellido</label>
							<input type="text" name="Lastname" id="Lastname" class="form-control" placeholder="Apellido">
						</div>
						<div class="form-group">
							<label for="Experience" class="control-label">Tiempo de experiencia</label>
							<select name="Experience" id="Experience" class="form-control" required>
                                <option value="">Seleccione</option>
                                <option value="6_meses">Menos de 6 meses</option>
                                <option value="6_And_1">Entre 6 meses y 1 año</option>
                                <option value="1_And_2">Entre 1 año y 2 años</option>
                                <option value="2_And_3">Entre 2 y 3 años</option>
                                <option value="3_And_4">Entre 3 y 4 años</option>
                                <option value="4_And_5">Entre 4 y 5 años</option>
                                <option value="5_And_10">Entre 5 y 10 años</option>
                                <option value="10_And_15">Entre 10 y 15 años</option>
                                <option value="15_And_20">Entre 15 y 20 años</option>
                                <option value="20_And_30">Entre 20 y 30 años</option>
                                <option value="30">Más de 30 años</option>
                            </select>
                        </div>
						<a href="#" onclick="AgregarCampos();">Agregar Otro...</a>
                        <div id="campos">
                        </div>
                        <div class="form-group">  
                            <button type="submit" class="btn btn-block btn-soccer">Continuar</button>
                        </div>
                        </div>
     </form>
            </div>
        </div>
    </div>
</div>  
<script type="text/javascript">
var TeamName = 0;
var PositionAtTeam = 0;
var StartDate = 0;
var EndDate = 0;
function AgregarCampos(){
TeamName++;
PositionAtTeam++;
StartDate++;
EndDate++;

campo = '<br><div class="form-group"><label for="TeamName'+ TeamName +'" class="control-label">Nombre del equipo</label>&nbsp;<input type="text" name="TeamName'+ TeamName +'" id="TeamName'+ TeamName +'" class="form-control"value="" placeholder="Equipo">&nbsp;<label for="PositionAtTeam'+ PositionAtTeam +'" class="">Posicion en cancha</label>&nbsp;<select name="PositionAtTeam'+ PositionAtTeam +'" id="PositionAtTeam'+ PositionAtTeam +'" class="form-control"><option value="">Seleccione</option><option value="Arquero">Arquero</option><option value="Defensa Centra">Defensa Central</option><option value="Defensa por izquierda">Defensa por izquierda</option><option value="Defensa por derecha">Defensa por derecha</option><option value="Medio campo">Medio campo</option><option value="Lateral izquierdo">Lateral izquierdo</option><option value="Lateral derecho">Lateral derecho</option><option value="Armador">Armador</option><option value="Media punta">Media punta</option></select>&nbsp;<label for="StartDate'+ StartDate+'" class="">Inicio</label>&nbsp;<select name="StartDate'+ StartDate +'" id="StartDate'+ StartDate +'" class="form-control"><option value="">Seleccione</option><option value="">2005-1</option><option value="">2005-2</option><option value="">2006-1</option><option value="">2006-2</option><option value="">2007-1</option><option value="">2007-2</option><option value="">2008-1</option><option value="">2008-2</option><option value="">2009-1</option><option value="">2009-2</option><option value="">2010-1</option><option value="">2010-2</option><option value="">2011-1</option><option value="">2011-2</option><option value="">2012-1</option><option value="">2012-2</option><option value="">2013-1</option><option value="">2013-2</option><option value="">2014-1</option><option value="">2014-2</option><option value="">2015-1</option><option value="">2015-2</option></select>&nbsp;<label for="EndDate'+ EndDate +'" class="">Final</label>&nbsp;<select name="EndDate'+ EndDate +'" id="EndDate'+ EndDate +'" class="form-control"><option value="">Seleccione</option><option value="">2005-2</option><option value="">2006-1</option><option value="">2006-2</option><option value="">2007-1</option><option value="">2007-2</option><option value="">2008-1</option><option value="">2008-2</option><option value="">2009-1</option><option value="">2009-2</option><option value="">2010-1</option><option value="">2010-2</option><option value="">2011-1</option><option value="">2011-2</option><option value="">2012-1</option><option value="">2012-2</option><option value="">2013-1</option><option value="">2013-2</option><option value="">2014-1</option><option value="">2014-2</option><option value="">2015-1</option><option value="">2015-2</option></select></div></div><br>';
$("#campos").append(campo);
}
</script> 
</body>
</html>

