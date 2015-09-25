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
                    <h3>... Que estudios has realizado?</h3>
                    <p>Es importante, tanto para seguridad como para los equipos como para las personas, saber que estudios has realizado, asi que cuentanos...</p>
            </div>

        <div class="panel-body"> 
                <form action="CreacionPefilDoctor3.php" metod="POST" class="form-inline">

                    <div class="form-group ">
                        <label for="EducationLevel" class="">Tipo de titulo</label>
                        <select name="EducationLevel" id="EducationLevel" class="form-control " required="required">
                            <option value="">Seleccione</option>
                            <option value="">Empirico</option>
                            <option value="">Tenico</option>
                            <option value="">Tecnologico</option>
                            <option value="">Pre-grado</option>
                            <option value="">Postgrado</option>
                            <option value="">Especializacion</option>
                            <option value="">Maestria</option>
                            <option value="">PhD</option>
                            <option value="">Curso</option>
                            <option value="">Diplomado</option>
                            <option value="">Otro</option>
                        </select>
                        <label for="InstitutionName" class="control-label">Nombre de la insitucion educativa</label>
                        <input type="text" name="InstitutionName" id="InstitutionName" class="form-control"value="" placeholder="Colegio / Univerisdad / instituto" required="required"> 
                     <label for="EndDate" class="control-label">Año de finalizacion</label>&nbsp;
                     <select name="EndDate" id="EndDate" class="form-control" required="required">
                     <option value="">Seleccione&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                     <?php for ($i=1950; $i<=2015; $i++) 
                      {echo "<option value='$i'>$i</option>";}?>
                      </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
        </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
var Degree = 0;
var Certifier = 0;
var EndYear = 0;
function AgregarCampos(){
Degree++;
Certifier++;
EndYear++; 

campo = '<br><label for="Degree'+ Degree +'" class="">Tipo de titulo</label>&nbsp;<select name="Degree'+ Degree +'" id="Degree'+ Degree +'" class="form-control" required="required"><option value="">Seleccione</option><option value="">Empirico</option><option value="">Tenico</option><option value="">Tecnologico</option><option value="">Pre-grado</option><option value="">Postgrado</option><option value="">Especializacion</option><option value="">Maestria</option><option value="">PhD</option><option value="">Curso</option><option value="">Diplomado</option><option value="">Otro</option></select>&nbsp;<label for="Certifier'+ Certifier +'" class="control-label">Nombre de la insitucion educativa</label>&nbsp;<input type="text" name="Certifier'+ Certifier +'" id="Certifier'+ Certifier +'" class="form-control"value="" placeholder="Colegio / Univerisdad / instituto" required="required">&nbsp;<label for="EndYear'+ EndYear +'" class="control-label">Año de finalizacion</label>&nbsp;&nbsp;<select name="EndYear'+ EndYear +'" id="EndYear'+ EndYear +'" class="form-control" required="required"><option value="">Seleccione&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option><?php for ($i=1950; $i<=2015; $i++) {echo "<option value=$i>$i</option>";}?></select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" onclick="AgregarCampos();">Agregar Otro...</a><div id="campos"></div><br>';
$("#campos").append(campo);
}
</script> 
</body>
</html>