<?php
include ("conectar.php");

$con = conectar();
$id = $_GET['eqp_id'];
$sql="DELETE FROM equipos WHERE eqp_id='$id'";
$query =mysqli_query($con,$sql); 

if($query){
    Header("Location: equipo.php");   
}

?>