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
              <a class="nav-link actived" href="./galeri.php">Galeri</a>
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
    <section id="galeri" class="container galeri">
      <div class="galeri-wrapper">
        <div class="row">
          <div class="col-md-3">
            <div id="list-example" class="list-group">
              <a class="list-group-item list-group-item-action" href="#list-item-1">Jakarta Pusat</a>
              <a class="list-group-item list-group-item-action" href="#list-item-2">Jakarta Barat</a>
              <a class="list-group-item list-group-item-action" href="#list-item-3">Jakarta Selatan</a>
              <a class="list-group-item list-group-item-action" href="#list-item-4">Jakarta Utara</a>
              <a class="list-group-item list-group-item-action" href="#list-item-5">Jakarta Timur</a>
            </div>
          </div>
          <div class="col">
            <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
              <!-- Jakpus -->
              <h3 class="fw-bolder mt-3" id="list-item-1">Jakarta Pusat</h3>
              <div class="row mb-5">
                <div class="col-md-7">
                  <h4 class="mt-3">Galeri Nasional Indonesia</h4>
                  <p class="subtitle fw-semibold mt-3">Galeri Nasional Indonesia merupakan tempat pameran seni rupa modern dan kontemporer. Terdapat juga beberapa gedung yang berfungsi sebagai tempat perhelatan seni rupa Indonesia dan juga mancanegara.</p>
                  <button class="btn btn-purple button-galeri mt-2 mb-3"><a href="#">Lihat semua</a></button>
                </div>
                <div class="col text-center">
                  <img class="img-fluid" src="./img/galeri/galeri-nasional-indonesia.png" width="300px" alt="Galeri Nasional Indonesia">
                </div>
              </div>
              <div class="row mb-5">
                <div class="col text-center">
                  <img class="img-fluid" src="./img/galeri/galeri-indonesia-kaya.png" width="300px" style="border-radius: 10px;" alt="Galeri Indonesia Kaya">
                </div>
                <div class="col-md-7">
                  <h4 class="mt-3">Galeri Indonesia Kaya</h4>
                  <p class="subtitle fw-semibold mt-3">Galeri Indonesia Kaya ini merupakan ruang edutainment budaya yang berbasis digital dimana tempat ini menampilkan karya seni nusantara mulai dari alat musik tradisional, baju adat, sampai informasi tentang kuliner daerah nusantara.</p>
                  <button class="btn btn-purple button-galeri mt-2 mb-3"><a href="#">Lihat semua</a></button>
                </div>
              </div>
              <div class="row mb-5">
                <div class="col-md-7">
                  <h4 class="mt-3">Galeri Bartele</h4>
                  <p class="subtitle fw-semibold mt-3">Galeri Bartele merupakan tempat seni yang menampilkan barang - barang antik. Dalam galeri ini terdapat berbagai koleksi barang langka seperti buku, peta foto - foto, dan lukisan yang berusia sampai lebih dari 500 tahun.</p>
                  <button class="btn btn-purple button-galeri mt-2 mb-3"><a href="#">Lihat semua</a></button>
                </div>
                <div class="col text-center">
                  <img class="img-fluid" src="./img/galeri/galeri-bartele.png" width="300px" alt="Galeri Bartele">
                </div>
              </div>

              <!-- Jakbar -->
              <h3 class="fw-bolder" id="list-item-2">Jakarta Barat</h3>
              <div class="row mb-5">
                <div class="col">
                  <img class="img-fluid" src="./img/galeri/galeri-nadi.jpeg" width="300px" style="border-radius: 10px;" alt="Galeri Nadi">
                </div>
                <div class="col-md-7">
                  <h4 class="mt-3">Galeri Nadi</h4>
                  <p class="subtitle fw-semibold mt-3">Galeri Nadi adalah ruang seni di Jakarta yang didirikan oleh seorang kolektor muda Seni Rupa Indonesia: Biantoro Santoso pada tahun 2000. Kata “Nadi” dalam bahasa Indonesia berarti denyut nadi, dan seperti namanya, artspace bermaksud untuk menghidupkan perkembangan seni rupa kontemporer di Indonesia. Galeri Nadi menampilkan karya-karya seniman seperti Agus Suwage, Handiwirman Saputra, dan Jumaldi Alfi.</p>
                  <button class="btn btn-purple button-galeri mt-2 mb-3"><a href="#">Lihat semua</a></button>
                </div>
              </div>


              <!-- Jaksel -->
              <h3 class="fw-bolder mb-3" id="list-item-3">Jakarta Selatan</h3>
              <div class="row mb-5">
                <div class="col-md-7">
                  <h4 class="mt-3">Galeri Hadiprana</h4>
                  <p class="subtitle fw-semibold mt-3">Galeri yang didirikan sejak 1961 ini menampilkan seni - seni lukisan dari nusantaran dan mancanegara. Selain memamerkan kesenian, di tempat ini juga terdapat kelas untuk mempelajari mengenai kesenian.</p>
                  <button class="btn btn-purple button-galeri mt-2 mb-3"><a href="#">Lihat semua</a></button>
                </div>
                <div class="col text-center">
                  <img class="img-fluid" src="./img/galeri/galeri-hadiprana.png" width="300px" style="border-radius: 10px;" alt="Galeri Hadiprana">
                </div>
              </div>

              <!-- Jakut -->
              <h3 class="fw-bolder mb-3" id="list-item-4">Jakarta Utara</h3>
              <div class="row mb-5">
                <div class="col text-center">
                  <img class="img-fluid" src="./img/galeri/galeri-artone.jpeg" width="300px" style="border-radius: 10px;" alt="Galeri Art One">
                </div>
                <div class="col-md-7">
                  <h4 class="mt-3">Galeri Art One</h4>
                  <p class="subtitle fw-semibold mt-3">Berlokasi di Kemayoran, Galeri Art One memiliki bangunan serba putih yang berseni. Galeri ini memamerkan lebih dari 2000 koleksi karya seni dari seniman dari berbagai dekade. Galeri Art One adalah “one-stop art destination” yang menampung galeri seniman senior sekaligus memberikan konsultasi seni, restorasi, dan pendidikan bagi seniman muda.</p>
                  <button class="btn btn-purple button-galeri mt-2 mb-3"><a href="#">Lihat semua</a></button>
                </div>
              </div>

              <!-- Jaktim -->
              <h3 class="fw-bolder mb-3" id="list-item-5">Jakarta Timur</h3>
              <div class="row mb-5">
                <div class="col-md-7">
                  <h4 class="mt-3">Galeri Pasar Seni</h4>
                  <p class="subtitle fw-semibold mt-3">Galeri ini baru diresmikan tahun 2020 oleh Pemerintah Kota Jakarta Timur.Galeri disebut juga pasar karena berisikan kios-kios yang menjual lukisan, patung, kaset, vinyl atau piringan hitam, turntable (alat pemutar piringan hitam), lemari kayu jati, buku sastra, bingkai foto, dan alat seni lainnya.</p>
                  <button class="btn btn-purple button-galeri mt-2 mb-3"><a href="#">Lihat semua</a></button>
                </div>
                <div class="col text-center">
                  <img class="img-fluid" src="./img/galeri/galeri-pasarseni.jpeg" width="300px" style="border-radius: 10px;" alt="Galeri Pasar Seni">
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