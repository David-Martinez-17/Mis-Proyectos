<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva</title>
    <style type="text/css">

      body{
        background-image: url("https://th.bing.com/th/id/R.05fcf9bc4f03ec63641e26153c3782eb?rik=BpBS%2fUSIcjCSiQ&riu=http%3a%2f%2fsohanews.sohacdn.com%2fthumb_w%2f660%2f2016%2fphoto-2-1482137168243-0-0-403-650-crop-1482137228794.jpg&ehk=uJRTWakRQkvlIkbFQPgKN%2fK1Wni5rpHvSRp8pT%2f3fKI%3d&risl=&pid=ImgRaw&r=0");
      }
     
      table {
        border: solid 2px #7e7c7c;
        border-collapse: collapse;
                     
      }
     
      th, h1 {
        background-color: #edf797;
      }

      td,
      th {
        border: solid 1px #7e7c7c;
        padding: 2px;
        text-align: center;
      }

      .mensaje{
        border-radius: 5px;
        border: solid black;
        background-color: rgb(169, 169, 169);
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 20px;
        font-size: 40px;
        font-family: Georgia;
        }


    </style>
</head>
<body>
    
<div class="mensaje">

<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "droguería_2";

$conectar = mysqli_connect ($server, $user, $pass, $database);

if ($conectar->connect_error)
{
	die ("falla en conexion : ".$conectar->connect_error);
}

$reserva = $_POST["reserva"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$fecha = $_POST["fecha"];
$hora = $_POST["hora"];
$correo = $_POST["correo"];
$celular = $_POST["celular"];


$insertar = "INSERT INTO `reserva`(`id`, `reserva`, `nombre`, `apellido`, `fecha`, `hora`, `correo`, `celular`)
VALUES (NULL, '$reserva', '$nombre', '$apellido', '$fecha', '$hora', '$correo', '$celular')";

if ($conectar -> query ($insertar) == true )
{
	echo "señor@ $nombre $apellido su cita $reserva quedo programada para el dia $fecha a las $hora";
}
else
{
	die("error en grabación : ".$conectar->error);
}
?>
</div>
</body>
</html>