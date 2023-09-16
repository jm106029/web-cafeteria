<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>CAFETERIA TEC</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        
        <!-- Google fonts-->
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">Cafeteria tec</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#portfolio">MENU</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="index.html">Principal</a></li>
                       
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        
        <header class="masthead bg-primary text-white text-center">

<form action="validacion.php" method="post" onsubmit="return valida(this)">
<div class="d-flex justify-content-center align-items-top vh-80">
<div
      class="bg-white p-5 rounded-5 text-secondary shadow"
      style="width: 25rem"
    >
      <div class="d-flex justify-content-center">
        <img
          src="assets/login.png"
          alt="login-icon"
          style="height: 7rem"
        />
      </div>
      <div class="text-center fs-1 fw-bold">Login</div>
      <div class="input-group mt-4">
        <div class="input-group-text bg-info">
          <img
            src="assets/usser.png"
            alt="username-icon"
            style="height: 1rem"
          />
        </div>
        <input
          class="form-control bg-light"
          type="text"
          placeholder="Usuario" name="usuario" id="usuario"
        />
      </div>
      <div class="input-group mt-1">
        <div class="input-group-text bg-info">
          <img
            src="assets/password.png"
            alt="password-icon"
            style="height: 1rem"
          />
        </div>
        <input
          class="form-control bg-light"
          type="password"
          placeholder="Contraseña" name="contrasena" id="contrasena" required
        />
      </div>

      <?php
       if(isset($_GET['ban'])) { ?>
        <div class="alert alert-danger" role="alert">Usuario y/o contraseña no coinciden</div>

        <?php } ?>

       <input type="submit" name="submit" value="Iniciar Sesión" class="btn btn-info text-white w-100 mt-4 fw-semibold shadow-sm"> 
    </div>
</div>
</form>
        </header>
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; Cafeteria tec 2023</small></div>
    
       
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="js/script_cf.js"></script>
    </body>
</html>
