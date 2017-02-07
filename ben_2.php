<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>BENEFICIOS SEMANA 2</title>
  </head>
  <body>
    <?php
    include 'conexion.php';

    $beneficios2= new conexion();
    if ($beneficios2->getErrorConexion()==false) {
      // echo "Funciona";
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
      // VENTAS SEMANA 2
      $ventasSemana2=0;
      $resultado1=$beneficios2->ventasSem(2);
      while ($fila1 = $resultado1->fetch_assoc()) {
      $ventasSemana2=$ventasSemana2+$fila1['venta'];

        // NO SALE BIEN
        /*echo "<tr>";
        echo "<td>".$fila1['venta']."</td>";*/

      }
      // GASTOS SEMANA 2
      $gastosSemana2=0;
      $resultado1=$beneficios2->gastosSem(2);
      while ($fila2 = $resultado1->fetch_assoc()) {
      $gastosSemana2=$gastosSemana2+$fila2['gasto'];

        // NO SALE BIEN
        /*echo "<td>".$fila2['gasto']."</td>";
        echo "</tr>";*/
      }

      echo "Las ventas de la SEMANA 2 son = ".$ventasSemana2."<br><br>";
      echo "Las gastos de la SEMANA 2 son = ".$gastosSemana2."<br><br>";;
      // BENEFICIOS SEMANA 2
      $beneficiossemana2= $ventasSemana2-$gastosSemana2;
      echo "Los beneficios de la SEMANA 1 es = <b>".$beneficiossemana2."</b>";
       ?>

  </body>
</html>
