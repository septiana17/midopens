<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login | User</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- Style CSS -->
  <link rel="stylesheet" href="{{ asset('css/stylelogin.css') }}">
</head>

<body>

  <div class="container">
    <div class="myCard">
      <div class="row">
        <div class="col-md-6">
          <div class="myLeftCtn">
            <form class="myForm text-center">
              <header>Login to MidoPENS</header>
              <div class="form-group">
                <i class="fas fa-envelope"></i>
                <input class="myInput" type="text" placeholder="Email" id="email" required>
                <div class="invalid-feedback">
                  Please enter your email.
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
                  <small>I agree to Term & Conditions</small>
                  </input>
                  <div class="invalid-feedback">You must chcek the box.</div>
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

  <script src="https://kit.fontawesome.com/9706c69056.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" crossorigin="anonymous">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
</body>

</html>
