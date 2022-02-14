<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Hola Mundo</title>
</head>

<body>
    <a href="http://localhost/dashboard/phpinfo.php" target="_blank">Ver información php</a>
    <br>
    <?php
    echo "Hola mundo<br>";
    $number1 = 2;
    $number2 = 4;
    echo $number1 . " + " . $number2 . " = " . ($number1 + $number2) . "<br>";
    for ($i = 1; $i <= 10; $i++) {
        echo $i . " ";
    }
    echo "<br>";
    $a = 1;
    while ($a <= 10) {
        echo $a . " ";
        $a++;
    }

    $filename = "imgs/panda.jpg";
    ?>
    <br>
    <img src="<?= $filename ?>" height="230.215827338" width="400" />
    <br>
    <img src="https://imborrable.com/wp-content/uploads/2021/04/fotos-gratis-de-stock-1.jpg" alt="Foto de cámara" height="400.2375" width="600" />
    <form action="index.php#modalForm" method="post">
        <input type="text" name="nombre" placeholder="Nombre" id="1">
        <input type="email" name="correo" placeholder="alguien@example.com" id="2">
        <input type="submit" value="Imprimir POST">
    </form>

    <form action="formulario.php" method="get">
        <input type="text" name="nombre" placeholder="Nombre" id="1">
        <input type="tel" name="telefono" placeholder="000000000" id="2">
        <input type="submit" value="Imprimir GET">
    </form>
    <div id="modalForm" class="modal">
        <div class="modal-contenido">
            <a href="#">X</a>
            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Correo Electrónico</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?= $_POST['nombre'] ?></td>
                        <td><?= $_POST['correo'] ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>