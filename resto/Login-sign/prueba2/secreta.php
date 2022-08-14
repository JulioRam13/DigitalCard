<?php
# Si no entiendes el código, primero mira a login.php

# Iniciar sesión para usar $_SESSION
session_start();

# Y ahora leer si NO hay algo llamado correo en la sesión,
# usando empty (vacío, ¿está vacío?)
# Recomiendo: https://parzibyte.me/blog/2018/08/09/isset-vs-empty-en-php/
if (empty($_SESSION["correo"])) {
    # Lo redireccionamos al formulario de inicio de sesión
    header("Location: login.html");
    # Y salimos del script
    exit();
}

# No hace falta un else, pues si el usuario no se loguea, todo lo de abajo no se ejecuta

?>
<html>
<head>
  <link rel="stylesheet" href="assets/css/style.css">

<meta charset="utf-8">
<title>Perfil</title>
<style type="text/css">
a:link {
    color: #000000;
    text-decoration: none;
}
a:visited {
    text-decoration: none;
    color: #000000;
}
a:hover {
    text-decoration: none;
}
a:active {
    text-decoration: none;
}
.gallery-container {
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    width: auto;
    color: #35373a;
    min-height: 50vh;
    border-radius: 20px;
    box-shadow: 0 8px 5px rgba(0, 0, 0, 0.06);
}
      .container{
        background: url("gris.jpg");
 width: 50%;
}
input[type="button"] {
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
input[type="button"]:hover {
  background-color: #00b8eb;
}
body{
background-position: center;
background-repeat: no-repeat;  
background-size: cover;
}
.texto{
  color: #fff;
}

            button {
          padding: 10px;
          color: #fff;
          background: #fff;
          width: 100px;
          margin: 20px auto;
          margin-top: 0;
          border: 0;
          border-radius: 3px;
          cursor: pointer;
        }
        button:hover {
          background-color: #E81212;
        }
        .Centro{
            vertical-align: middle;
        }
</style>
</head>

<body background="fondo.jpg">
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <div class="gallery-container">
    <p><table width="1200" border-left="1" border-left-color="black" align="center" cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
      <td colspan="5" bgcolor="#2b2b2b" align="center"><img src="logo.jpeg" align="center" width="15%" /></td>
    </tr>
    <tr>
      <td bgcolor="#000000" colspan="5"><font color="#fff" align="center" class="Centro"><h3>BIENVENIDO</h3></font></td>
       </tr>
    <tr>
      <td height="108" bgcolor="#fff"><a href="Encargos.php"><button><h3>Encargos</h3></a></td>
      <td colspan="4" rowspan="3"><embed src="prob.png" width="400" height="400"></embed></td>
    </tr>
    <tr bgcolor="#fff">
      <td height="80"><a href="Borrar.html"><button><h3>Cancelar Encargos</h3></a></td>
    </tr>
    <tr bgcolor="#fff">
      <td><!-- Por cierto, también se puede usar HTML como en todos los scripts de PHP-->

<!-- Y aprovechando, le indicamos al usuario un enlace para salir-->
<a href="logout.php"><button ><h3>Cerrar Sesión</h3></a></td>
    </tr>
  </tbody>
</table>
</p>

</div>
</body>

