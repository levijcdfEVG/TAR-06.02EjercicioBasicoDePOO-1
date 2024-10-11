<!-- Levi Josué Candeias de Figueiredo -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="css/mostrar.css" rel="stylesheet" />
    </head>
    <body>
        <main>
            <?php
                // Verifica si el parámetro 'mostrar' está presente en la URL
                if (isset($_GET['mostrar'])) {
                    $resultado = $_GET['mostrar']; 
                    echo "<h2>Resultado: $resultado</h2>";
                } else {
                    echo "<h2>No se recibió ningún resultado para mostrar.</h2>";
                }
            ?>
            <a href="index.html">Realizar otro cálculo</a>
        </main>
    </body>
</html>
