<?php
session_start();

if($_SESSION["s_usuario"] === null){
    header("Location: login.php");
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fila virtual</title>
  <!-- Google fonts-->
  <link rel="stylesheet" href="css/Fila.css">
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
                <path class="cls-2"
                  d="M245.6,84.61V185.52a50.78,50.78,0,0,1-38,49.16l10.17,180.93a23,23,0,0,1-45.87,3.46,22.2,22.2,0,0,1,0-3.46L182,234.68a50.78,50.78,0,0,1-38-49.16V84.61a10.38,10.38,0,0,1,20.75,0v72.05a9.86,9.86,0,0,0,19.72,0v-72A10.36,10.36,0,1,1,205.18,84c0,.21,0,.43,0,.64v72.05a9.85,9.85,0,0,0,19.69.5V84.61a10.38,10.38,0,0,1,20.75,0Z" />
              </g>
              <g id="Knife-2">
                <path class="cls-2"
                  d="M353.68,71.33V283.17H326.09a1.09,1.09,0,0,1,.06-.44c1.91-14.17-10.88-27.33-28.33-29a42,42,0,0,0-10.14.27,5.56,5.56,0,0,1-6.63-4.23,5.3,5.3,0,0,1-.13-1.38c.24-32.74,6.17-76.64,29.83-121.69a261.28,261.28,0,0,1,39.81-56.19C351.56,69.39,353.68,70,353.68,71.33Z" />
                <path class="cls-3"
                  d="M355.76,283.17a3.43,3.43,0,0,1,3.43,3.42V418.87c0,12.64-9.55,23.74-22.16,24.51A23.66,23.66,0,0,1,312,421.22c0-.49,0-1,0-1.47V286.59a3.43,3.43,0,0,1,3.43-3.42Z" />
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
            <li class="items"><a href="#" id="active">Home</a></li>
            <li class="items"><a href="/../index.php#content-servicios">Servicios</a></li>
            <li class="items"><a href="#">Contact us</a></li>
            <li class="items" id="no-line"><a href="profile.php"><?php echo $_SESSION["s_usuario"];?></a></li>
            <li class="items" id="back-donar"><a href="#" id="donar-text">Donar</a></li>

          </ul>
        </div>
      </div>
    </nav>
  </header>
  <section class="img-side">
    <div class="back-static">
      <div class="move">

      </div>
    </div>
  </section>
  <div class="Container">
    <h1 class="Título">Fila Virtual</h1>
    <h3>Ticket de turno</h3>
      <div class="Container_Turno">
        <div class="Su_Turno">
          <div class="Turno">
            <div class="Turno_text"><p>Su turno</p></div>
            <h1>5</h1>
          </div>
          <div class="Tiempo_Espera">
            <div class="Tiempo_Text"><p>Tiempo estimado de espera</p></div>
            <p class="Tiempo_number">5 minutos</p>
          </div>
          <div class="Seguimiento_Turnos">
            <div class="Turno_Actual"><p>Turno en atención</p></div>
            <p class="Turno_number">3</p>
          </div>
          <div class="Fecha_Fila">
            <div class="fecha_text"><p>Fecha</p></div>
            <p class="fecha_number">14/09/2023</p>
          </div>
          <div class="Cantidad_personas">
            <div class="Personas_text"><p>Cantidad de personas en la fila</p></div>
            <p class="Personas_number">5</p>
          </div>
        </div>
      </div>
      <aside>
        <p>...</p>
      </aside>
      <div>
        <button class="Ingresar_Fila">Ingresar a la fila</button>
      </div>
      <div class="Cancelar">
        <button>Cancelar turno</button>
      </div>
  </div>
  <div>
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
</body>
</html>