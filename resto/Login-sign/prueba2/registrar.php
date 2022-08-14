<?php
# Nota: no estamos haciendo validaciones
$correo = $_POST["correo"];
$palabra_secreta = $_POST["palabra_secreta"];
$palabra_secreta_confirmar = $_POST["palabra_secreta_confirmar"];

# Si no coinciden ambas contraseñas, lo indicamos y salimos
if ($palabra_secreta !== $palabra_secreta_confirmar) {
    echo "Las contraseñas no coinciden, intente de nuevo";
    exit;
}

# Incluimos las funciones, mira funciones.php para una mejor idea
include_once "funciones.php";

# Primero debemos saber si existe o no
$existe = usuarioExiste($correo);
if ($existe) {
    echo "Lo siento, ya existe alguien registrado con ese correo";
    exit; # Salir para no ejecutar el siguiente código
}

# Si no existe, se ejecuta esta parte
# Ahora intentamos registrarlo
$registradoCorrectamente = registrarUsuario($correo, $palabra_secreta);
if ($registradoCorrectamente) {
    echo " 
    <html>
    <head>
    <style type='text/css'>
    .gallery-container {
        background: url('Sin titulo-6.png');
        color: #35373a;
        min-height: 50vh;
        border-radius: 20px;
        box-shadow: 0 8px 5px rgba(0, 0, 0, 0.06);
    }
          .container{
            background: url('gris.jpg');
     width: 50%;
    }
    input[type='button'] {
      padding: 10px;
      color: #fff;
      background: #0098cb;
      width: 320px;
      margin: 20px auto;
      margin-top: 0;
      border: 0;
      border-radius: 3px;
      cursor: pointer;
    }
    input[type='button']:hover {
      background-color: #00b8eb;
    }
    </style>    
    <link rel='stylesheet' href='assets/css/style.css'>
    </head>
   <body background='fondo.jpg' align='center'>
   <br><br><br>
   <br><br>
   <div class='gallery-container'>
   <h1 style='color:white;'>Creación </h1>
   <form>
    <p style='color:white;'>Registrado correctamente. Ahora puedes</p>
   <a href='login.html'> <input type='button' value='Iniciar sesión'>
    </a></form>
    </div>
    </body>
    </html>
    ";

} else {
    echo "Error al registrarte. Intenta más tarde";
}
?>