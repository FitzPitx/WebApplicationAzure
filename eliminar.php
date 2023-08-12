<?php
    //print_r($_POST);
    if (!isset($_GET['id'])){
        header('Location: index.php');
    }

    include 'Model/conexion.php';

    $id = $_GET['id']; 
    $sentencia = $db->prepare("DELETE FROM alumno WHERE id_alumno = ?;");
    $resultado = $sentencia->execute([$id]);

    if ($resultado === true){
        header('Location: index.php');
    }else{
        echo "Datos eliminados correctamente";
    }
    

?>