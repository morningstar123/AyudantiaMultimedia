<?php
  require_once"conexion.php";
  $smt=$conn->prepare("SELECT * FROM alumnos");
  $smt->execute();
  $resultado =$smt->fetchALL();
  echo "<pre>";
  print_r($resultado);
  echo"</pre>";


?>
