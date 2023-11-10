<?php
session_start();

if ($_SESSION["NOMBRE"] === null) {
  header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perfil</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" href="css/profile.css">
</head>

<body>

  <header class="header-area">
    <nav class="navigation-s">
      <div class="navigation-d">
        <div class="logo-area">
          <!--icono top-->
          <svg data-name="Layer 1" id="Layer_1" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
            <defs>
              <style>
                .cls-1 {
                  fill: #e54033;
                }

                .cls-2 {
                  fill: #fff;
                }

                .cls-3 {
                  fill: #c9c9c9;
                }
              </style>
            </defs>
            <g data-name="Fork Knife Icon-2" id="Fork_Knife_Icon-2">
              <circle class="cls-1" cx="256" cy="256" r="256" />
              <g id="Fork-2">
                <path class="cls-2" d="M245.6,84.61V185.52a50.78,50.78,0,0,1-38,49.16l10.17,180.93a23,23,0,0,1-45.87,3.46,22.2,22.2,0,0,1,0-3.46L182,234.68a50.78,50.78,0,0,1-38-49.16V84.61a10.38,10.38,0,0,1,20.75,0v72.05a9.86,9.86,0,0,0,19.72,0v-72A10.36,10.36,0,1,1,205.18,84c0,.21,0,.43,0,.64v72.05a9.85,9.85,0,0,0,19.69.5V84.61a10.38,10.38,0,0,1,20.75,0Z" />
              </g>
              <g id="Knife-2">
                <path class="cls-2" d="M353.68,71.33V283.17H326.09a1.09,1.09,0,0,1,.06-.44c1.91-14.17-10.88-27.33-28.33-29a42,42,0,0,0-10.14.27,5.56,5.56,0,0,1-6.63-4.23,5.3,5.3,0,0,1-.13-1.38c.24-32.74,6.17-76.64,29.83-121.69a261.28,261.28,0,0,1,39.81-56.19C351.56,69.39,353.68,70,353.68,71.33Z" />
                <path class="cls-3" d="M355.76,283.17a3.43,3.43,0,0,1,3.43,3.42V418.87c0,12.64-9.55,23.74-22.16,24.51A23.66,23.66,0,0,1,312,421.22c0-.49,0-1,0-1.47V286.59a3.43,3.43,0,0,1,3.43-3.42Z" />
              </g>
            </g>
          </svg>
          <!--fin etiqueta icono-->
          <a href="#" class="logo">My<span>Luch</span></a>
        </div>
        <div class="mobile-nav">
          <i class="fas fa-bars" style="color: white;"></i>
        </div>
        <div class="nav">
          <ul class="nav-list">
            <li class="items"><a href="/../index.php" id="">Home</a></li>
            <li class="items"><a href="/../index.php#content-servicios">Servicios</a></li>
            <li class="items"><a href="#">Contact us</a></li>
            <li class="items dropdown"><a id="no-line" href="profile.php">
                <?php echo $_SESSION["NOMBRE"]; ?></a>
              <ul class="dropdown-content">
                <li><a href="profile.php">Editar perfil</a></li>
                <li><a href="/../controllers/action/logout.php">Cerrar sesión</a></li>
              </ul>

            </li>
            <li class="items" id="back-donar"><a href="donaciones.php" id="donar-text">Donar</a></li>

          </ul>
        </div>
      </div>
    </nav>
  </header>
  <div class="container emp-profile">
    <form method="post">
      <div class="row">
        <div class="col-md-4">
          <div class="profile-img">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt="" />
            <div class="file btn btn-lg btn-primary">
              Change Photo
              <input type="file" name="file" />
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="profile-head">
            <h5>
              <?php echo $_SESSION["NOMBRE"] . " ";
              echo $_SESSION["APELLIDO"];
              ?>
            </h5>
            <h6>
              <?php echo $_SESSION["CELULAR"]; ?>
            </h6>
            <p class="proile-rating">RANKINGS : <span>8/10</span></p>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-2">
          <input id="btn-edit-profile" type="button" class="profile-edit-btn" name="btnAddMore" value="Edit Profile" />
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="profile-work">
            <p>WORK LINK</p>
            <a href="">Website Link</a><br />
            <a href="">Bootsnipp Profile</a><br />
            <a href="">Bootply Profile</a>
            <p>SKILLS</p>
            <a href="">Web Designer</a><br />
            <a href="">Web Developer</a><br />
            <a href="">WordPress</a><br />
            <a href="">WooCommerce</a><br />
            <a href="">PHP, .Net</a><br />
          </div>
        </div>
        <div class="col-md-8">
          <div class="tab-content profile-tab" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
              <div class="row">
                <div class="col-md-6">
                  <label>Name</label>
                </div>
                <div class="col-md-6">
                  <p><?php echo $_SESSION["NOMBRE"] . " " . $_SESSION["APELLIDO"]; ?></p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <label>Email</label>
                </div>
                <div class="col-md-6">
                  <p><?php echo $_SESSION["EMAIL"]; ?></p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <label>Phone</label>
                </div>
                <div class="col-md-6">
                  <p><?php echo $_SESSION["CELULAR"]; ?></p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <label>Profession</label>
                </div>
                <div class="col-md-6">
                  <p><?php echo $_SESSION["EMAIL"]; ?></p>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
              <div class="row">
                <div class="col-md-6">
                  <label>Experience</label>
                </div>
                <div class="col-md-6">
                  <p>Expert</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <label>Hourly Rate</label>
                </div>
                <div class="col-md-6">
                  <p>10$/hr</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <label>Total Projects</label>
                </div>
                <div class="col-md-6">
                  <p>230</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <label>English Level</label>
                </div>
                <div class="col-md-6">
                  <p>Expert</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <label>Availability</label>
                </div>
                <div class="col-md-6">
                  <p>6 months</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <label>Your Bio</label><br />
                  <p>Your detail description</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
    <form action="../controllers/action/deleteaccount.php" method="POST">
      <imput type="hidden" value="1" />
      <input type="submit" name="eliminar_usuario" class="delete" value=" Eliminar Cuenta">
    </form>

    <div id="overlay"></div>
    <!-- Account details card-->
    <div class="win-float" id="win-fixed">
      <div class="card mb-4">
        <div class="card-header">Account Details</div>
        <div class="card-body">
          <form action="../controllers/action/updateinfo.php" method="post">
            <!-- Form Group (username)-->
            <div class="mb-3">
              <label class="small mb-1" for="inputUsername">Username (Como tu nombre aparecerá para las otras personas del sitio)</label>
              <input class="form-control" id="inputUsername" name="nuevoUsername" type="text" placeholder="Enter your username" value="username">
            </div>
            <!-- Form Row-->
            <div class="row gx-3 mb-3">
              <!-- Form Group (first name)-->
              <div class="col-md-6">
                <label class="small mb-1" for="inputFirstName">Nombres</label>
                <input class="form-control" id="inputFirstName" name="nuevoNombre" type="text" placeholder="Escribe tu nombre" value="<?php echo $_SESSION["NOMBRE"]; ?>">
              </div>
              <!-- Form Group (last name)-->
              <div class="col-md-6">
                <label class="small mb-1" for="inputLastName">Apellidos</label>
                <input class="form-control" id="inputLastName" name="nuevoApellido" type="text" placeholder="Escribe tu apellido" value="<?php echo $_SESSION["APELLIDO"]; ?>">
              </div>
            </div>
            <!-- Form Group (email address)-->
            <div class="mb-3">
              <label class="small mb-1" for="inputEmailAddress">Email address</label>
              <input class="form-control" id="inputEmailAddress" name="nuevoEmail" type="email" placeholder="Ingresa tu correo electronico" value="<?php echo $_SESSION["EMAIL"]; ?>">
            </div>
            <!-- Form Row-->
            <div class="row gx-3 mb-3">
              <!-- Form Group (phone number)-->
              <div class="col-md-6">
                <label class="small mb-1" for="inputPhone">Phone number</label>
                <input class="form-control" id="inputPhone" name="nuevoTelefono" type="tel" placeholder="Enter your phone number" value="<?php echo $_SESSION["CELULAR"]; ?>">
              </div>
            </div>
             <!-- Form Row        -->
             <div class="row gx-3 mb-3">
              <!-- Form Group (organization name)-->
              <div class="col-md-6">
                <label class="small mb-1" for="inputOrgName">Cambiar la contraseña(Opcional)</label>
                <input class="form-control" id="inputOrgName" name="nuevaContraseña" type="password" placeholder="Ingresa una nueva contraseña"  value="">
              </div>
              <!-- Form Group (location)-->
              <div class="col-md-6">
                <label class="small mb-1" for="inputLocation"></label>
                <input class="form-control" id="inputLocation" name="confirmarContraseña" type="password" placeholder="Confirma la nueva contraseña" value="">
              </div>
            </div>
            <!-- Save changes button-->
            <input class="btn btn-primary" type="submit" name="submitActualizar" value="Actualizar" style="border:none;">
          </form>
        </div>
      </div>
    </div>

  </div>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="js/profile.js"></script>
</body>

</html>