<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> FORMULARIO</title>
    <link rel="stylesheet" type="text/css" href="css/boostrap.css">
</head>
<body>

<div class="container">
    <div class="row">
    <div class="col-md-6 well">

        <h3>alumno</h3><br>
  <form action="/action_page.php" method="GET">
  nombre:<br>
  <input type="text" name="nombre" value="Mickey"><br>
  apellido:<br>
  <input type="text" name="apellido" value="Mickey"><br>
  rut:<br>
  <input type="text" name="rut" value="Mickey"><br>
  <input type="hidden" name="alumno_formulario">
  <input type="Submit" value="enviar" class="btn btn-success">

</form>
    </div>
    <div class="col-md-6 well">

    <h3>ramo</h3>
    <form action="/action_page.php" method="GET">
    nombre:<br>
    <input type="text" name="ramo" value="Mickey"><br>
    nota:<br>
    <input type="text" name="nota" value="Mickey"><br>
    <input type="hidden" name="ramo_formulario">
   <input type="Submit" value="enviar" class="btn btn-success-danger">
</form>
        
    </div>
    
  </div>
</div>


 <script type="text/javascript" src="js/jquery.js"></script>
 <script type="text/javascript" src="js/jquery-3.2.1.min"></script>

</body>
</html>