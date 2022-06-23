<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Request | User</title>

  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <!-- Font Awesome icons (free version)-->
  <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
  <!-- Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="css/stylerequest.css" rel="stylesheet" />
  <link href="css/adminlte.css" rel="stylesheet" />

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
          <li class="nav-item"><a class="nav-link" href="{{route('home')}}">Informasi Publik</a></li>
          <li class="nav-item"><a class="nav-link" href="{{route('internal')}}">Acara Internal</a></li>
          <li class="nav-item"><a class="nav-link" href="{{route('external')}}">Acara Eksternal</a></li>
          <li class="nav-item"><a class="nav-link active" href="{{route('request')}}">Request</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Services-->
  <section class="page-section">
    <div class="container">
      <div class="row">
        <div class="text-center">
          <h2 class="section-heading text-uppercase"></h2>
          <h3 class="section-subheading text-muted"></h3>
        </div>

          <!-- Horizontal Form -->
          <div class="card card-info">
            <div class="card-header"  style="background-color: #00ADB5">
              <h3 class="card-title">Form Request</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="card-body">

                <div class="form-group row">
                  <label for="inputnumber3" class="col-sm-2 col-form-label">WhatsApp</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="Number" placeholder="Number">
                     <small id="emailHelp" class="form-text text-muted">*We'll never share your number with anyone else.</small>
                  </div>
                </div>

                <div class="form-group row">
                <div class="input-group">
                  <label for="inputfile3" class="col-sm-2 col-form-label">File Input</label>
                  
                  <div class="col-sm-8">
                    <input type="file" class="custom-file-input" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                  </div>
                  <div class="input-group-append">
                    <span class="input-group-text">Upload</span>
                  </div>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="submit" class="btn btn-danger">Cancel</button>
              </div>
              <!-- /.card-footer -->
            </form>
          </div>
          <!-- /.card -->

        <div class="text-center">
          <h2 class="section-heading text-uppercase"></h2>
          <h3 class="section-subheading text-muted"></h3>
        </div>


          <!-- card -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Table Request</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th style="width: 10%">
                      No.
                    </th>
                    <th style="width: 20%">
                      Name
                    </th>
                    <th style="width: 20%">
                      File
                    </th>
                    <th style="width: 1%" class="text-center">
                      Status
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      1.
                    </td>
                    <td>
                      abc
                    </td>
                    <td>
                      <i class="fas fa-download"></i>
                    </td>
                    <td class="project-state">
                      <span class="btn btn-success">Sukses</span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

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
  <script src="js/adminlte.js"></script>
</body>

</html>
