<?php
session_start();

if ($_SESSION["ID_USUARIO"] === null) {
  header("Location: login.php");
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Donaciones</title>
  <!--icons-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.css" integrity="sha256-NAxhqDvtY0l4xn+YVa6WjAcmd94NNfttjNsDmNatFVc=" crossorigin="anonymous" />
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" href="css/donar.css">
</head>

<body>
  <!-- Navigation-->
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
            <li class="items" id="no-line"><a href="profile.php"><?php echo $_SESSION["NOMBRE"]; ?></a></li>

          </ul>
        </div>
      </div>
    </nav>
  </header>
  <main>

    <section class="img-side">
      <div class="back-static">
      </div>
    </section>
    <div class="container-total">
      <div class="top-side">
        <div class="svg-section circle">
          <svg id="elipse1" width="960" height="960" viewBox="0 0 960 960" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="480" cy="480" r="479.5" stroke="#101A24" stroke-opacity="0.2" />
          </svg>
          <svg id="elipse2" width="960" height="960" viewBox="0 0 960 960" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="480" cy="480" r="479.5" stroke="#101A24" stroke-opacity="0.2" />
          </svg>
          <svg id="elipse3" width="960" height="960" viewBox="0 0 960 960" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="480" cy="480" r="479.5" stroke="#101A24" stroke-opacity="0.2" />
          </svg>
        </div>
      </div>
      <div class="container">
        <div class="titulo">
          <p>Donaciones activas</p>
        </div>
        <section class="container_cards_d">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-xl-12">
                  <div class="card">
                    <div class="card-body">
                      <div class="row align-items-center">
                        <div class="table-responsive px-3">
                          <table class="table table-striped align-middle table-nowrap" id="tablaDinamica">
                            <tbody id="cuerpoTabla">
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <div class="container_confirmacion">
        <div class="titulo">
          <h1>¡Ayuda al que lo necesita!</h1>
        </div>
        <img src="assets/img/menu/comida.jpg" alt="Plato de comida">
        <div class="verificar-identidad">
          <p>Verifica que eres tu:</p>
          <input type="text" name="pswd" placeholder="Ingrese su contraseña" required="true">
          <div class="BotonesDonar">
          <button class="Cancelar">Cancelar</button>
          <button class="Donar">Donar almuerzo</button>
          </div>
        </div>
      </div>
    </div>
  </main>
<!-- Agrega el CDN de SweetAlert -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="js/donaciones.js"></script>
</body>
</html>