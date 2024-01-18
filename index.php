<?php 

    include("modulos/conexion.php");
    error_reporting(0);
    
    
    $count = mysqli_query($mysqli, "SELECT ID FROM historias");
    $count = mysqli_num_rows($count);
    $count = rand(1, $count);
    //$count = array_rand($count);

    $historia = $_GET['id'];
    

    

    if ($historia == "" OR NULL) {
        $count = rand(1, $count);
       
?>
       <script>window.location = "?tema=<?php echo $_GET['tema'] ?>&id=<?php echo $count; ?>"; </script>
       <?php  
    } 
    
    

    include("modulos/historias.php");

    if ($GLOBALS['historia'] == "" OR NULL) {
        $count = rand(1, $count);
       
?>
       <script>window.location = "?tema=<?php echo $_GET['tema'] ?>&id=<?php echo $count; ?>"; </script>
       <?php  
    } 

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="apple-touch-icon" sizes="57x57" href="/public/icon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/public/icon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/public/icon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/public/icon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/public/icon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/public/icon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/public/icon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/public/icon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/public/icon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/public/icon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/public/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/public/icon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/public/icon/favicon-16x16.png">
    <link rel="manifest" href="/public/icon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/public/icon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $GLOBALS['nombre'] ?> | Rand</title>
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body style="background-image: url('public/temas/<?php echo $_GET['tema']; ?>/background.jpg');">
    <header style="min-width: 100%;" >
    <div style="display: flex; flex-direction: row; align-items: center; background-color: white;">
    
    <h1><b>Rand</b></h1>
    <form style=" display:flex; min-width: 15vh;" method="get">
    <label for="tema" style="margin-left: 4vh;"><b>Temas:</b></label>
    <select name="tema" id="tema" style="margin-left: 2vh; max-height: 3vh; ">
        <option value="1">Por defecto</option>
        <option value="san-valentin">San Valentín</option>
    </select>
    <input type="submit" value="Aceptar">
    <form>
    </div>
    </header>
<div class="container">
    <div class="left" style="background-image: url('public/temas/<?php echo $_GET['tema']; ?>/box-4.jpg'); border: 1px solid transparent; border-image: url('public/temas/<?php echo $_GET['tema']; ?>/box-2.jpg');">
        <div class="content">
            <div class="info">
            <img src="modulos/public/cover/<?php echo $GLOBALS['portada'] ?>" alt="Portada" srcset="">
                <div>
                    <h3><?php echo $GLOBALS['creador'] ?></h4>
                    <b>Me gusta(s): <?php echo $GLOBALS['likes']; ?></b>
                    <br>
                    <br>
                    <b>Fecha: <?php echo $GLOBALS['fecha'] ?></b>
                </div>
        </div>
        <div class="desc" style="background-image: url('public/temas/<?php echo $_GET['tema']; ?>/box-3.jpg');">
            <h2>Descripción:</h2>
            <p><?php echo $GLOBALS['descripcion'] ?></p>
        </div>
        <div class="buttons">
            <a href="?tema=<?php echo $_GET['tema'] ?>&id=<?php echo $count; ?>"><div class="button" ><b>Buscar Historia</b></div></a>
            <div class="button"><b>Guardar Historia</b></div>
            <a href="post.php"><div class="button"><b>Crear Historia</b></div></a>
            <a href="modulos/likes.php?id=<?php echo $_GET['id']; ?>"><div class="button"><b>Me gusta</b></div></a>
        </div>
    </div>
     </div>

    <div class="main" style="background-image: url('public/temas/<?php echo $_GET['tema']; ?>/box-4.jpg')">
    <div class="content2">
            <h1><?php echo $GLOBALS['nombre']; ?></h1>
            <p class="hist"><?php echo $GLOBALS['historia']; ?></p>
        </div>
        
    </div>
    <div class="right">
        
    </div>

</div>
<footer>Created by: <a href="https://www.facebook.com/profile.php?id=100095137315234"><b>MrFarenhate</b></a></footer>
</body>
</html>