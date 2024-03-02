<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Job Pules OTP VeriFy </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('assets/backEnd/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{ asset('assets/backEnd/vendor/font-awesome/css/font-awesome.min.css') }}">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="{{ asset('assets/backEnd/css/font.css') }}">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('assets/backEnd/css/style.default.css') }}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('assets/backEnd/img/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/appStyle.css') }}">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
            <!-- Logo & Information Panel-->
            <div class="col-lg-6">
              <div class="info d-flex align-items-center">
                <div class="content">
                  <div class="logo">
                    <h1>Dashboard</h1>
                  </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                @if (session('status'))
                <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
                    {{ session('status') }}
                </div>
            @endif
                <div class="content">
                  <form action="{{ route('otpVerifyCore') }}" class="form-validate" method="POST">
                    @csrf


                    <div class="form-group">
                      <input id="login-username" type="text" name="email" required data-msg="Please enter your useremail" class="input-material">
                      <label for="login-username" class="label-material">Enter Email</label>
                    </div>
                    <div class="form-group">
                        <input type="hidden" value="" name="">
                        <input id="login-username" type="text" name="otp" required data-msg="Please enter your useremail" class="input-material">
                        <label for="login-username" class="label-material">Enter  OTP</label>
                      </div>
                    <input type="submit"  class="btn btn-primary" value="Send">
                    <!-- This should be submit button but I replaced it with <a> for demo purposes-->
                  </form>


                  @if(session('error'))
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                      <i class="mdi mdi-check-all me-2"></i>
                              {{session('error')}}
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                  </div>
                  @endif
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyrights text-center">
         <p>2018 &copy; Your company. Download From <a target="_blank" href="https://templateshub.net">Templates Hub</a>.</p>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{ asset('assets/backEnd/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/backEnd/vendor/popper.js/umd/popper.min.js') }}"> </script>
    <script src="{{ asset('assets/backEnd/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/backEnd/vendor/jquery.cookie/jquery.cookie.js') }}"> </script>
    <script src="{{ asset('assets/backEnd/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/backEnd/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/backEnd/js/charts-home.js') }}"></script>
    <script src="{{ asset('assets/backEnd/js/front.js') }}"></script>
  </body>
</html>
