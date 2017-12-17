//siguiente funcion para encontrar los valores para editar
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
                console.log(data);
                console.log(data.clienteID);
                $('#elCliente').val(data.clienteID);
                $('#fechaDelPago').val(data.fechaPago);
                $('#montoDePago').val(data.monto);
                $('#employee_id').val(data.id);
                $('#insert').val("Editar");
                $('#add_data_Modal').modal('show');
            },
            error: function (jqXHR, exception) {
                error(jqXHR, exception, "EDITAR");
            }
        });
    });
    //siguiente funcion para agregar
    $('#insert_form').on("submit", function (event) {
        event.preventDefault();
        if ($('#elCliente').val() == "") {
            alert("elCliente is required");
        } else if ($('#fechaDelPago').val() == '') {
            alert("fechaDelPago is required");
        } else if ($('#montoDePago').val() == '') {
            alert("montoDePago is required");
        } else {
            $.ajax({
                url: "insert.php",
                method: "POST",
                data: $('#insert_form').serialize(),
                beforeSend: function () {
                    $('#insert').val("Ingresando");
                    console.log($('#elCliente').val());
                    console.log($('#fechaDelPago').val());
                    console.log($('#montoDePago').val());
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
    //siguiente funcion ver los datos
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
//funcion de reconocer error
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
