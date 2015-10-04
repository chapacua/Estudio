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
            <div class="panel-heading">SOCCERFILE®.</FONT>

                <div class="progress">
                    <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%"> 90%
                    </div>
                </div>

                <label>Estado creacion de pefil basico: En proceso</label>
                
                </div>

            <div class="jumbotron">
                    <h3>... y por ultimo</h3>
                    <p>Solo queda que nos cuentes si has ganado algún titulo o algún torneo para que así nosotros hagamos un perfil muy completo y los cazatalentos puedan rapidamente fijarse en ti</p>
            </div>

        <div class="panel-body"> 
                <form action="Estahecho.php" metod="POST" class="form-inline">

                    <div class="form-group">
                        <label for="TournamentType" class="">Tipo</label>
                        <select name="TournamentType" id="TournamentType" class="form-control" required="required">
                            <option value="">Seleccione</option>
                            <option value="">Torneo Barrial</option>
                            <option value="">Torneo Colegial</option>
                            <option value="">Torneo Intercolegial</option>
                            <option value="">Torneo Empresarial</option>
                            <option value="">Torneo Municipal</option>
                            <option value="">Torneo Intermunicipal</option>
                            <option value="">Torneo Departamental</option>
                            <option value="">Torneo Nacional</option>
                            <option value="">Torneo Internacional</option>
                        </select>
                        <label for="TournamentName" class="control-label">Nombre del torneo</label>
                        <input type="text" name="TournamentName" id="TournamentName" class="form-control"value="" placeholder="Equipo" required="required"> 
                        <label for="TournamentYear" class="">Año</label>
                        <select name="TournamentYear" id="TournamentYear" class="form-control" required="required">
                            <option value="">Seleccione</option>
                            <option value="">2005-2</option>
                            <option value="">2006-1</option>
                            <option value="">2006-2</option>
                            <option value="">2007-1</option>
                            <option value="">2007-2</option>
                            <option value="">2008-1</option>
                            <option value="">2008-2</option>
                            <option value="">2009-1</option>
                            <option value="">2009-2</option>
                            <option value="">2010-1</option>
                            <option value="">2010-2</option>
                            <option value="">2011-1</option>
                            <option value="">2011-2</option>
                            <option value="">2012-1</option>
                            <option value="">2012-2</option>
                            <option value="">2013-1</option>
                            <option value="">2013-2</option>
                            <option value="">2014-1</option>
                            <option value="">2014-2</option>
                            <option value="">2015-1</option>
                            <option value="">2015-2</option>
                        </select>
                        <label for="TeamWinner" class="control-label">Nombre del equipo</label>
                        <input type="text" name="TeamWinner" id="TeamWinner" class="form-control"value="" placeholder="Equipo" required="required"> 


                            <a href="#" onclick="AgregarCampos();">Agregar Otro...</a>
                        <div id="campos">
                        </div>          
                 </div>

                        <div class="form-group">  
                        <br>
                            <button type="submit" class="btn btn-block btn-soccer">Continuar</button>
                        </div>
                        <div class="form-group">  
                        <br>
                            <a href="Estahecho.php" class="btn btn-block btn-soccer">Omitir</a>
                        </div>

                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
var TournamentType = 0;
var TournamentName = 0;
var TournamentYear = 0;
var Team = 0;
function AgregarCampos(){
TournamentType++;
TournamentName++;
TournamentYear++; 
Team++;

campo = '<br><div class="form-group"><label for="TournamentType'+ TournamentType +'" class="">Tipo</label>&nbsp;<select name="TournamentType'+ TournamentType +'" id="TournamentType'+ TournamentType +'" class="form-control"><option value="">Seleccione</option><option value="">Torneo Barrial</option><option value="">Torneo Colegial</option><option value="">Torneo Intercolegial</option><option value="">Torneo Empresarial</option><option value="">Torneo Municipal</option><option value="">Torneo Intermunicipal</option><option value="">Torneo Departamental</option><option value="">Torneo Nacional</option><option value="">Torneo Internacional</option></select>&nbsp;<label for="TournamentName'+ TournamentName +'" class="control-label">Nombre del torneo</label>&nbsp;<input type="text" name="TournamentName'+ TournamentName +'" id="TournamentName'+ TournamentName +'" class="form-control" value="" placeholder="Equipo">&nbsp;<label for="TournamentYear'+ TournamentYear +'" class="">Año</label>&nbsp;<select name="TournamentYear'+ TournamentYear +'" id="TournamentYear'+ TournamentYear +'" class="form-control"><option value="">Seleccione</option><option value="">2005-2</option><option value="">2006-1</option><option value="">2006-2</option><option value="">2007-1</option><option value="">2007-2</option><option value="">2008-1</option><option value="">2008-2</option><option value="">2009-1</option><option value="">2009-2</option><option value="">2010-1</option><option value="">2010-2</option><option value="">2011-1</option><option value="">2011-2</option><option value="">2012-1</option><option value="">2012-2</option><option value="">2013-1</option><option value="">2013-2</option><option value="">2014-1</option><option value="">2014-2</option><option value="">2015-1</option><option value="">2015-2</option></select>&nbsp;<label for="Team'+ Team +'" class="control-label">Nombre del equipo</label>&nbsp;<input type="text" name="Team'+ Team +'" id="Team'+ Team +'" class="form-control"value="" placeholder="Equipo"></div><br>';
$("#campos").append(campo);
}
</script> 
</body>
</html>