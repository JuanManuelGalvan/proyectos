<?php

    if(isset($_POST['agregar'])) {
        include '../php/configuracion.php';

        $nombre = $_POST['nombre'];
        $direccion = $_POST['direccion'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];

        mysqli_query($conexion, "INSERT INTO contacto(nombre, direccion, telefono, correo) VALUES ('$nombre', '$direccion', '$telefono', '$correo')");
    
        header('Location: practica2.php');
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Formulario</title>
</head>

<body style="background-color: rgb(5, 62, 85)";>
    <h2 align= 'center' style="color: rgb(175, 214, 229)"> Practica número 1: </h2>
    

    <div align ='center'><br>

    <a href="http://olivasandrea.utdgrupoti.com/DMM/practicas/practica2.php">Base de Datos</a><br>


    <a href="http://olivasandrea.utdgrupoti.com/DMM/autobiografia.html">Regresar a Autobiografia</a><br>

    

    <main class="contenedor contenedor-formulario"><br>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
            <div class="elem-form">
                <label for="nombre">Nombre:</label><br>
                <input type="text" name="nombre">
            </div>
            <div class="elem-form">
                <label for="direccion">Dirección</label><br>
                <input type="text" name="direccion">
            </div>
            <div class="elem-form">
                <label for="telefono">Teléfono:</label><br>
                <input type="number" name="telefono">
            </div>
            <div class="elem-form">
                <label for="correo">Correo:</label><br>
                <input type="email" name="correo"><br>
            </div><br>

            <input type="submit" value="Enviar" class="cursor-pointer" name="agregar">
            <input type="reset" value="Reset" class="cursor-pointer"><br>
        </form>

        </div>
    </main>
</body>

</html>