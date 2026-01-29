<?php 
include 'database.php';

$id = $_POST ['taskID'];

$query = "SELECT * fROM tarea WHERE id = $id";
$resultado = mysqli_query($connection, $query);
if (!$resultado){
    die ('Query Failed'. mysqli_error($connection));
}

$json = array();
while ($row = mysqli_fetch_array($resultado)){
    $json[] = array(
        'name' => $row['name'],
        'description' => $row['description'],
        'id' => $row['id']
    );   
};

$jsonstring = json_encode($json[0]);

echo $jsonstring;
?>