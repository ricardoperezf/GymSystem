<?php
 if(isset($_POST["employee_id"]))
 {
      $output = '';
      $connect = mysqli_connect("sql10.freemysqlhosting.net", "sql10209158", "Yt5kKkrRBk", "sql10209158");
      $query = "SELECT cliente.nombre as nombre, monto, fecha, fecha_vencimiento
      FROM `pago`
      INNER JOIN cliente
      WHERE pago.cliente = cliente.id AND '".$_POST["employee_id"]."' = pago.id";
      $result = mysqli_query($connect, $query);
      $output .= '
      <div class="table-responsive">
           <table class="table table-bordered">';
      while($row = mysqli_fetch_array($result))
      {
           $output .= '
                <tr>
                     <td width="30%"><label>Nombre del cliente</label></td>
                     <td width="70%">'.$row["nombre"].'</td>
                </tr>
                 <tr>
                     <td width="30%"><label>Monto</label></td>
                     <td width="70%">'.$row["monto"].'</td>
                </tr>
                <tr>
                     <td width="30%"><label>Fecha de pago</label></td>
                     <td width="70%">'.$row["fecha"].'</td>
                </tr>
                <tr>
                      <td width="30%"><label>Fecha de vencimiento</label></td>
                     <td width="70%">'.$row["fecha_vencimiento"].'</td>
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
