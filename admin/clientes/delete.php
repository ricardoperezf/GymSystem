<?php

$connect = mysqli_connect("sql10.freemysqlhosting.net", "sql10210755", "I7zaxhTmYJ", "sql10210755");

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
