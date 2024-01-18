<?php

error_reporting(0);

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create | Rand</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/index.css">
    <script>
      
        function limita(obj,elEvento, maxi)
{
  var elem = obj;
  var evento = elEvento || window.event;
  var cod = evento.charCode || evento.keyCode;
    // 37 izquierda
	// 38 arriba
	// 39 derecha
	// 40 abajo
	// 8  backspace
	// 46 suprimir
  if(cod == 37 || cod == 38 || cod == 39
  || cod == 40 || cod == 8 || cod == 46)
  {
	return true;
  }
  if(elem.value.length < maxi )
  {
    return true;
  }
  return false;
}
function cuenta(obj,evento,maxi,div)
{
	var elem = obj.value;
	var info = document.getElementById(div);
	info.innerHTML = maxi-elem.length;
}
    </script>
    
</head>
<body>
<div class="container">
<form class="form-horizontal" action="modulos/post.php" method="post" runat="server" enctype="multipart/form-data">
    <div class="left">
        <div class="content">
            <div class="info">
            <img id="imagenPrevisualizacion" alt="Portada">
            
                <div>
                  <br>
                  <div>
                <label for="seleccionArchivos" class="fileLabel" style="color: aquamarine;"><b>¡Click aquí para seleccionar la portada!</b></label>
                  </div>
                <input type="file" id="seleccionArchivos" accept="image/*" name="seleccionArchivos" style="display: none;">
                
                <input type="text" placeholder="Creador" name="autor" id="autor">
                <br>
                <span>Dejalo vacío para que sea anonimo</span>
                  
                   
                </div>
        </div>
        <div class="desc">
            <h2>Descripción:</h2>
            
            <textarea id="texto"
    name="texto" placeholder="Describe tu historia :)"  onkeypress=" return limita(this, event,800)"
    onkeyup="cuenta(this, event,800,'contador')" ></textarea>
    <span id="contador" class="contador"></span>
    
            </div>
        </div>
        <div class="buttons" autofocus>
        <input type="submit" value="Publicar ;3" style="margin-bottom:  2vh; max-height: 5vh;" name="publicar">
        
    </div>
     </div>
    <div class="main">
    <div class="content2">
            <input type="text" name="nombre" id="nombre" placeholder="Titulo de tu obra ;D">
            <br>
            <label for="historia" id="lbael" style="margin-left:2vh;"><title><h3>Aqui abajo va tu historia ;)</h3></title></label>
            <textarea maxlength="2800" id="historia" name="historia" placeholder="Aquí " required></textarea>
    <span id="contador1" class="contador"></span>
    
        </div>
        
    </div>
    <div class="right">
        
    </div>
    <script src="js/image.js"></script>
    </form>
</div>
</body>
</html>