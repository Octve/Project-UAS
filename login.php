<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Visit Jakarta</title>

  <!-- CSS Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" type="text/css">
  <!-- CSS -->
  <link rel="stylesheet" href="./css/style.css" type="text/css">
  <!-- Unicons (Icons) -->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

</head>

<body>
  <!-- Scroll top button -->
  <button onclick="topFunction()" class="btn btn-purple" id="myBtn" title="Go to top">
    <i class="uil uil-arrow-up"></i>
  </button>
  <!-- Akhir scroll top button -->
  <header>
    <nav class="navbar navbar-expand-lg fw-semibold fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="./img/logo.svg" alt="Logo"> Visit Jakarta</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto" id="navbar">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="./beranda.php">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./museum.php">Museum</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./galeri.php">Galeri</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./kuliner.php">Kuliner</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./rekreasi.php">Tempat Rekreasi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="uil uil-search"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./login.php"><button type="button" class="btn btn-purple">Login</button></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <main>
    <section id="login">
      <div class="container login-wrapper d-flex flex-column justify-content-center align-items-center">
        <h3 class="fw-bolder">Login</h3>
        <form action="" class="form-wrapper">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput2" class="form-label">Kata sandi</label>
            <input type="password" class="form-control" id="exampleFormControlInput2">
          </div>
          <div class="btn-wrapper d-flex flex-column justify-content-center align-items-center">
            <button type="submit" class="btn btn-purple" style="width: 120px;">Login</button>
          </div>
        </form>
      </div>
    </section>
  </main>

  <script src="./js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>