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
              <a class="nav-link" href="./museum.php">Museum</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./galeri.php">Galeri</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./kuliner.php">Kuliner</a>
            </li>
            <li class="nav-item">
              <a class="nav-link actived" href="./rekreasi.php">Tempat Rekreasi</a>
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
    <section id="rekreasi" class="container rekreasi">
      <div class="rekreasi-wrapper">
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
                  <h4 class="mt-3">Monumen Nasional</h4>
                  <p class="subtitle fw-semibold mt-3">Monumen Nasional atau yang biasa kita kenal dengan sebutan Monas atau Tugu Monas merupakan monumen peringatan setinggi 132 meter (433 kaki) yang didirikan untuk mengenang perlawanan dan perjuangan rakyat Indonesia demi merebut kemerdekaan dari pemerintahan kolonial Hindia Belanda. </p>
                  <button class="btn btn-purple button-rekreasi mt-2 mb-3"><a href="#">Lihat semua</a></button>
                </div>
                <div class="col text-center">
                  <img class="img-fluid" src="./img/rekreasi/Monas.png" width="300px" alt="Monas">
                </div>
              </div>
              <div class="row mb-5">
                <div class="col text-center">
                  <img class="img-fluid" src="./img/rekreasi/gedung-kebangkitan-nasional.png" width="300px" style="border-radius: 10px;" alt="rekreasi Kebangkitan Nasional">
                </div>
                <div class="col-md-7">
                  <h4 class="mt-3">Gedung Kebangkitan Nasional</h4>
                  <p class="subtitle fw-semibold mt-3">Museum Kebangkitan Nasional merupakan gedung yang dibangun sebagai monumen tempat lahir dan berkembangnya kesadaran nasional dan juga ditemukannya organisasi pergerakan modern pertama kali dengan nama Boedi Oetomo. </p>
                  <button class="btn btn-purple button-rekreasi mt-2 mb-3"><a href="#">Lihat semua</a></button>
                </div>
              </div>
              <div class="row mb-5">
                <div class="col-md-7">
                  <h4 class="mt-3">Tugu Proklamasi</h4>
                  <p class="subtitle fw-semibold mt-3">Tugu Proklamasi merupakan tugu peringatan proklamasi kemerdekaan Republik Indonesia yang berdiri di kompleks Taman Proklamasi di Jalan Proklamasi, Jakarta Pusat. Tugu tersebut berlokasi di kediaman Suoekarno pada masa lampau, di Jalan Pegangsaan Timur 56. Rumah tersebut, telah dihancurkan dan merupakan lokasi pembacaan proklamasi kemerdekaan.</p>
                  <button class="btn btn-purple button-rekreasi mt-2 mb-3"><a href="#">Lihat semua</a></button>
                </div>
                <div class="col text-center">
                  <img class="img-fluid" src="./img/rekreasi/tugu-proklamasi.png" width="300px" alt="Tugu Proklamasi">
                </div>
              </div>
              <div class="row mb-5">
                <div class="col text-center">
                  <img class="img-fluid" src="./img/rekreasi/taman-suropati.png" width="300px" style="border-radius: 10px;" alt="rekreasi Kebangkitan Nasional">
                </div>
                <div class="col-md-7">
                  <h4 class="mt-3">Taman Suropati</h4>
                  <p class="subtitle fw-semibold mt-3">Taman Suropati (semula bernama Burgemeester Bisschopplein) merupakan nama sebuah taman di Jakarta. Pada awalnya nama taman ini diambil dari nama wali kota Batavia pertama, G.J. Bisshop (1916–1920). </p>
                  <button class="btn btn-purple button-rekreasi mt-2 mb-3"><a href="#">Lihat semua</a></button>
                </div>
              </div>

              <!-- Jakbar -->
              <h3 class="fw-bolder" id="list-item-2">Jakarta Barat</h3>
              <div class="row mb-5">
                <div class="col-md-7">
                  <h4 class="mt-3">Kota Tua Batavia</h4>
                  <p class="subtitle fw-semibold mt-3">Kota Tua Batavia pada sekitar abad ke-16 merupakan lokasi yang menjadi pusat perdagangan di Asia. Uniknya, keberadaan sisa-sisa masa lampau yang merupakan kawasan peninggalan Belanda tersebut sampai sekarang masih terjaga keasliannya, terutama dari sisi bangunannya.</p>
                  <button class="btn btn-purple button-rekreasi mt-2 mb-3"><a href="#">Lihat semua</a></button>
                </div>
                <div class="col text-center">
                  <img class="img-fluid" src="./img/rekreasi/kota-tua.png" width="300px" alt="Kota Tua Batavia">
                </div>
              </div>

              <!-- Jaksel -->
              <h3 class="fw-bolder mb-3" id="list-item-3">Jakarta Selatan</h3>
              <div class="row mb-5">
                <div class="col text-center">
                  <img class="img-fluid" src="./img/rekreasi/taman-langsat.png" width="300px" alt="Taman Langsat">
                </div>
                <div class="col-md-7">
                  <h4 class="mt-3">Taman Langsat</h4>
                  <p class="subtitle fw-semibold mt-3">Taman Langsat adalah taman yang berada di di Jalan Langsat Kebayoran Baru Jakarta Selatan, di belakang Pasar Burung Barito. Taman ini mempunyai luas lahan seluas 3,6 hektar.</p>
                  <button class="btn btn-purple button-rekreasi mt-2 mb-3"><a href="#">Lihat semua</a></button>
                </div>
              </div>

              <!-- Jakut -->
              <h3 class="fw-bolder mb-3" id="list-item-4">Jakarta Utara</h3>
              <div class="row mb-5">
                <div class="col-md-7">
                  <h4 class="mt-3">Suaka Margasatwa Muara Angke</h4>
                  <p class="subtitle fw-semibold mt-3">Taman Suaka Margasatwa Muara Angke merupakan destinasi wisata hutan bakau yang terletak di Jakarta Utara. Daerah ini menjadi satu-satunya hutan di Jakarta yang dilindungi oleh pemerintah. Tempat wisata ini memiliki jembatan kayu dengan panjang sekitar 843 meter yang dapat membantu untuk menelusuri hutan alami yang indah.</p>
                  <button class="btn btn-purple button-rekreasi mt-2 mb-3"><a href="#">Lihat semua</a></button>
                </div>
                <div class="col text-center">
                  <img class="img-fluid" src="./img/rekreasi/muara-angke.png" width="300px" alt="Suaka Margasatwa Muara Angke">
                </div>
              </div>

              <!-- Jaktim -->
              <h3 class="fw-bolder mb-3" id="list-item-5">Jakarta Timur</h3>
              <div class="row mb-5">
                <div class="col text-center">
                  <img class="img-fluid" src="./img/rekreasi/taman-mini.png" width="300px" alt="Taman Mini Indonesia Indah">
                </div>
                <div class="col-md-7">
                  <h4 class="mt-3">Taman Mini Indonesia Indah</h4>
                  <p class="subtitle fw-semibold mt-3">Taman ini merupakan salah satu objek wisata yang populer dikalangan wisatawan. TMII ini banyak dikunjungi oleh wisatawan karena taman mini Indonesia indah menyuguhkan keindahan menarik yang hanya dapat dijumpai di taman tersebut. Taman ini menyuguhkan keindahan objek wisata dengan tema budaya Indonesia.</p>
                  <button class="btn btn-purple button-rekreasi mt-2 mb-3"><a href="#">Lihat semua</a></button>
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