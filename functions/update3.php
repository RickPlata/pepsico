<?php require_once './conexion.php'; ?>

<?php
$id = $_POST['id'];

$sql = "UPDATE  fallas SET status = 3 WHERE id = '$id'";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo 'Tarea asignada correctamente';
} else {
    echo 'Error al insertar datos: ' . mysqli_error($conn);
}
?>

<script>
    alert("Tarea finalizada");
    window.location.href = "../pages/gantt.php";
</script>
?>