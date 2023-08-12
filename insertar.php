<?php
//Si no se envia una variable "oculto" entonces salte
    if(!isset($_POST['oculto'])){
        exit();
    }

    include 'Model/conexion.php';

    $paterno = $_POST['txtPaterno'];
    $materno = $_POST['txtMaterno'];
    $nombre = $_POST['txtNombre'];
    $parcial = $_POST['txtParcial'];
    $final = $_POST['txtFinal'];

    //Sentencia para el envio de datos hacial la base de datos
    //prepare sirve para evitar el injectSql
    $sentencia = $db->prepare("INSERT INTO alumno (ap_paterno, ap_materno, nombre, ex_parcial, ex_final)
         VALUES (?,?,?,?,?);");
    $resultado = $sentencia->execute([$paterno, $materno, $nombre, $parcial, $final]);

    if ($resultado === true){
        //echo "Datos insertados correctamente";
        /**Esta sentencia me sirve para decirle al programa que cuando ingrese
        * correctamente un dato se ira al index
        */
        header('Location: index.php');
    }else{
        echo "Datos insertados incorrectamente";
    }
?>


