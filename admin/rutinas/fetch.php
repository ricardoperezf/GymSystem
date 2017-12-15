<?php
 //fetch.php
$connect = mysqli_connect("sql10.freemysqlhosting.net", "sql10210755", "I7zaxhTmYJ", "sql10210755");
 if(isset($_POST["employee_id"]))
 {
      //$query = "SELECT * FROM pago WHERE id = '".$_POST["employee_id"]."'";
     $query = "SELECT rutina.id as id, rutina.Nombre as nombre_rutina, cliente.id as cliente_id, cliente.nombre as cliente, ej1.nombre as ejercicio_1, ej2.nombre as ejercicio_2, ej3.nombre as ejercicio_3, ej4.nombre as ejercicio_4
     FROM `rutina`
     INNER JOIN ejercicio ej1
     INNER JOIN ejercicio ej2
     INNER JOIN ejercicio ej3
     INNER JOIN ejercicio ej4
     INNER JOIN cliente
     WHERE rutina.id_cliente = cliente.id
     AND rutina.id_ejerc1 = ej1.id
     AND rutina.id_ejerc2 = ej2.id
     AND rutina.id_ejerc3 = ej3.id
     AND rutina.id_ejerc4 = ej4.id
     AND '".$_POST["employee_id"]."' = rutina.id";
      $result = mysqli_query($connect, $query);
      $row = mysqli_fetch_array($result);
      echo json_encode($row);
 }
 ?>
