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
        <a class="navbar-brand" href="#">Logo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto" id="navbar">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="./beranda.php">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link actived" href="./museum.php">Museum</a>
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
              <a class="nav-link" href="#"><button type="button" class="btn btn-purple">Login</button></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <main>
    <section id="museum" class="container museum">
      <div class="museum-wrapper">
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
                  <h4 class="mt-3">Museum Nasional Indonesia</h4>
                  <p class="subtitle fw-semibold mt-3">Museum Nasional Indonesia atau yang sering disebut masyarakat “Museum Gajah” karena di halaman depan museum terdapat sebuah patung gajah perunggu. Terdapat arkeologi, sejarah, etnografi, dan geografi. </p>
                  <button class="btn btn-purple button-museum mt-2 mb-3"><a href="#">Lihat semua</a></button>
                </div>
                <div class="col">
                  <img class="img-fluid" src="./img/museum/Museum-Gajah.png" width="300px" alt="Museum Gajah">
                </div>
              </div>
              <div class="row mb-5">
                <div class="col">
                  <img class="img-fluid" src="./img/museum/museum-taman-prasasti.png" width="300px" style="border-radius: 10px;" alt="Museum Taman Prasasti">
                </div>
                <div class="col-md-7">
                  <h4 class="mt-3">Museum Taman Prasasti</h4>
                  <p class="subtitle fw-semibold mt-3">Museum Taman Prasasti adalah sebuah museum cagar budaya peninggalan masa kolonial Belanda yang berada di Jalan Tanah Abang No. 1, Jakarta Pusat. Museum ini memiliki koleksi prasasti nisan kuno serta miniatur makam khas dari 27 provinsi di Indonesia, beserta koleksi kereta jenazah antik. Museum seluas 1,2 ha ini merupakan museum terbuka yang menampilkan karya seni dari masa lampau tentang kecanggihan para pematung, pemahat, kaligrafer dan sastrawan yang menyatu. </p>
                  <button class="btn btn-purple button-museum mt-2 mb-3"><a href="#">Lihat semua</a></button>
                </div>
              </div>

              <!-- Jakbar -->
              <h3 class="fw-bolder" id="list-item-2">Jakarta Barat</h3>
              <div class="row mb-5">
                <div class="col-md-7">
                  <h4 class="mt-3">Museum Fatahillah</h4>
                  <p class="subtitle fw-semibold mt-3">Museum Fatahillah memiliki nama resmi Museum Sejarah Jakarta. Museum ini merupakan salah satu sejarah perjalanan kota Jakarta. Museum Fatahillah menempati balai kota tua dan berisi artefak, senjata, dan penjara tua. </p>
                  <button class="btn btn-purple button-museum mt-2 mb-3"><a href="#">Lihat semua</a></button>
                </div>
                <div class="col">
                  <img class="img-fluid" src="./img/museum/Museum-Fatahillah.png" width="300px" alt="Museum fatahillah">
                </div>
              </div>

              <!-- Jaksel -->
              <h3 class="fw-bolder mb-3" id="list-item-3">Jakarta Selatan</h3>
              <div class="row mb-5">
                <div class="col">
                  <img class="img-fluid" src="./img/museum/Museum-Satriamandala.png" width="300px" alt="Museum Kebangkitan Nasional">
                </div>
                <div class="col-md-7">
                  <h4 class="mt-3">Museum Satriamandala</h4>
                  <p class="subtitle fw-semibold mt-3">Merupakan museum sejarah perjuangan bangsa Indonesia. Di museum ini tersimpan berbagai benda sejarah yang berkaitan dengan perjuangan Tentara Nasional Indonesia (TNI) dari tahun 1945 sampai sekarang.</p>
                  <button class="btn btn-purple button-museum mt-2 mb-3"><a href="#">Lihat semua</a></button>
                </div>
              </div>

              <!-- Jakut -->
              <h3 class="fw-bolder mb-3" id="list-item-4">Jakarta Utara</h3>
              <div class="row mb-5">
                <div class="col-md-7">
                  <h4 class="mt-3">Museum Bahari</h4>
                  <p class="subtitle fw-semibold mt-3">Museum Bahari adalah museum yang menyimpan koleksi yang berhubungan dengan kebaharian dan kenelayanan bangsa Indonesia dari Sabang hingga Merauke. Diantaranya koleksi perahu tradisional yang digunakan nelayan.</p>
                  <button class="btn btn-purple button-museum mt-2 mb-3"><a href="#">Lihat semua</a></button>
                </div>
                <div class="col">
                  <img class="img-fluid" src="./img/museum/Museum-Bahari.png" width="300px" alt="Museum Bahari">
                </div>
              </div>

              <!-- Jaktim -->
              <h3 class="fw-bolder mb-3" id="list-item-5">Jakarta Timur</h3>
              <div class="row mb-5">
                <div class="col">
                  <img class="img-fluid" src="./img/museum/Museum-Perangko.jpg" width="300px" style="border-radius: 10px;" alt="Museum Perangko">
                </div>
                <div class="col-md-7">
                  <h4 class="mt-3">Museum Perangko</h4>
                  <p class="subtitle fw-semibold mt-3">Museum Perangko menjadi salah satu Museum yang ada di kawasan TMII. Di sini terdapat ratusan koleksi prangko yang dipamerkan. Museum ini terbagi dari beberapa ruang. Setiap ruang memiliki pameran yang berbeda-beda seperti patung perancang perangko, koleksi perangko dari jaman penjajahan hingga koleksi perangko tematik dan modern.</p>
                  <button class="btn btn-purple button-museum mt-2 mb-3"><a href="#">Lihat semua</a></button>
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