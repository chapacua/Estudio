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
  <link rel="icon" type="image/png" href="../../../SoccerFile/Imagenes/ico.png"/>
  <link rel="stylesheet" type="text/css" href="../../../SoccerFile/Views/Styles/Bootstrap/calendario/tcal.css" />
  <script type="text/javascript" src="../../Views/Styles/Bootstrap/calendario/tcal.js"></script>
  <title>Soccer File</title>
</head>
<body>
<br>
<div class="well">
  <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">!Ya haces parte de Soccer File ®!</FONT>

                <div class="progress">
                    <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%"> 40%
                    </div>
                </div>

                    <label>Porcentaje de creacion de perfil</label>
                </div>

            <div class="jumbotron">
                    <h3>Perfecto, ya llevas la mitad, si que vas rapido!</h3>
                    <p>Las personas necesitan saber que experiencia tienes y con que equipos has estado vinculado a lo largo de tu carrera profesional</p>
            </div>
            
    <div class="panel-body" > 

    <form action="" metod="POST" class="form-horizonal">
                        <div class="form-group">
                            <label for="Nickname">Nombre y/o apodo profesional</label>
                            <input type="text" name="Nickname" class="form-control" placeholder='"La Maravilla" "La Pulga"' required>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="TimePlayed">Tiempo de experiencia</label>
                            <select class="form-control" name="TimePlayed" id="TimePlayed" required>
                                <option value="">Seleccione</option>
                                <option value="Ninguno">Nunca he jugado, pero se que puedo ser el mejor</option>
                                <option value="6_meses">Menos de 6 meses</option>
                                <option value="6_And_1">Entre 6 meses y 1 año</option>
                                <option value="1_And_2">Entre 1 año y 2 años</option>
                                <option value="2_And_3">Entre 2 y 3 años</option>
                                <option value="3_And_4">Entre 3 y 4 años</option>
                                <option value="4_And_5">Entre 4 y 5 años</option>
                                <option value="5">Más de 5 años</option>
                            </select>
                        </div>

                        <div class="form-group">
                                <label class="control-label" for="Language">Equipos en los que has jugado</label>
                                <input type="text" class="form-control" placeholder="Deportivo Tapitas-Colombia">
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
campo = '<id="rut'+nextinput+'"><input type="text" class="form-control" placeholder="Nombre del equipo+Pais" id="campo' + nextinput + '"&nbsp; name="campo' + nextinput + '"&nbsp; /><br><br>';
$("#campos").append(campo);
}
</script>  
</body>
</html>
