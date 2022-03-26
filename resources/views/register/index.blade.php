<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- Fontawesome -->
    <link rel="stylesheet" href="{{ asset('css/fontawesome/css/all.css') }}"> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>

    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/register.css'); }}">
 
    <title>Dafa's Blog | {{ $posts["title"] ?? $title }}</title>
  </head>
  <body>

    <div class="row g-0">
      <div class="col-lg-6 g-0">
        <div class="left d-flex justify-content-center align-items-center">
          <img src="{{ asset('images/login-3d.png') }}" alt="" width="200" height="500">
        </div>
      </div>
      <div class="col-lg-6 g-0">
        <div class="right d-flex justify-content-center align-items-center">
          <div class="login-form">
            <div class="form-login-title mb-5">
              <div class="form-title d-flex justify-content-between align-items-center">
                <h3 class="mb-3">{{ $title }}</h3>
                <h3><a href="/blog"><i class="bi bi-x-square"></i></a></h3>
              </div>
              <p>Write anywhere, post everywhere.</p>
            </div>
            <div class="form-login">
              <form action="/register" method="POST">
                @csrf
                <div class="nameuname d-flex justify-content-between">
                  <div class="name">
                    <label for="name" class="form-label">Your Name</label>
                    <div class="input-group mb-4">
                      <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter your name" aria-label="Username" aria-describedby="basic-addon1" required>
                    </div>
                  </div>
                  <div class="uname">
                  <label for="username" class="form-label">Username</label>
                  <div class="input-group mb-4">
                    <input type="text" id="username" name="username" class="form-control @error('username') is-invalid @enderror" placeholder="@something" aria-label="Username" aria-describedby="basic-addon1" required>
                  </div>
                  </div>
                </div>
                <label for="email" class="form-label">E-mail</label>
                <div class="input-group mb-4">
                  <input type="text" id="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="yourname@service.com" aria-label="Username" aria-describedby="basic-addon1" required>
                </div>
                <label for="password" class="form-label">Password</label>
                <div class="input-group mb-4">
                  <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Min. 5 characters" aria-label="Username" aria-describedby="basic-addon1" required>
                </div>
              </div>
              <div class="input-group mb-3 mt-5">
                <button type="submit" class="btn btn-prim">Sign Up</button>
              </div>
              <p>Already have an account? <a href="/login" style="font-weight: 800px">Login</a></p>
            </form>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>