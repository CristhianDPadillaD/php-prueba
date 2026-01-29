<?php
 include 'database.php';

 if(isset($_POST['name'])){
   $name = $_POST['name'];
   $description = $_POST['description'];
   $query = "INSERT INTO tarea(name, description) VALUES ('$name', '$description')";
   $resultado = mysqli_query($connection, $query);
   if (!$resultado){
    die('Query Failed'. mysqli_error($connection));
   }
   echo "Task Added Successfully";
 }

?>