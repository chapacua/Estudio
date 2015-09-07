<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <link rel="stylesheet" href="../../Views/Styles/Bootstrap/css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="../../Views/Styles/Bootstrap/js/bootstrap.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="icon" type="image/png" href="../../../Imagenes/ico.png"/>
  <link rel="stylesheet" type="text/css" href="../../../Views/Styles/Bootstrap/calendario/tcal.css" />
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
                    <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="05" aria-valuemin="0" aria-valuemax="100" style="width:5%"> 5%
                    </div>
                </div>

                <label>Estado creacion de pefil basico: En proceso</label>
                
                </div>

            <div class="jumbotron">
                    <h3>Hola partner</h3>
                    <p>A continuacion te pediremos que ingreses unos datos personales, para que asi quede claro que eres el representante de este futuro gran jugador</p>
            </div>
            
    <div class="panel-body">

    <form role="form" name="f1"  method="POST" action="CreacionPefilJugador.php" class="form">
                        <div class="form-group">
                                <label for="PartnerName">Nombre(s)</label>
                                <input type="text" class="form-control" name="PartnerName" id="PartnerName" placeholder="Tu nombre" required="required">
                        </div>
                         <div class="form-group">
                                <label for="PartnerLastname">Apellido(s)</label>
                                <input type="text" class="form-control" name="PartnerLastname" id="PartnerLastname" placeholder="Tu apellido" required="required">
                        </div>
                        <div class="form-group">
                                <label for="PartnerEmail">Correo</label>
                                <input  type=email id="PartnerEmail" class="form-control" name="PartnerEmail" id="PartnerApellido" placeholder="Ejemplo@ejemplo.com" required="required">
                        </div>
                        <div class="form-group">
                                <label for="Relationship">Relacion con el jugador</label>
                                <select name="Relationship" id="Relationship" class="form-control" placeholder="" required="required">
                                    <option value="">Seleccione</option>
                                    <option value="Madre">Madre</option>
                                    <option value="Padre">Padre</option>
                                    <option value="Abuelo">Abuelo</option>
                                    <option value="Tio">Tio</option>
                                    <option value="Otro_familiar">Otro familiar</option>
                                    <option value="Padrino">Padrino</option>
                                    <option value="Encargado">Encargado legal</option>
                                    <option value="Manager">Manager</option>
                                    <option value="Entrenador">Entrenador</option>
                                </select>
                        </div>
                        <div class="form-group">  
                        <br>
                            <button type="submit" class="btn btn-block btn-soccer">Continuar</button>
                        </div>
</body>
</html>