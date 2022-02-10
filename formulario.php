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
    <title>Agregar</title>
</head>
<body>
    
    <div class="nav">
        <a href="index.php">Inicio</a>
        <a href="formulario.php">Formulario</a>
    </div>
    <h1>Agrega otra pelicula</h1>

    <form action="store.php" method="post">
        <label>
            Nombre :  
            <input type="text" required name="nombre">
        </label><br><br>
        <label>
            Duracion(minutos) : 
            <input type="number" required name="duracion">
        </label><br><br>
        <label>
            Genero :
            <select name="genero">
                <option value="accion">Acción</option>
                <option value="aventuras">Aventuras</option>
                <option value="ciencia ficcion">Ciencia Ficción</option>
                <option value="comedia">Comedia </option>
                <option value="drama">Drama </option>
                <option value="fantasia">Fantasía </option>
                <option value="musical">Musical </option>
                <option value="suspenso">Suspenso </option>
                <option value="terror">Terror </option>
            </select>
        </label><br><br>
        <label>
            <button type="submit" name="enviar">Enviar</button>
        </label>
    </form>

    
</body>
</html>