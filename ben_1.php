<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>BENEFICIOS SEMANA 1</title>
  </head>
  <body>
    <?php
    include 'conexion.php';

    $beneficios1= new conexion();
    if ($beneficios1->getErrorConexion()==false) {
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
      // VENTAS SEMANA 1
      $ventasSemana1=0;
      $resultado1=$beneficios1->ventasSem(1);
      while ($fila1 = $resultado1->fetch_assoc()) {
      $ventasSemana1=$ventasSemana1+$fila1['venta'];

        // NO SALE BIEN
        /*echo "<tr>";
        echo "<td>".$fila1['venta']."</td>";*/

      }
      // VENTAS SEMANA 2
      $gastosSemana1=0;
      $resultado1=$beneficios1->gastosSem(1);
      while ($fila2 = $resultado1->fetch_assoc()) {
      $gastosSemana1=$gastosSemana1+$fila2['gasto'];

        // NO SALE BIEN
        /*echo "<td>".$fila2['gasto']."</td>";
        echo "</tr>";*/
      }
      echo "Las ventas de la SEMANA 1 son = ".$ventasSemana1."<br><br>";
      echo "Las gastos de la SEMANA 1 son = ".$gastosSemana1."<br><br>";;
      // BENEFICIOS SEMANA 1
      $beneficiossemana1= $ventasSemana1-$gastosSemana1;
      echo "Los beneficios de la SEMANA 1 es = <b>".$beneficiossemana1."</b>";
       ?>





     </table>
  </body>
</html>
