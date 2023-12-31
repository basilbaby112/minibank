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
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Admin Registration</div>
        <div class="card-body">
          <form method="post" action="/users">
            @csrf
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <label for="exampleInputName">First name</label>
                  <input
                    class="form-control"
                    name="name"
                    id="exampleInputName"
                    type="text"
                    aria-describedby="nameHelp"
                    placeholder="Enter first name"
                    value="{{old('name')}}"
                  />
        @error('name')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
                </div>
                <div class="col-md-6">
                  <label for="exampleInputLastName">Last name</label>
                  <input
                    class="form-control"
                    name="lastname"
                    id="exampleInputLastName"
                    type="text"
                    aria-describedby="nameHelp"
                    placeholder="Enter last name"
                    value="{{old('lastname')}}"
                  />
        @error('lastname')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <label for="exampleInputEmail1">Email address</label>
                  <input
                    class="form-control"
                    name="email"
                    id="exampleInputEmail1"
                    type="email"
                    aria-describedby="emailHelp"
                    placeholder="Enter email"
                    value="{{old('email')}}"
                  />
        @error('email')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
                </div>
                <div class="col-md-6">
                  <label for="exampleInputPhone">Phone number</label>
                  <input
                    class="form-control"
                    name="phone"
                    id="exampleInputPhone"
                    type="tel"
                    aria-describedby="emailHelp"
                    placeholder="Enter Mobile Number"
                    value="{{old('password')}}"
                  />
        @error('phone')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <label for="exampleInputPassword1">Password</label>
                  <input
                    class="form-control"
                    name="password"
                    id="exampleInputPassword1"
                    type="password"
                    placeholder="Password"
                    value="{{old('password_confirmation')}}"
                  />
                  @error('password')
                  <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                  @enderror
                </div>
                <div class="col-md-6">
                  <label for="exampleConfirmPassword">Confirm password</label>
                  <input
                    class="form-control"
                    name="password_confirmation"
                    id="exampleConfirmPassword"
                    type="password"
                    placeholder="Confirm password"
                  />
                  @error('password_confirmation')
                  <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                  @enderror
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block" type="submit">Register</button>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="login.html">Login Page</a>
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
