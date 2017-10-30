<?php
/**
 * Foro - index.php
 *
 * @author    Bartolom� Sintes Marco <bartolome.sintes+mclibre@gmail.com>
 * @copyright 2009 Bartolom� Sintes Marco
 * @license   http://www.gnu.org/licenses/agpl.txt AGPL 3 or later
 * @version   2009-05-21
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

include('funciones.php');
$db = conectaDb();
cabecera('Inicio', CABECERA_SIN_CURSOR, 'menuPrincipal', '');

$consulta = "SELECT COUNT(*) FROM $dbDiscusiones";
$result = $db->query($consulta);
if (!$result) {
    print "<p>Error en la consulta.</p>\n";
} elseif ($result->fetchColumn()>0) {
    $consulta = "SELECT * FROM $dbDiscusiones";
    $result = $db->query($consulta);
    if (!$result) {
        print "<p>Error en la consulta.</p>\n";
    } else {
        foreach ($result as $valor) {
            $consulta = "SELECT COUNT(*) FROM $dbIntervenciones
                WHERE id_discusion='$valor[id]'";
            $result2 = $db->query($consulta);
            if (!$result2) {
                print "<p>Error en la consulta.</p>\n";
            } else {
                $numInt = $result2->fetchColumn();
                $consulta = "SELECT * FROM $dbIntervenciones
                    WHERE id_discusion='$valor[id]'";
                $result2 = $db->query($consulta);
                if (!$result2) {
                    print "<p>Error en la consulta.</p>\n";
                } else {
                    print "<div class=\"discu\">
  <h2><a href=\"hil-index.php?hilo=$valor[id]\"><img src=\"flecha.png\" "
    ."alt=\"Ver intervenciones\" title=\"Ver intervenciones\" /></a>
    $valor[titulo]</h2>
  <p class=\"dis_aut\">Propuesta por <strong>$valor[autor]</strong> el "
                      .fechaDma($valor['fecha'])." - ";
                    if ($numInt==1) {
                        print "1 intervenci�n";
                    } else {
                        print "$numInt intervenciones";
                    }
                    print ".</p>\n  <p>$valor[descripcion]</p>\n</div>\n\n";
                }
            }
        }
    }
}

$db = NULL;
pie();
?>