<?php
 if(isset($_POST["employee_id"]))
 {
      $output = '';
      $connect = mysqli_connect("sql10.freemysqlhosting.net", "sql10210755", "I7zaxhTmYJ", "sql10210755");
      $query = "SELECT rutina.id as id, rutina.Nombre as nombre_rutina, cliente.nombre as cliente, ej1.nombre as ejercicio_1, ej2.nombre as ejercicio_2, ej3.nombre as ejercicio_3, ej4.nombre as ejercicio_4
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
      $output .= '
      <div class="table-responsive">
           <table class="table table-bordered">';
      while($row = mysqli_fetch_array($result))
      {
           $output .= '
                <tr>
                     <td width="30%"><label>Nombre de la rutina</label></td>
                     <td width="70%">'.$row["nombre_rutina"].'</td>
                </tr>
                 <tr>
                     <td width="30%"><label>Cliente</label></td>
                     <td width="70%">'.$row["cliente"].'</td>
                </tr>
                <tr>
                     <td width="30%"><label>Ejercicio 1</label></td>
                     <td width="70%">'.$row["ejercicio_1"].'</td>
                </tr>
                <tr>
                     <td width="30%"><label>Ejercicio 2</label></td>
                     <td width="70%">'.$row["ejercicio_2"].'</td>
                </tr>
                <tr>
                     <td width="30%"><label>Ejercicio 3</label></td>
                     <td width="70%">'.$row["ejercicio_3"].'</td>
                </tr>
                <tr>
                     <td width="30%"><label>Ejercicio 4</label></td>
                     <td width="70%">'.$row["ejercicio_4"].'</td>
                </tr>
           ';
      }
      $output .= '
           </table>
      </div>
      ';
      echo $output;
 }
 ?>
