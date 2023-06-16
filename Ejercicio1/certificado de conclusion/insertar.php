<?php
include "conexion.inc.php";

if (!isset($_SESSION)) {
  session_start();
}
$usuario = $_SESSION["usuario"];

$flujo = $_POST["flujo"];
$proceso = $_POST["proceso"];
$maximonumero = $_POST["maximonumero"];

$sql = "INSERT INTO flujotramite(Flujo, proceso, nro_tramite, fechaini, fechafin, usuario, usuario_tarea) VALUES ('$flujo', '$proceso', '$maximonumero', NOW(), NULL, '$usuario', '$usuario')";
mysqli_query($con, $sql);

// Redireccionar a la página index.php después de la inserción
header("Location: bentrada.php");
exit();
?>
