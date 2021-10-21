<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require './vendor/autoload.php';
        use App\Fechas;
        $fechaServidor = new Fechas();
    ?>
    <main>
        <section>
            <h2>Fecha del servidor: </h2>
            <p>
                <?php
                  echo $fechaServidor->obtenerTimestamp();
                ?>
            </p>
        </section>
    </main>
</body>
</html>