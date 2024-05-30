<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>CiTIM Grupo XB</title>
    <link rel="stylesheet" href="steam.css"/>
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
  <section class="wrapper">
    <header>
      <h1 class="logo"><a href="stem.php">CITIM</a></h1> 
    </header>
    <section id="contenedor">
      <section class="problema">
        <center>
        <h2>Problema: Cálculo de la distancia de Saturno al Sol</h2>
        </center>
        <p>Se puede calcular el semieje de la órbita de cualquier planeta, conociendo su periodo orbital. 
          Por ejemplo, el período de rotación de Saturno alrededor del Sol es de 29.5 años. A partir de dicho 
          periodo calcula el semieje mayor de la órbita de Saturno.</p>
      </section>
      <section class="esquemaProblema">
        <h2>Esquema</h2>
        <center>
        <img class="imgProblema" src="SATURNO.jpeg">
        </center>
      </section>
      <section class="formulas">
        <h2>Fórmulas</h2>
        a³ = T²
      </section>
      <section class="datos">
        <h2>Datos:</h2>
        <p>T = 29.5 años</p>
        <p>1 UA = 150 millones de Km</p>
      </section>
      <section class="calculos">
        <h2>Solución</h2>
        <p>Para calcular el semieje mayor (a) en kilómetros:</p>
        <p>a = raíz cúbica(T²) UA</p>
        <form method="post" action="">
          <button type="submit" name="calcular">Presiona para calcular</button>
        </form>
        <?php
        if (isset($_POST['calcular'])) {
            $T = 29.5;
            $UA = 150000000; // 150 millones de Km
            $a = pow($T * $T, 1/3);
            $resultado = $a * $UA;
            echo "<div id='resultadoA'>El semieje mayor es: " . number_format($resultado, 2) . " Km</div>";
        }
        ?>
      </section>
    </section>
    <footer class="pie">
      Creative Commons versión 4.0 SciSoft 2024
    </footer>
    <footer class="pie">
      Helena Cristel Aragon Escobar
    </footer>
  </section>
  <script src="codigos.js"></script>
</body>
</html>
