<?php

$connect = mysqli_connect("sql9.freemysqlhosting.net", "sql9206193", "yDz3nenNM4", "sql9206193");

    $id = $_POST['delete_id'];
    $query = "delete from cliente where id = $id";
      $output = '';

    if(mysqli_query($connect, $query)){
         $output .= '<script>$(document).ready(function () {
                        alert("Data eliminated!");
                        });</script>';
    } else{
         $output .= '<script>$(document).ready(function () {
                        alert("It couldnt delete!");
                        });</script>';
    }
     echo $output;
?>
