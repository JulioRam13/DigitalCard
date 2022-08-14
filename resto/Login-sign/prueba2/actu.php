<?php
$servername = "localhost";
$username = "JackRam";
$password = "123";
$dbname = "usuarios_login";

// Create connection
$link = new mysqli($servername, $username, $password, $dbname);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Attempt update query execution
$id=$link->real_escape_string($_POST['id']);
$nam=$link->real_escape_string($_POST['namp']);
$nomem=$link->real_escape_string($_POST['nomem']);
$caract=$link->real_escape_string($_POST['car']);
$fecha=$link->real_escape_string($_POST['fe']);
$tipo=$link->real_escape_string($_POST['Tipo']);
$sql = "UPDATE encargos SET nomPr='$nam', nomEmpr='$nomem', caract='$caract'  ,reg_date='$fecha',tipo='$tipo'  WHERE id=$id";

if(mysqli_query($link, $sql)){
    echo " <link rel='stylesheet' href='assets/css/style.css'>
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
        button {
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
        button:hover {
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
<br>
<br>
<br>
<div class='gallery-container'>
<h1> Actualización realizada </h1>
<button><a href='Encargos.php'>Volver a la pagina anterior</a>
</body>
        ";

} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>