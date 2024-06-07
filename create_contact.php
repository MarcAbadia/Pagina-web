<?php
include 'db.php';


if($_SERVER['REQUEST_METHOD']=="POST"){
    echo "Creando contacto <BR>";
    $nombre=$_POST['nombre'];
    $telefono=$_POST['telefono'];
    $correo=$_POST['correo'];
    $mensaje=$_POST['mensaje'];

    echo "NOMBRE: ".$nombre."<br>";
    echo "TELEFONO: ".$telefono."<br>";
    echo "CORREO: ".$correo."<br>";
    echo "MENSAJE: ".$mensaje."<br>";
    $sql="INSERT INTO contactos (nombre,telefono,correo,mensaje) VALUES (?,?,?,?)";
    echo $sql. "<br>";
    $stmt =$conn->prepare($sql);
    $stmt->bind_param("ssss", $nombre, $telefono, $correo, $mensaje);
    $result =$stmt->execute();

    if($result){
        $stmt->close();
        $conn->close();
        header("Location: contacto.php?status=success&msg=¡Mensaje Guardado!");
        echo "Contacto creado";
    }else{
        echo "Error al crear el contacto";
    }
    
}else{
    header("Location: contacto.php?status=error&msg=¡Error al guardar el mensaje!");
    echo "ERROR EN EL FORMULARIO";
}

?>