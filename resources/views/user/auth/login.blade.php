<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login | User</title>

  <!-- Bootstrap -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <!-- Style CSS -->
  <link rel="stylesheet" href="{{ asset('css/stylelogin.css') }}">
</head>

<body>

  <div class="container">
    <div class="myCard">
      <div class="row">
        <div class="col-md-6">
          <div class="myLeftCtn">
            <form class="myForm text-center" action="{{url('login')}}" method="POST">
              @csrf
              <header>Login to MidoPENS</header>
              <div class="form-group">
                <i class="fas fa-envelope"></i>
                <input class="myInput" type="text" placeholder="Email" id="email" required>
                <div class="invalid-feedback">
                  Masukkan email.
                </div>
              </div>
              <div class="form-group">
                 <i class="fas fa-lock"></i>
                <input class="myInput" type="password" placeholder="Password" id="password"
                required>
              </div>
              <div class="form-group">
                <label>
                  <input type="checkbox" name="remember" id="remember" required>
                  <small>Saya setuju dengan Syarat & Ketentuan</small>
                  </input>
                  <div class="invalid-feedback">You must chcek the box.</div>
                </label>
                <label>
                  <small>Apakah belum memiliki akun? <a href="#" data-toggle="modal" data-target="#exampleModal" > Register.</a></small>
                </label>
              </div>
              <input type="submit" class="button" value="Login">
            </form>
          </div>
        </div>
        <div class="col-md-6">
            <div class="myRightCtn">
                <div class="box">
                    <header class="text-light">MidoPENS</header>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab tempora totam vel sequi, reprehenderit voluptatem autem perspiciatis hic nostrum necessitatibus exercitationem fuga ea eum, nihil minus architecto enim veritatis? Provident.</p>
                </div>
            </div>
        </div>  
      </div>
    </div>
  </div>
  </div>


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Register</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body d-flex justify-content-between">
          <button type="button" class="btn btn-outline-primary" onclick="location.href='{{route('user.register')}}'">Mahasiswa PENS</button>
          <button type="button" class="btn btn-outline-primary">Pengunjung</button>
        </div>
      </div>
    </div>
  </div>

  <script src="https://kit.fontawesome.com/9706c69056.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>

</html>
