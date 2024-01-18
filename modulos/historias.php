<?php 

    include 'conexion.php';

    $query= mysqli_query($mysqli, "SELECT * FROM historias WHERE ID=$_GET[id]");
    $likes= mysqli_query($mysqli, "SELECT * FROM likes WHERE para=$_GET[id]");

    $queryInfo = mysqli_fetch_array($query);

    $GLOBALS['creador'] = $queryInfo['creador'];
    $GLOBALS['nombre'] = $queryInfo['nombre'];
    $GLOBALS['descripcion'] = $queryInfo['descripcion'];
    $GLOBALS['historia'] = $queryInfo['historia'];
    $GLOBALS['portada'] = $queryInfo['portada'];
    $GLOBALS['fecha'] = $queryInfo['fecha'];
    $GLOBALS['likes'] = mysqli_num_rows($likes);




?>

