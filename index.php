<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Old+Standard+TT:ital@1&display=swap" rel="stylesheet">
    <title>Peliculas</title>
</head>
<body>
    <div class="nav">
        <a href="index.php">Inicio</a>
        <a href="formulario.php">Agregar</a>
    </div>
    <h1>Catalogo de peliculas</h1>
    <p>Aqui podras revisar las peliculas de moda, si no esta la tuya puedes agregarla dandole a Agregar</p>

    <center>
        <table BORDER>
            <tr>
                <th>Nombre de la pelicula</th>
                <th>Duracion</th>
                <th>Genero</th>
            </tr>
            <?php
                include('conexion.php');

                $sql = "SELECT * FROM peliculas";
                $stmt = $conn->prepare($sql);
                $stmt->execute();

                $stmt->setFetchMode(PDO::FETCH_ASSOC);

                foreach ($stmt->fetchAll() as $row) {
                    echo "<tr><td>". $row['nombre'] . "</td>";
                    echo "<td>". $row['duracion'] . "</td>";
                    echo "<td>". $row['genero'] . "</td></tr>";

                }
            ?>
        </table>
    </center>
</body>
</html>