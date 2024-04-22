<?php

$servername = "localhost"; 
$username = 'root'; 
$password = '12345'; 
$dbname = "tecnolab"; 

// Conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);
if(isset($conn)){
    
}else{
    echo "conexion fallida";
}


?>