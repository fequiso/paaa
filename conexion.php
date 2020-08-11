<?php 
    $hn = 'localhost';
    $un = 'root';
    $pw = '';
    $db = 'factura';
    
    $conexion = new mysqli($hn, $un, $pw, $db);
    if ($conexion->connect_error) die ("Fatal error");
?>
