<?php
 $connect = mysqli_connect("sql10.freemysqlhosting.net", "sql10209158", "Yt5kKkrRBk", "sql10209158");
 if(!empty($_POST))
 {
      $output = '';
      $message = '';
      $nombreDelCliente = mysqli_real_escape_string($connect, $_POST["nombreDelCliente"]);
      $fechaDePago = mysqli_real_escape_string($connect, $_POST["fechaDePago"]);
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
           $select_query = "SELECT id, nombre, cedula, direccion, telefono, oficio, estatura, edad FROM cliente";
           $result = mysqli_query($connect, $select_query);
           $output .= '
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Cédula</th>
                            <th>Dirección</th>
                            <th>Teléfono</th>
                            <th>Edad</th>
                            <th>Oficio</th>
                            <th>Estatura</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
           ';
           while($row = mysqli_fetch_array($result))
           {
                $output .= '
                     <tbody>
                            <tr>
                                <td>
                                    ' . $row["nombre"] . '
                                </td>
                                <td>
                                   ' . $row["cedula"] . '
                                </td>
                                <td>
                                    ' . $row["direccion"] . '
                                </td>
                                <td>
                                    ' . $row["telefono"] . '
                                </td>
                                <td>
                                    ' . $row["edad"] . '
                                </td>
                                <td>
                                    ' . $row["oficio"] . '
                                </td>
                                <td>
                                    ' . $row["estatura"] . '
                                </td>
                                <td>
                                   <div class="btn-group" role="group" style="width:200px">
                                        <input type="button" name="select" value="Ver"  id="' . $row["id"] . '" class="btn btn-primary view_data" />
                                        <input type="button" name="edit" value="Editar" id="' . $row["id"] . '" class="btn btn-info edit_data" />
                                        <input type="button" value="Eliminar" id="' . $row["id"] . '" class="btn btn-primary delete_class" />
                                    </div>
                                </td>
                            </tr>
                     </tbody>
                ';
           }
           $output .= '</table>';
      }
      echo $output;
 }
 ?>
