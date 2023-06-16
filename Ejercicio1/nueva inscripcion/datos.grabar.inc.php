

<?php
$id=$_POST["id"];
$nombrecompleto=$_POST["nombrecompleto"];
$coddepto=$_POST["coddepto"];
// $codBachiller=$_POST["codBachiller"];
// $cnacimiento=$_POST["cnacimiento"];
// $cidentidad=$_POST["cidentidad"];
$nacionalidad=$_POST["nacionalidad"];
$fechanacimiento=$_POST['fechanacimiento'];
$ci = $_POST['ci'];

// echo "para graba ".$id."<br/>";
// echo "para graba ".$nombrecompleto."<br/>";
// echo "para graba ".$coddepto."<br/>";
// echo "para graba ".$codBachiller."<br/>";
// echo "para graba ".$cnacimiento."<br/>";
// echo "para graba ".$cidentidad."<br/>";
// echo "para graba ".$nacionalidad."<br/>";


$sql="UPDATE academico22p.alumno ";
$sql.="SET nombrecompleto='".$nombrecompleto."', ";
$sql.="coddepto='".$coddepto."', ";

// recuperar la direccion de archivos y guardar
// para CERTIFICADO DE BACHILLER

if(!$_FILES['certBachiller']['error']){
    
    $nombre_archivo_original = $_FILES['certBachiller']['name']; // recuperando nombre
    $extension_archivo = $type=substr($nombre_archivo_original,strrpos($nombre_archivo_original,'.')+1);
    $nuevo_nombre_bachiller = $id.".".$extension_archivo;
    $ruta_temporal = $_FILES['certBachiller']['tmp_name']; // es como copiar y pegar
    $ruta_a_guardar = "archivos/certificado_bachiller/".$nuevo_nombre_bachiller;
    // ahora hay que mover el archivo que se esta subiendo
    move_uploaded_file($ruta_temporal, $ruta_a_guardar);
    $sql.="codBachiller='".$nuevo_nombre_bachiller."', ";
}

// NACIEMIETO

if(!$_FILES['certNacimiento']['error']){

    $nombre_archivo_original = $_FILES['certNacimiento']['name']; // recuperando nombre
    $extension_archivo = $type=substr($nombre_archivo_original,strrpos($nombre_archivo_original,'.')+1);
    $nuevo_nombre_nacimiento = $id.".".$extension_archivo;
    $ruta_temporal = $_FILES['certNacimiento']['tmp_name']; // es como copiar y pegar
    $ruta_a_guardar = "archivos/certificado_nacimiento/".$nuevo_nombre_nacimiento;
    // ahora hay que mover el archivo que se esta subiendo
    move_uploaded_file($ruta_temporal, $ruta_a_guardar);
    
    $sql.="cnacimiento='".$nuevo_nombre_nacimiento."', ";
}


if(!$_FILES['certIdentidad']['error']){

    $nombre_archivo_original = $_FILES['certIdentidad']['name']; // recuperando nombre
    $extension_archivo = $type=substr($nombre_archivo_original,strrpos($nombre_archivo_original,'.')+1);
    $nuevo_nombre_identidad = $id.".".$extension_archivo;
    $ruta_temporal = $_FILES['certIdentidad']['tmp_name']; // es como copiar y pegar
    $ruta_a_guardar = "archivos/certificado_identidad/".$nuevo_nombre_identidad;
    // ahora hay que mover el archivo que se esta subiendo
    move_uploaded_file($ruta_temporal, $ruta_a_guardar);
    $sql.="cidentidad='".$nuevo_nombre_identidad."', ";
}



$sql.="nacionalidad='".$nacionalidad."', ";
$sql.="fechanacimiento='".$fechanacimiento."', ";
$sql.="ci='".$ci."' ";
$sql.="WHERE id=".$id;
// echo $sql;
mysqli_query($con, $sql);

