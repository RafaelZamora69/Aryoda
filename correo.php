<?php
$correo = 'azael.goku@hotmail.com';

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$msj = $_POST['msj'];

$asunto ="Contacto";
$msjCompleto = $msj . "\nAtentamente: ". $nombre;
mail($correo, $msjCompleto, $asunto);
echo "<script>alert ('correo enviado exitosamente')</script>";
echo "<script>setTimeout(\"location.href='contacto.html'\",1000)</script>";