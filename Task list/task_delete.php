<?php
include 'database.php';

if (isset($_POST['taskId'])) {
    $id = $_POST['taskId'];
    $query = "DELETE FROM tarea WHERE id = $id";
    $resultado = mysqli_query($connection, $query);
    if (!$resultado) {
        die('Query Failed' . mysqli_error($connection));
    }
    echo "Task Deleted Successfully";
}
?>