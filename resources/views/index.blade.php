<!DOCTYPE html>
<html>
<head>
	<title></title>

	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
  crossorigin="anonymous">
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
  crossorigin="anonymous"></script>


<link rel="stylesheet" type="text/css" href="/css/page/style.css">
</head>
<body>




	<link href="http://cdn.phpoll.com/css/animate.css" rel="stylesheet">
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
     
      <a class="navbar-brand" href=""></a>
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
              <form id="ajax-register-form"  method="POST" action="{{ route('doctor.login') }}" role="form" autocomplete="off">
               {{ csrf_field() }} 
               
               <div class="form-group">
                	 <label for="email">Email Address</label>
                  <input type="text" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
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
                      <input type="submit" name="register-submit" id="register-submit" data-token="{{ csrf_token() }}" tabindex="4" class="form-control btn btn-info" value="Login">
                    </div>
                  </div>
                </div>
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
              <form id="ajax-login-form"  method="POST" action="{{ route('login') }}" role="form" autocomplete="off">
                   {{ csrf_field() }}
                <div class="form-group">
                  <label for="email">Email Address</label>
                  <input type="text" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="" autocomplete="off">
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
                      <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-info" data-token="{{ csrf_token() }}" value="Login">
                    </div>
                  </div>
                </div>

              </form>
            </div>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>


	





<div class="container-fluid">
		<div class="full_width_photo parallax-window transparent">
			<div class="page-title">
				<div class="title">
					<div class="container">			
						<h4>HEALTH CENTER</h4>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid bg-gray">
		<div class="container">			
			<p> UNIVERSITY OF JAFFNA</p>
		</div>
	</div>
	<div class="container">
		<div class="detail">
			<div class="col-md-12">
			</div>
		
		</div>
	</div>

</body>
</html>