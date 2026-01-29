<?php
 include 'database.php';

 $id = $_POST['id'];
 $name = $_POST['name'];
 $description = $_POST['description'];



   $query = "update tarea set name = '$name', description = '$description' where id = '$id'";
   $resultado = mysqli_query($connection, $query);
   if (!$resultado){
    die('Query Failed'. mysqli_error($connection));
   }
   echo "Task Updated Successfully";


?>