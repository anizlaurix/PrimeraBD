<?php
include "conexion.php";
$id=$_POST["ID"];
$sql="DELETE FROM pc.personales WHERE mascota.id='$id'";
$res= mysqli_query ($conexion, $sql);
if($res){
    $datos=array();
    $i=0;
    while ($fila=  mysqli_fetch_assoc($res)){
        $datos[$i]=$fila;
        $i=$i+1;
    }
}
    else{
        echo"No se produjo ninguna respuesta: ".mysqli_error();
    }
    echo json_encode($datos);
    mysqli_close($conexion);
?>