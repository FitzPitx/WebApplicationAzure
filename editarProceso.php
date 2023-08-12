<?php
    //print_r($_POST);
    if (!isset($_POST['oculto'])){
        header('Location: index.php');
    }

    include 'Model/conexion.php';

    $id = $_POST['id'];
    $paterno = $_POST['txtPaterno'];
    $materno = $_POST['txtMaterno'];
    $nombre = $_POST['txtNombre'];
    $parcial = $_POST['txtParcial'];
    $final = $_POST['txtFinal'];  

    $sentencia = $db->prepare("UPDATE alumno SET ap_paterno = ?, ap_materno = ?, nombre = ?, ex_parcial = ?, ex_final = ? WHERE id_alumno = ?;");

    $resultado = $sentencia->execute([$paterno,$materno,$nombre,$parcial,$final, $id]);

    if ($resultado === true){
        header('Location: index.php');
    }else{
        echo "Datos Modificados correctamente";
    }
    

?>