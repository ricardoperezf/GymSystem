<?php
 //fetch.php
$connect = mysqli_connect("sql9.freemysqlhosting.net", "sql9206193", "yDz3nenNM4", "sql9206193");
 if(isset($_POST["employee_id"]))
 {
      $query = "SELECT * FROM cliente WHERE id = '".$_POST["employee_id"]."'";
      $result = mysqli_query($connect, $query);
      $row = mysqli_fetch_array($result);
      echo json_encode($row);
 }
 ?>
