<?php

// encontrar su id por usuario (usuario unico)
$user_que_entro = $_SESSION['usuario'];
$flujo = $_GET["flujo"];
$proceso = $_GET["proceso"];
$nro_tramite = $_GET["nro_tramite"];



// echo $flujo;
// echo $proceso;
// echo $nro_tramite;

$sql="SELECT * FROM flujotramite ";
$sql.="WHERE Flujo='".$flujo."' and proceso='".$proceso."' and nro_tramite='".$nro_tramite."' and fechafin is null " ;
$result=mysqli_query($con, $sql);
$filafi=mysqli_fetch_array($result);

// print_r($filafi);


$del_que_tiene_que_hacer = $filafi['usuario_tarea'];

$sql="SELECT * FROM academico2p.alumno ";
$sql.="WHERE usuario='$del_que_tiene_que_hacer'";
$resultadofi=mysqli_query($con, $sql);
$filafi=mysqli_fetch_array($resultadofi);
$id=$filafi["id"];

$verificacion="";
$sql = "select * from academico2p.deposito_caja ";
//$sql.= " where id='".$id."' ";
//$resultadocert = mysqli_query($con, $sql);
$sql.= " where id='".$id."' and nro_tramite='".$nro_tramite."';";        

$resultadocert = mysqli_query($con, $sql);
while($filacert = mysqli_fetch_array($resultadocert)){
    $verificacion = $filacert['nombre_verificacion'];
}

?>