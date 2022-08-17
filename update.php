<?php

include("conectar.php");
$con=conectar();

$equipoID=$_POST['eqp_id'];
$equipoNombre=$_POST['eqp_nombre'];
$eqpEstadio=$_POST['eqp_estadio'];


$sql="UPDATE equipos SET  eqp_nombre='$equipoNombre',eqp_estadio='$eqpEstadio' WHERE eqp_id='$equipoID'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: equipo.php");
    }
?>