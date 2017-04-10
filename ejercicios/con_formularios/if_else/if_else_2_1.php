<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>Comprobador de múltiplos (Formulario). if ... elseif ... else ...
      Ejercicios. PHP. Bartolomé Sintes Marco</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="mclibre_php_soluciones.css" rel="stylesheet" type="text/css" title="Color" />
  </head>

  <body>
    <h1>Comprobador de múltiplos (Formulario)</h1>

    <form action="if_else_2_2.php" method="get">

      <p>Escriba dos números enteros (0 &lt; números &lt; 1.000) para comprobar
        si uno es múltiplo del otro o no.</p>

      <table>
        <tbody>
          <tr>
            <td><strong>Un número:</strong></td>
            <td><input type="number" name="numero1" min="0" max="1000" step="any" /></td>
          </tr>
          <tr>
            <td><strong>Otro número:</strong></td>
            <td><input type="number" name="numero2" min="0" max="1000" step="any" /></td>
          </tr>
        </tbody>
      </table>

      <p>
        <input type="submit" value="Comprobar" />
        <input type="reset" value="Borrar" />
      </p>
    </form>

    <footer>
      <p class="ultmod">
        Última modificación de esta página:
        <time datetime="2016-11-04">4 de noviembre de 2016</time></p>

      <p class="licencia">
        Esta página forma parte del curso <a href="http://www.mclibre.org/consultar/php/">
        <cite>Programación web en PHP</cite></a> por <cite>Bartolomé Sintes Marco</cite>.<br />
        y se distribuye bajo una <a rel="license" href="https://creativecommons.org/licenses/by-sa/4.0/deed.es_ES">
        Licencia Creative Commons Reconocimiento-CompartirIgual 4.0 Internacional (CC BY-SA 4.0)</a>.</p>
    </footer>
  </body>
</html>
