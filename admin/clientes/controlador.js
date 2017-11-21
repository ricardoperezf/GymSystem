  $(document).ready(function () {
      $('#add').click(function () {
          $('#insert').val("Insert");
          $('#insert_form')[0].reset();
      });
      $(document).on('click', '.edit_data', function () {
          var employee_id = $(this).attr("id");
          $.ajax({
              url: "fetch.php",
              method: "POST",
              data: {
                  employee_id: employee_id
              },
              dataType: "json",
              success: function (data) {
                  $('#nombreDelCliente').val(data.nombre);
                  $('#cedula').val(data.cedula);
                  $('#direccion').val(data.direccion);
                  $('#telefono').val(data.telefono);
                  $('#oficio').val(data.oficio);
                  $('#estatura').val(data.estatura);
                  $('#edad').val(data.edad);
                  $('#fechaDeNacimiento').val(data.fechadenacimiento);
                  $('#objetivos').val(data.objetivos);
                  $('#habitosAlimenticios').val(data.habito_alimenticio);
                  $('#enfermedadesYLesiones').val(data.enfermedades_lesiones);
                  $('#fuma').val(data.fuma);
                  $('#toma').val(data.toma);
                  $('#hipertenso').val(data.hipertenso);
                  $('#cirugias').val(data.cirugias_ultimo_ano);
                  $('#peso').val(data.peso);
                  $('#porcentajeDeGrasa').val(data.porcentaje_grasa);
                  $('#porcentajeDeAgua').val(data.porcentaje_agua);
                  $('#imc').val(data.imc);
                  $('#pecho').val(data.pecho);
                  $('#espalda').val(data.espalda);
                  $('#brazo').val(data.brazo);
                  $('#cintura').val(data.cintura);
                  $('#abdomen').val(data.abdomen);
                  $('#cadera').val(data.cadera);
                  $('#muslo').val(data.muslo);
                  $('#pantorrilla').val(data.pantorrilla);


                  $('#employee_id').val(data.id);
                  $('#insert').val("Update");
                  $('#add_data_Modal').modal('show');
              }
          });
      });
      $('#insert_form').on("submit", function (event) {
          event.preventDefault();
          if ($('#nombreDelCliente').val() == "") {
              alert("Name is required");
          } else if ($('#cedula').val() == '') {
              alert("cedula is required");
          } else if ($('#direccion').val() == '') {
              alert("direccion is required");
          } else if ($('#telefono').val() == '') {
              alert("telefono is required");
          } else if ($('#oficio').val() == '') {
              alert("oficio is required");
          } else if ($('#estatura').val() == '') {
              alert("estatura is required");
          } else if ($('#edad').val() == '') {
              alert("edad is required");
          } else if ($('#fechaDeNacimientos').val() == '') {
              alert("FechaDeNacimiento is required");
          } else if ($('#objetivos').val() == '') {
              alert("objetivos is required");
          } else if ($('#habitosAlimenticios').val() == '') {
              alert("habitosAlimenticios is required");
          } else if ($('#enfermedadesYLesiones').val() == '') {
              alert("enfermedadesYLesiones is required");
          } else if ($('#fuma').val() == '') {
              alert("fuma is required");
          } else if ($('#toma').val() == '') {
              alert("toma is required");
          } else if ($('#hipertenso').val() == '') {
              alert("hipertenso is required");
          } else if ($('#cirugias').val() == '') {
              alert("cirugias is required");
          } else if ($('#peso').val() == '') {
              alert("peso is required");
          } else if ($('#porcentajeDeGrasa').val() == '') {
              alert("porcentajeDeGrasa is required");
          } else if ($('#porcentajeDeAgua').val() == '') {
              alert("porcentajeDeAgua is required");
          } else if ($('#imc').val() == '') {
              alert("imc is required");
          } else if ($('#pecho').val() == '') {
              alert("pecho is required");
          } else if ($('#cintura').val() == '') {
              alert("cintura is required");
          } else if ($('#brazo').val() == '') {
              alert("brazo is required");
          } else if ($('#abdomen').val() == '') {
              alert("abdomen is required");
          } else if ($('#cadera').val() == '') {
              alert("cadera is required");
          } else if ($('#muslo').val() == '') {
              alert("muslo is required");
          } else if ($('#pantorrilla').val() == '') {
              alert("pantorrilla is required");
          } else {
              $.ajax({
                  url: "insert.php",
                  method: "POST",
                  data: $('#insert_form').serialize(),
                  beforeSend: function () {
                      $('#insert').val("Ingresando");
                  },
                  success: function (data) {
                      $('#insert_form')[0].reset();
                      $('#add_data_Modal').modal('hide');
                      $('#employee_table').html(data);
                      location.reload(true);

                  },
                  error: function (jqXHR, exception) {
                      error(jqXHR, exception, "INSERTAR");
                  }
              });
          }
      });
      $(document).on('click', '.view_data', function () {
          var employee_id = $(this).attr("id");
          if (employee_id != '') {
              $.ajax({
                  url: "select.php",
                  method: "POST",
                  data: {
                      employee_id: employee_id
                  },
                  success: function (data) {
                      $('#employee_detail').html(data);
                      $('#dataModal').modal('show');
                  }
              });
          }
      });
  });


  function deleteData(str) {
      var id = str;
      $.ajax({
          type: "GET",
          url: "delete.php",
          data: "id=" + id,
          success: function (data) {

          },
          error: function (jqXHR, exception) {
              error(jqXHR, exception, "ELIMINAR");
          }
      });
  }

  function error(jqXHR, exception, tipo) {
      var msg = '';
      if (jqXHR.status === 0) {
          msg = 'Not connect.\n Verify Network.';
      } else if (jqXHR.status == 404) {
          msg = 'Requested page not found. [404]';
      } else if (jqXHR.status == 500) {
          msg = 'Internal Server Error [500].';
      } else if (exception === 'parsererror') {
          msg = 'Requested JSON parse failed.';
      } else if (exception === 'timeout') {
          msg = 'Time out error.';
      } else if (exception === 'abort') {
          msg = 'Ajax request aborted.';
      } else {
          msg = 'Uncaught Error.\n' + jqXHR.responseText;
      }
      alert('ERROR: in ' + '[' + tipo + '] ' + msg);
      $('#add_data_Modal').modal('hide');
  }
