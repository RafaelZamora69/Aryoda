<?php
$correo = 'azael.goku@hotmail.com';

$nombre = $_POST['nombre'];
$correo1 = $_POST['correo'];
$msj = $_POST['msj'];

$asunto ="Contacto";
$msjCompleto = $msj . "\nAtentamente: ". $nombre;
mail($correo, $msjCompleto, $asunto, $correo1);
echo "<script> M.toast({html: 'I am a toast!'})</script>";
echo "<script>setTimeout(\"location.href='index.html'\",100)</script>";