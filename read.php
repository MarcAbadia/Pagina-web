<?php
    include 'db.php';
    include 'header.php';
    $sql = "SELECT id, nombre, telefono, correo, mensaje FROM contactos";
    $result = $conn->query($sql);


?>
<h1>Leer mensajes</h1>

<div class="leer">
<?php
    while($row = $result->fetch_assoc()){
        ?>
        <div class="info">
                <div class="id"><?=$row['id']?></div>
                <div class="nombre"><?=$row['nombre']?></div>
                <div class="telefono"><?=$row['telefono']?></div>
                <div class="correo"><?=$row['correo']?></div>
                <div class="mensaje"><?=$row['mensaje']?></div>
        </div>


        <?php
    }

?>
</div>


<?php
include 'footer.php';
?>