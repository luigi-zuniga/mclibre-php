<?php
/**
 * Sucesiones aritméticas 1 (Resultado) - for-4-1-2.php
*
* @author    Bartolomé Sintes Marco <bartolome.sintes+mclibre@gmail.com>
* @copyright 2016 Bartolomé Sintes Marco
* @license   http://www.gnu.org/licenses/agpl.txt AGPL 3 or later
* @version   2016-11-06
* @link      http://www.mclibre.org
*
*  This program is free software: you can redistribute it and/or modify
*  it under the terms of the GNU Affero General Public License as published by
*  the Free Software Foundation, either version 3 of the License, or
*  any later version.
*
*  This program is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU Affero General Public License for more details.
*
*  You should have received a copy of the GNU Affero General Public License
*  along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <title>Sucesiones aritméticas 1 (Resultado). for (4).
    Ejercicios. PHP. Bartolomé Sintes Marco</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="mclibre-php-soluciones.css" rel="stylesheet" type="text/css" title="Color" />
</head>

<body>
  <h1>Sucesiones aritméticas 1 (Resultado)</h1>

<?php
function recoge($var)
{
    $tmp = (isset($_REQUEST[$var]))
        ? trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "UTF-8"))
        : "";
    return $tmp;
}

$inicial    = recoge("inicial");
$incremento = recoge("incremento");
$valores    = recoge("valores");

$inicialOk  = $incrementoOk = $valoresOk = false;

if ($inicial == "") {
    print "  <p class=\"aviso\">No ha escrito el valor inicial.</p>\n";
    print "\n";
} elseif (!is_numeric($inicial)) {
    print "  <p class=\"aviso\">No ha escrito el valor inicial como número.</p>\n";
    print "\n";
} else {
    $inicialOk = true;
}

if ($incremento == "") {
    print "  <p class=\"aviso\">No ha escrito el incremento.</p>\n";
    print "\n";
} elseif (!is_numeric($incremento)) {
    print "  <p class=\"aviso\">No ha escrito el incremento como número.</p>\n";
    print "\n";
} else {
    $incrementoOk = true;
}

if ($valores == "") {
    print "  <p class=\"aviso\">No ha escrito el número de valores.</p>\n";
    print "\n";
} elseif (!is_numeric($valores)) {
    print "  <p class=\"aviso\">No ha escrito el número de valores como número.</p>\n";
    print "\n";
} elseif (!ctype_digit($valores)) {
    print "  <p class=\"aviso\">No ha escrito el número de valores "
        . "como número entero positivo.</p>\n";
    print "\n";
} elseif ($valores < 2) {
    print "  <p class=\"aviso\">Como mínimo debe solicitar dos valores.</p>\n";
    print "\n";
} else {
    $valoresOk = true;
}

if ($inicialOk && $incrementoOk && $valoresOk) {
    $final = $inicial + $incremento * ($valores - 1);

    print "  <p>Datos:</p>\n";
    print "\n";
    print "  <ul>\n";
    print "    <li>Valor inicial: $inicial</li>\n";
    print "    <li>Valor final: $final</li>\n";
    print "    <li>Incremento: $incremento</li>\n";
    print "    <li>Número de términos: $valores</li>\n";
    print "  </ul>\n";
    print "\n";
    print "  <p>Términos de la sucesión:</p>\n";
    print "\n";
    print "  <ol>\n";
    for ($i = 0; $i < $valores; $i++) {
        print "    <li>" . ($inicial + $incremento * $i) . "</li>\n";
    }
    print "  </ol>\n";
    print "\n";
}

?>
  <p><a href="for-4-1-1.php">Volver al formulario.</a></p>

  <footer>
    <p class="ultmod">
      Última modificación de esta página:
      <time datetime="2016-11-06">6 de noviembre de 2016</time></p>

    <p class="licencia">
      Este programa forma parte del curso <a href="http://www.mclibre.org/consultar/php/">
      Programación web en PHP</a> por <a href="http://www.mclibre.org/">Bartolomé
      Sintes Marco</a>.<br />
      El programa PHP que genera esta página está bajo
      <a rel="license" href="http://www.gnu.org/licenses/agpl.txt">licencia AGPL 3 o posterior</a>.</p>
  </footer>
</body>
</html>