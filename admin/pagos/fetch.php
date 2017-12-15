<?php
 //fetch.php
$connect = mysqli_connect("sql10.freemysqlhosting.net", "sql10210755", "I7zaxhTmYJ", "sql10210755");
 if(isset($_POST["employee_id"]))
 {
      //$query = "SELECT * FROM pago WHERE id = '".$_POST["employee_id"]."'";
     $query = "SELECT pago.id as id, cliente.id as clienteID, cliente.nombre as nombre, pago.monto as monto, pago.fecha as fechaPago, pago.fecha_vencimiento as venc
      FROM `pago`
      INNER JOIN cliente
      WHERE pago.cliente = cliente.id AND '".$_POST["employee_id"]."' = pago.id";
      $result = mysqli_query($connect, $query);
      $row = mysqli_fetch_array($result);
      echo json_encode($row);
 }
 ?>
