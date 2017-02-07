<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TOTAL</title>
  </head>
  <body>
      <?php
      include 'conexion.php';

      $empresa= new conexion();
      if ($empresa->getErrorConexion()==false) {
        //echo "Funciona";
      }
      ?>
    <!-- MENU -->
    <a href="index.php"><h1>INICIO</h1>
    <a href="total.php">TOTAL</a>
    <a href="ben_1.php">BENEFICIOS 1</a>
    <a href="ben_2.php">BENEFICIOS 2</a>
    <hr>
    <!-- MENU -->


      <?php
      // TOTAL VENTAS
      $totalventas=0;

      $resultado1 = $empresa->ventas();
      while ($fila1=$resultado1->fetch_assoc()) {
      $totalventas=$totalventas+$fila1['venta'];

      }
       echo "El total de las ventas es = <b>".$totalventas."</b><br><br>";


      // TOTAL GASTOS
      $totalgastos=0;

      $resultado2=$empresa->gastos();
      while ($fila2=$resultado2->fetch_assoc()) {
      $totalgastos=$totalgastos+$fila2['gasto'];

      }
       echo "El total de gastos es = <b>".$totalgastos."</b>";


       ?>

  </body>
</html>
