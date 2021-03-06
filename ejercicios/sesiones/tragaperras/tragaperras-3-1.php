<?php
/**
 * Minijuegos: Tragaperras (3) - tragaperras-3-1.php
 *
 * @author    Bartolomé Sintes Marco <bartolome.sintes+mclibre@gmail.com>
 * @copyright 2018 Bartolomé Sintes Marco
 * @license   http://www.gnu.org/licenses/agpl.txt AGPL 3 or later
 * @version   2018-10-31
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
session_name("tragaperras-3");
session_start();

$simbolosNumero = 8;   // Número de frutas

// Valores iniciales variables sesión
if (!isset($_SESSION["monedas"]) || !isset($_SESSION["fruta1"]) ||
    !isset($_SESSION["fruta2"]) || !isset($_SESSION["fruta3"])) {
    $_SESSION["monedas"] = 0;
    $_SESSION["fruta1"] = rand(1, $simbolosNumero);
    $_SESSION["fruta2"] = rand(1, $simbolosNumero);
    $_SESSION["fruta3"] = rand(1, $simbolosNumero);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <title>
    Tragaperras (3).
    Minijuegos.
    Ejercicios. PHP. Bartolomé Sintes Marco. www.mclibre.org
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color" />
</head>

<body>
  <h1>Tragaperras (3)</h1>

<?php
// Se genera el formulario
print "  <form action=\"tragaperras-3-2.php\" method=\"get\">\n";
print "    <table style=\"margin-left: auto; margin-right: auto; border: black 4px solid; border-spacing: 10px;\">\n";
print "      <tbody>\n";
print "        <tr>\n";
// Se muestran las tres imágenes de la combinación actual
print "          <td style=\"border: black 4px solid; padding: 10px\">"
    . "<img src=\"img/frutas/$_SESSION[fruta1].svg\" width=\"160\" alt=\"Imagen\" /></td>\n";
print "          <td style=\"border: black 4px solid; padding: 10px\">"
    . "<img src=\"img/frutas/$_SESSION[fruta2].svg\" width=\"160\" alt=\"Imagen\" /></td>\n";
print "          <td style=\"border: black 4px solid; padding: 10px\">"
    . "<img src=\"img/frutas/$_SESSION[fruta3].svg\" width=\"160\" alt=\"Imagen\" /></td>\n";
print "          <td style=\"vertical-align: top; text-align: center\">\n";
// Se muestra el contador de monedas
print "            <p><button type=\"submit\" name=\"accion\" value=\"moneda\">Meter moneda</button></p>\n";
print "            <p style=\"margin: 0; font-size: 300%; border: black 4px solid; padding: 2px\">$_SESSION[monedas]</p>\n";
// Se muestra el botón de Jugar
print "            <p><button type=\"submit\" name=\"accion\" value=\"jugar\">Jugar</button></p>\n";
print "          </td>\n";
print "        </tr>\n";
print "      </tbody>\n";
print "    </table>\n";
print "  </form>\n";
?>

  <footer>
    <p class="ultmod">
      Última modificación de esta página:
      <time datetime="2018-10-31">31 de octubre de 2018</time>
    </p>

    <p class="licencia">
      Esta página forma parte del curso <a href="http://www.mclibre.org/consultar/php/">
      <cite>Programación web en PHP</cite></a> por <cite>Bartolomé Sintes Marco</cite>.<br />
      y se distribuye bajo una <a rel="license" href="https://creativecommons.org/licenses/by-sa/4.0/deed.es_ES">
      Licencia Creative Commons Reconocimiento-CompartirIgual 4.0 Internacional (CC BY-SA 4.0)</a>.</p>
  </footer>
</body>
</html>
