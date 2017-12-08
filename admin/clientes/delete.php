<?php

$connect = mysqli_connect("sql10.freemysqlhosting.net", "sql10209158", "Yt5kKkrRBk", "sql10209158");

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
