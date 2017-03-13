<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <nav>
      <a class="active" href="Index.php">Inicio</a></li>
    </nav>
    <section id="caja">
      <?php
      include"dbNBA.php";
      $nba= new dbNBA();
      if ($nba->getErrorConexion()==true) {
               echo "No hay conexion";
              }
              else {
                if (isset($_POST["nombre"]) && (!empty($_POST["nombre"])) && (empty($_POST["ciudad"]))  && (empty($_POST["conferencia"]))  && (empty($_POST["division"]))) {
                  $muestra=$nba->mostrarEquipo($_POST["nombre"]);
                  ?>
                    <center>
                      <table border="1">
                        <tr>
                          <th>Nombre</th>
                          <th>Ciudad</th>
                          <th>Conferencia</th>
                          <th>Division</th>
                        </tr>
                  <?php
                  while ($fila=$muestra->fetch_assoc()) {
                    echo "<tr>";
                      echo "<td>".$fila["Nombre"]."</td>";
                      echo "<td>".$fila["Ciudad"]."</td>";
                      echo "<td>".$fila["Conferencia"]."</td>";
                      echo "<td>".$fila["Division"]."</td>";
                    echo "</tr>";
                    }
                }elseif(isset($_POST) && (!empty($_POST))){

                    $insertar=$nba->InsertarEquipos($_POST["nombre"],$_POST["ciudad"],$_POST["conferencia"],$_POST["division"]);
                    ?>
                      <center>
                        <table border="1">
                          <tr>
                            <th>Nombre</th>
                            <th>Ciudad</th>
                            <th>Conferencia</th>
                            <th>Division</th>
                          </tr>


                    <?php
                    while ($fila=$insertar->fetch_assoc()) {
                      echo "<tr>";
                        echo "<td>".$fila["Nombre"]."</td>";
                        echo "<td>".$fila["Ciudad"]."</td>";
                        echo "<td>".$fila["Conferencia"]."</td>";
                        echo "<td>".$fila["Division"]."</td>";
                      echo "</tr>";
                      }

                    }
                }
      ?>
    </section>
  </body>
</html>
