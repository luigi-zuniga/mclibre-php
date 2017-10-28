<?php
/**
 * Biblioteca - usu_borrartodo2.php
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

function borraTodoMySQL($db)
{
    global $dbDb, $dbObras, $dbUsuarios, $dbPrestamos;

    $consulta = "DROP TABLE $dbUsuarios";
    if ($db->query($consulta)) {
        print "<p>Tabla de Usuarios borrada correctamente.</p>\n";
    } else {
        print "<p>Error al borrar la tabla de Usuarios.</p>\n";
    }
    $consulta = "DROP TABLE $dbPrestamos";
    if ($db->query($consulta)) {
        print "<p>Tabla de Pr�stamos borrada correctamente.</p>\n";
    } else {
        print "<p>Error al borrar la tabla de Pr�stamos.</p>\n";
    }
    $consultaCreaTablaUsuarios = "CREATE TABLE $dbUsuarios (
        id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
        nombre VARCHAR(".TAM_NOMBRE."),
        apellidos VARCHAR(".TAM_APELLIDOS."),
        dni VARCHAR(".TAM_DNI."),
        PRIMARY KEY(id)
        )";
    if ($db->query($consultaCreaTablaUsuarios)) {
        print "<p>Tabla de Usuarios creada correctamente.</p>\n";
    } else {
        print "<p>Error al crear la tabla de Usuarios.</p>\n";
    }
    $consultaCreaTablaPrestamos = "CREATE TABLE $dbPrestamos (
        id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
        id_usuario INTEGER UNSIGNED,
        id_obra INTEGER UNSIGNED,
        prestado DATE,
        devuelto DATE,
        PRIMARY KEY(id)
        )";
    if ($db->query($consultaCreaTablaPrestamos)) {
        print "<p>Tabla de Pr�stamos creada correctamente.</p>\n";
    } else {
        print "<p>Error al crear la tabla de Pr�stamos.</p>\n";
    }
}

function borraTodoSqlite($db)
{
    global $dbDb, $dbObras, $dbUsuarios, $dbPrestamos;

    $consulta = "DROP TABLE $dbUsuarios";
    if ($db->query($consulta)) {
       print "<p>Tabla de Usuarios borrada correctamente.</p>\n";
    } else {
        print "<p>Error al borrar la tabla de Usuarios.</p>\n";
    }
    $consulta = "DROP TABLE $dbPrestamos";
    if ($db->query($consulta)) {
       print "<p>Tabla de Pr�stamos borrada correctamente.</p>\n";
    } else {
        print "<p>Error al borrar la tabla de Pr�stamos.</p>\n";
    }
    $consultaCreaTablaUsuarios = "CREATE TABLE $dbUsuarios (
        id INTEGER PRIMARY KEY,
        nombre VARCHAR(".TAM_NOMBRE."),
        apellidos VARCHAR(".TAM_APELLIDOS."),
        dni VARCHAR(".TAM_DNI.")
        )";
    if ($db->query($consultaCreaTablaUsuarios)) {
        print "<p>Tabla de Usuarios creada correctamente.</p>\n";
    } else {
        print "<p>Error al crear la tabla de Usuarios.</p>\n";
    }
    $consultaCreaTablaPrestamos = "CREATE TABLE $dbPrestamos (
        id INTEGER PRIMARY KEY,
        id_usuario INTEGER UNSIGNED,
        id_obra INTEGER UNSIGNED,
        prestado DATE,
        devuelto DATE
        )";
    if ($db->query($consultaCreaTablaPrestamos)) {
        print "<p>Tabla de Pr�stamos creada correctamente.</p>\n";
    } else {
        print "<p>Error al crear la tabla de Pr�stamos.</p>\n";
    }
}

if (!isset($_REQUEST['si'])) {
    header('Location:index.php');
    exit();
} else {
    $db = conectaDb();
    cabecera('Usuarios - Borrar todo 2', CABECERA_SIN_CURSOR, 'menuUsuarios');
    if ($dbMotor==MYSQL) {
        borraTodoMySQL($db);
    } elseif ($dbMotor==SQLITE) {
        borraTodoSqlite($db);
    }
    $db = NULL;
    pie();
}
?>