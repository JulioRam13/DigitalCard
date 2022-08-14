<?php
$servername = "localhost";
$username = "JackRam";
$password = "123";
$dbname = "usuarios_login";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
// Don't forget to properly escape your values before you send them to DB
// to prevent SQL injection attacks.
$id=$conn->real_escape_string($_POST['id']);

$query = "DELETE FROM encargos WHERE id =$id";

if ($conn->query($query) === TRUE) {
    echo "
      <link rel='stylesheet' href='assets/css/style.css'>
      <style type='text/css'>
  
          .gallery-container {
              background: url('Sin título-7.png');
              background-size: cover;
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
          a:link {
      color: #fff;
      text-decoration: none;
  }
  a:visited {
      text-decoration: none;
      color: #fff;
  }
  a:hover {
      text-decoration: none;
  }
  a:active {
      text-decoration: none;
  }
          input[type='email']{
    outline: none;
    padding: 20px;
    display: block;
    width: 300px;
    border-radius: 3px;
    border: 1px solid #eee;
    margin: 20px auto;
  }
  body{
    background-size: cover;
  }
          </style>    
          <link rel='stylesheet' href='assets/css/style.css'>
      <body background='fondo.jpg'>
        
          <br>
          <br>
          <br>  <br>
          <br>
          <br>  <br>
          <br>
         
        
          <div class='gallery-container'>
          <h1>Borrar encargos</h1>
  <form action = 'borra.php' method = 'post'>
    id de proyecto a borrar:<input type='text' name='id'/><br/>
     
      <input type ='submit'/><br>
      <a href='Encargos.php'> <input type='button' value='Volver a la pagina principal'></a>
  </form>
  </div>
  </body>
  ";
  } else {
    echo "Error insertando datos: " . $conn->error;
  }
$conn->close();

?>