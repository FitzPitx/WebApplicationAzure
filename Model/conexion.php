<?php
 $contrasena = '';
 $usuario = 'root';
 $dbname = 'nota';

 try {
    $db = new PDO(
        'mysql:host=localhost;
        dbname='.$dbname,
        $usuario,
        $contrasena
    );
 } catch (\Throwable $th) {
    echo "Error de conexión".$th->getMessage();
 }


?>