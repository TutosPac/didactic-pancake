<?php 

    include("conexion.php");

    $post = $_GET['id'];

    $query = mysqli_query($mysqli, "INSERT INTO likes (para) VALUES ('$post')");

    echo '<script>window.location = "../?id='.$post.'"</script>';

?>