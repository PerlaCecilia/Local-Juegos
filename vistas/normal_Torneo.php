<?php
/*session_start();
if (!isset($_SESSION['sesion']) || $_SESSION['tipo'] != 'admin') {
  header('Location: ../index.php');
}*/

include_once "../modelos/selectTables.php";
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Torneos</title>

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
              <a href="../index.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Inicio</p>
              </a>
            </li>
          </ul>
        </nav>

        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="iniciar_Sesion.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Iniciar sesión</p>
              </a>
            </li>
          </ul>
        </nav>

        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="registroNormal.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Registrarse</p>
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
                  <h3>Torneos</h3>
                </div>
                  <!--nombre, usuario, correo-->
                  <div class="crudAdmin" align="center">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Nombre</th>
                          <th>Juego</th>
                          <th>Fecha</th>
                          <th>Hora</th>
                          <th>Modalidad</th>
                          <th>Forma</th>
                          <th>Jugadores</th>
                          <th>Descripcion</th>
                          <th>Estatus</th>
                        </tr>
                      </thead>
                      <tbody>

                      <?php foreach ($resultadoNormalTorneo as $resultadoNormalTorneo){ ?>
                      <tr>

                      <td><?php echo $resultadoNormalTorneo -> id ?></td>
                      <td><?php echo $resultadoNormalTorneo -> nombre ?></td>
                      <td><?php echo $resultadoNormalTorneo -> juego ?></td>
                      <td><?php echo $resultadoNormalTorneo -> fecha ?></td>
                      <td><?php echo $resultadoNormalTorneo -> hora ?></td>
                      <td><?php echo $resultadoNormalTorneo -> modalidad ?></td>
                      <td><?php echo $resultadoNormalTorneo -> forma ?></td>
                      <td><?php echo $resultadoNormalTorneo -> max_jugadores ?></td>
                      <td><?php echo $resultadoNormalTorneo -> descripcion ?></td>
                      <td><?php echo $resultadoNormalTorneo -> estatus ?></td>

                      </tr>

                      <?php } ?>

                      </tbody>
                    </table>
                  </div>

                  </form>
                </div>
              </div>
              <div class="col-md-6">
              </div>
            </div>
          </div>
        </section>
      </div>

    </div>




      <script src="../../plugins/jquery/jquery.min.js"></script>
      <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="../../plugins/jquery-validation/jquery.validate.min.js"></script>
      <script src="../../plugins/jquery-validation/additional-methods.min.js"></script>
      <script src="../../dist/js/adminlte.min.js"></script>
      <script src="../../dist/js/demo.js"></script>

    </body>
    </html>
