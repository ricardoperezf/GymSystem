<?php
 $connect = mysqli_connect("sql10.freemysqlhosting.net", "sql10210755", "I7zaxhTmYJ", "sql10210755");
 if(!empty($_POST))
 {
      $output = '';
      $message = '';
      $nombre = mysqli_real_escape_string($connect, $_POST["nombre"]);
      $descanso = mysqli_real_escape_string($connect, $_POST["descanso"]);
      $numero_series = mysqli_real_escape_string($connect, $_POST["numero_series"]);
      $numero_repeticiones = mysqli_real_escape_string($connect, $_POST["numero_repeticiones"]);

     if($_POST["employee_id"] != '')
      {
           $query = "
           UPDATE ejercicio
           SET nombre ='$nombre',
           descanso ='$descanso',
           numero_series ='$numero_series',
           numero_repeticiones = '$numero_repeticiones',
           WHERE id='".$_POST["employee_id"]."'
           ";
           $message = 'Data Updated';
      }
      else
      {
           $query = "
           INSERT INTO ejercicio(nombre, descanso, numero_series, numero_repeticiones) VALUES ('$nombre', '$descanso', '$numero_series', '$numero_repeticiones');
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
                            <th>Nombre del ejercicio</th>
                            <th>Descanso en minutos</th>
                            <th>Número de series</th>
                            <th>Repeticiones</th>
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
                                   ' . $row["descanso"] . '
                                </td>
                                <td>
                                    ' . $row["numero_series"] . '
                                </td>
                                <td>
                                    ' . $row["numero_repeticiones"] . '
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
