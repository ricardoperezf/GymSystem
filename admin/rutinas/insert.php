<?php
 $connect = mysqli_connect("sql10.freemysqlhosting.net", "sql10210755", "I7zaxhTmYJ", "sql10210755");
 if(!empty($_POST))
 {
      $output = '';
      $message = '';
      $nombreDelCliente = mysqli_real_escape_string($connect, $_POST["elCliente"]);
      $nombreDeLaRutina = mysqli_real_escape_string($connect, $_POST["nombreDeLaRutina"]);
      $ejercicio1 = mysqli_real_escape_string($connect, $_POST["ejercicio1"]);
      $ejercicio2 = mysqli_real_escape_string($connect, $_POST["ejercicio2"]);
      $ejercicio3 = mysqli_real_escape_string($connect, $_POST["ejercicio3"]);
      $ejercicio4 = mysqli_real_escape_string($connect, $_POST["ejercicio4"]);

     if($_POST["employee_id"] != '')
      {
           $query = "
           UPDATE rutina
           SET Nombre ='$nombreDeLaRutina',
           id_cliente = '$nombreDelCliente',
           id_ejerc1 ='$ejercicio1',
           id_ejerc2 ='$ejercicio2',
           id_ejerc3 ='$ejercicio3',
           id_ejerc4 ='$ejercicio4'
           WHERE id= '".$_POST["employee_id"]."'";
           $message = 'Data Updated';
      }
      else
      {
           $query = "
           INSERT INTO rutina(Nombre, id_cliente, id_ejerc1, id_ejerc2, id_ejerc3, id_ejerc4) VALUES ('$nombreDeLaRutina', '$nombreDelCliente', '$ejercicio1', '$ejercicio2', '$ejercicio3', '$ejercicio4');
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
