<?php
/**
 * Memorión (1) - memorion-1-1.php
 *
 * @author    Bartolomé Sintes Marco <bartolome.sintes+mclibre@gmail.com>
 * @copyright 2018 Bartolomé Sintes Marco
 * @license   http://www.gnu.org/licenses/agpl.txt AGPL 3 or later
 * @version   2018-11-01
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

// Nos unimos a la sesión
session_name("memorion-1");
session_start();

// Si no está guardado en la sesión el número de dibujos ....
if (!isset($_SESSION["numeroDibujos"])) {
    // ... guardamos el número de dibujos en la sesión
    $_SESSION["numeroDibujos"] = rand(4, 20);
}

// Si no están guardado en la sesión los dibujos de la partida ....
if (!isset($_SESSION["dibujos"])) {
    // ... creamos una matriz con todos los valores posibles (61 valores)
    for ($i = 128000; $i <= 128060; $i++) {
        $valores[] = $i;
    }

    // Los barajamos
    shuffle($valores);

    // Cogemos los N primeros (N es el número de dibujos)
    for ($i = 0; $i < $_SESSION["numeroDibujos"]; $i++) {
        $_SESSION["dibujos"][$i] = $valores[$i];
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <title>
    Memoríón (1).
    Memorión. Sesiones.
    Ejercicios. PHP. Bartolomé Sintes Marco. www.mclibre.org
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color" />
</head>

<body>
  <h1>Memorión (1)</h1>

  <form action="memorion-1-2.php">
    <p>
      <button type="submit" name="accion" value="nueva">Nueva partida</button>
    </p>

    <p style="font-size: 400%;">
<?php
// Mostramos los dibujos seleccionados
for ($i = 0; $i < $_SESSION["numeroDibujos"]; $i++) {
    print "      &#{$_SESSION["dibujos"][$i]}; \n";
}
?>
    </p>
  </form>

  <footer>
    <p class="ultmod">
      Última modificación de esta página:
      <time datetime="2018-11-01">1 de noviembre de 2018</time>
    </p>

    <p class="licencia">
      Este programa forma parte del curso <strong><a href="http://www.mclibre.org/consultar/php/">Programación
      web en PHP</a></strong> de <a href="http://www.mclibre.org/" rel="author" >Bartolomé Sintes Marco</a>.<br />
      El programa PHP que genera esta página se distribuye bajo
      <a rel="license" href="http://www.gnu.org/licenses/agpl.txt">licencia AGPL 3 o posterior</a>.
    </p>
  </footer>
</body>
</html>
