<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Video | User</title>

  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <!-- Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="css/stylepicture.css" rel="stylesheet" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="css/all.min.css">

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
          <li class="nav-item"><a class="nav-link active" href="{{ route('home') }}">Informasi Publik</a>
          </li>
          <li class="nav-item"><a class="nav-link" href="{{ route('internal') }}">Acara Internal</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('external') }}">Acara Eksternal</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('request') }}">Request</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Main content -->
  <section class="content">
    <div class="container">
      <div class="row">

        <!-- Left col -->
        <section class="col-lg-9" style="padding-top: 5px; padding-bottom: 5px">
          <div class="d-flex align-items-center w-100 h-100">
            <iframe width="700px" height="400px" class="d-block w-100"
              src="https://www.youtube.com/embed/tgbNymZ7vqY">
            </iframe>
          </div>
          <div class="btn-group" style="font-size: 25px;">
            <a href="#" class="me-4">
              <i class="fab fa-facebook"></i>
            </a>
            <a href="#" class="me-4">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="me-4">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="#" class="me-4">
              <i class="fa fa-download"></i>
            </a>

        </section>

        <!-- Right col -->
        <section class="col-lg-3" style="padding-top: 5px; padding-bottom: 0">
          <div class="row">
            <div class="text-truncate">
              <span style="font-weight: bold">
                <a href="" class="text-black me-2" style="text-decoration: none">
                  <i class="fa-solid fa-comment-dots"></i>
                </a>
                Komentar
              </span>
            </div>
          </div>
          <div class="progress" style="height: 5px;">
            <div class="progress-bar bg-dark" role="progressbar" style="width: 100%;" aria-valuenow="100"
              aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <ul class="list-unstyled activity-list">
            <li>
              <header>Name</header>
              <p><a href="#"></a> Bagus sekali <span class="float-right">10:00</span></p>
            </li>
            <li>
              <header>Name</header>
              <p><a href="#"></a> Bagus sekali <span class="float-right">10:00</span></p>
            </li>
            <li>
              <header>Name</header>
              <p><a href="#"></a> Bagus sekali <span class="float-right">10:00</span></p>
            </li>
          </ul>
          <div class="progress" style="height: 1px;">
            <div class="progress-bar bg-dark" role="progressbar" style="width: 100%;"
              aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"
              style="background-color: #EEEEEE;"></div>
          </div>
          <div style="padding-top: 10px">
            <div class="btn-group">
              <button class="btn btn-default"><i class="fa fa-thumbs-up "></i> Suka </button>
              <button class="btn btn-default" id="btn-komentartext"><i class="fa fa-comment-dots"></i>
                Komentar </button>
            </div>
            <form action="" method="POST" id="komentartext" rows="5"
              style="margin-top: 10px; display: none;">
              <textarea class="form-control" name="komentar"></textarea>
              <input type="submit" class="btn btn-primary" value="kirim" style="margin-top: 10px">
            </form>
          </div>
        </section>

        <!-- card -->
        <div class="row" style="padding-top: 60px; padding-bottom: 0">
          <div class="text-truncate">
            <span style="font-weight: bold"></span>
            <p><a href="#" style="color: black"> Lihat Semua Postingan </a><i
                class="fa-solid fa-arrow-right-long"></i></p>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="card box-shadow">
            <img class="card-img-top" src="{{ asset('/img/photo1.png') }}" alt="Card image cap">
            <div class="card-body text-left">
              <button type="button" class="btn btn-danger" style="padding-top: -30px;">Teknik Elektro
                Industri</button>
              <div class="row">
                <p>Kategori</p>
              </div>
              <div class="row">
                <p>9 Mei 2022</p>
              </div>
              <div class="row">
                <p>Hidup sdalah perjuangan yang mana terika oleh suatu hal yang belum pasti <i
                    class="fas fa-arrow-right"></i></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="card box-shadow">
            <img class="card-img-top" src="{{ asset('/img/photo1.png') }}" alt="Card image cap">
            <div class="card-body text-left">
              <button type="button" class="btn btn-info" style="padding-top: -30px;">Teknik
                Komputer</button>
              <div class="row">
                <p>Kategori</p>
              </div>
              <div class="row">
                <p>9 Mei 2022</p>
              </div>
              <div class="row">
                <p>Hidup sdalah perjuangan yang mana terika oleh suatu hal yang belum pasti <i
                    class="fas fa-arrow-right"></i></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="card box-shadow">
            <img class="card-img-top" src="{{ asset('/img/photo1.png') }}" alt="Card image cap">
            <div class="card-body text-left">
              <button type="button" class="btn btn-warning" style="padding-top: -30px;">Teknik
                Elektronika</button>
              <div class="row">
                <p>Kategori</p>
              </div>
              <div class="row">
                <p>9 Mei 2022</p>
              </div>
              <div class="row">
                <p>Hidup sdalah perjuangan yang mana terika oleh suatu hal yang belum pasti <i
                    class="fas fa-arrow-right"></i></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="card box-shadow">
            <img class="card-img-top" src="{{ asset('/img/photo1.png') }}" alt="Card image cap">
            <div class="card-body text-left">
              <button type="button" class="btn btn-primary" style="padding-top: -30px;">Teknik
                Informatika</button>
              <div class="row">
                <p>Kategori</p>
              </div>
              <div class="row">
                <p>9 Mei 2022</p>
              </div>
              <div class="row">
                <p>Hidup sdalah perjuangan yang mana terika oleh suatu hal yang belum pasti <i
                    class="fas fa-arrow-right"></i></p>
              </div>
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
        <a href="" class="text-white me-4">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="text-white me-4">
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
              style="width: 30px; background-color: #7c4dff; height: 2px" />
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
      © 2022 Copyright:
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
  <!-- Font Awesome icons (free version)-->
  <script src="https://kit.fontawesome.com/9706c69056.js" crossorigin="anonymous"></script>
  <!--Jquery-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>

  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>

  <script>
    $(document).ready(function() {
      $('#btn-komentartext').click(function() {
        $('#komentartext').toggle('slide');
      });
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
