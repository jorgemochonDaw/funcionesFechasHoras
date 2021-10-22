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
                            <th><?php echo $keys ?></th>
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
                            <td><?php echo $valores ?></td>
                        <?php
                        }
                        ?>
                    </tr>
                </tbody>
                </tbody>
            </table>
        </section>
        <hr>
        <section>
            <h2>Fecha de nacimiento, (formato => "2000-09-22" ): </h2>
            <p>
                <?php
                //Formato "2000-09-22""2000-09-22"
                echo $fechas->edadPersona("2000-09-22");
                ?>
            </p>
        </section>
        <hr>
        <section>
            <h2>Marca de tiempo de 30 de julio de 2013 a las 23:15: </h2>
            <p>
                <?php
                //Formato "2000-09-22""2000-09-22"
                echo $fechas->marcaTiempo();
                ?>
            </p>
        </section>
        <hr>
        <section>
            <h2>Obtener hora actual GMT</h2>
            <p>
                <?php
                //Formato "2000-09-22""2000-09-22"
                echo $fechas->obtenerGMT();
                ?>
            </p>
        </section>
        <hr>
        <section>
            <h2>Verificar fechas: </h2>
            <p>
                <?php
                //Formato "2000-09-22""2000-09-22"
                echo $fechas->verificarDate();
                ?>
            </p>
        </section>
        <hr>
        ection>
            <h2>Verificar fechas: </h2>
            <p>
                <?php
                //Formato "2000-09-22""2000-09-22"
                var_dump($fechas->contarMinutosSegundosVivo());
                ?>
            </p>
        </section>
    </main>
</body>

</html>