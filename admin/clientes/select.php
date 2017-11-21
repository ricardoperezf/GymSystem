<?php
 if(isset($_POST["employee_id"]))
 {
      $output = '';
      $connect = mysqli_connect("sql9.freemysqlhosting.net", "sql9206193", "yDz3nenNM4", "sql9206193");
      $query = "SELECT * FROM cliente WHERE id = '".$_POST["employee_id"]."'";
      $result = mysqli_query($connect, $query);
      $output .= '
      <div class="table-responsive">
           <table class="table table-bordered">';
      while($row = mysqli_fetch_array($result))
      {
           $output .= '
                <tr>
                     <td width="30%"><label>Nombre</label></td>
                     <td width="70%">'.$row["nombre"].'</td>
                </tr>
                <tr>
                     <td width="30%"><label>Cédula</label></td>
                     <td width="70%">'.$row["cedula"].'</td>
                </tr>
                <tr>
                     <td width="30%"><label>Dirección</label></td>
                     <td width="70%">'.$row["direccion"].'</td>
                </tr>
                 <tr>
                     <td width="30%"><label>Teléfono</label></td>
                     <td width="70%">'.$row["telefono"].'</td>
                </tr>
                <tr>
                     <td width="30%"><label>Usuario</label></td>
                     <td width="70%">'.$row["usuario"].'</td>
                </tr>
                 <tr>
                     <td width="30%"><label>Oficio</label></td>
                     <td width="70%">'.$row["oficio"].'</td>
                </tr>
                <tr>
                     <td width="30%"><label>Estatura</label></td>
                     <td width="70%">'.$row["estatura"].'</td>
                </tr>
                <tr>
                     <td width="30%"><label>Edad</label></td>
                     <td width="70%">'.$row["edad"].'</td>
                </tr>
                <tr>
                     <td width="30%"><label>Fecha de nacimiento</label></td>
                     <td width="70%">'.$row["fechadenacimiento"].'</td>
                </tr>
                 <tr>
                     <td width="30%"><label>Objetivos</label></td>
                     <td width="70%">'.$row["objetivos, "].'</td>
                </tr>
                                 <tr>
                     <td width="30%"><label>Hábitos alimenticios</label></td>
                     <td width="70%">'.$row["habito_alimenticio, "].'</td>
                </tr>
                                 <tr>
                     <td width="30%"><label>Fecha de nacimiento</label></td>
                     <td width="70%">'.$row["fechadenacimiento"].'</td>
                </tr>
                                 <tr>
                     <td width="30%"><label>Fecha de nacimiento</label></td>
                     <td width="70%">'.$row["fechadenacimiento"].'</td>
                </tr>
                                 <tr>
                     <td width="30%"><label>Fecha de nacimiento</label></td>
                     <td width="70%">'.$row["fechadenacimiento"].'</td>
                </tr>
                                 <tr>
                     <td width="30%"><label>Fecha de nacimiento</label></td>
                     <td width="70%">'.$row["fechadenacimiento"].'</td>
                </tr>
                                 <tr>
                     <td width="30%"><label>Fecha de nacimiento</label></td>
                     <td width="70%">'.$row["fechadenacimiento"].'</td>
                </tr>
                                 <tr>
                     <td width="30%"><label>Fecha de nacimiento</label></td>
                     <td width="70%">'.$row["fechadenacimiento"].'</td>
                </tr>
                                 <tr>
                     <td width="30%"><label>Fecha de nacimiento</label></td>
                     <td width="70%">'.$row["fechadenacimiento"].'</td>
                </tr>
                                 <tr>
                     <td width="30%"><label>Fecha de nacimiento</label></td>
                     <td width="70%">'.$row["fechadenacimiento"].'</td>
                </tr>
                                 <tr>
                     <td width="30%"><label>Fecha de nacimiento</label></td>
                     <td width="70%">'.$row["fechadenacimiento"].'</td>
                </tr>
                                 <tr>
                     <td width="30%"><label>Fecha de nacimiento</label></td>
                     <td width="70%">'.$row["fechadenacimiento"].'</td>
                </tr>
                                 <tr>
                     <td width="30%"><label>Fecha de nacimiento</label></td>
                     <td width="70%">'.$row["fechadenacimiento"].'</td>
                </tr>
                                 <tr>
                     <td width="30%"><label>Fecha de nacimiento</label></td>
                     <td width="70%">'.$row["fechadenacimiento"].'</td>
                </tr>
                                 <tr>
                     <td width="30%"><label>Fecha de nacimiento</label></td>
                     <td width="70%">'.$row["fechadenacimiento"].'</td>
                </tr>
                                 <tr>
                     <td width="30%"><label>Fecha de nacimiento</label></td>
                     <td width="70%">'.$row["fechadenacimiento"].'</td>
                </tr>
                                 <tr>
                     <td width="30%"><label>Fecha de nacimiento</label></td>
                     <td width="70%">'.$row["fechadenacimiento"].'</td>
                </tr>
                                 <tr>
                     <td width="30%"><label>Fecha de nacimiento</label></td>
                     <td width="70%">'.$row["fechadenacimiento"].'</td>
                </tr>
                                 <tr>
                     <td width="30%"><label>Fecha de nacimiento</label></td>
                     <td width="70%">'.$row["fechadenacimiento"].'</td>
                </tr>
                                 <tr>
                     <td width="30%"><label>Fecha de nacimiento</label></td>
                     <td width="70%">'.$row["fechadenacimiento"].'</td>
                </tr>
                                 <tr>
                     <td width="30%"><label>Fecha de nacimiento</label></td>
                     <td width="70%">'.$row["fechadenacimiento"].'</td>
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
