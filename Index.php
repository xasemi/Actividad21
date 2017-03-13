<?php
include"dbNBA.php";

$nba= new dbNBA();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Inserccion_DB Actividad 21</title>
  </head>
  <body>
    <nav>
      <a class="active" href="Index.php">Inicio</a></li>
    </nav>
    <section id="caja">
      <fieldset>
        <form action="filtrado.php" method="post">
          <input type="hidden" value="input" name="tipo" />

          <label>Nombre: </label><br>
          <input type="text" name="nombre" value=""><br>

          <label>Ciudad: </label><br>
          <input type="text" name="ciudad" value=""><br>

          <label>Conferencia: </label><br>
          <input type="text" name="conferencia" value=""><br>

          <label>Division: </label><br>
          <input type="text" name="division" value=""><br>
          <br>
          <input type="submit" value="Añadir o Buscar">
        </form>
      </fieldset>
    </section>
</body>
</html>
