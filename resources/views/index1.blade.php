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

    
	<link href="http://cdn.phpoll.com/css/animate.css" rel="stylesheet">
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
     
      <a class="navbar-brand" href="">Project Name</a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
    
      <ul class="nav navbar-nav navbar-right">
      	 <li class="active"><a href="">Home</a></li>
        <li class="dropdown">
          <a href="http://phpoll.com/register" class="dropdown-toggle" data-toggle="dropdown">DOCTER <span class="caret"></span></a>
          <ul class="dropdown-menu dropdown-lr animated flipInX" role="menu">
            <div class="col-lg-12">
              <div class="text-center">
                <h3><b>LOGIN</b></h3></div>
              <form id="ajax-register-form" action="http://phpoll.com/register/process" method="post" role="form" autocomplete="off">
                <div class="form-group">
                	 <label for="username">Username</label>
                  <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                </div>
               
                <div class="form-group">
                	 <label for="password">Password</label>
                  <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                </div>

                 <div class="form-group">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="text-center">
                        <a href="http://phpoll.com/recover" tabindex="5" class="forgot-password">Forgot Password?</a>
                      </div>
                    </div>
                  </div>
                </div>
               
                <div class="form-group">
                  <div class="row">
                    <div class="col-xs-6 col-xs-offset-3">
                      <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-info" value="Login">
                    </div>
                  </div>
                </div>
                <input type="hidden" class="hide" name="token" id="token" value="7c6f19960d63f53fcd05c3e0cbc434c0">
              </form>
            </div>
          </ul>
        </li>
        <li class="dropdown">
          <a href="http://phpoll.com/login" class="dropdown-toggle" data-toggle="dropdown">OTHERS <span class="caret"></span></a>
          <ul class="dropdown-menu dropdown-lr animated flipInX" role="menu">
            <div class="col-lg-12">
              <div class="text-center">
                <h3><b>LOGIN</b></h3></div>
              <form id="ajax-login-form" action="http://phpoll.com/login/process" method="post" role="form" autocomplete="off">
                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="" autocomplete="off">
                </div>

                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" autocomplete="off">
                </div>

               

                <div class="form-group">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="text-center">
                        <a href="http://phpoll.com/recover" tabindex="5" class="forgot-password">Forgot Password?</a>
                      </div>
                    </div>
                  </div>
                </div>

 <div class="form-group">
                  <div class="row">
                    <div class="col-xs-6 col-xs-offset-3">
                      <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-info" value="Login">
                    </div>
                  </div>
                </div>



                <input type="hidden" class="hide" name="token" id="token" value="a465a2791ae0bae853cf4bf485dbe1b6">
              </form>
            </div>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>


	


    <div class="overlay"></div>
    <div class="container slider-top-text">
      <div class="row">
        <div class="col-md-12 text-center">
          <div><img src="\images\UoJ_logo.png"></div>
          <h3 class="my-heading ">WELCOME TO Health <span class="bg-main">JAFFNA</span></h3>
          <p class="myp text-center">DOCTORS  |   PHARMACIST   |   RECEPTIONIST</p>
          <button type="button" class="btn btn-default butt" data-toggle="modal" data-target="#sem-login">SIGN IN</button>
          <button type="button"  class="btn btn-default butt" data-toggle="modal" data-target="#doc-login">Doctor Sign IN</button>

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



</body>

</html>