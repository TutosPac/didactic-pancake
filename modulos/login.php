<?php 

    include 'conexion.php';


    if (!isset($_POST['submit'])) {
        $user = $_POST['usuario'];
        $password = base64_encode($_POST['password']);



        $query = mysqli_query($mysqli, "SELECT * FROM usuarios WHERE username='$user' AND password='$password'");
         if (mysqli_num_rows($query) == 1) {
           session_start();
           $_SESSION['session'] == true;

           $infoUser = mysqli_fetch_array($query);

           $_SESSION['username'] = $user;
           $_SESSION['name'] = $infoUser['name'];
           $_SESSION['email'] = $infoUser['email'];
           $_SESSION['description'] = $infoUser['description'];
           $_SESSION['verify'] = $infoUser['verify'];
           $_SESSION['profilePic'] = $infoUser['profilePic'];
           echo '<script>
           alert("Se ha iniciado sesión correctamente :)");
           window.location = "../index.php";
       </script>';

   } else {
       echo '<script>
           alert("Usuario o contraseña incorrectos");
           window.location = "../index.php";
       </script>';
   }

    }

?>