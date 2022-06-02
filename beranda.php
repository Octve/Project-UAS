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
              <a class="nav-link actived" aria-current="page" href="./beranda.php">Beranda</a>
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
    <!-- Welcome -->
    <section id="welcomePage" class="welcomePage text-center">
      <h1 class="title-welcomePage fw-bold">Selamat Datang di <span>Visit Jakarta</span>!</h1>
      <p class="container subtitle-welcomePage subtitle fw-semibold">Ingin berwisata ke Jakarta tetapi tidak tahu apa saja yang asyik untuk dikunjungi? Tenang, <span>Visit Jakarta</span> hadir untuk membantu kamu menentukan tujuan wisata. <br>Yuk, gabung!</p>
      <button class="btn btn-purple button-welcomePage"><a href="./login.php">Gabung sekarang</a></button>
    </section>

    <!-- Museum -->
    <section id="beranda-museum" class="container museum">
      <div class="row d-flex justify-content-evenly">
        <div class="col">
          <div class="rectangle text-center">
            <img class="img-fluid" src="./img/beranda/museum.png " alt="museum">
          </div>
        </div>
        <div class="col text-museum align-self-center">
          <h1 class="text-decoration-underline">Museum</h1>
          <p class="subtitle subtitle-museum mt-3 fw-semibold">Kita hidup sekarang karena masa lalu, dan masa depan adalah kita hari ini. Demikian kata seorang bijak yang menggambarkan pentingnya sejarah. Nah, salah satu cara belajar sejarah dengan cara yang menyenangkan adalah dengan mengunjungi museum.</p>
          <button class="btn btn-purple button-museum mt-4"><a href="#">Selengkapnya</a></button>
        </div>
      </div>
    </section>

    <!-- Galeri -->
    <section id="beranda-galeri" class="container galeri">
      <div class="row d-flex justify-content-evenly">
        <div class="col text-galeri align-self-center">
          <h1 class="text-decoration-underline">Galeri</h1>
          <p class="subtitle subtitle-galeri mt-3 fw-semibold">Galeri merupakan tempat yang berfungsi untuk menyajikan karya seni seperti alat musik, tarian, baju adat, dan lain - lain untuk dipamerkan kepada masyarakat luas. Selain itu, galeri juga bisa menjadi tempat untuk menjual karya seni serta menjadi tempat untuk mempelajari berbagai macam tentang kesenian.</p>
          <button class="btn btn-purple button-museum mt-4"><a href="#">Selengkapnya</a></button>
        </div>
        <div class="col">
          <div class="rectangle text-center">
            <img class="img-fluid" src="./img/beranda/galeri.jpg" alt="Galeri">
          </div>
        </div>

      </div>
    </section>

    <!-- Kuliner -->
    <section id="beranda-kuliner" class="container kuliner">
      <div class="kuliner-title">
        <h1 class="text-decoration-underline text-center">Kuliner</h1>
      </div>
      <div class="subtitle kuliner-subtitle">
        <p class="subtitle subtitle-kuliner mt-3 fw-semibold text-center" style="color: hsla(0, 0%, 18%, 0.603);">Sejarah nusantara melihat masakan Indonesia sebagai hasil persilangan budaya. Saat ini, kreativitas anak muda berkontribusi pada keragaman makanan dan minuman di Jakarta. Belum lagi beragamnya gaya hidup diet (modified diet), yaitu mulai dari vegetarian (tanpa daging), vegan (tanpa makanan hewani), hingga ketogenik (makanan rendah karbohidrat dan tinggi lemak) yang menciptakan sebuah kancah kuliner baru.</p>
      </div>

      <div class="wrapper">
        <div class="row justify-content-evenly ">
          <div class="col-md-3 m-1">
            <div class="card" style="width: 18rem;">
              <img src="./img/beranda/soto-betawi.png" class="card-img-top" alt="Soto Betawi">
              <div class="card-body">
                <h5 class="card-title fw-bolder">Soto Betawi</h5>
                <p class="card-text fw-semibold">Soto Betawi merupakan soto khas yang terdiri dari campuran
                  daging dan jerohan sapi. </p>
                <a href="#"><button class=" btn btn-purple">Selengkapnya</button></a>
              </div>
            </div>
          </div>
          <div class="col-md-3 m-1">
            <div class="card" style="width: 18rem;">
              <img src="./img/beranda/kerak-telor.png" class="card-img-top" alt="Kerak Telor">
              <div class="card-body">
                <h5 class="card-title fw-bolder">Kerak Telor</h5>
                <p class="card-text fw-semibold">Kerak telor adalah makanan khas yang terbuat dari bahan dasar beras ketan putih dan telur ayam.</p>
                <a href="#"><button class=" btn btn-purple">Selengkapnya</button></a>
              </div>
            </div>
          </div>
          <div class="col-md-3 m-1">
            <div class="card" style="width: 18rem;">
              <img src="./img/beranda/laksa-betawi.png" class="card-img-top" alt="Laksa Betawi">
              <div class="card-body">
                <h5 class="card-title fw-bolder">Laksa Betawi</h5>
                <p class="card-text fw-semibold">Laksa betawi adalah Penganan berjenis mie yang diberi bumbu</p>
                <a href="#"><button class=" btn btn-purple">Selengkapnya</button></a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- Tempat Rekreasi -->
    <section id="beranda-tempat-rekreasi" class="container tempat-rekreasi">
      <div class="row d-flex justify-content-evenly">
        <div class="col">
          <div class="rectangle text-center">
            <img class="img-fluid" src="./img/beranda/rekreasi.jpg" alt="Rekreasi">
          </div>
        </div>
        <div class="col text-tempat-rekreasi align-self-center">
          <h1 class="text-decoration-underline">Tempat Rekreasi</h1>
          <p class="subtitle subtitle-tempat-rekreasi mt-3 fw-semibold">Tempat rekreasi merupakan suatu kawasan yang dapat digunakan oleh masyarakat untuk menghabiskan waktu luang baik secara individual atau bersama-sama dengan keluarga, teman, dan lainnya. </p>
          <button class="btn btn-purple button-tempat-rekreasi mt-4"><a href="#">Selengkapnya</a></button>
        </div>
      </div>
    </section>

    <!-- Tentang Kami -->
    <section id="tentang-kami" class="tentang-kami">
      <div class="container">
        <div class="tentang-kami-title">
          <h1 class="text-decoration-underline text-center">Tentang Kami</h1>
        </div>
        <div class="tentang-kami-subtitle">
          <p class="subtitle-tentang-kami mt-5 fw-semibold text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore nesciunt vel veniam et cupiditate, harum aut voluptate nobis aperiam ea dicta dolore quas nihil, tempora suscipit exercitationem facilis recusandae labore aspernatur, eaque eligendi modi! Dolores voluptas quas inventore dolorum, repudiandae distinctio rerum similique possimus laudantium quos consectetur at dolore? Debitis et repellat nobis fugit eligendi sapiente nesciunt dolores quas, corporis hic! Quas sapiente nobis incidunt laboriosam alias. Deserunt, incidunt inventore!</p>
          <p class="subtitle-tentang-kami mt-1 fw-semibold text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore nesciunt vel veniam et cupiditate, harum aut voluptate nobis aperiam ea dicta dolore quas nihil, tempora suscipit exercitationem facilis recusandae labore aspernatur, eaque eligendi modi! Dolores voluptas quas inventore dolorum, repudiandae distinctio rerum similique possimus laudantium quos consectetur at dolore? Debitis et repellat nobis fugit eligendi sapiente nesciunt dolores quas, corporis hic! Quas sapiente nobis incidunt laboriosam alias. Deserunt, incidunt inventore!</p>
          <p class="subtitle-tentang-kami mt-1 fw-semibold text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore nesciunt vel veniam et cupiditate, harum aut voluptate nobis aperiam ea dicta dolore quas nihil, tempora suscipit exercitationem facilis recusandae labore aspernatur, eaque eligendi modi! Dolores voluptas quas inventore dolorum, repudiandae distinctio rerum similique possimus laudantium quos consectetur at dolore? Debitis et repellat nobis fugit eligendi sapiente nesciunt dolores quas, corporis hic! Quas sapiente nobis incidunt laboriosam alias. Deserunt, incidunt inventore!</p>
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