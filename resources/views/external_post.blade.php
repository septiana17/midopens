<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>ExternalPost | User</title>

  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <!-- Font Awesome icons (free version)-->
  <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
  <!-- Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="css/stylepost.css" rel="stylesheet" />

</head>

<body id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg fixed-top" id="mainNav">
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
          <li class="nav-item"><a class="nav-link  active" href="#">External Event</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Request</a></li>
        </ul>
      </div>
    </div>
  </nav>

  {{-- tittle card --}}
  <section class="content">
    <div class="container">
      <div class="text-center">
        <h2 class="section-heading text-uppercase"> Politeknik Elektronika Negeri Surabaya </h2>
        <h3 class="section-subheading text-muted"> Teknik Informatika </h3>
      </div>
      <div class="row gy-3 my-3">
        <form action="#" id="forminternalpost">
          <div class="form-group col-md-12">
            <div class="form-group d-flex justify-content-between">
              <div>
                <label>Filter</label>
                <select class="form-control" id="filter" name="filter">
                  <option value=""></option>
                  <option class="form-control active" value="informatika">Teknik Informatika</option>
                  <option value="elektro">Teknik Elektronika</option>
                  <option value="elin">Teknik Elektro Industri</option>
                  <option value="tekkom">Teknik Komputer</option>
                  <option value="meka">Teknik Mekatronika</option>
                  <option value="mmb">Teknik Multimedia Broadcasting</option>
                  <option value="telkom">Teknik Telekomunikasi</option>
                  <option value="spe">Teknik Sistem Pembangkit Energi</option>
                  <option value="game">Teknik GameTek</option>
                </select>
              </div>

              <div style="margin-left: -500px;">
                <label>Date</label>
                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                  <input type="date" class="form-control datetimepicker-input"
                    data-target="#reservationdate" name="filterdate" />
                  <div class="input-group-append" data-target="#reservationdate"
                    data-toggle="datetimepicker">
                  </div>
                </div>
              </div>

              <div class="form-inline my-2 my-lg-0" style="margin-left: -100px">
                <label>Search</label>
                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </div>

            </div>
          </div>
          <div class="text-center">
            <h2 class="section-heading text-uppercase"></h2>
            <h3 class="section-subheading text-muted"></h3>
          </div>
        </form>

        <!-- card -->
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="card box-shadow" style="border-radius: 10px;">
            <img class="card-img-top" src="{{ asset('/img/photo1.png') }}" alt="Card image cap">
            <div class="card-body text-left">
              <button type="button" class="btn btn-primary" style="padding-top: -30px;">Teknik
                Informatika</button>
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
          <div class="card box-shadow" style="border-radius: 10px;">
            <img class="card-img-top" src="{{ asset('/img/photo1.png') }}" alt="Card image cap">
            <div class="card-body text-left">
              <button type="button" class="btn btn-primary" style="padding-top: -30px;">Teknik
                Informatika</button>
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
          <div class="card box-shadow" style="border-radius: 10px;">
            <img class="card-img-top" src="{{ asset('/img/photo1.png') }}" alt="Card image cap">
            <div class="card-body text-left">
              <button type="button" class="btn btn-primary" style="padding-top: -30px;">Teknik
                Informatika</button>
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
          <div class="card box-shadow" style="border-radius: 10px;">
            <img class="card-img-top" src="{{ asset('/img/photo1.png') }}" alt="Card image cap">
            <div class="card-body text-left">
              <button type="button" class="btn btn-primary" style="padding-top: -30px;">Teknik
                Informatika</button>
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
          <div class="card box-shadow" style="border-radius: 10px;">
            <img class="card-img-top" src="{{ asset('/img/photo1.png') }}" alt="Card image cap">
            <div class="card-body text-left">
              <button type="button" class="btn btn-primary" style="padding-top: -30px;">Teknik
                Informatika</button>
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
          <div class="card box-shadow" style="border-radius: 10px;">
            <img class="card-img-top" src="{{ asset('/img/photo1.png') }}" alt="Card image cap">
            <div class="card-body text-left">
              <button type="button" class="btn btn-primary" style="padding-top: -30px;">Teknik
                Informatika</button>
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
          <div class="card box-shadow" style="border-radius: 10px;">
            <img class="card-img-top" src="{{ asset('/img/photo1.png') }}" alt="Card image cap">
            <div class="card-body text-left">
              <button type="button" class="btn btn-primary" style="padding-top: -30px;">Teknik
                Informatika</button>
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
          <div class="card box-shadow" style="border-radius: 10px;">
            <img class="card-img-top" src="{{ asset('/img/photo1.png') }}" alt="Card image cap">
            <div class="card-body text-left">
              <button type="button" class="btn btn-primary" style="padding-top: -30px;">Teknik
                Informatika</button>
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

    <nav aria-label="Page navigation">
      <ul class="pagination justify-content-center">
        <li class="page-item text-primary">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>
    </nav>
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

  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="js/scripts.js"></script>
  <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>
