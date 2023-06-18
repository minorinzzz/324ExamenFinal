<?php
$id=$_POST["id"];

$estado_valido = 1;

if($_FILES['verificacion']['error']){
    $estado_valido = 0;
}



if($estado_valido == 1){
    
    $nombre_archivo_original = $_FILES['verificacion']['name']; // recuperando nombre
    $extension_archivo = $type=substr($nombre_archivo_original,strrpos($nombre_archivo_original,'.')+1);
    $nuevo_nombre_verificacion = $id.".".$extension_archivo;
    $ruta_temporal = $_FILES['verificacion']['tmp_name']; // es como copiar y pegar
    $ruta_a_guardar = "certificacion/verificacion_de_pago/".$nuevo_nombre_verificacion;
    // ahora hay que mover el archivo que se esta subiendo
    move_uploaded_file($ruta_temporal, $ruta_a_guardar);

    $sql="SELECT count(*) as canti FROM academico2p.deposito_caja WHERE nro_tramite = '$nro_tramite'";
    $canti = mysqli_query($con, $sql);
    $fff = mysqli_fetch_array($canti);
    if($fff['canti'] > 0){
        $sql = "update academico2p.deposito_caja set ";
        $sql.= " nombre_verificacion='".$nuevo_nombre_verificacion."' ";
        $sql.= " where id='".$id."' and nro_tramite='.$nro_tramite.';";        
    }else{
        $sql = "insert into academico2p.deposito_caja ";
        $sql.= " values ($id,'".$nuevo_nombre_verificacion."', '".$nro_tramite."');";
    }
    
    mysqli_query($con, $sql);
}


?>