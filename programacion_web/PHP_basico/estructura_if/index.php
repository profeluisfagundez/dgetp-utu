<html lang="es">
  <head>
    <meta charset="UTF-8" />
  </head>

  <body>
    <header>
      <h1>Estructura IF en PHP</h1>
    </header>

    <section>
      <article>
        <?php
            $valor = 22;
            echo "<p>El valor que se va a probar es: $valor </p> <br>";
            if ($valor <= 10) {
                echo "Es menor o igual a 10";
            } else {
                echo "Es mayor a 10";
            }
        ?>
      </article>
    </section>

    <footer>
      <p>Soy un pie de página amigable</p>
    </footer>
  </body>
</html>
