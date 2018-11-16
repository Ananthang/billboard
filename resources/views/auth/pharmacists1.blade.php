<html>

<head>
  <title>uni.medi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- jQuery library -->
  <!--===============================================================================================-->
  <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="\css\page\style.css">
  <link rel="stylesheet" type="text/css" href="\css\model.css">
</head>

<body>
  <header class="masthead text-white">
    <div class="overlay"></div>
    <div class="container slider-top-text">
      <div class="row">
        <div class="col-md-12 text-center">
          <div><img src="\images\UoJ_logo.png"></div>
          <h3 class="my-heading ">WELCOME TO Health <span class="bg-main">JAFFNA</span></h3>
          <p class="myp text-center">DOCTORS  |   PHARMACIST   |   RECEPTIONIST</p>
          <button type="button" class="btn btn-default butt" data-toggle="modal" data-target="#sem-login">SIGN IN</button>
          <button type="button" class="btn btn-default butt" data-toggle="modal" data-target="#Doc-login">Doctor Sign
            IN</button>
        </div>
      </div>
    </div>
    <div class="modal fade seminor-login-modal" data-backdrop="static" id="sem-login">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

          <!-- Modal body -->
          <div class="modal-body seminor-login-modal-body">
            <h5 class="modal-title text-center">LOGIN TO MY ACCOUNT</h5>
            <button type="button" class="close" data-dismiss="modal">
              <span><i class="fa fa-times-circle" aria-hidden="true"></i></span>
            </button>


            <form class="seminor-login-form" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
              <div class="form-group">
                <input type="text" class="form-control" name="email" id="user_email" required autocomplete="off">
                <label class="form-control-placeholder" for="name">User Email Address</label>
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="password" id="user_password" required autocomplete="off">
                <label class="form-control-placeholder" for="password">Password</label>
              </div>


              <div class="btn-check-log">
                <button type="submit" id="indexform" class="btn-check-login" data-token="{{ csrf_token() }}">LOGIN</button>
              </div>


              <div class="forgot-pass-fau text-center pt-3">
                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
              </div>



            </form>
     <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade seminor-login-modal" data-backdrop="static" id="doc-login">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

          <!-- Modal body -->
          <div class="modal-body seminor-login-modal-body">
            <h5 class="modal-title text-center">LOGIN TO MY ACCOUNT</h5>
            <button type="button" class="close" data-dismiss="modal">
              <span><i class="fa fa-times-circle" aria-hidden="true"></i></span>
            </button>


            <form class="seminor-login-form"  method="POST" action="{{ route('doctor.login') }}">
                {{ csrf_field() }}
              <div class="form-group">
                <input type="text" class="form-control" name="email" id="name" required autocomplete="off">
                <label class="form-control-placeholder" for="name">Doctor Email Address</label>
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name = "password" id="password" required autocomplete="off">
                <label class="form-control-placeholder" for="password">Password</label>
              </div>


              <div class="btn-check-log">
                <button type="submit" id="indexform" class="btn-check-login" data-token="{{ csrf_token() }}">LOGIN</button>
              </div>


              <div class="forgot-pass-fau text-center pt-3">
               <a class="btn btn-link" href="{{ route('doctor.password.request') }}">
                                    Forgot Your Password?
                                </a>
              </div>



            </form>

          </div>
        </div>
      </div>
    </div>




  </header>
  <!--===============================================================================================-->
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
  <!--===============================================================================================-->
  <script src="vendor/animsition/js/animsition.min.js"></script>
  <!--===============================================================================================-->
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <!--===============================================================================================-->
  <script src="vendor/select2/select2.min.js"></script>
  <!--===============================================================================================-->
  <script src="vendor/daterangepicker/moment.js"></script>
  <script src="vendor/daterangepicker/daterangepicker.js"></script>
  <!--===============================================================================================-->
  <script src="vendor/countdowntime/countdowntime.js"></script>


  <script src="/js/page/index.js"></script>

</body>

</html>