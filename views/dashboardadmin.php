<?php
session_start();

if ($_SESSION["ID_USUARIO"] === null) {
  header("Location: login.php");
}

if ($_SESSION["ID_ROL"] === 1) {
  header("Location: menu.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!----======== CSS ======== -->
  <link rel="stylesheet" href="css/admin.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" referrerpolicy="no-referrer" />
  <!----===== Iconscout CSS ===== -->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

  <link rel="stylesheet" href="css/sweetalert2.min.css">

  <title>Admin Dashboard Panel</title>
</head>

<body>
  
  <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
  
  <main id="main-content">
    <nav>
      <div class="logo-name">
        <div class="logo-image">
          <img src="images/logo.png" alt="">
        </div>

        <span class="logo_name">CodingLab</span>
      </div>

      <div class="menu-items">
        <ul class="nav-links">
          <li><a href="#">
              <i class="uil uil-estate"></i>
              <span class="link-name">Dahsboard</span>
            </a></li>
          <li><a href="#">
              <i class="uil uil-files-landscapes"></i>
              <span class="link-name">Content</span>
            </a></li>
          <li><a href="#">
              <i class="uil uil-chart"></i>
              <span class="link-name">Analytics</span>
            </a></li>
          <li><a href="#">
              <i class="uil uil-thumbs-up"></i>
              <span class="link-name">Like</span>
            </a></li>
          <li><a href="#">
              <i class="uil uil-comments"></i>
              <span class="link-name">Comment</span>
            </a></li>
          <li><a href="#">
              <i class="uil uil-share"></i>
              <span class="link-name">Share</span>
            </a></li>
        </ul>

        <ul class="logout-mode">
          <li><a href="/../controllers/action/logout.php">
              <i class="uil uil-signout"></i>
              <span class="link-name">Logout</span>
            </a></li>

          <li class="mode">
            <a href="#">
              <i class="uil uil-moon"></i>
              <span class="link-name">Dark Mode</span>
            </a>

            <div class="mode-toggle">
              <span class="switch"></span>
            </div>
          </li>
        </ul>
      </div>
    </nav>

    <section class="dashboard">
      <div class="top">
        <i class="uil uil-bars sidebar-toggle"></i>

        <div class="search-box">
          <i class="uil uil-search"></i>
          <input type="text" placeholder="Search here...">
        </div>
        <div class="img-box">
          <div class="info-pfp">
            <h5 class="texto text-pfp"><?php echo $_SESSION["NOMBRE"] . " ";
                                        echo $_SESSION["APELLIDO"];
                                        ?></h5>
            <p class="texto rol-pfp"><?php echo $_SESSION['NOMBRE_ROL'] . " "; ?></p>
          </div>
          <div class="img-box-in">
            <img src="/assets/img/people/pic-2.jpg" alt="">
          </div>

        </div>

      </div>

      <div class="dash-content">
        <div class="overview">
          <div class="title">
            <i class="uil uil-tachometer-fast-alt"></i>
            <span class="text">Dashboard</span>
          </div>

          <div class="boxes">
            <div class="box box1">
              <i class="uil uil-thumbs-up"></i>
              <span class="text">Total Likes</span>
              <span class="number">50,120</span>
            </div>
            <div class="box box2">
              <i class="uil uil-comments"></i>
              <span class="text">Comments</span>
              <span class="number">20,120</span>
            </div>
            <div class="box box3">
              <i class="uil uil-share"></i>
              <span class="text">Total Share</span>
              <span class="number">10,120</span>
            </div>
          </div>
        </div>

        <div class="activity">
          <div class="title">
            <i class="uil uil-clock-three"></i>
            <span class="text">Usuarios</span>
            <!-- Button trigger modal -->
            <div class="container-fluid">
              <div class="justify-content-center row">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalCrearUsuario">
                  Crear usuario
                </button>
              </div>
            </div>
          </div>
          <table class="activity-data table" id="usuariosRegistrados">
            <thead class="table">
              <tr>
                <th class="data-title" scope="col">ID</th>
                <th class="data-title" scope="col">Nombres</th>
                <th class="data-title" scope="col">Apellidos</th>
                <th class="data-title" scope="col">Email</th>
                <th class="data-title" scope="col">Celular</th>
                <th class="data-title" scope="col">Programa</th>
                <th class="data-title" scope="col">Acciones</th>
              </tr>
            </thead>
            <tbody class="data">

            </tbody>
          </table>
        </div>
      </div>
    </section>
    <!-- Modal -->
    <div class="modal fade" id="modalCrearUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Registrar usuario</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="/../controllers/actionadmin/registrarUsuario.php" method="post">
            <div class="modal-body">
              <div class="container-fluid">
                <div style="padding:7px 0;" class="justify-content-center row">
                  <div class="col-md-8"><input placeholder="Nombres" type="text" class="form-control" name="nombres">
                  </div>
                </div>
                <div style="padding:7px 0;" class="justify-content-center row">
                  <div class="col-md-8"><input placeholder="Apellidos" type="text" class="form-control" name="apellidos">
                  </div>
                </div>
                <div style="padding:7px 0;" class="justify-content-center row">
                  <div class="col-md-8"><input placeholder="Email" type="email" class="form-control" name="email"></div>
                </div>
                <div style="padding:7px 0;" class="justify-content-center row">
                  <div class="col-md-8"><input placeholder="Contraseña" type="password" class="form-control" name="contrasena"></div>
                </div>
                <div style="padding:7px 0;" class="justify-content-center row">
                  <div class="col-md-8"><input placeholder="Celular" type="text" class="form-control" name="celular">
                  </div>
                </div>
                <div style="padding:7px 0;" class="justify-content-center row">
                  <div class="rol col-md-8">
                    <select class="programaSelect form-control" name="programa">
                      <option disabled selected>Programa</option>
                    </select>
                  </div>
                </div>
                <div style="padding:7px 0;" class="justify-content-center row">
                  <div class="rol col-md-8">
                    <select class=" form-control" name="rol">
                      <option>Elegir rol</option>
                      <option value="2">Administrador</option>
                      <option value="1">Estudiante</option>
                    </select>
                  </div>
                </div>
                <div class="justify-content-center row">
                  <button type="button" class="mr-4 btn btn-secondary" data-dismiss="modal">Cancelar</button>
                  <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- end modal -->

    <!-- Modal -->
    <div class="modal fade" id="modalEditarUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="ModalEditarLabel">Editar usuario</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form id="formEditarUsuario" action="/../controllers/actionadmin/editarUsuario.php" method="post">
            <div class="modal-body">
              <div class="container-fluid">
                <div style="padding:7px 0;" class="justify-content-center row">
                  <div class="col-md-8"><input placeholder="ID" type="text" class="form-control" name="ID">
                  </div>
                  <div style="padding:7px 0;" class="justify-content-center row">
                    <div class="col-md-8"><input placeholder="Nombres" type="text" class="form-control" name="nombres">
                    </div>
                  </div>
                  <div style="padding:7px 0;" class="justify-content-center row">
                    <div class="col-md-8"><input placeholder="Apellidos" type="text" class="form-control" name="apellidos">
                    </div>
                  </div>
                  <div style="padding:7px 0;" class="justify-content-center row">
                    <div class="col-md-8"><input placeholder="Email" type="email" class="form-control" name="email"></div>
                  </div>
                  <div style="padding:7px 0;" class="justify-content-center row">
                    <div class="col-md-8"><input placeholder="Contraseña" type="password" class="form-control" name="contrasena"></div>
                  </div>
                  <div style="padding:7px 0;" class="justify-content-center row">
                    <div class="col-md-8"><input placeholder="Celular" type="text" class="form-control" name="celular">
                    </div>
                  </div>
                  <div style="padding:7px 0;" class="justify-content-center row">
                    <div class="rol col-md-8">
                      <select class="programaSelect form-control" name="programa">
                        <option disabled selected>Programa</option>
                      </select>
                    </div>
                  </div>
                  <div style="padding:7px 0;" class="justify-content-center row">
                    <div class="rol col-md-8">
                      <select class=" form-control" name="rol">
                        <option>Elegir rol</option>
                        <option value="2">Administrador</option>
                        <option value="1">Estudiante</option>
                      </select>
                    </div>
                  </div>
                  <input hidden type="number" class="form-control" name="idUsuario">
                  <div class="justify-content-center row">
                    <button type="button" class="mr-4 btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                  </div>
                </div>
              </div>
              <!-- Ventana modal de confirmación -->
              <div class="modal fade" id="confirmarEditarUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="ModalEditarLabel">Confirmar eliminar usuario</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      ¿Está seguro de eliminar este usuario?
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                      <!-- Botón de confirmación -->
                      <button type="button" id="btnConfirmarEditarUsuario" class="btn btn-primary">Confirmar</button>
                    </div>
                  </div>
                </div>
              </div>
          </form>
        </div>
      </div>
    </div>
    <!-- end modal -->
    <script src="js/adminfront.js"></script>
    <!-- end modal -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="js/sweetalert2.all.min.js"></script>

    <script src="js/administrar_usuario.js"></script>
    <script src="js/cargarProgramas.js"></script>
  </main>
</body>

</html>