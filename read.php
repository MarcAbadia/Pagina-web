<?php
    include 'db.php';
    include 'header.php';
    $sql = "SELECT id, nombre, telefono, correo, mensaje FROM contactos";
    $result = $conn->query($sql);

    echo "<pre>";
    var_dump($result);
    echo "<pre>";
?>



<?php
include 'footer.php';
?>