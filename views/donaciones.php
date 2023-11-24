<?php
session_start();

if ($_SESSION["ID_USUARIO"] === null) {
    // Redirige a login.php después de 2 segundos
    echo '<script>
        setTimeout(function() {
            window.location = "login.php";
        }, 2000);
    </script>';
    exit; // Asegura que no se procese más código PHP
}

if ($_SESSION["ID_ROL"] === 2) {
    // Redirige a index.php después de 2 segundos
    echo '<script>
        setTimeout(function() {
            window.location = "dashboardadmin.php";
        }, 2000);
    </script>';
    exit; // Asegura que no se procese más código PHP
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
                          <table class="table table-striped align-middle table-nowrap">
                            <tbody>
                              <tr>
                                <td>
                                  <div class="avatar-lg me-4">
                                    <img src="https://www.bootdey.com/image/380x380/00FFFF/000000" class="img-fluid rounded" alt="">
                                  </div>
                                </td>

                                <td>
                                  <div>
                                    <h5 class="font-size-18"><a href="ecommerce-product-detail.html" class="text-dark">Waterproof Mobile Phone</a></h5>
                                    <p class="text-muted mb-0 mt-2 pt-2">
                                      <i class="bx bxs-star text-warning"></i>
                                      <i class="bx bxs-star text-warning"></i>
                                      <i class="bx bxs-star text-warning"></i>
                                      <i class="bx bxs-star text-warning"></i>
                                      <i class="bx bxs-star-half text-warning"></i>
                                    </p>
                                  </div>
                                </td>

                                <td>
                                  <ul class="list-unstyled ps-0 mb-0">
                                    <li>
                                      <p class="text-muted mb-1 text-truncate"><i class="mdi mdi-circle-medium align-middle text-primary me-1"></i> 12MP TrueDepth front camera </p>
                                    </li>
                                    <li>
                                      <p class="text-muted mb-1 text-truncate"><i class="mdi mdi-circle-medium align-middle text-primary me-1"></i> Battery life: Up to 22 hours of video playback</p>
                                    </li>
                                    <li>
                                      <p class="text-muted mb-0 text-truncate"><i class="mdi mdi-circle-medium align-middle text-primary me-1"></i> 5G and Gigabit LTE</p>
                                    </li>
                                  </ul>
                                </td>

                                <td style="width: 180px;">
                                  <p>Colors :</p>
                                  <ul class="list-inline mb-0 text-muted product-color">
                                    <li class="list-inline-item">
                                      <i class="mdi mdi-circle font-size-16 text-dark"></i>
                                    </li>
                                    <li class="list-inline-item">
                                      <i class="mdi mdi-circle font-size-16 text-success"></i>
                                    </li>
                                    <li class="list-inline-item">
                                      <i class="mdi mdi-circle font-size-16 text-primary"></i>
                                    </li>
                                  </ul>
                                </td>

                                <td style="width: 220px;">
                                  <h3 class="mb-0 font-size-20"><span class="text-muted me-2"><del class="font-size-16 fw-normal">$500</del></span><b>$450</b></h3>
                                </td>

                                <td>
                                  <button type="button" class="btn btn-primary waves-effect waves-light"><i class="bx bx-cart me-2 font-size-15 align-middle"></i> Add</button>
                                </td>

                                <td>
                                  <div class="dropdown float-end">
                                    <a class="text-muted dropdown-toggle font-size-20" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                      <i class="bx bx-dots-horizontal-rounded"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                      <a class="dropdown-item" href="#">Edit</a>
                                      <a class="dropdown-item" href="#">Action</a>
                                      <a class="dropdown-item" href="#">Remove</a>
                                    </div>
                                  </div>
                                </td>
                              </tr>

                              <tr>
                                <td>
                                  <div class="avatar-lg me-4">
                                    <img src="https://www.bootdey.com/image/380x380/0000FF/000000" class="img-fluid rounded" alt="">
                                  </div>
                                </td>

                                <td>
                                  <div>
                                    <h5 class="font-size-18"><a href="ecommerce-product-detail.html" class="text-dark">Smartphone Dual Camera</a></h5>
                                    <p class="text-muted mb-0 mt-2 pt-2">
                                      <i class="bx bxs-star text-warning"></i>
                                      <i class="bx bxs-star text-warning"></i>
                                      <i class="bx bxs-star text-warning"></i>
                                      <i class="bx bxs-star text-warning"></i>
                                    </p>
                                  </div>
                                </td>

                                <td>
                                  <ul class="list-unstyled ps-0 mb-0">
                                    <li>
                                      <p class="text-muted mb-0 text-truncate"><i class="mdi mdi-circle-medium align-middle text-primary me-1"></i> 5G and Gigabit LTE</p>
                                    </li>
                                    <li>
                                      <p class="text-muted mb-1 text-truncate"><i class="mdi mdi-circle-medium align-middle text-primary me-1"></i> 32MP TrueDepth front camera</p>
                                    </li>
                                    <li>
                                      <p class="text-muted mb-1 text-truncate"><i class="mdi mdi-circle-medium align-middle text-primary me-1"></i> Battery life: Up to 22 hours of video playback</p>
                                    </li>
                                  </ul>
                                </td>

                                <td style="width: 180px;">
                                  <p>Colors :</p>
                                  <ul class="list-inline mb-0 text-muted product-color">
                                    <li class="list-inline-item">
                                      <i class="mdi mdi-circle font-size-16 text-primary"></i>
                                    </li>
                                    <li class="list-inline-item">
                                      <i class="mdi mdi-circle font-size-16 text-danger"></i>
                                    </li>
                                    <li class="list-inline-item">
                                      <i class="mdi mdi-circle font-size-16 text-warning"></i>
                                    </li>
                                  </ul>
                                </td>

                                <td style="width: 220px;">
                                  <h3 class="mb-0 font-size-20"><span class="text-muted me-2"><del class="font-size-16 fw-normal">$280</del></span><b>$240</b></h3>
                                </td>

                                <td>
                                  <button type="button" class="btn btn-primary waves-effect waves-light"><i class="bx bx-cart me-2 font-size-15 align-middle"></i> Add</button>
                                </td>

                                <td>
                                  <div class="dropdown float-end">
                                    <a class="text-muted dropdown-toggle font-size-20" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                      <i class="bx bx-dots-horizontal-rounded"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                      <a class="dropdown-item" href="#">Edit</a>
                                      <a class="dropdown-item" href="#">Action</a>
                                      <a class="dropdown-item" href="#">Remove</a>
                                    </div>
                                  </div>
                                </td>
                              </tr>

                              <tr>
                                <td>
                                  <div class="avatar-lg me-4">
                                    <img src="https://www.bootdey.com/image/380x380/008B8B/000000" class="img-fluid rounded" alt="">
                                  </div>
                                </td>

                                <td>
                                  <div>
                                    <h5 class="font-size-18"><a href="ecommerce-product-detail.html" class="text-dark">Black Colour Smartphone</a></h5>
                                    <p class="text-muted mb-0 mt-2 pt-2">
                                      <i class="bx bxs-star text-warning"></i>
                                      <i class="bx bxs-star text-warning"></i>
                                      <i class="bx bxs-star text-warning"></i>
                                    </p>
                                  </div>
                                </td>

                                <td>
                                  <ul class="list-unstyled ps-0 mb-0">
                                    <li>
                                      <p class="text-muted mb-1 text-truncate"><i class="mdi mdi-circle-medium align-middle text-primary me-1"></i> 5G and Gigabit LTE </p>
                                    </li>
                                    <li>
                                      <p class="text-muted mb-1 text-truncate"><i class="mdi mdi-circle-medium align-middle text-primary me-1"></i> LiDAR Scanner for Night mode</p>
                                    </li>
                                    <li>
                                      <p class="text-muted mb-0 text-truncate"><i class="mdi mdi-circle-medium align-middle text-primary me-1"></i> Face ID for secure authentication</p>
                                    </li>
                                  </ul>
                                </td>

                                <td style="width: 180px;">
                                  <p>Colors :</p>
                                  <ul class="list-inline mb-0 text-muted product-color">
                                    <li class="list-inline-item">
                                      <i class="mdi mdi-circle font-size-16 text-info"></i>
                                    </li>
                                    <li class="list-inline-item">
                                      <i class="mdi mdi-circle font-size-16 text-danger"></i>
                                    </li>
                                    <li class="list-inline-item">
                                      <i class="mdi mdi-circle font-size-16 text-dark"></i>
                                    </li>
                                  </ul>
                                </td>

                                <td style="width: 220px;">
                                  <h3 class="mb-0 font-size-20"><span class="text-muted me-2"><del class="font-size-16 fw-normal">$500</del></span><b>$450</b></h3>
                                </td>

                                <td>
                                  <button type="button" class="btn btn-primary waves-effect waves-light"><i class="bx bx-cart me-2 font-size-15 align-middle"></i> Add</button>
                                </td>

                                <td>
                                  <div class="dropdown float-end">
                                    <a class="text-muted dropdown-toggle font-size-20" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                      <i class="bx bx-dots-horizontal-rounded"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                      <a class="dropdown-item" href="#">Edit</a>
                                      <a class="dropdown-item" href="#">Action</a>
                                      <a class="dropdown-item" href="#">Remove</a>
                                    </div>
                                  </div>
                                </td>
                              </tr>

                              <tr>
                                <td>
                                  <div class="avatar-lg me-4">
                                    <img src="https://www.bootdey.com/image/380x380/9932CC/000000" class="img-fluid rounded" alt="">
                                  </div>
                                </td>

                                <td>
                                  <div>
                                    <h5 class="font-size-18"><a href="ecommerce-product-detail.html" class="text-dark">Latest Smartphone Under 2000</a></h5>
                                    <p class="text-muted mb-0 mt-2 pt-2">
                                      <i class="bx bxs-star text-warning"></i>
                                      <i class="bx bxs-star text-warning"></i>
                                      <i class="bx bxs-star text-warning"></i>
                                      <i class="bx bxs-star-half text-warning"></i>
                                    </p>
                                  </div>
                                </td>

                                <td>
                                  <ul class="list-unstyled ps-0 mb-0">
                                    <li>
                                      <p class="text-muted mb-1 text-truncate"><i class="mdi mdi-circle-medium align-middle text-primary me-1"></i> 20MP TrueDepth front camera </p>
                                    </li>
                                    <li>
                                      <p class="text-muted mb-1 text-truncate"><i class="mdi mdi-circle-medium align-middle text-primary me-1"></i> LiDAR Scanner for Night mode</p>
                                    </li>
                                    <li>
                                      <p class="text-muted mb-0 text-truncate"><i class="mdi mdi-circle-medium align-middle text-primary me-1"></i> Compatible with MagSafe accessories</p>
                                    </li>
                                  </ul>
                                </td>

                                <td style="width: 180px;">
                                  <p>Colors :</p>
                                  <ul class="list-inline mb-0 text-muted product-color">
                                    <li class="list-inline-item">
                                      <i class="mdi mdi-circle font-size-16 text-primary"></i>
                                    </li>
                                    <li class="list-inline-item">
                                      <i class="mdi mdi-circle font-size-16 text-success"></i>
                                    </li>
                                    <li class="list-inline-item">
                                      <i class="mdi mdi-circle font-size-16 text-warning"></i>
                                    </li>
                                  </ul>
                                </td>

                                <td style="width: 220px;">
                                  <h3 class="mb-0 font-size-20"><span class="text-muted me-2"><del class="font-size-16 fw-normal">$420</del></span><b>$380</b></h3>
                                </td>

                                <td>
                                  <button type="button" class="btn btn-primary waves-effect waves-light"><i class="bx bx-cart me-2 font-size-15 align-middle"></i> Add</button>
                                </td>

                                <td>
                                  <div class="dropdown float-end">
                                    <a class="text-muted dropdown-toggle font-size-20" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                      <i class="bx bx-dots-horizontal-rounded"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                      <a class="dropdown-item" href="#">Edit</a>
                                      <a class="dropdown-item" href="#">Action</a>
                                      <a class="dropdown-item" href="#">Remove</a>
                                    </div>
                                  </div>
                                </td>
                              </tr>

                              <tr>
                                <td>
                                  <div class="avatar-lg me-4">
                                    <img src="https://www.bootdey.com/image/380x380/1E90FF/000000" class="img-fluid rounded" alt="">
                                  </div>
                                </td>

                                <td>
                                  <div>
                                    <h5 class="font-size-18"><a href="ecommerce-product-detail.html" class="text-dark">New Phone Max Pro</a></h5>
                                    <p class="text-muted mb-0 mt-2 pt-2">
                                      <i class="bx bxs-star text-warning"></i>
                                      <i class="bx bxs-star text-warning"></i>
                                      <i class="bx bxs-star text-warning"></i>
                                      <i class="bx bxs-star text-warning"></i>
                                      <i class="bx bxs-star text-warning"></i>
                                    </p>
                                  </div>
                                </td>

                                <td>
                                  <ul class="list-unstyled ps-0 mb-0">
                                    <li>
                                      <p class="text-muted mb-1 text-truncate"><i class="mdi mdi-circle-medium align-middle text-primary me-1"></i> 2MagSafe and Qi wireless charging </p>
                                    </li>
                                    <li>
                                      <p class="text-muted mb-1 text-truncate"><i class="mdi mdi-circle-medium align-middle text-primary me-1"></i> A15 Bionic chip with new 6-core CPU</p>
                                    </li>
                                    <li>
                                      <p class="text-muted mb-0 text-truncate"><i class="mdi mdi-circle-medium align-middle text-primary me-1"></i> Compatible with MagSafe accessories</p>
                                    </li>
                                  </ul>
                                </td>

                                <td style="width: 180px;">
                                  <p>Colors :</p>
                                  <ul class="list-inline mb-0 text-muted product-color">
                                    <li class="list-inline-item">
                                      <i class="mdi mdi-circle font-size-16 text-dark"></i>
                                    </li>
                                    <li class="list-inline-item">
                                      <i class="mdi mdi-circle font-size-16 text-danger"></i>
                                    </li>
                                    <li class="list-inline-item">
                                      <i class="mdi mdi-circle font-size-16 text-primary"></i>
                                    </li>
                                  </ul>
                                </td>

                                <td style="width: 220px;">
                                  <h3 class="mb-0 font-size-20"><span class="text-muted me-2"><del class="font-size-16 fw-normal">$470</del></span><b>$390</b></h3>
                                </td>

                                <td>
                                  <button type="button" class="btn btn-primary waves-effect waves-light"><i class="bx bx-cart me-2 font-size-15 align-middle"></i> Add</button>
                                </td>

                                <td>
                                  <div class="dropdown float-end">
                                    <a class="text-muted dropdown-toggle font-size-20" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                      <i class="bx bx-dots-horizontal-rounded"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                      <a class="dropdown-item" href="#">Edit</a>
                                      <a class="dropdown-item" href="#">Action</a>
                                      <a class="dropdown-item" href="#">Remove</a>
                                    </div>
                                  </div>
                                </td>
                              </tr>

                              <tr>
                                <td>
                                  <div class="avatar-lg me-4">
                                    <img src="https://www.bootdey.com/image/380x380/FF00FF/000000" class="img-fluid rounded" alt="">
                                  </div>
                                </td>

                                <td>
                                  <div>
                                    <h5 class="font-size-18"><a href="ecommerce-product-detail.html" class="text-dark">Smart Phone Pro +256</a></h5>
                                    <p class="text-muted mb-0 mt-2 pt-2">
                                      <i class="bx bxs-star text-warning"></i>
                                      <i class="bx bxs-star text-warning"></i>
                                      <i class="bx bxs-star-half text-warning"></i>
                                    </p>
                                  </div>
                                </td>

                                <td>
                                  <ul class="list-unstyled ps-0 mb-0">
                                    <li>
                                      <p class="text-muted mb-1 text-truncate"><i class="mdi mdi-circle-medium align-middle text-primary me-1"></i> 13.7 cm (5.4-inch) Super Retina HDR and True Tone</p>
                                    </li>
                                    <li>
                                      <p class="text-muted mb-1 text-truncate"><i class="mdi mdi-circle-medium align-middle text-primary me-1"></i> Battery life: Up to 22 hours of video playback</p>
                                    </li>
                                    <li>
                                      <p class="text-muted mb-0 text-truncate"><i class="mdi mdi-circle-medium align-middle text-primary me-1"></i> Compatible with MagSafe accessories</p>
                                    </li>
                                  </ul>
                                </td>

                                <td style="width: 180px;">
                                  <p>Colors :</p>
                                  <ul class="list-inline mb-0 text-muted product-color">
                                    <li class="list-inline-item">
                                      <i class="mdi mdi-circle font-size-16 text-primary"></i>
                                    </li>
                                    <li class="list-inline-item">
                                      <i class="mdi mdi-circle font-size-16 text-warning"></i>
                                    </li>
                                    <li class="list-inline-item">
                                      <i class="mdi mdi-circle font-size-16 text-info"></i>
                                    </li>
                                  </ul>
                                </td>

                                <td style="width: 220px;">
                                  <h3 class="mb-0 font-size-20"><span class="text-muted me-2"><del class="font-size-16 fw-normal">$470</del></span><b>$320</b></h3>
                                </td>

                                <td>
                                  <button type="button" class="btn btn-primary waves-effect waves-light"><i class="bx bx-cart me-2 font-size-15 align-middle"></i> Add</button>
                                </td>

                                <td>
                                  <div class="dropdown float-end">
                                    <a class="text-muted dropdown-toggle font-size-20" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                      <i class="bx bx-dots-horizontal-rounded"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                      <a class="dropdown-item" href="#">Edit</a>
                                      <a class="dropdown-item" href="#">Action</a>
                                      <a class="dropdown-item" href="#">Remove</a>
                                    </div>
                                  </div>
                                </td>
                              </tr>

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
          <button>Donar almuerzo</button>
        </div>
      </div>
    </div>
  </main>
</body>

</html>