<?php
/**
 * Convertidor de divisas - convertidor_divisas.php
 *
 * @author    Bartolomé Sintes Marco <bartolome.sintes+mclibre@gmail.com>
 * @copyright 2015 Bartolomé Sintes Marco
 * @license   http://www.gnu.org/licenses/agpl.txt AGPL 3 or later
 * @version   2015-11-18
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
  <title>Convertidor de divisas (Resultado). Repaso (1).
  Ejercicios. PHP. Bartolomé Sintes Marco</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="mclibre-php-soluciones.css" rel="stylesheet" type="text/css" title="Color" />
</head>

<body>
<h1>Convertidor de divisas (Resultado)</h1>

<?php
// Funciones auxiliares
function recoge($var)
{
    $tmp = (isset($_REQUEST[$var]))
        ? trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "UTF-8"))
        : "";
    return $tmp;
}

// Recogida de datos
$cantidad   = recoge("cantidad");
$origen     = recoge("origen");
$cantidadOk = false;
$origenOk   = false;

$maximo       = 1000000;

// Comprobación de $cantidad
if ($cantidad == "") {
    print "<p class=\"aviso\">No ha escrito la cantidad de dinero.</p>\n";
} elseif (!is_numeric($cantidad)) {
    print "<p class=\"aviso\">No ha escrito la cantidad de dinero como número.</p>\n";
} elseif (!ctype_digit($cantidad)) {
    print "<p class=\"aviso\">No ha escrito la cantidad de dinero "
         . " como número entero positivo.</p>\n";
} elseif ($cantidad >= $maximo) {
    print "<p class=\"aviso\">La cantidad de dinero no es inferior o igual a "
         . number_format($maximo, 0, ",", ".").".</p>\n";
} else {
    $cantidadOk = true;
}

// Comprobación de $origen
if ($origen != "USD" && $origen != "GBP" && $origen != "JPY" && $origen != "ESP") {
    print "  <p class=\"aviso\">No ha escrito correctamente la moneda de origen.</p>\n";
} else {
    $origenOk = true;
}

// Si los valores recibidos son correctos ...
if ($cantidadOk && $origenOk) {
    if ($origen == "USD") {
        $result = $cantidad / 1.31481;
        $nombreMoneda = "dólares USA";
    } elseif ($origen == "GBP") {
        $result = $cantidad /0.89807;
        $nombreMoneda = "libras esterlinas";
    } elseif ($origen == "JPY") {
        $result = $cantidad / 132.113;
        $nombreMoneda = "yenes";
    } elseif ($origen == "ESP") {
        $result = $cantidad / 166.366;
        $nombreMoneda = "pesetas españolas";
    }

    print "<p>$cantidad $nombreMoneda son " . number_format($result, 2, ",", ".")
        . " euros.</p>\n\n";
    print "<p>Gracias por utilizar este convertidor.</p>\n";
}

?>

<p><a href="convertidor_divisas.html">Volver al formulario.</a></p>

<footer>
  <p class="ultmod">
    Última modificación de esta página:
    <time datetime="2015-11-18">18 de noviembre de 2015</time></p>

      <p class="licencia">
        Este programa forma parte del curso <a href="http://www.mclibre.org/consultar/php/">
        Programación web en PHP</a> por <a href="http://www.mclibre.org/">Bartolomé
        Sintes Marco</a>.<br />
        El programa PHP que genera esta página está bajo
        <a rel="license" href="http://www.gnu.org/licenses/agpl.txt">licencia AGPL 3 o posterior</a>.</p>
    </footer>
  </body>
</html>