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
                  $('#nombreDeLaRutina').val(data.nombre_rutina);
                  $('#elCliente').val(data.cliente_id);
                  $('#ejercicio1').val(data.ejid1);
                  $('#ejercicio2').val(data.ejid2);
                  $('#ejercicio3').val(data.ejid3);
                  $('#ejercicio4').val(data.ejid4);
                  $('#insert').val("Editar");
                  $('#add_data_Modal').modal('show');
              },
              error: function (jqXHR, exception) {
                  error(jqXHR, exception, "EDITAR");
              }
          });
      });
      $('#insert_form').on("submit", function (event) {
          event.preventDefault();
          if ($('#elCliente').val() == "") {
              alert("elCliente is required");
          } else if ($('#nombreDeLaRutina').val() == '') {
              alert("nombreDeLaRutina is required");
          } else if ($('#ejercicio1').val() == '') {
              alert("ejercicio 1 is required");
          } else if ($('#ejercicio2').val() == '') {
              alert("ejercicio 2 is required");
          } else if ($('#ejercicio3').val() == '') {
              alert("ejercicio 3 is required");
          } else if ($('#ejercicio4').val() == '') {
              alert("ejercicio 4 is required");
          } else {
              $.ajax({
                  url: "insert.php",
                  method: "POST",
                  data: $('#insert_form').serialize(),
                  beforeSend: function () {
                      $('#insert').val("Ingresando");
                      console.log($('#elCliente').val());
                      console.log($('#nombreDeLaRutina').val());
                      console.log($('#employee_id').val());
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
