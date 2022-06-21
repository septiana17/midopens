<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Homepage | User</title>

  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <!-- Font Awesome icons (free version)-->
  <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
  <!-- Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="css/styles.css" rel="stylesheet" />

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>

<body id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="{{ asset('/img/logo putih.png') }}" alt="logo" /> MidoPENS
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars ms-1"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
          <li class="nav-item"><a class="nav-link" href="#">Public Information</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Internal Event</a></li>
          <li class="nav-item"><a class="nav-link" href="#">External Event</a></li>
          <li class="nav-item"><a class="btn btn-info btn-md" href="{{route('user.login')}}">Login</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead-->
  <header class="masthead" style="height: 100vh;">
    <div class="container">
      <div class="masthead-subheading">MidoPENS !</div>
      <div class="masthead-heading text-uppercase">Selamat Datang</div>
    </div>
  </header>

  <!-- Services-->
  <section class="page-section">
    <div class="header-hero">
      {{-- <div class="shape shape-1"></div>
      <div class="shape shape-6"></div> --}}
      <div class="container">
        <div class="text-center">
          <h2 class="section-heading text-uppercase">Postingan Terkini</h2>
          <h3 class="section-subheading text-muted">Informasi berita yang ada di semua jurusan PENS akan di posting pada MidoPENS yang nantinya mempermudah kita untuk menerima berbagai macam informasi terbaru dan terkini . </h3>
        </div>

        <div class="row d-flex justify-content-between">

          <div class="col-sm-3">
            <div class="card" style="width: 16rem; border-radius: 10px;">
              <img class="card-img-top" src="{{ asset('/img/photo1.png') }}" alt="Card image cap">
              <div class="card-body text-left">
                <button type="button" class="btn btn-primary" style="padding-top: -30px;">Teknik Informatika</button>
                 <div class="row">
                    <p>9 Mei 2022</p>
                </div>
                <div class="row">
                    <p>Hidup sdalah perjuangan yang mana terika oleh suatu hal yang belum pasti <i class="fas fa-arrow-right"></i></p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-3">
            <div class="card" style="width: 16rem; border-radius: 10px;">
              <img class="card-img-top" src="{{ asset('/img/photo2.png') }}" alt="Card image cap">
              <div class="card-body text-left">
                <button type="button" class="btn btn-warning" style="padding-top: -30px;">Teknik Elektronika</button>
                 <div class="row">
                    <p>9 Mei 2022</p>
                </div>
                <div class="row">
                    <p>Hidup sdalah perjuangan yang mana terika oleh suatu hal yang belum pasti <i class="fas fa-arrow-right"></i></p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-3">
            <div class="card" style="width: 16rem; border-radius: 10px;">
              <img class="card-img-top" src="{{ asset('/img/photo3.jpg') }}" alt="Card image cap">
              <div class="card-body text-left">
                <button type="button" class="btn btn-danger" style="padding-top: -30px;">Teknik Elektro Industri</button>
                 <div class="row">
                    <p>9 Mei 2022</p>
                </div>
                <div class="row">
                    <p>Hidup sdalah perjuangan yang mana terika oleh suatu hal yang belum pasti <i class="fas fa-arrow-right"></i></p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-3">
            <div class="card" style="width: 16rem; border-radius: 10px;">
              <img class="card-img-top" src="{{ asset('/img/photo4.jpg') }}" alt="Card image cap">
              <div class="card-body text-left">
                <button type="button" class="btn btn-info" style="padding-top: -30px;">Teknik Komputer</button>
                 <div class="row">
                    <p>9 Mei 2022</p>
                </div>
                <div class="row">
                    <p>Hidup sdalah perjuangan yang mana terika oleh suatu hal yang belum pasti <i class="fas fa-arrow-right"></i></p>
                </div>
              </div>
            </div>
          </div>

        </div>

        <div class="row">
          <div class="col-lg-8 mx-auto text-center" style="padding-top: 50px;">
            <p class="large text-muted"><a href="#"> See All The Post <i class="fas fa-arrow-right"></i> </a></p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Videos-->
  <section class="page-section">
    <div class="container justify-content-between">
      <div class="row">

        <!-- Left-->
        <section class="col-lg-7">
          <div class="content">
          <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <iframe width="700px" height="400px" class="d-block w-100"
                src="https://www.youtube.com/embed/tgbNymZ7vqY">
                </iframe>
              </div>
              <div class="carousel-item">
                <iframe width="700px" height="400px" src="https://www.youtube.com/embed/Oro8Q887UwE" class="d-block w-100"></iframe>
              </div>
              <div class="carousel-item">
                <iframe width="700px" height="400px" class="d-block w-100"
                src="https://www.youtube.com/embed/tgbNymZ7vqY">
                </iframe>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleFade" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleFade" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </button>
          </div>
          </div>
        </section>

        <!-- Right-->
        <section class="col-lg-5">
          {{-- <div class="myRightCtn">
            <div class="box">
                <header class="text-light text-center">Video Terkini</header>
                <p class="text-center" style="margin-top: 75px;">Menampilkan video serta live streaming dari kegiatan yang diselenggarakan oleh PENS.</p>
            </div>
          </div> --}}
          <header> Video Terkini </header>
          <p class="text-center" style="margin-top: 50px; color: #053f4b; font-size: 25px;">Menampilkan video serta live streaming dari kegiatan yang diselenggarakan oleh PENS.</p>
        </section>

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
      <div class="container text-md-start mt-5">
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
              <a href="#!" class="text-dark">Public Information</a>
            </p>
            <p>
              <a href="#!" class="text-dark">Internal Event</a>
            </p>
            <p>
              <a href="#!" class="text-dark">External Event</a>
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


  <!-- Core theme JS-->
  <script src="js/scripts.js"></script>
  <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>

</html>
