<?php
 $connect = mysqli_connect("sql10.freemysqlhosting.net", "sql10209158", "Yt5kKkrRBk", "sql10209158");
 if(!empty($_POST))
 {
      $output = '';
      $message = '';
      $nombreDelCliente = mysqli_real_escape_string($connect, $_POST["nombreDelCliente"]);
      $cedula = mysqli_real_escape_string($connect, $_POST["cedula"]);
      $direccion = mysqli_real_escape_string($connect, $_POST["direccion"]);
      $telefono = mysqli_real_escape_string($connect, $_POST["telefono"]);
      $usuario = $nombreDelCliente;
      $contrasena = $nombreDelCliente;
      $oficio = mysqli_real_escape_string($connect, $_POST["oficio"]);
      $estatura = mysqli_real_escape_string($connect, $_POST["estatura"]);
      $edad = mysqli_real_escape_string($connect, $_POST["edad"]);
      $fechaDeNacimiento = mysqli_real_escape_string($connect, $_POST["fechaDeNacimiento"]);
      $objetivos = mysqli_real_escape_string($connect, $_POST["objetivos"]);
      $habitosAlimenticios = mysqli_real_escape_string($connect, $_POST["habitosAlimenticios"]);
      $enfermedadesYLesiones = mysqli_real_escape_string($connect, $_POST["enfermedadesYLesiones"]);
      $fuma = mysqli_real_escape_string($connect, $_POST["fuma"]);
      $toma = mysqli_real_escape_string($connect, $_POST["toma"]);
      $hipertenso = mysqli_real_escape_string($connect, $_POST["hipertenso"]);
      $cirugias = mysqli_real_escape_string($connect, $_POST["cirugias"]);
      $peso = mysqli_real_escape_string($connect, $_POST["peso"]);
      $porcentajeDeGrasa = mysqli_real_escape_string($connect, $_POST["porcentajeDeGrasa"]);
      $porcentajeDeAgua = mysqli_real_escape_string($connect, $_POST["porcentajeDeAgua"]);
      $imc = mysqli_real_escape_string($connect, $_POST["imc"]);
      $pecho = mysqli_real_escape_string($connect, $_POST["pecho"]);
      $espalda = mysqli_real_escape_string($connect, $_POST["espalda"]);
      $brazo = mysqli_real_escape_string($connect, $_POST["brazo"]);
      $cintura = mysqli_real_escape_string($connect, $_POST["cintura"]);
      $abdomen = mysqli_real_escape_string($connect, $_POST["abdomen"]);
      $cadera = mysqli_real_escape_string($connect, $_POST["cadera"]);
      $muslo = mysqli_real_escape_string($connect, $_POST["muslo"]);
      $pantorrilla = mysqli_real_escape_string($connect, $_POST["pantorrilla"]);

     if($_POST["employee_id"] != '')
      {
           $query = "
           UPDATE cliente
           SET nombre ='$nombreDelCliente',
           cedula ='$cedula',
           direccion ='$direccion',
           telefono = '$telefono',
           oficio = '$oficio',
           estatura = '$estatura',
           edad = '$edad',
           fechadenacimiento = '$fechaDeNacimiento',
           objetivos = '$objetivos',
           habito_alimenticio = '$habitosAlimenticios',
           enfermedades_lesiones = '$enfermedadesYLesiones',
           fuma = '$fuma',
           toma = '$toma',
           hipertenso = '$hipertenso',
           cirugias_ultimo_ano = '$cirugias',
           peso = '$peso',
           porcentaje_grasa = '$porcentajeDeGrasa',
           porcentaje_agua = '$porcentajeDeAgua',
           imc = '$imc',
           pecho = '$pecho',
           espalda = '$espalda',
           brazo = '$brazo',
           cintura = '$cintura',
           abdomen = '$abdomen',
           cadera = '$cadera',
           muslo = '$muslo',
           pantorrilla = '$pantorrilla'
           WHERE id='".$_POST["employee_id"]."'";
           $message = 'Data Updated';
      }
      else
      {
           $query = "
           INSERT INTO cliente(nombre, cedula, direccion, telefono, usuario, contrasena, oficio, estatura, edad, fechadenacimiento, objetivos, habito_alimenticio, enfermedades_lesiones, fuma, toma, hipertenso, cirugias_ultimo_ano, peso, porcentaje_grasa, porcentaje_agua, imc, pecho, espalda, brazo, cintura, abdomen, cadera, muslo, pantorrilla) VALUES ('$nombreDelCliente', '$cedula', '$direccion', '$telefono', '$usuario', '$contrasena', '$oficio', '$estatura', '$edad', '$fechaDeNacimiento', '$objetivos', '$habitosAlimenticios', '$enfermedadesYLesiones', '$fuma', '$toma', '$hipertenso', '$cirugias', '$peso', '$porcentajeDeGrasa', '$porcentajeDeAgua', '$imc', '$pecho', '$espalda', '$brazo', '$cintura', '$abdomen', '$cadera', '$muslo', '$pantorrilla');
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
