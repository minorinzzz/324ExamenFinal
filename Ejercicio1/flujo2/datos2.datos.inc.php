<?php

// encontrar su id por usuario (usuario unico)
$user_que_entro = $_SESSION['usuario'];

$sql="SELECT * FROM academico2p.alumno ";
$sql.="WHERE usuario='$user_que_entro'";
$resultadofi=mysqli_query($con, $sql);
$filafi=mysqli_fetch_array($resultadofi);
$id=$filafi["id"];
$nombrecompleto=$filafi["nombrecompleto"];
$coddepto=$filafi["coddepto"];
$codBachiller = $filafi["codBachiller"];
$cnacimiento = $filafi["cnacimiento"];
$cidentidad = $filafi["cidentidad"];
$nacionalidad = $filafi["nacionalidad"];
$fechanacimiento = $filafi['fechanacimiento'];
$ci = $filafi["ci"];

?>