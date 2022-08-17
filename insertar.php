<?php 

include ("conectar.php");

$con = conectar();

$idEquipo = $_POST['eqp_id'];
$NombreEquipo = $_POST['eqp_nombre'];
$estadio= $_POST['eqp_estadio'];
$jugados=$_POST['eqp_jugados'];
$puntos=$_POST['eqp_puntos'];
$golesfavor=$_POST['eqp_golesfavor'];
$golescontra=$_POST['eqp_golescontra'];
$sql="INSERT INTO equipos VALUES('$idEquipo','$NombreEquipo','$estadio','$jugados','$puntos','$golesfavor','$golescontra')";
$query=mysqli_query($con,$sql);

if($query){
    Header("Location: equipo.php");   //ojo que al meter el id, si metemos un numero que ya esta,al ser primari key dara error de duplicado
}




?>