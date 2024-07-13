<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <link rel="icon" type="image/svg" href="img/logophpicono_taza.svg">
    <link rel="stylesheet" href="../../assets/css/styles_registro.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css'><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css'>
  </head>

<!-- Navegador -->
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <img src="../../assets/img/logophpicono_taza.svg" width="5%px" height="5%"/>
    <a class="navbar-brand" href="#"> </a>
      <a class="navbar-brand" href="#">Chef at Home</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Conocenos</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
              Recetas
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Recomendados</a>
              <a class="dropdown-item" href="#">Más Populares</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Ingredientes</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled">Eventos</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Buscar..." aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
        </form>
      </div>
    </nav>
</div>

<!-- Login -->
<body>
<!-- Section: Design Block -->
<section class="text-center">
  <!-- Background image -->
  <div class="p-5 bg-image" style="
        
        height: 300px;
        background-repeat: no-repeat;
        background-size: cover;
        background-position:center;

        
        "></div>
  <!-- Background image -->

  <div class="card mx-4 mx-md-5 shadow-5-strong" style="
        margin-top: -150px;
        background: hsla(0, 0%, 100%, 0.5);
        backdrop-filter: blur(30px);
        ">
    <div class="card-body py-5 px-md-5">

      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <h2 class="fw-bold mb-5">Registrate Ahora</h2>
          <form action="Sign_Up_ext/insertar.php" method="POST">
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row">
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="text" name="nombre" id="nombre" class="form-control" required/>
                  <label class="form-label" for="nombre">Nombre</label>
                </div>
              </div>
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="text" name="apellido" id="apellido" class="form-control" required/>
                  <label class="form-label" for="apellido">Apellido</label>
                </div>
              </div>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" name="email" id="email" class="form-control" required/>
              <label class="form-label" for="email">Correo Electronico</label>
            </div>

            <!-- 2 column -->
            <div class="row">
              <div class="col-md-8 mb-4">
                <div class="form-outline">
                  <input type="text" name="direccion" id="direccion" class="form-control" required/>
                  <label class="form-label" for="direccion">Dirección</label>
                </div>
              </div>
              <div class="col-md-4 mb-4">
                <div class="form-outline">
                  <input type="text" name="telefono" id="telefono" class="form-control" minlength="10" maxlength="12" oninput="this.value=this.value.replace(/[^0-9]/g,'')" required/>
                  <label class="form-label" for="telefono">No. de Telefono</label>
                </div>
              </div>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
              <input type="password" name="contraseña" id="contraseña" class="form-control" required/>
              <label class="form-label" for="contraseña">Contraseña</label>
            </div>

            <!-- Submit button -->
            <button type="submit" name="registrar" value="registrar" class="btn btn-primary btn-block mb-4">
              Registrarse
            </button>

            <!-- Register buttons -->
            <div class="text-center">
              <p>o registrate con:</p>
              <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-facebook-f"></i>
              </button>

              <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-google"></i>
              </button>

              <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-twitter"></i>
              </button>

              <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-github"></i>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
<!-- Section: Design Block -->
    <div
      class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
      <!-- Copyright -->
      <div class="text-white mb-3 mb-md-0">
        Copyright © 2024. All rights reserved.
      </div>
      <!-- Copyright -->
  
      <!-- Right -->
      <div>
        <a href="#!" class="text-white me-4">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#!" class="text-white me-4">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="#!" class="text-white me-4">
          <i class="fab fa-google"></i>
        </a>
        <a href="#!" class="text-white">
          <i class="fab fa-linkedin-in"></i>
        </a>
      </div>
      <!-- Right -->
    </div>
  </section>
</body>


</html>
