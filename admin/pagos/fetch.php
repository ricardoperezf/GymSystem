<?php
 //fetch.php
$connect = mysqli_connect("sql10.freemysqlhosting.net", "sql10209158", "Yt5kKkrRBk", "sql10209158");
 if(isset($_POST["employee_id"]))
 {
      //$query = "SELECT * FROM pago WHERE id = '".$_POST["employee_id"]."'";
     $query = "SELECT cliente.nombre as nombre, monto, fecha, fecha_vencimiento FROM `pago` INNER JOIN cliente WHERE '".$_POST["employee_id"]."' = pago.cliente";
      $result = mysqli_query($connect, $query);
      $row = mysqli_fetch_array($result);
      echo json_encode($row);
 }
 ?>
