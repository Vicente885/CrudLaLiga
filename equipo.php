<?php 
    include ("conectar.php");

    $con = conectar();

    $consulta = "SELECT * FROM equipos";
    $query = mysqli_query($con,$consulta);
    $row = mysqli_fetch_row($query);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
   
    <title>pagina de equipo</title>
    
</head>

<body>
    
    
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <h1 >Ingresa datos del equipo</h1>
                <form action="insertar.php" method="POST">
                    <input type="text" class="form-control mb-3" name="eqp_id" placeholder="id equipo">
                    <input type="text" class="form-control mb-4" name="eqp_nombre" placeholder="Nombre equipo">
                    <input type="text" class="form-control mb-3" name="eqp_estadio" placeholder="Estadio equipo">
                    <input type="text" class="form-control mb-3" name="eqp_jugados" placeholder="jugados">
                    <input type="text" class="form-control mb-3" name="eqp_puntos" placeholder="puntos">
                    <input type="text" class="form-control mb-3" name="eqp_golesfavor" placeholder="golesfavor">
                    <input type="text" class="form-control mb-3" name="eqp_golescontra" placeholder="golescontra">
                    <input type="submit" value="aceptar" class="btn btn-primary"> 
                </form>
            </div>
            <div class="col-md-5">
                <h1 >TABLA DE EQUIPOS</h1>
                <table class="table">
                    <thead class="table-success table-striped">
                        <tr>
                            <th>id</th>
                            <th>Nombre</th>
                            <th>Estadio</th>
                            <th></th> <!-- estos dos lo ponemos para que la tabla coja los botones -->
                            <th></th>
                        </tr>
                    <tbody>
                        <?php 
                                    while($row=mysqli_fetch_array($query)){
                                        ?>
                                    <tr>
                                        <th><?php  echo $row['eqp_id'] ?></th>
                                        <th><?php  echo $row['eqp_nombre'] ?></th>
                                        <th><?php  echo $row['eqp_estadio'] ?></th>
                                        <th><a href="actualizar.php?eqp_id=<?php echo $row['eqp_id'] ?>" class="btn btn-info">Editar</a></th>
                                        <th><a href="delete.php?eqp_id=<?php echo $row['eqp_id'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                    </tr>

                        <?php      
                                    }
                                ?>

                    </tbody>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</body>

</html>