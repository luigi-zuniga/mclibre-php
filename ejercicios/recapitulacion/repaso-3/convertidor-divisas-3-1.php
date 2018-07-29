<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <title>Convertidor de divisas 3 (Formulario). Repaso 2.
  Ejercicios. PHP. Bartolomé Sintes Marco</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="generator" content="amaya 8.7.1, see http://www.w3.org/Amaya/" />
  <link href="mclibre-php-soluciones.css" rel="stylesheet" type="text/css"
  title="Color" />
</head>

<body>
<h1>Convertidor de divisas (Formulario)</h1>

<form action="convertidor-divisas-3.php" method="get">
  <fieldset>
    <legend>Formulario</legend>
    <p>Escriba la cantidad de dinero (0 &lt; valores &lt; 1.000.000) y elija las
    divisas:</p>

    <p>Convertir <input type="text" name="cantidad" size="6" maxlength="6" />
    <select name="origen">
      <option selected="selected" value="EUR">Euros</option>
      <option value="USD">Dólares USA</option>
      <option value="GBP">Libras esterlinas</option>
      <option value="JPY">Yenes</option>
      <option value="ESP">Pesetas</option>
    </select>
     en
    <select name="destino">
      <option selected="selected" value="EUR">Euros</option>
      <option value="USD">Dólares USA</option>
      <option value="GBP">Libras esterlinas</option>
      <option value="JPY">Yenes</option>
      <option value="ESP">Pesetas</option>
    </select>
     </p>

    <p><strong>Nota</strong>: La cotización de las monedas no está actualizada.
    Los valores utilizados son:<br />
    1 euro = 1,31481 dólares USA = 0,89807 libras esterlinas = 132,113 yenes
    japoneses = 166,386 antiguas pesetas españolas</p>

    <p class="der">
    <input type="submit" value="Convertir" />
    <input type="reset" value="Borrar" /></p>
  </fieldset>
</form>
<p class="ultmod">Última modificación de esta página: 13 de noviembre de 2012</p>

<p class="licencia">Esta página forma parte del curso <strong>Programación web
en PHP</strong> por <a href="http://www.mclibre.org"
rel="cc:attributionURL">Bartolomé Sintes Marco</a><br />
que se distribuye bajo una <a rel="license"
href="https://creativecommons.org/licenses/by-sa/4.0/deed.es_ES">Licencia
Creative Commons Reconocimiento-CompartirIgual 4.0 Internacional (CC BY-SA
4.0)</a>.</p>
</body>
</html>