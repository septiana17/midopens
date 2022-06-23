<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register | User</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- Style CSS -->
  <link rel="stylesheet" href="{{ asset('css/styleregister.css') }}">
</head>

<body>

  <div class="container">
    <div class="myCard">
      <div class="row">
        <div class="col-md">
          <div class="myLeftCtn">
            <form class="myForm text-center" method="post" action="{{route('user.register.post')}}">
              @csrf
              <header>Form Register</header>
              <p> Selamat Datang di MidoPENS ! </p>
              <div class="form-group">
                <i class="fas fa-user"></i>
                <input class="form-control" name="name" type="text" placeholder="FullName" id="fullname" required>
                {{-- <div class="invalid-feedback">
                   <small id="emailHelp" class="form-text text-muted">*Pastikan Nama Lengkapmu Suda Benar.</small>
                </div> --}}
              </div>
              <div class="form-group">
                <i class="fas fa-id-card"></i>
                <input class="form-control" name="nrp" type="number" placeholder="NRP" id="nrp" required>
                {{-- <div class="invalid-feedback">
                   <small id="emailHelp" class="form-text text-muted">*Pastikan Nama Lengkapmu Suda Benar.</small>
                </div> --}}
              </div>
              <div class="form-group">
                <i class="fas fa-graduation-cap"></i>
                <input class="form-control" name="jurusan" type="text" placeholder="Jurusan" id="jurusan" required>
                {{-- <div class="invalid-feedback">
                   <small id="emailHelp" class="form-text text-muted">*Pastikan Nama Lengkapmu Suda Benar.</small>
                </div> --}}
              </div>
              <div class="form-group">
                <i class="fas fa-envelope"></i>
                <input class="form-control" name="email" type="text" placeholder="EmailStudentPENS" id="email" required>
                <div class="invalid-feedback">
                  Please enter your email.
                </div>
              </div>
              <div class="form-group">
                 <i class="fas fa-lock"></i>
                <input class="myInput" name="password" type="password" placeholder="Password" id="password"
                required>
              </div>
              <div class="form-group">
                <label>
                  <input type="checkbox" name="remember" id="remember" required>
                  <small>Saya setuju dengan Syarat & Ketentuan</small>
                  </input>
                  <div class="invalid-feedback">Centang terlebih dahulu.</div>
                </label>
                <br>
                <label>
                  <small>Apakah sudah memiliki akun? <a href="{{route('user.login')}}"> Login.</a></small>
                </label>
              </div>
              <input type="submit" class="button" value="Register">
            </form>
          </div>
        </div>
        {{-- <div class="col-md-6">
            <div class="myRightCtn">
                <div class="box">
                    <header class="text-light">MidoPENS</header>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab tempora totam vel sequi, reprehenderit voluptatem autem perspiciatis hic nostrum necessitatibus exercitationem fuga ea eum, nihil minus architecto enim veritatis? Provident.</p>
                </div>
            </div>
        </div>   --}}
      </div>
    </div>
  </div>
  </div>

  <script src="https://kit.fontawesome.com/9706c69056.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" crossorigin="anonymous">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
</body>

</html>
