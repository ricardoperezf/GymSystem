<?php
 //fetch.php
$connect = mysqli_connect("sql10.freemysqlhosting.net", "sql10210755", "I7zaxhTmYJ", "sql10210755");
 if(isset($_POST["employee_id"]))
 {
      $query = "SELECT * FROM cliente WHERE id = '".$_POST["employee_id"]."'";
      $result = mysqli_query($connect, $query);
      $row = mysqli_fetch_array($result);
      echo json_encode($row);
 }
 ?>
