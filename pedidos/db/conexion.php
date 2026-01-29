<?php 
    function conectarBD(){
    return mysqli_connect(
        'localhost',
        'root',
        '',
        'pedidos'
    );
    }

?>