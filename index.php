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

    $fechas = new Fechas();
    ?>
    <main>
        <section>
            <h2>Fecha del servidor: </h2>
            <p>
                <?php
                echo $fechas->obtenerTimestamp();
                ?>
            </p>
        </section>
        <hr>
        <section>
            <h2>Fecha actual</h2>
            <table border="1">
                <thead>
                    <tr>
                        <?php
                        foreach (array_keys($fechas->obtenerFechaActual()) as $keys) {
                        ?>
                            <th><?php echo $keys?></th>
                        <?php
                        }
                        ?>
                    </tr>
                </thead>
                <tbody>
                <tbody>
                    <tr>
                        <?php
                        foreach (array_values($fechas->obtenerFechaActual()) as $valores) {
                        ?>
                            <td><?php echo $valores?></td>
                        <?php
                        }
                        ?>
                    </tr>
                </tbody>
                </tbody>
            </table>
        </section>
    </main>
</body>

</html>