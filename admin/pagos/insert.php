<?php
 $connect = mysqli_connect("sql10.freemysqlhosting.net", "sql10210755", "I7zaxhTmYJ", "sql10210755");
 if(!empty($_POST))
 {
      $output = '';
      $message = '';
      $nombreDelCliente = mysqli_real_escape_string($connect, $_POST["elCliente"]);
      $fechaDePago = mysqli_real_escape_string($connect, $_POST["fechaDelPago"]);
      $montoDePago = mysqli_real_escape_string($connect, $_POST["montoDePago"]);

     if($_POST["employee_id"] != '')
      {
           $query = "
           UPDATE pago
           SET fecha ='$fechaDePago',
           fecha_vencimiento ='$fechaDePago',
           monto ='$montoDePago',
           cliente ='$nombreDelCliente',
           WHERE id='".$_POST["employee_id"]."'";
           $message = 'Data Updated';
      }
      else
      {
           $query = "
           INSERT INTO pago(fecha, fecha_vencimiento, monto, cliente) VALUES ('$fechaDePago', '$fechaDePago', '$montoDePago', '$nombreDelCliente');
           ";
           $message = 'Data Inserted';
      }

      if(mysqli_query($connect, $query))
      {
           $output .= '<script>$(document).ready(function () {
                        alert("Data inserted!");
                        });</script>';
      } else{
          $output .= '<script>$(document).ready(function () {
                        alert("Data inserted!");
                        });</script>';
      }
      echo $output;
 }
 ?>
