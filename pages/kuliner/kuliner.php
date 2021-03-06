<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Visit Jakarta</title>

  <!-- CSS Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" type="text/css">
  <!-- CSS -->
  <link rel="stylesheet" href="../../css/style.css" type="text/css">
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
        <a class="navbar-brand" href="#"><img src="../../img/logo.svg" alt="Logo"> Visit Jakarta</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto" id="navbar">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="../beranda/beranda.php">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="../museum/museum.php">Museum</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="../galeri/galeri.php">Galeri</a>
            </li>
            <li class="nav-item">
              <a class="nav-link actived" href="../kuliner/kuliner.php">Kuliner</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../rekreasi/rekreasi.php">Tempat Rekreasi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../login/login.php"><button type="button" class="btn btn-purple">Login</button></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <main>
    <section id="kuliner" class="container kuliner">
      <div class="kuliner-wrapper">
        <div class="row">
          <div class="col-md-3">
            <div id="list-example" class="list-group">
              <a class="list-group-item list-group-item-action" href="#list-item-1">Makanan</a>
              <a class="list-group-item list-group-item-action" href="#list-item-2">Minuman</a>
            </div>
          </div>
          <div class="col">
            <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
              <!-- Makanan -->
              <h3 class="fw-bolder mt-3" id="list-item-1">Makanan</h3>
              <div class="row mb-5">
                <div class="col-md-7">
                  <h4 class="mt-3">Soto Betawi</h4>
                  <p class="subtitle fw-semibold mt-3">Soto Betawi merupakan soto yang khas dari daerah DKI Jakarta yang terdiri dari campuran daging dan jerohan sapi. Kuah soto Betawi merupakan campuran santan dan susu. </p>
                  <button class="btn btn-purple button-kuliner mt-2 mb-3"><a href="#">Lihat restoran</a></button>
                </div>
                <div class="col text-center">
                  <img class="img-fluid" src="../../img/kuliner/soto-betawi.png" width="300px" alt="Soto Betawi">
                </div>
              </div>
              <div class="row mb-5">
                <div class="col text-center">
                  <img class="img-fluid" src="../../img/kuliner/kerak-telor.png" width="300px" style="border-radius: 10px;" alt="Kerak Telor">
                </div>
                <div class="col-md-7">
                  <h4 class="mt-3">Kerak Telor</h4>
                  <p class="subtitle fw-semibold mt-3">Kerak telor adalah makanan khas dari Jakarta (Betawi) yang dibuat dengan bahan dasar beras ketan putih dan telur ayam. Kerak telor sering dijumpai saat acara yang bertemakan Betawi bersama makanan khas Betawi lainnya.</p>
                  <button class="btn btn-purple button-kuliner mt-2 mb-3"><a href="#">Lihat restoran</a></button>
                </div>
              </div>
              <div class="row mb-5">
                <div class="col-md-7">
                  <h4 class="mt-3">Laksa Betawi</h4>
                  <p class="subtitle fw-semibold mt-3">Laksa betawi adalah Penganan berjenis mie yang diberi bumbu. Laksa Betawi memiliki kuah berwarna kekuningan. Campuran udang rebon yang ada dalam kuah laksa, membuat rasanya menjadi segar dan di padu aroma khas udang. Selain itu, Makanan ini menggunakan Ketupat.</p>
                  <button class="btn btn-purple button-kuliner mt-2 mb-3"><a href="#">Lihat Restoran</a></button>
                </div>
                <div class="col text-center">
                  <img class="img-fluid" src="../../img/kuliner/laksa-betawi.png" width="300px" alt="Laksa Betawi">
                </div>
              </div>

              <!-- Minuman -->
              <h3 class="fw-bolder mt-3" id="list-item-2">Minuman</h3>
              <div class="row mb-5">
                <div class="col text-center">
                  <img class="img-fluid" src="../../img/kuliner/selendang-mayang.png" width="300px" style="border-radius: 10px;" alt="Selendang Mayang">
                </div>
                <div class="col-md-7">
                  <h4 class="mt-3">Es Selendang Mayang</h4>
                  <p class="subtitle fw-semibold mt-3">Es selendang mayang isinya mirip seperti puding atau kue lapis yang terbuat dari tepung sagu aren. Lapisan selendang mayang terdiri dari warna putih berasal dari santan dan merah muda atau hijau. Biasanya disajikan di mangkuk dan disiram pemanis dari gula merah atau sirup, santan, dan potongan es batu.</p>
                  <button class="btn btn-purple button-kuliner mt-2 mb-3"><a href="#">Lihat Restoran</a></button>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer>
    <div id="footer" class="container pt-3">
      <h3 class="fw-bolder">Visit Jakarta</h3>
      <div class="row pt-3">
        <div class="col-md-8">
          <p class="subtitle-footer fw-semibold">Visit Jakarta merupakan website yang memberikan referensi berbagai tempat yang berada di kota Jakarta. Website ini diharapkan dapat menjadi rujukan pengguna untuk mendapatkan informasi mengenai tempat tersebut.</p>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-2">
          <div class="medsos-wrapper">
            <i class="uil uil-facebook-f"></i>
            <i class="uil uil-instagram"></i>
            <i class="uil uil-twitter-alt"></i>
          </div>
        </div>
      </div>
      <div class="copyright text-center mt-5">
        <p>&copy; 2022 All Rights Reserved Designed by Visit Jakarta</p>
      </div>
    </div>
  </footer>

  <script src="./js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>