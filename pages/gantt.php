<?php require_once '../functions/conexion.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Reportes</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark static-top" >
            <div class="container justify-content-center"  id="nav">
              <a class="navbar-brand" href="#">
                <img src="../img/PepsiCo-Logo.png" alt="PEPSICO" height="100">
              </a>         
            </div>
          </nav>

          <ul class="nav justify-content-center">
          <li class="nav-item">
            <a class="nav-link" href="../index.php">Inicio</a>
          </li>
            <li class="nav-item">
              <a class="nav-link" href="./falla.php">Reportar Falla</a>
            </li>            
          </ul>
    </header>
    <section class="text-center">
        <table class="table table-striped">
            <tr>
                <td><b>Planta</b></td>
                <td><b>Turno</b></td>
                <td><b>Linea</b></td>
                <td><b>Equipo</b></td>
                <td><b>Incidencia</b></td>
                <td><b>Estatus</b></td>
                <td><b>Asignar tarea
                      (ingresar gpid)
                </b></td>
            </tr>
            <?php
              $sql = "SELECT * from fallas";
              $result = mysqli_query($conn,$sql);

              foreach ($result as $row) :

            ?>
            <tr>
                <td><?php echo $row['planta'] ?></td>
                <td><?php echo $row['turno'] ?></td>
                <td><?php echo $row['linea'] ?></td>
                <td><?php echo $row['equipo'] ?></td>
                <td><?php echo $row['descripcion'] ?></td>

               <?php if ($row['status'] == 1){ //variable de estatus
                echo '<td class="table-danger">Pendiente</td>';
               }elseif ($row['status'] == 2) {
                echo '<td class="table-warning">En proceso</td>';
               }elseif ($row['status'] == 3){
                echo '<td class="table-success">Finalizado</td>';
               }else{
                echo '<td>Sin información</td>';
               }?>

               <td><form action="../functions/update2.php" method="post" class="justify-content-center">
                <input type="hidden" id="id" name="id" value="<?php echo $row['id'] ?>">           
                <input type="text" id="gpid" name="gpid" class="form-control form-control-sm">
               </form></td>

               <td>
                <form action="../functions/update3.php" method="post" class="justify-content-center">
                <input type="hidden" id="id" name="id" value="<?php echo $row['id'] ?>">
                <input type="submit" class='btn btn-danger' value='Completar'>
                </form>
               </td>
                              
            </tr>      
            <?php
              endforeach;
            ?>      
        </table>
      </section>
    
</body>
</html>