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
                    <h3>Perfecto ya casi vamos a la mitad!</h3>
                    <p>Para tus futuros managers o tecnicos es muy importante saber tus conocimientos, que sabes hacer y si dominas algún otro idioma, por eso te haremos algunas preguntas relacionadas con estos temas</p>
            </div>
            
    <div class="panel-body" > 
        
    <form action="CreacionPefilJugador3.php" metod="POST" class="form-horizonal">
                        <div class="form-group">
                            <label class="control-label" for="EducationLevel">Nivel Educativo</label>
                            <select class="form-control" name="EducationLevel" id="EducationLevel" required>
                                <option value="">Seleccione</option>
                                <option value="Ninguno">Ninguno</option>
                                <option value="Primaria">Primaria</option>
                                <option value="Bachillerato">Bachillerato</option>
                                <option value="Tecnico">Tecnico</option>
                                <option value="Tecnologico">Tecnologico</option>
                                <option value="Universitario">Universitario</option>
                                <option value="Especialista">Especialista</option>
                                <option value="Maestria">Maestria</option>
                                <option value="PhD">PhD</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="Language">Idiomas</label>
                             <p class="text-muted">Selecciona aqui tu idioma nativo, si manejas otro, has click en la opción "Agregar otro".</p>
                            <select class="form-control" name="Language1" id="Language" placeholder="Idioma principal" required>
                                <option value="">Seleccione</option>
                                <option value="ingles ">English</option>
                                <option value="Español">Español</option>
                                <option value="portugues">Português</option>
                                <option value="Italiano">Italiano</option>
                                <option value="frances">Français</option>
                                <option value="aleman">Deutsch</option>
                                <option value="Ruso">Pусский</option>
                                <option value="holandes">Nederlandse</option>
                                <option value="griego">Ελλάδα</option>
                                <option value="chino">中国</option>
                                <option value="árabe">عربي</option>
                                <option value="otro">otro</option>
                            </select>
                                <br>
                                 <a href="#" onclick="AgregarCampos();">Agregar Otro...</a>
                                 <div id="campos">
                                     
                                 </div>
                        </div> 
                        <div class="form-group">  
                            <button type="submit" class="btn btn-block btn-soccer">Continuar</button>
                        </div>
     </form>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
var nextinput = 0;
function AgregarCampos(){
nextinput++;

campo = '<id="rut'+nextinput+'"><select class="form-control" id="Language' + nextinput +'" name="Language' + nextinput + '"  required >&nbsp; <option value="">Seleccione idioma</option><option value="ingles ">English</option><option value="Español">Español</option><option value="portugues">Português</option><option value="Italiano">Italiano</option><option value="frances">Français</option><option value="aleman">Deutsch</option><option value="Ruso">Pусский</option><option value="holandes">Nederlandse</option><option value="griego">Ελλάδα</option><option value="chino">中国</option><option value="árabe">عربي</option><option value="otro">otro</option></select><br>';
$("#campos").append(campo);
}
</script>   
</body>
</html>
