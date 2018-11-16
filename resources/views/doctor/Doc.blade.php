<html>

<head>
    <title>DOCTOR</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <!-- Latest compiled and minified CSS --> <link rel="stylesheet" type="text/css" href="/css/page/Admin.css">
    <link rel="stylesheet" type="text/css" href="/css/page/Doct.css">

</head>

<body>

    <div class="row">
        <div class="col-md-12 text-center">
            <div>
                <img src="/images/UoJ_logo.png">
            </div>
            <h3 class="my-heading ">MEDICAL CENTRE UNIVERSITY OF
                <span class="bg-main">JAFFNA</span>
            </h3>
        </div>
    </div>


    <div class="wrapper">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <h1>Patients</h1>
                    @foreach($appiontmentStudent as $appiontmentstudent)
                    <div class="card Doc_patient_card">
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-3">
                                        {{ $appiontmentstudent->regNo }}
                                    </div>
                                    <div class="col-md-6">{{ $appiontmentstudent->fullname }}</div>
                                    <div class="col-md-3">
                                        <form method="GET" action="/recep/student/{{ $appiontmentstudent->regNo }}">
                                        <button class="btn btn-outline-info">See Full Details</button>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    @endforeach
                    @foreach($appiontmentStaff as $appiontmentstaff)
                    <div class="card Doc_patient_card">
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-3">
                                        {{ $appiontmentstaff->regNo }}
                                    </div>
                                    <div class="col-md-6">{{ $appiontmentstaff->fullname }}</div>
                                    <div class="col-md-3">
                                        <form method="GET" action="/recep/staff/{{ $appiontmentstaff->regNo }}">
                                        <button class="btn btn-outline-info">See Full Details</button>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <button class="btn carddropdown collapsed" data-toggle="collapse" data-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
            <div class="card-header card-header1" id="headingsix">
              <h5 class="mb-0">

                PROFILE SETTING
              </h5>
            </div>
          </button>
                    <div id="collapsesix" class="collapse" aria-labelledby="headingsix" data-parent="#accordion">
                        <div class="card-body">
                           <a class="btn btn-primary" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                                            
                                        <br>
                                        <br>

<a class="btn btn-danger" href="{{ route('doctor.password.request') }}">
                                   Reset Password
                                </a>
                        </div>

                    </div>
                </div>




                <div class="modal fade modal-update-doctor" tabindex="100" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">UPDATE DOCTORS</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <input name="receptionist" type="hidden" value="receptionistId">
                                    <input name="role" type="hidden" value="Doctor">

                                    <div class="form-group">
                                        <input id="name" name="name" type="text" placeholder="Doctor's Name" class="form-control input-md" required="">
                                    </div>
                                    <div class="form-group">
                                        <input id="phone" name="phone" type="number" placeholder="Phone Number" class="form-control input-md" required="">
                                    </div>
                                    <div class="form-group">
                                        <input id="password" name="password" type="text" placeholder="password" class="form-control input-md" required="">
                                    </div>
                                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-outline-primary">UPDATE</button>
                                </form>
                            </div>
                            <div class="modal-footer">

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>




    <!--===============================================================================================-->
    <script src="/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="/vendor/animsition/js/animsition.min.js"></script>
    <!--=========/======================================================================================-->
    <script src="/vendor/bootstrap/js/popper.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="/vendor/daterangepicker/moment.js"></script>
    <script src="/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="/vendor/countdowntime/countdowntime.js"></script>


    <script src="/js/page/doc.js" ></script>

</body>

</html>