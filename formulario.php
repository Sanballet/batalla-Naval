<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <center>
        <h1>FORMULARIO PARA EL JUEGO DE BATALLA NAVAL</h1>
        <form action="index.php" method="POST">
            <div>
                <label for="">Nombre</label>
                <input type="text" class="form-input" name="nombre"><br><br>
                <label for="">Apellido</label>
                <input type="text" class="form-input" name="apellido"><br><br>
                <label for="" >Edad</label>
                <input type="text" class="form-input" name="edad"><br><br>
                <input type="submit" class="envi" name="submit" value="Enviar Formulario">

            </div>
        </form>
    </center>
</body>
</html>