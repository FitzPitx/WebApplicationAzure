<?php
    include 'Model/conexion.php';
    $sentencia = $db->query("SELECT * FROM Alumno;");
    $alumnos = $sentencia->fetchAll(PDO::FETCH_OBJ);
    //print_r($alumnos);
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de alumnos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: 20px;
        }
        table {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h3 class="mb-4">Notas de alumnos</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Apellido paterno</th>
                    <th>Apellido materno</th>
                    <th>Nombre</th>
                    <th>Parcial</th>
                    <th>Final</th>
                    <th>Promedio</th>
                    <th>Modificar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($alumnos as $dato): ?>
                    <tr>
                        <td><?php echo $dato->id_alumno; ?></td>
                        <td><?php echo $dato->ap_paterno; ?></td>
                        <td><?php echo $dato->ap_materno; ?></td>
                        <td><?php echo $dato->nombre; ?></td>
                        <td><?php echo $dato->ex_parcial; ?></td>
                        <td><?php echo $dato->ex_final; ?></td>
                        <td><?php echo ($dato->ex_final + $dato->ex_parcial) / 2 ?></td>
                        <td><a href="editar.php?id=<?php echo $dato->id_alumno; ?>" class="btn btn-primary">Modificar</a></td>
                        <td><a href="eliminar.php?id=<?php echo $dato->id_alumno; ?>" class="btn btn-danger">Eliminar</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        
        <hr class="my-4">
        
        <h3>Ingresar alumnos:</h3>
        <form action="insertar.php" method="POST">
            <div class="form-group">
                <label>Apellido paterno:</label>
                <input type="text" name="txtPaterno" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Apellido materno:</label>
                <input type="text" name="txtMaterno" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Nombre:</label>
                <input type="text" name="txtNombre" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Nota parcial:</label>
                <input type="text" name="txtParcial" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Nota final:</label>
                <input type="text" name="txtFinal" class="form-control" required>
            </div>
            <input type="hidden" name="oculto" value="1">
            <button type="reset" class="btn btn-secondary">Reestablecer</button>
            <button type="submit" class="btn btn-primary">Ingresar Alumno</button>
        </form>
    </div>
</body>
</html>
