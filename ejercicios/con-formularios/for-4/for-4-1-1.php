<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <title>Sucesiones aritméticas 1 (Formulario). for (4).
    Ejercicios. PHP. Bartolomé Sintes Marco. www.mclibre.org</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color" />
</head>

<body>
  <h1>Sucesiones aritméticas 1 (Formulario)</h1>

  <form action="for-4-1-2.php" method="get">
    <p>Escriba los tres valores y le mostraré los términos de la sucesión
      aritmética correspondiente.
    </p>

    <table>
      <tbody>
        <tr>
          <td><strong>Valor inicial:</strong></td>
          <td><input type="number" name="inicial" step="any" value="0" /></td>
        </tr>
        <tr>
          <td><strong>Incremento:</strong></td>
          <td><input type="number" name="incremento" step="any" value="1" /></td>
        </tr>
        <tr>
          <td><strong>Número de valores:</strong></td>
          <td><input type="number" name="valores" step="1" min="1" value="5" /></td>
        </tr>
      </tbody>
    </table>

    <p>
      <input type="submit" value="Mostrar" />
      <input type="reset" value="Borrar" />
    </p>
  </form>

  <footer>
    <p class="ultmod">
      Última modificación de esta página:
      <time datetime="2016-11-06">6 de noviembre de 2016</time>
    </p>

    <p class="licencia">
      Esta página forma parte del curso <a href="http://www.mclibre.org/consultar/php/">
      <cite>Programación web en PHP</cite></a> por <cite>Bartolomé Sintes Marco</cite>.<br />
      y se distribuye bajo una <a rel="license" href="https://creativecommons.org/licenses/by-sa/4.0/deed.es_ES">
      Licencia Creative Commons Reconocimiento-CompartirIgual 4.0 Internacional (CC BY-SA 4.0)</a>.</p>
  </footer>
</body>
</html>
