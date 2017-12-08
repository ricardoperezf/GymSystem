<?php
 if(isset($_POST["employee_id"]))
 {
      $output = '';
      $connect = mysqli_connect("sql10.freemysqlhosting.net", "sql10209158", "Yt5kKkrRBk", "sql10209158");
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
                     <td width="70%">'.$row["objetivos"].'</td>
                </tr>
                                 <tr>
                     <td width="30%"><label>Hábitos alimenticios</label></td>
                     <td width="70%">'.$row["habito_alimenticio"].'</td>
                </tr>
                 <tr>
                     <td width="30%"><label>Enfermedades y lesiones</label></td>
                     <td width="70%">'.$row["enfermedades_lesiones"].'</td>
                </tr>
                                 <tr>
                     <td width="30%"><label>Fuma</label></td>
                     <td width="70%">'.$row["fuma"].'</td>
                </tr>
                                 <tr>
                     <td width="30%"><label>Toma</label></td>
                     <td width="70%">'.$row["toma"].'</td>
                </tr>
                                 <tr>
                     <td width="30%"><label>Hipertenso</label></td>
                     <td width="70%">'.$row["hipertenso"].'</td>
                </tr>
                                 <tr>
                     <td width="30%"><label>Cirugías en el último año</label></td>
                     <td width="70%">'.$row["cirugias_ultimo_ano"].'</td>
                </tr>
                                 <tr>
                     <td width="30%"><label>Peso</label></td>
                     <td width="70%">'.$row["peso"].'</td>
                </tr>
                <tr>
                     <td width="30%"><label>Porcentaje de grasa</label></td>
                     <td width="70%">'.$row["porcentaje_grasa"].'</td>
                </tr>
                <tr>
                     <td width="30%"><label>Porcentaje de agua</label></td>
                     <td width="70%">'.$row["porcentaje_agua"].'</td>
                </tr>
                <tr>
                     <td width="30%"><label>IMC</label></td>
                     <td width="70%">'.$row["imc"].'</td>
                </tr>
                                 <tr>
                     <td width="30%"><label>Pecho</label></td>
                     <td width="70%">'.$row["pecho"].'</td>
                </tr>
                                 <tr>
                     <td width="30%"><label>Espalda</label></td>
                     <td width="70%">'.$row["espalda"].'</td>
                </tr>
                                 <tr>
                     <td width="30%"><label>Brazo</label></td>
                     <td width="70%">'.$row["brazo"].'</td>
                </tr>
                                 <tr>
                     <td width="30%"><label>Cintura</label></td>
                     <td width="70%">'.$row["cintura"].'</td>
                </tr>
                                 <tr>
                     <td width="30%"><label>Abdomen</label></td>
                     <td width="70%">'.$row["abdomen"].'</td>
                </tr>
                                 <tr>
                     <td width="30%"><label>Cadera</label></td>
                     <td width="70%">'.$row["cadera"].'</td>
                </tr>
                                 <tr>
                     <td width="30%"><label>Muslo</label></td>
                     <td width="70%">'.$row["muslo"].'</td>
                </tr>
                                 <tr>
                     <td width="30%"><label>Pantorrila</label></td>
                     <td width="70%">'.$row["pantorrilla"].'</td>
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
