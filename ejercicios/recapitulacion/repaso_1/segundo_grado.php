<?php
/**
 * Ecuación de segundo grado - segundo_grado.php
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
<title>Ecuación de segundo grado (Resultado). Repaso (1).
  Ejercicios. PHP. Bartolomé Sintes Marco</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="mclibre_php_soluciones.css" rel="stylesheet" type="text/css"
  title="Color" />
</head>

<body>
<h1>Ecuación de segundo grado (Resultado)</h1>

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
$a   = recoge("a");
$b   = recoge("b");
$c   = recoge("c");
$aOk = false;
$bOk = false;
$cOk = false;

// Comprobación de $a
if ($a == "") {
    print "<p class=\"aviso\">No ha escrito el coeficiente a.</p>\n";
} elseif (!is_numeric($a)) {
    print "<p class=\"aviso\">No ha escrito el coeficiente a como número.</p>\n";
} else {
    $aOk = true;
}

// Comprobación de $b
if ($b == "") {
    print "<p class=\"aviso\">No ha escrito el coeficiente b.</p>\n";
} elseif (!is_numeric($b)) {
    print "<p class=\"aviso\">No ha escrito el coeficiente b como número.</p>\n";
} else {
    $bOk = true;
}

// Comprobación de $c
if ($c == "") {
    print "<p class=\"aviso\">No ha escrito el coeficiente c.</p>\n";
} elseif (!is_numeric($c)) {
    print "<p class=\"aviso\">No ha escrito el coeficiente c como número.</p>\n";
} else {
    $cOk = true;
}


// Si los valores recibidos son correctos ...
if ($aOk && $bOk && $cOk) {
    print "<p>La ecuación <span style=\"font-size: 200%\">";
    if ($a == 1) {
        print "x<sup>2</sup>";
    } elseif ($a == -1) {
        print "-x<sup>2</sup>";
    } elseif ($a != 0) {
        print "{$a}x<sup>2</sup>";
    }
    if ($b == 1) {
        if ($a != 0) {
            print "+";
        }
        print "x";
    } elseif ($b > 0) {
        if ($a != 0) {
            print "+";
        }
        print $b . "x";
    } elseif ($b == -1) {
        print "-x";
    } elseif ($b < 0) {
        print $b . "x";
    }
    if ($c > 0) {
        if ($a != 0 || $b != 0) {
            print "+";
        }
        print $c;
    } elseif ($c < 0) {
        print $c;
    } elseif ($a == 0 && $b == 0 && $c == 0) {
        print "0";
    }
    print " = 0</span> ";

    if ($a == 0) {
        if ($b == 0) {
            if ($c == 0) {
                print "tiene infinitas soluciones. Todos los números son solución</p>\n";
            } else {
                print "no tiene solución.</p>\n";
            }
        } else {
            print "tiene una única solución: <span style=\"font-size: 200%\">x = "
                 . (-$c/$b) . "</span></p>\n";
        }
    } else {
        $d = $b * $b - 4 * $a * $c;
        if ($d > 0) {
            $d2 = sqrt($d);
            print "tiene dos soluciones: <span style=\"font-size: 200%\">x"
                 . "<sub>1</sub> = " . ((-$b + $d2) / (2 * $a)) . " ; x<sub>2</sub> = "
                 . ((-$b - $d2) / (2 * $a)) . "</span></p>\n";
        } else if ($d == 0) {
            print "tiene una única solución: <span style=\"font-size: 200%\">x = "
                 . (-$b / (2 * $a)) . "</span></p>\n";
        } else {
            print "no tiene soluciones reales.</p>\n";
        }
    }
}

?>

<p><a href="segundo_grado.html">Volver al formulario.</a></p>

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