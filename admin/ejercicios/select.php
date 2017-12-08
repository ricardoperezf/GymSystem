<?php
 if(isset($_POST["employee_id"]))
 {
      $output = '';
      $connect = mysqli_connect("sql10.freemysqlhosting.net", "sql10209158", "Yt5kKkrRBk", "sql10209158");
      $query = "SELECT * FROM ejercicio WHERE id = '".$_POST["employee_id"]."'";
      $result = mysqli_query($connect, $query);
      $output .= '
      <div class="table-responsive">
           <table class="table table-bordered">';
      while($row = mysqli_fetch_array($result))
      {
           $output .= '
                <tr>
                     <td width="30%"><label>Nombre del ejercicio</label></td>
                     <td width="70%">'.$row["nombre"].'</td>
                </tr>
                <tr>
                     <td width="30%"><label>Descanso en minutos</label></td>
                     <td width="70%">'.$row["descanso"].'</td>
                </tr>
                <tr>
                     <td width="30%"><label>Número de series</label></td>
                     <td width="70%">'.$row["numero_series"].'</td>
                </tr>
                 <tr>
                     <td width="30%"><label>Número de repeticiones</label></td>
                     <td width="70%">'.$row["numero_repeticiones"].'</td>
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
