<?php
 $connect = mysqli_connect("sql9.freemysqlhosting.net", "sql9200504", "DrJNGNuW6E", "sql9200504");
 if(!empty($_POST))
 {
      $output = '';
      $message = '';
      $nombreDelCliente = mysqli_real_escape_string($connect, $_POST["nombreDelCliente"]);
      $cedula = mysqli_real_escape_string($connect, $_POST["cedula"]);
      $direccion = mysqli_real_escape_string($connect, $_POST["direccion"]);
      $telefono = mysqli_real_escape_string($connect, $_POST["telefono"]);
      $oficio = mysqli_real_escape_string($connect, $_POST["oficio"]);
      $estatura = mysqli_real_escape_string($connect, $_POST["estatura"]);
      $edad = mysqli_real_escape_string($connect, $_POST["edad"]);
      $FechaDeNacimiento = mysqli_real_escape_string($connect, $_POST["FechaDeNacimiento"]);
      $objetivos = mysqli_real_escape_string($connect, $_POST["objetivos"]);
      $habitosAlimenticios = mysqli_real_escape_string($connect, $_POST["habitosAlimenticios"]);
      $enfermedadesYLesiones = mysqli_real_escape_string($connect, $_POST["enfermedadesYLesiones"]);
      $fuma = mysqli_real_escape_string($connect, $_POST["fuma"]);
      $toma = mysqli_real_escape_string($connect, $_POST["toma"]);
      $hipertenso = mysqli_real_escape_string($connect, $_POST["hipertenso"]);
      $cirugias = mysqli_real_escape_string($connect, $_POST["cirugias"]);
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
           UPDATE cursos
           SET nombre_curso='$nombreDelCurso',
           id_profesor='$tipoDeProfesor',
           id_estudiante='$tipoDeEstudiante',
           tipo_equipo = '$tipoDeEquipo'
           WHERE id='".$_POST["employee_id"]."'";
           $message = 'Data Updated';
      }
      else
      {
           $query = "
           INSERT INTO cursos(nombre_curso, id_profesor, id_estudiante, tipo_equipo)
           VALUES('$nombreDelCurso', '$tipoDeProfesor', '$tipoDeEstudiante', '$tipoDeEquipo');
           ";
           $message = 'Data Inserted';
      }

      if(mysqli_query($connect, $query))
      {
           $output .= '<script>$(document).ready(function () {
                        alert("Data inserted!");
                        });</script>';
           $select_query = "SELECT cursos.id AS id, cursos.nombre_curso AS nombre, CONCAT(profesores.primer_nombre, ' ', profesores.primer_apellido) AS profesor, CONCAT(estudiantes.primer_nombre,' ', estudiantes.primer_apellido) AS estudiante, cursos.tipo_equipo AS tipo_equipo FROM cursos cursos INNER JOIN profesor profesores INNER JOIN estudiante estudiantes WHERE cursos.id_profesor = profesores.id AND cursos.id_estudiante = estudiantes.id ORDER BY id DESC";
           $result = mysqli_query($connect, $select_query);
           $output .= '
                <table class="table table-bordered">
                    <thead>
                        <th width="10%" class="text-center">Tipo de equipo</th>
                        <th width="20%" class="text-center">Nombre del curso</th>
                        <th width="20%" class="text-center">Profesor</th>
                        <th width="20%" class="text-center">Estudiante</th>
                        <th width="30%" class="text-center" id="actions">Actions</th>
                    </thead>
           ';
           while($row = mysqli_fetch_array($result))
           {
                $output .= '
                     <tbody>
                            <tr>
                                <td>
                                    ' . $row["tipo_equipo"] . '
                                </td>
                                <td>
                                   ' . $row["nombre"] . '
                                </td>
                                <td>
                                    ' . $row["profesor"] . '
                                </td>
                                <td>
                                    ' . $row["estudiante"] . '
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
