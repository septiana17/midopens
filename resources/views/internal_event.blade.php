<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Internal | User</title>

  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <!-- Font Awesome icons (free version)-->
  <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
  <!-- Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="css/styleinternal.css" rel="stylesheet" />
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

</head>

<body id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="{{ asset('/img/logo putih.png') }}" alt="logo" />
        MidoPENS
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars ms-1"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
          <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Informasi Publik</a></li>
          <li class="nav-item"><a class="nav-link active" href="{{ route('internal') }}">Acara Internal</a>
          </li>
          <li class="nav-item"><a class="nav-link" href="{{ route('external') }}">Acara Eksternal</a></li>
          <li class="nav-item"><a class="nav-link" href="{{route('request')}}">Request</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead-->
  <header class="masthead">
    <div class="container">
      <div class="row">

        <!-- Left -->
        <section class="col-lg-6">
          <div class="masthead-subheading">Selamat Datang di MidoPENS !</div>
          <div class="masthead-heading text-uppercase">Acara Internal </div>
          <div class="masthead-subheading">Politeknik Elektronika Negeri Surabaya (PENS)</div>
        </section>

        <!-- Right -->
        <section class="col-lg-6">
          <div class="row justify-content-center">
            <img src="{{ asset('/img/logo putih.png') }}" alt="logo"
              style="height: 400px; width: 400px;" />
          </div>
        </section>

      </div>
    </div>
  </header>

  <!-- Slides card-->
  <section class="page-section">
  <div class="header-hero">
  <div class="container">
    <div class="row">
      <div class="text-center">
        <h2 class="section-heading text-uppercase">Post Terupdate</h2>
        <h3 class="section-subheading text-muted">Berita dan informasi terkni dari setiap jurusan yang ada di PENS hadir di MidoPENS .</h3>
      </div>
    <div id="carouselExampleControls" class="carousel" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="card">
            <div class="img-wrapper"><img src="{{ asset('/img/photo3.jpg') }}" class="d-block w-100" alt="Card image cap"> </div>
            <div class="card-body text-left">
              <button type="button" class="btn btn-info"
                style="padding-top: -30px;">Teknik Komputer</button>
              <div class="row">
                <p>Kategori</p>
              </div>
                <div class="row">
                <p>9 Mei 2022</p>
              </div>
              <div class="row">
                <p>Hidup sdalah perjuangan yang mana terika oleh suatu hal yang belum
                  pasti <i class="fas fa-arrow-right"></i></p>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="card">
            <div class="img-wrapper"><img src="{{ asset('/img/photo3.jpg') }}" class="d-block w-100" alt="Card image cap"> </div>
            <div class="card-body text-left">
              <button type="button" class="btn btn-danger" style="padding-top: -30px;">Teknik Elektro Industri</button>
              <div class="row">
                <p>Kategori</p>
              </div>
                <div class="row">
                <p>9 Mei 2022</p>
              </div>
              <div class="row">
                <p>Hidup sdalah perjuangan yang mana terika oleh suatu hal yang belum
                  pasti <i class="fas fa-arrow-right"></i></p>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="card">
            <div class="img-wrapper"><img src="{{ asset('/img/photo3.jpg') }}" class="d-block w-100" alt="Card image cap"> </div>
            <div class="card-body text-left">
              <button type="button" class="btn btn-secondary"
                style="padding-top: -30px;">Sistem Pembangkit Energi</button>
              <div class="row">
                <p>Kategori</p>
              </div>
                <div class="row">
                <p>9 Mei 2022</p>
              </div>
              <div class="row">
                <p>Hidup sdalah perjuangan yang mana terika oleh suatu hal yang belum
                  pasti <i class="fas fa-arrow-right"></i></p>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="card">
            <div class="img-wrapper"><img src="{{ asset('/img/photo3.jpg') }}" class="d-block w-100" alt="Card image cap"> </div>
            <div class="card-body text-left">
              <button type="button" class="btn btn-purple"
                style="padding-top: -30px;">Multimedia Broadcasting</button>
              <div class="row">
                <p>Kategori</p>
              </div>
                <div class="row">
                <p>9 Mei 2022</p>
              </div>
              <div class="row">
                <p>Hidup sdalah perjuangan yang mana terika oleh suatu hal yang belum
                  pasti <i class="fas fa-arrow-right"></i></p>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="card">
            <div class="img-wrapper"><img src="{{ asset('/img/photo3.jpg') }}" class="d-block w-100" alt="Card image cap"> </div>
            <div class="card-body text-left">
              <button type="button" class="btn btn-orange"
                style="padding-top: -30px;">Teknik Mekatronika</button>
              <div class="row">
                <p>Kategori</p>
              </div>
                <div class="row">
                <p>9 Mei 2022</p>
              </div>
              <div class="row">
                <p>Hidup sdalah perjuangan yang mana terika oleh suatu hal yang belum
                  pasti <i class="fas fa-arrow-right"></i></p>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="card">
            <div class="img-wrapper"><img src="{{ asset('/img/photo3.jpg') }}" class="d-block w-100" alt="Card image cap"> </div>
            <div class="card-body text-left">
              <button type="button" class="btn btn-green"
                style="padding-top: -30px;">Teknik Telekomunikasi</button>
              <div class="row">
                <p>Kategori</p>
              </div>
                <div class="row">
                <p>9 Mei 2022</p>
              </div>
              <div class="row">
                <p>Hidup sdalah perjuangan yang mana terika oleh suatu hal yang belum
                  pasti <i class="fas fa-arrow-right"></i></p>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="card">
            <div class="img-wrapper"><img src="{{ asset('/img/photo3.jpg') }}" class="d-block w-100" alt="Card image cap"> </div>
            <div class="card-body text-left">
              <button type="button" class="btn btn-primary"
                style="padding-top: -30px;">Teknik Informatika</button>
              <div class="row">
                <p>Kategori</p>
              </div>
                <div class="row">
                <p>9 Mei 2022</p>
              </div>
              <div class="row">
                <p>Hidup sdalah perjuangan yang mana terika oleh suatu hal yang belum
                  pasti <i class="fas fa-arrow-right"></i></p>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="card">
            <div class="img-wrapper"><img src="{{ asset('/img/photo3.jpg') }}" class="d-block w-100" alt="Card image cap"> </div>
            <div class="card-body text-left">
              <button type="button" class="btn btn-warning" style="padding-top: -30px;">Teknik Elektronika</button>
              <div class="row">
                <p>Kategori</p>
              </div>
                <div class="row">
                <p>9 Mei 2022</p>
              </div>
              <div class="row">
                <p>Hidup sdalah perjuangan yang mana terika oleh suatu hal yang belum
                  pasti <i class="fas fa-arrow-right"></i></p>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="card">
            <div class="img-wrapper"><img src="{{ asset('/img/photo3.jpg') }}" class="d-block w-100" alt="Card image cap"> </div>
            <div class="card-body text-left">
              <button type="button" class="btn btn-info"
                style="padding-top: -30px;">Teknik Komputer</button>
              <div class="row">
                <p>Kategori</p>
              </div>
                <div class="row">
                <p>9 Mei 2022</p>
              </div>
              <div class="row">
                <p>Hidup sdalah perjuangan yang mana terika oleh suatu hal yang belum
                  pasti <i class="fas fa-arrow-right"></i></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>

      <div class="row">
          <div class="col-lg-8 mx-auto text-center" style="padding-top: 50px;">
            <p class="large text"><a href="{{route('internal_posted')}}"> Lihat Semua Postingan <i class="fas fa-arrow-right"></i> </a></p>
          </div>
        </div>

    </div>
    </div>
  </div>
  </div>
  </section>

  <!-- Jurusan-->
  <section class="page-section bg-light">
    <div class="container">
      <div class="text-center">
        <h2 class="section-heading text-uppercase">Jurusan</h2>
        <h3 class="section-subheading text-muted">Politeknik Elektronika Negeri Surabaya</h3>
      </div>
      <div class="row gy-3 my-3">

        <!-- card -->
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="card box-shadow">
            <img class="card-img-bottom m-auto" style="width: 200px; height: 200px; padding-top: 5px;"
              src="{{ asset('/img/logo/logo-it.png') }}" alt="Card image cap">
            <div class="card-body">
              <h6 class="card-title text-center">Teknik Informatika</h6>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="card box-shadow">
            <img class="card-img-bottom m-auto" style="width: 200px; height: 200px; padding-top: 5px;"
              src="{{ asset('/img/logo/logo-tekkom.png') }}" alt="Card image cap">
            <div class="card-body">
              <h6 class="card-title text-center">Teknik Komputer</h6>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="card box-shadow">
            <img class="card-img-bottom m-auto" style="width: 200px; height: 200px; padding-top: 5px;"
              src="{{ asset('/img/logo/logo-elka.jpg') }}" alt="Card image cap">
            <div class="card-body">
              <h6 class="card-title text-center">Teknik Elektronika</h6>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="card box-shadow">
            <img class="card-img-bottom m-auto" style="width: 200px; height: 200px; padding-top: 5px;"
              src="{{ asset('/img/logo/logo-elin.jpg') }}" alt="Card image cap">
            <div class="card-body">
              <h6 class="card-title text-center">Teknik Elektro Industri</h6>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="card box-shadow">
            <img class="card-img-bottom m-auto" style="width: 200px; height: 200px; padding-top: 5px;"
              src="{{ asset('/img/logo/logo-telkom.png') }}" alt="Card image cap">
            <div class="card-body">
              <h6 class="card-title text-center">Teknik Telekomunikasi</h6>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="card box-shadow">
            <img class="card-img-bottom m-auto" style="width: 200px; height: 200px; padding-top: 5px;"
              src="{{ asset('/img/logo/logo-meka.png') }}" alt="Card image cap">
            <div class="card-body">
              <h6 class="card-title text-center">Teknik Mekatronika</h6>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="card box-shadow">
            <img class="card-img-bottom m-auto" style="width: 200px; height: 200px; padding-top: 5px;"
              src="{{ asset('/img/logo/logo-mmb.png') }}" alt="Card image cap">
            <div class="card-body">
              <h6 class="card-title text-center">Multimedia Broadcasting</h6>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="card box-shadow">
            <img class="card-img-bottom m-auto" style="width: 200px; height: 200px; padding-top: 5px;"
              src="{{ asset('/img/logo/logo-spe.png') }}" alt="Card image cap">
            <div class="card-body">
              <h6 class="card-title text-center">Sistem Pembangkit Energi</h6>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>


  <!-- Footer -->
  <footer class="text-center text-lg-start text-dark" style="background-color: #ECEFF1">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-between p-4 text-white" style="background-color: #00ADB5">
      <!-- Left -->
      <div class="me-5">
        <span>Get connected with us on social networks:</span>
      </div>
      <!-- Left -->

      <!-- Right -->
      <div>
        <a href="" class="text-decoration-none text-white me-4">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="text-decoration-none text-white me-4">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="text-decoration-none text-white me-4">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="text-decoration-none text-white me-4">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="text-decoration-none text-white me-4">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="text-decoration-none text-white me-4">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h1 class="text-uppercase fw-bold">MidoPENS</h1>
            <hr class="mb-4 mt-0 d-inline-block mx-auto"
              style="width: 60px; background-color: #7c4dff; height: 2px" />
            <p>
              MidoPENS is a website-based online wall magazine developed by Electronic Engineering
              Polytechnic Institute of Surabaya (EEPIS).
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Products</h6>
            <hr class="mb-4 mt-0 d-inline-block mx-auto"
              style="width: 60px; background-color: #7c4dff; height: 2px" />
            <p>
              <a href="#!" class="text-dark">Informasi Publik</a>
            </p>
            <p>
              <a href="#!" class="text-dark">Acara Internal</a>
            </p>
            <p>
              <a href="#!" class="text-dark">Acara Eksternal</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Useful links</h6>
            <hr class="mb-4 mt-0 d-inline-block mx-auto"
              style="width: 60px; background-color: #7c4dff; height: 2px" />
            <p>
              <a href="#!" class="text-dark">Your Account</a>
            </p>
            <p>
              <a href="#!" class="text-dark">Become an Affiliate</a>
            </p>
            <p>
              <a href="#!" class="text-dark">Shipping Rates</a>
            </p>
            <p>
              <a href="#!" class="text-dark">Help</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Contact</h6>
            <hr class="mb-4 mt-0 d-inline-block mx-auto"
              style="width: 60px; background-color: #7c4dff; height: 2px" />
            <p><i class="fas fa-home mr-3"></i> Sukolilo, Suarabaya East Java</p>
            <p><i class="fas fa-envelope mr-3"></i> MidoPENS@gmail.com</p>
            <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: #222831; color: #fff">
      ?? 2022 Copyright:
      <a class="text-light" href="#">MidoPENS@gmail.com</a>
      <p> All rights reserved. Terms and Conditions | Privacy Policy</p>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->

  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="js/scripts.js"></script>
  <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
  <!-- Swiper JS -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>


  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      spaceBetween: 30,
      slidesPerGroup: 3,
      loop: true,
      loopFillGroupWithBlank: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>

  <script>
    var multipleCardCarousel = document.querySelector(
      "#carouselExampleControls"
    );
    if (window.matchMedia("(min-width: 768px)").matches) {
      var carousel = new bootstrap.Carousel(multipleCardCarousel, {
        interval: false,
      });
      var carouselWidth = $(".carousel-inner")[0].scrollWidth;
      var cardWidth = $(".carousel-item").width();
      var scrollPosition = 0;
      $("#carouselExampleControls .carousel-control-next").on("click", function() {
        if (scrollPosition < carouselWidth - cardWidth * 4) {
          scrollPosition += cardWidth;
          $("#carouselExampleControls .carousel-inner").animate({
              scrollLeft: scrollPosition
            },
            600
          );
        }
      });
      $("#carouselExampleControls .carousel-control-prev").on("click", function() {
        if (scrollPosition > 0) {
          scrollPosition -= cardWidth;
          $("#carouselExampleControls .carousel-inner").animate({
              scrollLeft: scrollPosition
            },
            600
          );
        }
      });
    } else {
      $(multipleCardCarousel).addClass("slide");
    }
  </script>
</body>

</html>
