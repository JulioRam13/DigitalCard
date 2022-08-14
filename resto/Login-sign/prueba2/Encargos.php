
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
    background: url("");
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
  <br>
  <br>
  
  <div class="gallery-container">
    <p>
      <br><br><br><br><table width="1200" border="0" align="center" cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
      <td colspan="5" bgcolor="#2b2b2b" align="center"><img src="logo.jpeg" align="center" width="15%" /></td>
    </tr>
    <tr>
      <td bgcolor="#000000" colspan="5"><font color="#fff" align="center" class="Centro"><h3>BIENVENIDO</h3></font></td>
       </tr>
    <tr>
      <td height="108" bgcolor="#fff"><a href="secreta.php"><button><h3> Estos son los encargos registrados</h3></a></td>
      <td colspan="4" rowspan="4" bgcolor="#fff" align="left">
        <table align="left">
          <tr>
            <td>
        <?php
$servername = "localhost";
$username = "JackRam";
$password = "123";
$dbname = "usuarios_login";

// Create connection
$mysqli = mysqli_connect($servername, $username, $password, $dbname);
$query = "SELECT * FROM encargos";
echo '<table border="1" cellspacing="1" cellpadding="1"> 
<tr>
            <td> <font face="Arial">id</font> </td>
            <td> <font face="Arial">nombreEncargo</font> </td>
            <td> <font face="Arial">nombreEmpresa</font> </td>
            <td> <font face="Arial">Caracteristicas</font> </td>
            <td> <font face="Arial">Fecha</font> </td>
            <td><font face="Arial">Tipo</font></td>
</tr>';
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) { 
        $id = $row["id"]; 
        $nomPr = $row["nomPr"]; 
        $nomEmpr = $row["nomEmpr"]; 
        $caract = $row["caract"]; 
        $reg_date = $row["reg_date"];
        $tipo=$row["tipo"];
echo '<tr> <td>'.$id.'</td>
          <td>'.$nomPr.'</td>
          <td>'.$nomEmpr.'</td>
          <td>'.$caract.'</td>
          <td>'.$reg_date.'</td>
          <td>'.$tipo.'</td>
          </tr>';
          '</table>';
    }
      $result->free();
}
?>
</td>
</tr>
<tr>
  <td><a href="Actualiza.html"><button>¿Quieres cambiar algo de tus pedidos ? da click aqui</a></td>
</tr>
</table>
</td>
    </tr>
    
    <tr bgcolor="#fff">
      <td height="80"><a href="Borrar.html"><button><h3>Cancelar Encargos</h3></a></td>

      <td><!-- Por cierto, también se puede usar HTML como en todos los scripts de PHP-->

<!-- Y aprovechando, le indicamos al usuario un enlace para salir-->
<a href="logout.php"><button ><h3>Cerrar Sesión</h3></a></td>
    </tr>
  </tbody>
</table>
</p>

</div>
<br>
<bR>
</body>

