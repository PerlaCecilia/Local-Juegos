<?php

session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['tipo'] != 'admin') {
  header('Location: ../index.php');
}

include_once '../modelos/selectTables.php';

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Consolas Admin</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">

  <div class="wrapper">
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Sidebar -->
      <div class="sidebar">

        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="admin_Inicio.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Inicio</p>
              </a>
            </li>
          </ul>
        </nav>

        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="admin_cGamer.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Gamers</p>
              </a>
            </li>
          </ul>
        </nav>

        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="admin_cJuegos.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Juegos</p>
              </a>
            </li>
          </ul>
        </nav>

        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="admin_cConsolas.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Consolas</p>
              </a>
            </li>
          </ul>
        </nav>

        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="admin_cAccesorio.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Accesorios</p>
              </a>
            </li>
          </ul>
        </nav>

        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="admin_cInstalado.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Juegos Instalados</p>
              </a>
            </li>
          </ul>
        </nav>

        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="admin_cTorneo.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Torneos</p>
              </a>
            </li>
          </ul>
        </nav>

        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="admin_cDetalles.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Detalles</p>
              </a>
            </li>
          </ul>
        </nav>

        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="admin_cPremio.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Premios</p>
              </a>
            </li>
          </ul>
        </nav>

        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="admin_cRenta.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Rentas</p>
              </a>
            </li>
          </ul>
        </nav>

        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Cerrar sesion</p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <br>
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card card-primary">
                <div class="card-header">
                  <h3>Juegos</h3>
                </div>

                <a href="agregarGamer.php">
                  <input type="button" name="" value="Nuevo" class="btn btn-primary">
                </a>

                <form class="" action="editGamer.php" method="post">

                  <!--nombre, usuario, correo-->
                  <div class="crudAdmin" align="center">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Nombre</th>
                          <th>Apellido</th>
                          <th>Fecha Nacimiento</th>
                          <th>Genero</th>
                          <th>Telefono</th>
                          <th>Email</th>
                          <th>Gamertag</th>
                          <th>Foto</th>
                          <th>Red Social</th>
                        </tr>
                      </thead>
                      <tbody>

                        <?php foreach ($resultadoAdminGamer as $resultadoAdminGamer){ ?>
                        <?php $identificador = $resultadoAdminGamer -> id_gamer ?>
                        <tr>
                        <td><?php echo $resultadoAdminGamer -> id_gamer ?></td>
                        <td><?php echo $resultadoAdminGamer -> nombre ?></td>
                        <td><?php echo $resultadoAdminGamer -> apellido ?></td>
                        <td><?php echo $resultadoAdminGamer -> fecha_nac ?></td>
                        <td><?php echo $resultadoAdminGamer -> genero ?></td>
                        <td><?php echo $resultadoAdminGamer -> telefono ?></td>
                        <td><?php echo $resultadoAdminGamer -> email ?></td>
                        <td><?php echo $resultadoAdminGamer -> gamertag ?></td>
                        <td><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($resultadoAdminGamer -> foto).'">' ?></td>
                        <td><?php echo $resultadoAdminGamer -> id_redsocial ?></td>

                        <td>
                        <form action="editGamer.php" method="post">
                        <button class="btn btn-success" type="submit" name="editar"
                        value="<?php echo htmlspecialchars($identificador); ?>">Editar
                        </button>
                        </form>
                        </td>

                        <td>
                        <form method="post" action="../controladores/borrar_Gamer.php">
                        <button type="submit" class="btn btn-danger" name="id"
                        value="<?php echo htmlspecialchars($identificador); ?>">Borrar
                        </button>
                        </form>
                        </td>

                        </tr>

                        <?php } ?>

                      </tbody>
                    </table>
                  </div>

                </form>


              </form>
            </div>
          </div>
          <div class="col-md-6">
          </div>
        </div>
      </div>
    </section>
  </div>



  <script src="plugins/jquery/jquery.min.js"></script>
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="plugins/chart.js/Chart.min.js"></script>
<script src="plugins/sparklines/sparkline.js"></script>
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="dist/js/adminlte.js"></script>
<script src="dist/js/pages/dashboard.js"></script>
<script src="dist/js/demo.js"></script>
</body>
    </html>
