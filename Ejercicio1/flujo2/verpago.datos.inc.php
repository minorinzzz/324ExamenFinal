<?php 
include "conexion.inc.php";
$usuario_sesion = $_GET['usuario'];
$user_que_entro = $_GET['usuario'];
$flujo = $_GET["flujo"];
$proceso = $_GET["proceso"];
$nro_tramite = $_GET["nro_tramite"];

$sql="SELECT * FROM flujotramite ";
$sql.="WHERE Flujo='".$flujo."' and proceso='".$proceso."' and nro_tramite='".$nro_tramite."' and fechafin is null " ;
$result=mysqli_query($con, $sql);
$filafi=mysqli_fetch_array($result);

// print_r($filafi);


$del_que_tiene_que_hacer = $filafi['usuario_tarea'];

$sql = "select * from usuario where descripcion='".$del_que_tiene_que_hacer."'";
$res = mysqli_query($con, $sql);
$fil = mysqli_fetch_array($res);
// print_r($fil);
$usuario_en_el_sistema =  $fil['descripcion']; // es unico
$codigo = $fil['id'];
/*

// buscando quien es el unico usuario en el sistem
$sql = "select * from rol where descipcion='Alumno'";
$res = mysqli_query($con, $sql);
$fil = mysqli_fetch_array($res);

// ahora en rolusuario buscar al codUsuario
$sql = "select * from rolusuario where IdRol='".$fil['id']."'";
$res = mysqli_query($con, $sql);
$fil = mysqli_fetch_array($res);

// print_r($fil);
// ahora si buscando el handle del usuario
$sql = "select * from usuario where id='".$fil['IdUsuario']."'";
$res = mysqli_query($con, $sql);
$fil = mysqli_fetch_array($res);
// print_r($fil);
$usuario_en_el_sistema =  $fil['descripcion']; // es unico
$codigo = $fil['id'];*/
// echo $codigo;
// verificando si ese usuario deposito ese monto


$sql = "select * from academico2p.deposito_caja where id='".$codigo."' and nro_tramite='".$nro_tramite."'";
$res = mysqli_query($con, $sql);
 $filacerti = mysqli_fetch_array($res);
// $fil = mysqli_fetch_array($res);

?>