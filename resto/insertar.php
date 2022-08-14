<?php
$servername = "localhost";
$username = "JulioRam";
$password = "Julio_2003";
$dbname = "usuarios_login";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
// Don't forget to properly escape your values before you send them to DB
// to prevent SQL injection attacks.
$nomPr = $conn->real_escape_string($_POST['nomPr']);
$nomEmpr = $conn->real_escape_string($_POST['nomEmpr']);
$caract= $conn->real_escape_string($_POST['caract']);
$reg_date= $conn->real_escape_string($_POST['reg_date']);
$tipo = $conn->real_escape_string($_POST['tipo']);

$query = "INSERT INTO encargos (nomPr, nomEmpr, caract, reg_date, tipo) VALUES ('{$nomPr}','{$nomEmpr}','{$caract}','{$reg_date}','{$tipo}')";

if ($conn->query($query) === TRUE) {
    echo "    <html>
    <head>
    <style type='text/css'>
    .gallery-container {
        background: url('Sin título-7.png');
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
   <h1>Exito </h1>
   <form>
    Encargo hecho de forma exitosa <br><br><br><br>
   <a href='encardoDD.html'> <input type='button' value='Hacer otro encargo'><br>
    </a>
    <a href='index.html'> <input type='button' value='Volver a la pagina principal'>
    </a>
    </form>
    </div>
    </body>
    </html>";
  } else {
    echo "Error insertando datos: " . $conn->error;
  }
$conn->close();