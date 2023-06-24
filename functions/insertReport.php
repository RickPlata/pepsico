<?php require_once './conexion.php'; ?>

<?php
$planta = $_POST['planta'];
$turno = $_POST['turno'];
$linea = $_POST['linea'];
$equipo = $_POST['equipo'];
$falla = $_POST['falla'];

$sql = "INSERT INTO fallas VALUES (NULL, 'TEST', '$falla', '1', '$planta', '$turno', '$linea', '$equipo')";

$result = mysqli_query($conn, $sql);

if ($result) {
    echo 'Datos insertados correctamente';
} else {
    echo 'Error al insertar datos: ' . mysqli_error($conn);
}
?>

<script>
    alert("El reporte se ha guardado con éxito");
    window.location.href = "../pages/gantt.php";
</script>