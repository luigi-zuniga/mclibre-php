<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <title>Convertidor de divisas (Formulario). Repaso (1).
    Ejercicios. PHP. Bartolomé Sintes Marco. www.mclibre.org</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color" />
</head>

<body>
  <h1>Convertidor de divisas (Formulario)</h1>

  <form action="convertidor-divisas-2.php" method="get">
    <p>Escriba la cantidad de dinero (0 &le; valores &le; 1.000.000) y elija la divisa:</p>

    <p>Convertir <input type="number" name="cantidad" min="0" max="1000000" value="1000"/>
      <select name="origen">
        <option selected="selected" value="USD">Dólares USA</option>
        <option value="GBP">Libras esterlinas</option>
        <option value="JPY">Yenes</option>
        <option value="ESP">Pesetas</option>
      </select>
      en euros
    </p>

    <p>
      <strong>Nota</strong>: La cotización de las monedas no está actualizada.
      Los valores utilizados son:<br />
      1 euro = 1,31481 dólares USA = 0,89807 libras esterlinas = 132,113 yenes
      japoneses = 166,386 antiguas pesetas españolas
    </p>

    <p>
      <input type="submit" value="Convertir" />
      <input type="reset" value="Borrar" />
    </p>
  </form>

  <footer>
    <p class="ultmod">
      Última modificación de esta página:
      <time datetime="2015-11-18">18 de noviembre de 2015</time>
    </p>

    <p class="licencia">
      Esta página forma parte del curso <a href="http://www.mclibre.org/consultar/php/">
      <cite>Programación web en PHP</cite></a> por <cite>Bartolomé Sintes Marco</cite>.<br />
      y se distribuye bajo una <a rel="license" href="https://creativecommons.org/licenses/by-sa/4.0/deed.es_ES">
      Licencia Creative Commons Reconocimiento-CompartirIgual 4.0 Internacional (CC BY-SA 4.0)</a>.</p>
  </footer>
</body>
</html>
