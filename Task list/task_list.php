<?php
include 'database.php';

$query = "SELECT * FROM tarea";
$resultado = mysqli_query($connection, $query);
if (!$resultado) {
    die('Query Failed' . mysqli_error($connection));
}
$json = array();
while ($row = mysqli_fetch_array($resultado)) {
    $json[] = array(
        'id' => $row['id'],
        'name' => $row['name'],
        'description' => $row['description']

    );
}
$jsonstring = json_encode($json);
echo $jsonstring;
