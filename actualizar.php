<?php 
    include("conectar.php");
    $con=conectar();

$id=$_GET['eqp_id'];

$sql="SELECT * FROM equipos WHERE eqp_id='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <title>Actualizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>
    <div class="container mt-5">
        <form action="update.php" method="POST">

            <input readonly name="eqp_id" value="<?php echo $row['eqp_id']  ?>">
            
            <input type="text" class="form-control mb-3" name="eqp_nombre" placeholder="equipo"
                value="<?php echo $row['eqp_nombre']  ?>">
            <input type="text" class="form-control mb-3" name="eqp_estadio" placeholder="estadio"
                value="<?php echo $row['eqp_estadio']  ?>">
            

            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
        </form>

    </div>
</body>

</html>