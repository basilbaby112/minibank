<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>MINI BANK | Admin</title>
    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Custom fonts for this template-->
    <link
      href="vendor/font-awesome/css/font-awesome.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet" />
  </head>

  <body class="bg-dark">
    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header text-center">
          <h5>MINI BANK</h5>
          Admin Login
        </div>
        <div class="card-body">
          <form method="POST" action="/users/authenticate">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1"
                >Email address / Phone number</label
              >
              <input
                class="form-control"
                id="exampleInput"
                name="value" 
                value="{{old('email')}}"
                type="text"
                aria-describedby="emailHelp"
                placeholder="Enter email / phone number"
                required
              />
              @error('value')
              <p class="text-red-500 text-xs mt-1">{{$message}}</p>
              @enderror
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input
                class="form-control"
                name="password"
                value="{{old('password')}}" 
                id="exampleInputPassword1"
                type="password"
                placeholder="Password"
              />
            </div>
            <button type="submit" class="btn btn-primary btn-block">Login</button>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="register.html"
              >Register an Account</a
            >
          </div>
        </div>
      </div>
    </div>
    <x-flash-messages />
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  </body>
</html>
