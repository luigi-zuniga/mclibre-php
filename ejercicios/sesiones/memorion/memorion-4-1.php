<?php
/**
 * Memorión (4) - memorion-4-1.php
 *
 * @author    Bartolomé Sintes Marco <bartolome.sintes+mclibre@gmail.com>
 * @copyright 2017 Bartolomé Sintes Marco
 * @license   http://www.gnu.org/licenses/agpl.txt AGPL 3 or later
 * @version   2017-11-16
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

session_name("memorion-4");
session_start();

if (!isset($_SESSION["numeroDibujos"])) {
    $_SESSION["numeroDibujos"] = 5;
}

if (!isset($_SESSION["dibujos"])) {
    for ($i = 128000; $i <= 128060; $i++) {
        $valores[] = $i;
    }
    shuffle($valores);
    for ($i = 0; $i < $_SESSION["numeroDibujos"]; $i++) {
        $_SESSION["dibujos"][$i] = $valores[$i];
        $_SESSION["lado"][$i]   = "dorso";
    }
    for ($i = 0; $i < $_SESSION["numeroDibujos"]; $i++) {
        $_SESSION["dibujos"][$_SESSION["numeroDibujos"]+$i] = $valores[$i];
        $_SESSION["lado"][$_SESSION["numeroDibujos"]+$i]   = "dorso";
    }
    shuffle($_SESSION["dibujos"]);
    $_SESSION["primera"] = -1;
    $_SESSION["segunda"] = -1;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <title>Memoríón (4). Memorión. Sesiones.
    Ejercicios. PHP. Bartolomé Sintes Marco</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="mclibre-php-soluciones.css" rel="stylesheet" type="text/css" title="Color" />
</head>

<body>
  <h1>Memorión (4)</h1>

  <form action="memorion-4-2.php">
    <p>
      <button type="submit" name="accion" value="nueva">Nueva partida</button>
      <button type="submit" name="accion" value="numero">Cambiar número de dibujos</button>
    </p>

    <p>
<?php
for ($i = 0; $i < 2*$_SESSION["numeroDibujos"]; $i++) {
    if ($_SESSION["primera"] == $i || $_SESSION["segunda"] == $i) {
        print "      <button type=\"button\" style=\"font-size: 70px; width: 100px; height: 100px;\">&#{$_SESSION["dibujos"][$i]};</button> \n";
    } else {
        print "      <button type=\"submit\" name=\"gira\" value=\"$i\" style=\"font-size: 70px; width: 100px; height: 100px; color: black;\">&#10026;</button> \n";
    }
}
?>
    </p>
  </form>

  <footer>
    <p class="ultmod">
      Última modificación de esta página:
      <time datetime="2017-11-16">16 de noviembre de 2017</time></p>

    <p class="licencia">
      Este programa forma parte del curso <a href="http://www.mclibre.org/consultar/php/">
      Programación web en PHP</a> por <a href="http://www.mclibre.org/">Bartolomé
      Sintes Marco</a>.<br />
      El programa PHP que genera esta página está bajo
      <a rel="license" href="http://www.gnu.org/licenses/agpl.txt">licencia AGPL 3 o posterior</a>.</p>
  </footer>
</body>
</html>