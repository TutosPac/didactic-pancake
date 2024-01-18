<?php 

    include 'conexion.php';

    $count = mysqli_query($mysqli, "SELECT ID FROM historias");

    $count = mysqli_num_rows($count);

    $count = $count+2;

    $autor = $_POST["autor"];
    $desc = $_POST['texto'];
    $nombre = $_POST['nombre'];
    $historia = $_POST['historia'];
    $fecha = date('d-m-Y || H:i');

   
    $file_name = $count.".jpg";
    $file_tmp = $_FILES['seleccionArchivos']['tmp_name'];
    $route = "public/cover/".$file_name;



    if ($_POST['publicar']) {

       

        move_uploaded_file($file_tmp, $route);


        if($autor == "" OR NULL) {
            $query = mysqli_query($mysqli, "INSERT INTO historias (creador, nombre, descripcion, historia, portada, fecha) 
        VALUES ('Anonimo', '$nombre', '$desc', '$historia', '$file_name', '$fecha' )");
       

        } elseif($file_tmp == "" OR NULL) {

            $query = mysqli_query($mysqli, "INSERT INTO historias (creador, nombre, descripcion, historia, portada, fecha) 
        VALUES ('$autor', '$nombre', '$desc', '$historia', 'pack.jpg', '$fecha' )");


        } elseif($nombre == "" OR NULL) {

            $query = mysqli_query($mysqli, "INSERT INTO historias (creador, nombre, descripcion, historia, portada, fecha) 
        VALUES ('$autor', 'Sin titulo', '$desc', '$historia', '$file_name', '$fecha' )");

        } else {
            $query = mysqli_query($mysqli, "INSERT INTO historias (creador, nombre, descripcion, historia, portada, fecha) 
        VALUES ('$autor', '$nombre', '$desc', '$historia', '$file_name', '$fecha' )");

        }

        $hist = mysqli_query($mysqli, "SELECT * FROM historias WHERE historia='$historia'");
        $hist = mysqli_fetch_array($hist);
        $hist = $hist['ID'];
        
        echo '<script>alert("Tu historia ha sido publicada ;3 "); 
                window.location = "../?id='.$hist.'"</script>';

    }  else {
        echo 'NO se ha publicado tu historia xd';
    }

?>