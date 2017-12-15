<?php
    session_start();

    if(isset($_SESSION['usuario'])){
        if($_SESSION['usuario']['usuario'] == 'admin'){
        }
    } else {
        header('Location: ../../index.php');
    }

require_once '../../php/conexion.php';
 $query = "SELECT rutina.Nombre, cliente.nombre as cliente, ejercicio.nombre as ejercicio1, ejercicio.nombre as ejercicio2, ejercicio.nombre as ejercicio3 FROM `rutina` INNER JOIN cliente INNER JOIN ejercicio WHERE rutina.id_cliente = cliente.id AND rutina.id_ejerc1 = ejercicio.id AND rutina.id_ejerc2 = ejercicio.id AND rutina.id_ejerc3 = ejercicio.id";
 $result = mysqli_query($mysqli, $query);

$queryClientes = "SELECT * FROM cliente";
 $resultClientes = mysqli_query($mysqli, $queryClientes);

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" ccontent="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>GYM System</title>
        <!-- Bootstrap core CSS-->
        <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom fonts for this template-->
        <link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- Page level plugin CSS-->
        <link href="../../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
        <!-- Custom styles for this template-->
        <link href="../../css/sb-admin.css" rel="stylesheet">
        <!-- Estilos propios de Gym System -->
        <link rel="stylesheet" href="../../css/estilos.css">
    </head>

    <body class="fixed-nav sticky-footer bg-dark" id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <a class="navbar-brand" href="../index.php">Gym System</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                        <a class="nav-link" href="../index.php">
                            <i class="fa fa-fw fa-dashboard"></i>
                            <span class="nav-link-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                        <a class="nav-link" href="../clientes/clientes.php">
                            <i class="fa fa-fw fa-area-chart"></i>
                            <span class="nav-link-text">Clientes</span>
                        </a>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
                        <a class="nav-link" href="../pagos/pagos.php">
                            <i class="fa fa-fw fa-table"></i>
                            <span class="nav-link-text">Pagos</span>
                        </a>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                        <a class="nav-link" href="../rutinas/index.php">
                            <i class="fa fa-fw fa-wrench"></i>
                            <span class="nav-link-text">Rutinas</span>
                        </a>
                        <ul class="sidenav-second-level collapse" id="collapseComponents">
                            <li>
                                <a href="navbar.html">Navbar</a>
                            </li>
                            <li>
                                <a href="cards.html">Cards</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                        <a class="nav-link" href="../ejercicios/ejercicios.php">
                            <i class="fa fa-fw fa-file"></i>
                            <span class="nav-link-text">Ejercicios</span>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav sidenav-toggler">
                    <li class="nav-item">
                        <a class="nav-link text-center" id="sidenavToggler">
                            <i class="fa fa-fw fa-angle-left"></i>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-fw fa-envelope"></i>
                            <span class="d-lg-none">Messages
              <span class="badge badge-pill badge-primary">12 New</span>
                            </span>
                            <span class="indicator text-primary d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="messagesDropdown">
                            <h6 class="dropdown-header">New Messages:</h6>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                                <strong>David Miller</strong>
                                <span class="small float-right text-muted">11:21 AM</span>
                                <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                                <strong>Jane Smith</strong>
                                <span class="small float-right text-muted">11:21 AM</span>
                                <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                                <strong>John Doe</strong>
                                <span class="small float-right text-muted">11:21 AM</span>
                                <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item small" href="#">View all messages</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-fw fa-bell"></i>
                            <span class="d-lg-none">Alerts
              <span class="badge badge-pill badge-warning">6 New</span>
                            </span>
                            <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="alertsDropdown">
                            <h6 class="dropdown-header">New Alerts:</h6>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                                <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
                                <span class="small float-right text-muted">11:21 AM</span>
                                <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                                <span class="text-danger">
                <strong>
                  <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
              </span>
                                <span class="small float-right text-muted">11:21 AM</span>
                                <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                                <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
                                <span class="small float-right text-muted">11:21 AM</span>
                                <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item small" href="#">View all alerts</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <form class="form-inline my-2 my-lg-0 mr-lg-2">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Search for...">
                                <span class="input-group-btn">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
                            </div>
                        </form>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../logout.php">
                            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="content-wrapper">
            <div class="container-fluid">
                <!-- Breadcrumbs-->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Rutinas</li>
                </ol>
                <!-- Example DataTables Card-->
                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fa fa-table"></i> Información de las rutinas
                        <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#add_data_Modal">
                        <span class="glyphiconAgregar glyphicon-plus" aria-hidden="true"></span>
                        </button>
                    </div>
                    <!-- Modal -->
                    <div id="add_data_Modal" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Agregar rutina</h4>
                                </div>
                                <div class="modal-body">
                                    <form method="post" id="insert_form">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Cliente</label>
                                                    <select name="elCliente" id="elCliente" class="form-control">
                                                        <?php
                                                            while($rowClientes = mysqli_fetch_array($resultClientes))
                                                            {
                                                                extract($rowClientes);
                                                            ?>
                                                            <option  id="nombreDelCliente" value="<?php echo $rowClientes['id'] ?>"><?php echo $rowClientes['nombre']?></option>
                                                            <?php
                                                            }
                                                        ?>
                                                    </select>
                                                    <label>Fecha de pago</label>
                                                    <input type="date" name="fechaDelPago" id="fechaDelPago" class="form-control" />
                                                    <label>Monto</label>
                                                    <input type="number" name="montoDePago" id="montoDePago" class="form-control" />
                                                </div>
                                            </div>
                                        </div>

                                        <input type="hidden" name="employee_id" id="employee_id" />
                                        <input type="submit" name="insert" id="insert" value="Agregar" class="btn btn-success" />
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="dataModal" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Ver Pago</h4>
                                </div>
                                <div class="modal-body" id="employee_detail">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Nombre de la rutina</th>
                                        <th>Cliente</th>
                                        <th>Ejercicio 1</th>
                                        <th>Ejercicio 2</th>
                                        <th>Ejercicio 3</th>
                                        <th>Ejercicio 4</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Nombre de la rutina</th>
                                        <th>Cliente</th>
                                        <th>Ejercicio 1</th>
                                        <th>Ejercicio 2</th>
                                        <th>Ejercicio 3</th>
                                        <th>Ejercicio 4</th>
                                        <th>Opciones</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php

                                            while($row = mysqli_fetch_array($result))
                                           {
                                           ?>
                                        <tr>
                                            <td>
                                                <?php echo $row["Nombre"]; ?>
                                            </td>
                                            <td>
                                                <?php echo $row["cliente"]; ?>
                                            </td>
                                            <td>
                                                <?php echo $row["ejercicio1"]; ?>
                                            </td>
                                            <td>
                                                <?php echo $row["ejercicio2"]; ?>
                                            </td>
                                            <td>
                                                <?php echo $row["ejercicio3"]; ?>
                                            </td>
                                            <td>
                                                <div class="btn-group" role="group" style="width:270px">

                                                    <button name="edit" id="<?php echo $row['id']; ?>" class="btn btn-primary view_data"><span class="glyphicon glyphicon-file" aria-hidden="true"></span>Ver</button>

                                                    <button name="view" id="<?php echo $row['id']; ?>" class="btn btn-warning edit_data"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>Editar</button>
                                                    <button name="delete" id="<?php echo $row['id']; ?>" class="btn btn-primary delete_class delete_class"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>Eliminar</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php
                                               }
                                               ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                </div>
            </div>
            <!-- /.container-fluid-->
            <!-- /.content-wrapper-->
            <footer class="sticky-footer">
                <div class="container">
                    <div class="text-center">
                        <small>Copyright © Your Website 2017</small>
                    </div>
                </div>
            </footer>
            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fa fa-angle-up"></i>
            </a>
            <!-- Logout Modal-->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
                        </div>
                        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="login.html">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bootstrap core JavaScript-->
            <script src="../../vendor/jquery/jquery.min.js"></script>
            <script src="../../vendor/popper/popper.min.js"></script>
            <script src="../../vendor/bootstrap/js/bootstrap.min.js"></script>
            <!-- Core plugin JavaScript-->
            <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>
            <!-- Page level plugin JavaScript-->
            <script src="../../vendor/datatables/jquery.dataTables.js"></script>
            <script src="../../vendor/datatables/dataTables.bootstrap4.js"></script>
            <!-- Custom scripts for all pages-->
            <script src="../../js/sb-admin.min.js"></script>
            <!-- Custom scripts for this page-->
            <script src="../../js/sb-admin-datatables.min.js"></script>
            <script src="controlador.js"></script>
            <script src="controladorEliminar.js"></script>
        </div>
    </body>

    </html>
