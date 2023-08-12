<?php

    if (!isset($_GET['id'])){
        header('Location: index.php');
    }
     include 'Model/conexion.php';

     $id = $_GET['id'];
     $sentencia = $db->prepare("SELECT * FROM alumno WHERE id_alumno = ?;");
     $resultado = $sentencia->execute([$id]);
     $alumno = $sentencia->fetch(PDO::FETCH_OBJ);
     //print_r($alumno);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Alumno</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: 50px;
        }
        form {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h3 class="mb-4">Editar alumno:</h3>
        <form action="editarProceso.php" method="POST">
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Apellido paterno:</label>
                <div class="col-sm-9">
                    <input type="text" name="txtPaterno" class="form-control" value="<?php echo $alumno->ap_paterno; ?>" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Apellido materno:</label>
                <div class="col-sm-9">
                    <input type="text" name="txtMaterno" class="form-control" value="<?php echo $alumno->ap_materno; ?>" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Nombre:</label>
                <div class="col-sm-9">
                    <input type="text" name="txtNombre" class="form-control" value="<?php echo $alumno->nombre; ?>" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Nota Parcial:</label>
                <div class="col-sm-9">
                    <input type="text" name="txtParcial" class="form-control" value="<?php echo $alumno->ex_parcial; ?>" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Nota Final:</label>
                <div class="col-sm-9">
                    <input type="text" name="txtFinal" class="form-control" value="<?php echo $alumno->ex_final; ?>" required>
                </div>
            </div>
            <input type="hidden" name="oculto">
            <input type="hidden" name="id" value="<?php echo $alumno->id_alumno; ?>">
            <button type="submit" class="btn btn-primary">Editar Alumno</button>
        </form>
    </div>
</body>
</html>
