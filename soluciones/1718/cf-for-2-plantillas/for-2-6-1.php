<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <title>Triángulo de estrellas 2 (Formulario). for (2).
    Escriba su nombre</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color" />
</head>

<body>
  <h1>Triángulo de estrellas 2 (Formulario)</h1>

  <form action="for-2-6-2.php" method="get">
    <p>Escriba el ancho (0 &lt; ancho &le; 100) y mostraré un triángulo
      de estrellas de ese tamaño.</p>

    <table>
      <tbody>
        <tr>
          <td><strong>Ancho:</strong></td>
          <td><input type="number" name="ancho" min="1" max="100" value="7" /></td>
        </tr>
      </tbody>
    </table>

    <p>
      <input type="submit" value="Dibujar" />
      <input type="reset" value="Borrar" />
    </p>
  </form>

  <footer>
    <p>Escriba su nombre</p>
  </footer>
</body>
</html>

