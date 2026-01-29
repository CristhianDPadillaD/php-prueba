<?php 
    include 'database.php';

    $search = $_POST['searchText'];

    if (!empty($search)){
        $query = "SELECT * FROM tarea WHERE name LIKE '$search%'";
        $resultado = mysqli_query ($connection, $query);
        if (!$resultado){
            die('Query Error'.mysqli_error($connection));
        }

        $json = array();
        while ($row = mysqli_fetch_array($resultado)){

        $json[]= array(
            'name'=> $row['name'],
            'description'=> $row['description'],
            'id'=> $row['id']
        );

        }
        $jsonstring = json_encode($json);
        echo $jsonstring;

    }

?>