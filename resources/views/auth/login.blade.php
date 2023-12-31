<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin / Login</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="adminAssets/assets/img/favicon.png" rel="icon">
  <link href="adminAssets/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="adminAssets/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="adminAssets/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="adminAssets/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="adminAssets/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="adminAssets/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="adminAssets/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="adminAssets/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="adminAssets/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="adminAssets/assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">PRSC Dashboard</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                    <p class="text-center small">Enter your Email & password to login</p>
                  </div>
                  
                  <form method="POST" action="{{ route('login') }}" class="row g-3 needs-validation" novalidate>
                    @csrf
                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Email</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        {{-- <input name="email" type="email" class="form-control" id="email" required> --}}
                        <input name="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" required>
                        {{-- <div class="invalid-feedback">Please enter your username.</div> --}}
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      {{-- <input type="password" name="password" class="form-control" id="yourPassword" required> --}}
                      <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" required>
                      {{-- <div class="invalid-feedback">Please enter your password!</div> --}}
                      @if ($errors->has('password'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('password') }}</strong>
                          </span>
                      @endif
                    </div>

                    {{-- <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                      </div>
                    </div> --}}
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Login</button>
                    </div>
                    <div class="col-12">
                      {{-- <p class="small mb-0">Don't have account? <a href="pages-register.html">Create an account</a></p> --}}
                    </div>
                  </form>
                  <a href="{{ route('home') }}"><button class="btn btn-danger btn-sm w-100" href="{{ route('home') }}" >GO BACK</button></a>

                </div>
              </div>

              
            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="adminAssets/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="adminAssets/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="adminAssets/assets/vendor/chart.js/chart.umd.js"></script>
  <script src="adminAssets/assets/vendor/echarts/echarts.min.js"></script>
  <script src="adminAssets/assets/vendor/quill/quill.min.js"></script>
  <script src="adminAssets/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="adminAssets/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="adminAssets/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="adminAssets/assets/js/main.js"></script>

</body>

</html>