<?php
/**
 * Tablas con casillas de verificación (Resultado 1) - foreach_2_2_3.php
 *
 * @author    Bartolomé Sintes Marco <bartolome.sintes+mclibre@gmail.com>
 * @copyright 2014 Bartolomé Sintes Marco
 * @license   http://www.gnu.org/licenses/agpl.txt AGPL 3 or later
 * @version   2014-10-16
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

print "<?xml version=\"1.0\" encoding=\"utf-8\"?>\n";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
       "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Tablas con casillas de verificación (Resultado 2). foreach (2).
  Ejercicios. PHP. Bartolomé Sintes Marco</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="mclibre_php_soluciones.css" rel="stylesheet" type="text/css"
  title="Color" />
</head>
<body>

<h1>Tablas con casillas de verificación (Resultado 2)</h1>
<?php
function recoge($var)
{
    $tmp = (isset($_REQUEST[$var]))
        ? trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "UTF-8"))
        : "";
    return $tmp;
}

function recogeMatriz2($var)
{
    $tmpMatriz = array();
    if (isset($_REQUEST[$var]) && is_array($_REQUEST[$var])) {
        foreach ($_REQUEST[$var] as $indice => $fila) {
            $indiceLimpio = trim(htmlspecialchars($indice, ENT_QUOTES, "UTF-8"));
            if (is_array($fila)) {
                foreach ($fila as $indice2 => $valor) {
                    $indice2Limpio = trim(htmlspecialchars($indice2, ENT_QUOTES, "UTF-8"));
                    $valorLimpio   = trim(htmlspecialchars($valor,   ENT_QUOTES, "UTF-8"));
                    $tmpMatriz[$indiceLimpio][$indice2Limpio] = $valorLimpio;
                }
            }
        }
    }
    return $tmpMatriz;
}

$tablas           = recoge("tablas");
$tamano           = recoge("tamano");
$casillas         = recogeMatriz2("c");
$tablasMinimo     = $tamanoMinimo = 1;
$tablasMaximo     = $tamanoMaximo = 20;
$casillaValor     = "on";
$tablasOk         = $tamanoOk     = $casillasOk = false;
$casillasMarcadas = count($casillas, COUNT_RECURSIVE) - count($casillas);

if ($tablas == "") {
    print "<p class=\"aviso\">No ha escrito el número de tablas.</p>\n";
} elseif (!ctype_digit($tablas)) {
    print "<p class=\"aviso\">No ha escrito el número de tablas  "
        . "como número entero positivo.</p>\n";
} elseif ($tablas < $tablasMinimo || $tablas > $tablasMaximo) {
    print "<p class=\"aviso\">El número de tablas debe estar entre "
        . "$tablasMinimo y $tablasMaximo.</p>\n";
} else {
    $tablasOk = true;
}

if ($tamano == "") {
    print "<p class=\"aviso\">No ha escrito el tamaño de la tabla.</p>\n";
} elseif (!ctype_digit($tamano)) {
    print "<p class=\"aviso\">No ha escrito el tamaño de la tabla "
        . "como número entero.</p>\n";
} elseif ($tamano < $tamanoMinimo || $tamano > $tamanoMaximo) {
    print "<p class=\"aviso\">El tamaño de la tabla debe estar entre "
        . "$tamanoMinimo y $tamanoMaximo.</p>\n";
} else {
    $tamanoOk = true;
}

if ($casillasMarcadas == 0) {
    print "<p>No ha marcado ninguna casilla.</p>";
} elseif ($casillasMarcadas > $tamano * $tamano * $tablas) {
    print "<p class=\"aviso\">La matriz recibida es demasiado grande.</p>\n";
} else {
    $casillasOk = true;
    foreach ($casillas as $indice => $valor) {
        if (ctype_digit((string)$indice) && $indice <= $tablas && is_array($valor)) {
            foreach ($valor as $indice2 => $valor2) {
                if (!ctype_digit((string)$indice2) || $indice2 > $tamano * $tamano
                    || $valor2 != $casillaValor) {
                    $casillasOk = false;
                }
            }
        } else {
            $casillasOk = false;
        }
    }
    if (!$casillasOk) {
        print "<p class=\"aviso\">La matriz recibida no es correcta.</p>\n";
    }
}

if ($tablasOk && $tamanoOk && $casillasOk) {
    for ($k = 1; $k <= $tablas; $k++) {
        if (!isset($casillas[$k])) {
            print "<p>En la tabla <strong>$k</strong> no ha marcado ninguna casilla.</p>\n";
        } else {
            print "<p>En la tabla <strong>$k</strong> ha marcado <strong>".
                count($casillas[$k])."</strong> casilla";
            if (count($casillas[$k])>1) {
                print "s";
            }
            print " de un total de " . ($tamano * $tamano) . ": ";
            foreach ($casillas[$k] as $indice => $valor) {
                print "<strong>$indice</strong> ";
            }
            print "</p>\n";
        }
    }
}

if ($tablasOk && $tamanoOk) {
    print "<p><a href=\"foreach_2_2_2.php?tamano=$tamano&amp;tablas=$tablas\">Volver a las tablas</a></p>\n";
}

?>

<p><a href="foreach_2_2_1.html">Volver al formulario inicial.</a></p>

<p class="ultmod">Última modificación de esta página: 16 de octubre de 2014</p>

<p class="licencia">
Este programa forma parte del curso <a href="http://www.mclibre.org/consultar/php/">
<cite>Programación web en PHP</cite></a> por <cite>Bartolomé Sintes Marco</cite>.<br />
El programa PHP que genera esta página está bajo
<a rel="license" href="http://www.gnu.org/licenses/agpl.txt">licencia AGPL 3 o
posterior</a></p>
</body>
</html>
