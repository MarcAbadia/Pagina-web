<?php

//parametros de conexion

$servername="localhost";
$username="marc";
$password="marc";
$dbname="base";

//crear conexion
$conn=new mysqli($servername,$username,$password,$dbname);
//verificar conexion

if($conn->connect_error){
    //fue mal la conexion
    die("fallo la conexion". $conn->connect_error);
}

// echo "conexion exitosa";

?>