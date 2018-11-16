<html>

<head>
    <title></title>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
    <!-- Latest compiled and minified CSS -->

    <!-- Latest compiled and minified JavaScript -->
    <link rel="stylesheet" type="text/css" href="/css/page/Admin.css">
    <link rel="stylesheet" type="text/css" href="/css/page/customboostarp.css">
</head>

<body>
    <div>
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




        <div class="tab_container">
            <input class="tabRadio" id="tab1" type="radio" name="tabs" checked>
            <label for="tab1" class="bac">

                <span>APPOINTMENT</span>
            </label>

            <input class="tabRadio" id="tab2" type="radio" name="tabs">
            <label for="tab2" class="bac">

                <span>ADD STUDENT</span>
            </label>

            <input class="tabRadio" id="tab3" type="radio" name="tabs">
            <label for="tab3" class="bac">

                <span>ADD STAFF</span>
            </label>

            <input class="tabRadio" id="tab4" type="radio" name="tabs">
            <label for="tab4" class="bac">

                <span>HEALTH CENTER</span>
            </label>





            <section id="content1" class="tab-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4 col-md-offset-4">
                            <form class="form-horizontal" role="form" method="POST" action="/appiontment">
                                {{ csrf_field() }}
                                <fieldset>
                                    <h3>
                                        <u>ADD APPOINTMENT</u>
                                    </h3>
                                    <!-- Form Name -->
                                    <legend></legend>

                                    <div class="form-group">
                                        <label class="labelForm" for="appointment">Reg Number</label>
                                        <input id="appointment" name="regNo" type="text" placeholder="Reg number" class="form-control input-md healthCenterStaffRegFormPhoneNumber"
                                            required="">
                                    </div>

                                    <div class="form-group">
                                        <select name="who" class="custom-select form-control input-md">

                                            <option value="0">Student</option>
                                            <option value="1">Staff</option>

                                        </select>

                                    </div>

                                    <div class="form-group">
                                        <label class="labelForm" for="doctorAppointment">Doctor</label><br>
                                        <select name="doctor" id="doctorAppointment" class="custom-select form-control input-md">
                                            @foreach($doctors as $doctor)
                                            <option value="{{ $doctor->id }}">{{ $doctor->username }}</option>
                                            @endforeach
                                        </select>

                                    </div>


                                    <!-- Text input-->

                                </fieldset>
                                <button class="btn btn-outline-primary" id="submitAppointment" type="submit">Submit
                                    form</button>
                            </form>
                        </div>
                        <!-- /.col-lg-12 -->
                        <div class="col-md-4"></div>
                    </div>
                </div>
                <!-- /.row -->
            </section>

            <section id="content2" class="tab-content">
                <div class="container">
                    <div class="row ">

                        <div class="col-md-2">

                        </div>
                        <div class="col-md-8">
                            <h3>
                                <u> MEDICAL EXAMINATION FORM FOR STUDENT</u>
                            </h3>


                            <form class="form-horizontal" method="POST" action="recep/student">
                                {{ csrf_field() }}
                                <!-- Form Name -->
                                <!-- Text input-->
                                <input type="hidden" value="{{ Auth::user()->id }}" name="receptionist" id="user_id">
                                <div class="form-group form-control input-md">
                                    <select id="faculty1" name="faculty" class="custom-select">
                                        <option value="Faculty of Science">Faculty of Science</option>
                                        <option value="Faculty of Medicine">Faculty of Medicine</option>
                                        <option value="Faculty of Managment">Faculty of Managment</option>
                                        <option value="Faculty of Arts">Faculty of Arts</option>
                                        <option value="Faculty of Acadamic">Faculty of Acadamic</option>
                                      
                                    </select>

                                </div>

                                <div class="form-group">
                                    <label class="labelForm" for="regNo">Registration number Number</label>
                                    <input id="regNo" name="regno" type="text" placeholder="Registration Number" class="form-control input-md"
                                        required>
                                </div>




                                <div class="form-group">
                                    <label class="labelForm" for="fullname">Full Name</label>
                                    <input id="fullname" name="fullname" type="text" placeholder="Full Name" class="form-control input-md"
                                        required>
                                </div>



                                <div class="form-group">

                                    <label class="labelForm" for="resaddress1">Residence Address</label>
                                    <input id="resaddress1" name="resaddress" type="text" placeholder="Residence Address"
                                        class="form-control input-md" required="">
                                </div>


                                <div class="form-group">
                                    <label class="labelForm" for="peraddress">Permanent Address</label>
                                    <input id="peraddress" name="peraddress" type="text" placeholder="Permanent Address"
                                        class="form-control input-md" required="">
                                </div>



                                <div class="form-group">
                                    <label class="labelForm" for="dob">Date Of Birth</label>
                                    <input id="dob" name="dob" type="date" placeholder="Date Of Birth" class="form-control input-md"
                                        required="">
                                </div>


                                <div class="row">
                                    <div class="col-form-label col-sm-2 pt-0">
                                        <label class="label_formcontrol_inline">Sex</label>
                                    </div>
                                    <div class="col-sm-10 ">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input radio" type="radio" name="gender" id="gridRadios"
                                                value="male" checked>
                                            <label class="form-check-label" for="gridRadios">
                                                Male
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input " type="radio" name="gender" id="gridRadios11"
                                                value="female">
                                            <label class="form-check-label" for="gridRadios11">
                                                Female
                                            </label>
                                        </div>

                                    </div>
                                </div>
<div class="row">
                                    <div class="col-form-label col-sm-2 pt-0">
                                        <label class="label_formcontrol_inline">Marital State</label>
                                    </div>
                                    <div class="col-sm-10 ">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input radio" type="radio" name="maritalState" id="maritalState1"
                                                value="Single" checked>
                                            <label class="form-check-label" for="maritalState1">
                                                Single
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input radio" type="radio" name="maritalState" id="maritalState"
                                                value="Married">
                                            <label class="form-check-label" for="maritalState">
                                                Married
                                            </label>
                                        </div>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="labelForm" for="Lastschoolattend">Last School Attend</label>
                                    <input id="Lastschoolattend" name="lastSchoolAttend" type="text" placeholder="Last School Attend"
                                        class="form-control input-md" required="">
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="labelForm" for="ParentsGuardianname">Parents/Guardian Name</label>
                                    <input id="ParentsGuardianname" name="parentsGuardianname" type="text" placeholder="Parents/Guardian Name"
                                        class="form-control input-md" required="">
                                </div>


                                <div class="form-group">
                                    <label class="labelForm" for="ParentsGuardianAddress">Address</label>
                                    <input id="ParentsGuardianAddress" name="parentsGuardianAddress" type="text"
                                        placeholder="Address" class="form-control input-md" required="">
                                </div>


                                <div class="form-group">
                                    <label class="labelForm" for="GPhonenumber">Phone Number</label>
                                    <input id="GPhonenumber" name="gPhonenumber" type="text" placeholder="Phone Number"
                                        class="form-control input-md" required="">
                                </div>

                                </span>
                                <!-- Text input-->

                                <hr>
                                <h3>
                                    <u>PAST HISTORY</u>
                                </h3>
                                <div class="row">
                                    <div class="form-check form-check-inline checkbox_history1">
                                        <input type="checkbox" class="form-check-input check_past1" value="pollomyelitis"
                                            name="pastHistory[]">
                                        <label class="form-check-label">
                                            Pollomyelitis
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline checkbox_history1">
                                        <input type="checkbox" class="form-check-input check_past1" name="pastHistory[]"
                                            value="mumps">
                                        <label class="form-check-label">
                                            Mumps
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline checkbox_history1">
                                        <input type="checkbox" class="form-check-input check_past1" name="pastHistory[]"
                                            value="chickenpox">
                                        <label class="form-check-label">
                                            Chicken Pox
                                        </label>
                                    </div>

                                </div>
                                <div class="row ">

                                    <div class="form-check form-check-inline checkbox_history1">
                                        <input type="checkbox" class="form-check-input check_past1" name="pastHistory[]"
                                            value="tuberculosis">
                                        <label class="form-check-label">
                                            Tuberculosis
                                        </label>
                                    </div>

                                    <div class="form-check form-check-inline checkbox_history1">
                                        <input type="checkbox" class="form-check-input check_past1" name="pastHistory[]"
                                            value="malaria">
                                        <label class="form-check-label">
                                            Malaria
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline checkbox_history1">
                                        <input type="checkbox" class="form-check-input check_past1" name="pastHistory[]"
                                            value="chromiccough">
                                        <label class="form-check-label">
                                            Chromic Cough
                                        </label>
                                    </div>


                                </div>
                                <br>
                                <div class="row ">
                                    <div class="form-check form-check-inline checkbox_history2">
                                        <input type="checkbox" class="form-check-input check_past1" name="pastHistory[]"
                                            value="bronchialasthma">
                                        <label class="form-check-label">
                                            Bronchial Asthma
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline checkbox_history2">
                                        <input type="checkbox" class="form-check-input check_past1" name="pastHistory[]"
                                            value="dentalproblem">
                                        <label class="form-check-label">
                                            Dental Problem
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline checkbox_history2">
                                        <input type="checkbox" class="form-check-input check_past1" name="pastHistory[]"
                                            value="fractures">
                                        <label class="form-check-label">
                                            Fractures
                                        </label>
                                    </div>
                                </div>
                                <br>
                                <div class="row ">
                                    <div class="form-check form-check-inline checkbox_history2">
                                        <input type="checkbox" class="form-check-input check_past1" name="pastHistory[]"
                                            value="visaualdefects">
                                        <label class="form-check-label">
                                            Visaual Defects
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline checkbox_history2">
                                        <input type="checkbox" class="form-check-input check_past1" name="pastHistory[]"
                                            value="hearingdefects">
                                        <label class="form-check-label">
                                            Hearing Defects
                                        </label>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label class="labelForm" for="operation">Have you under gone any operation if so
                                        give details</label>
                                    <textarea id="operation" name="operation" type="textarea" rows="2" placeholder="Have you under gone any operation if so give details"
                                        class="form-control input-md"></textarea>
                                </div>
                                <br>
                                <hr>

                                <!--***************problem**************-->
                                <div class="row">
                                    <div class="form-check form-check-inline checkbox_history1">
                                        <input type="checkbox" class="form-check-input check_problem1" value="smoking"
                                            name="problem[]">
                                        <label class="form-check-label">
                                            Smoking
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline checkbox_history1">
                                        <input type="checkbox" class="form-check-input check_problem1" value=" reading "
                                            name="problem[]">
                                        <label class="form-check-label">
                                            Reading
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline checkbox_history1">
                                        <input type="checkbox" class="form-check-input check_problem1" value="financial"
                                            name="problem[]">
                                        <label class="form-check-label">
                                            Financial
                                        </label>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="form-check form-check-inline checkbox_history2">
                                        <input type="checkbox" class="form-check-input check_problem1" value="drinking"
                                            name="problem[]">
                                        <label class="form-check-label">
                                            Drinking[Alcohol]
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline checkbox_history2">
                                        <input type="checkbox" class="form-check-input check_problem1" value="hearing"
                                            name="problem[]">
                                        <label class="form-check-label">
                                            Hearing
                                        </label>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label class="labelForm" for="anyothertextarea">Any other problem specify</label>
                                    <textarea id="anyothertextarea" name="problem[]" type="textarea" rows="2"
                                        placeholder="Any other problem specify" class="form-control input-md"></textarea>
                                </div>
                                <hr>
                                <div class=" container">
                                    <br>
                                    <div>
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                <h3>
                                                    <u>FAMILY HISTORY</u>
                                                </h3>
                                            </div>
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th>OCCUPATION</th>
                                                        <th>AGE</th>
                                                        <th>ILLNESS</th>
                                                        <th>IF DEAD CAUSE OF DEATH</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Father</td>
                                                        <td>
                                                            <input name="fOccupation" id="fOccupation" class="form-control FatherList">
                                                            <input name="fRelation" id="fRelation" value="Father" class="FatherList"
                                                                type="hidden">
                                                        </td>
                                                        <td>
                                                            <input name="fAge" id="fAge" class="form-control FatherList">
                                                        </td>
                                                        <td>
                                                            <input name="fIllness" id="fIllness" class="form-control FatherList">
                                                        </td>
                                                        <td>
                                                            <input name="fIfdead" id="fIfdead" class="form-control FatherList">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Mother
                                                        </td>
                                                        <td>
                                                            <input name="mOccupation" id="mOccupation" type="text"
                                                                class="form-control">
                                                            <input name="mRelation" id="mRelation" value="Mother" type="hidden">
                                                        </td>
                                                        <td>
                                                            <input name="mAge" id="mAge" type="text" class="form-control">
                                                        </td>
                                                        <td>
                                                            <input name="mIllness" id="mIllness" type="text" class="form-control">
                                                        </td>
                                                        <td>
                                                            <input name="mIfdead" id="mIfdead" type="text" class="form-control">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Brother
                                                        </td>
                                                        <td>
                                                            <input name="bOccupation" id="bOccupation" type="text"
                                                                class="form-control">
                                                            <input name="bRelation" id="bRelation" type="hidden" value="Brother"
                                                                type="hidden">
                                                        </td>
                                                        <td>
                                                            <input name="bAge" id="bAge" type="text" class="form-control">
                                                        </td>
                                                        <td>
                                                            <input name="bIllness" id="bIllness" type="text" class="form-control">
                                                        </td>
                                                        <td>
                                                            <input name="bIfdead" id="bIfdead" type="text" class="form-control">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Sister
                                                        </td>
                                                        <td>
                                                            <input name="sOccupation" id="sOccupation" type="text"
                                                                class="form-control">
                                                            <input name="sRelation" id="sRelation" value="Sister" type="hidden">
                                                        </td>
                                                        <td>
                                                            <input name="sAge" type="text" id="sAge" class="form-control">
                                                        </td>
                                                        <td>
                                                            <input name="sIllness" type="text" id="sIllness" class="form-control">
                                                        </td>
                                                        <td>
                                                            <input name="sIfdead" type="text" id="sIfdead" class="form-control">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>




                                </div>

                                <button class="btn btn-outline-primary btn-block" type="submit">Submit</button>
                            </form>

                        </div>
                        <div class="col-md-2">

                        </div>
                    </div>
                </div>

            </section>




            <section id="content3" class="tab-content">
                <div class="container">
                    <h3>
                        <u>MEDICAL EXAMINATION FORM FOR STAFF</u>
                    </h3>
                    <form class="form-horizontal" method="POST" action="recep/staff">
                        {{ csrf_field() }}
                        <div class="row ">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <input name="user_id" value="{{ Auth::user()->id }}" type="hidden" required="">
                                <div class="form-group">
                                    <label class="labelForm" for="staffFullname">Full Name</label>
                                    <input id="staffFullname" name="fullname" type="text" placeholder="Full Name" class="form-control input-md"
                                        required="">
                                </div>
                                <div class="form-group">
                                    <label class="labelForm" for="staffage">Age</label>
                                    <input id="staffage" name="age" type="number" placeholder="Age" class="form-control input-md"
                                        required="">
                                </div>
                                <div class="form-group">
                                    <label class="labelForm" for="phonenumber">Phone number</label>
                                    <input id="phonenumber" name="phonenumber" type="text" placeholder="Phone Number"
                                        class="form-control input-md" required="">
                                </div>



                                <div class="row">
                                    <div class="col-form-label col-sm-2 pt-0">
                                        <label class="label_formcontrol_inline">Sex</label>
                                    </div>
                                    <div class="col-sm-10 ">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input radio" type="radio" name="gender" id="genderstaff1"
                                                value="male" checked>
                                            <label class="form-check-label" for="genderstaff1">
                                                Male
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input radio" type="radio" name="gender" id="genderstaff"
                                                value="female">
                                            <label class="form-check-label" for="genderstaff">
                                                Female
                                            </label>
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-form-label col-sm-2 pt-0">
                                        <label class="label_formcontrol_inline">Marital State</label>
                                    </div>
                                    <div class="col-sm-10 ">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input radio" type="radio" name="maritalState" id="maritalState1"
                                                value="Single" checked>
                                            <label class="form-check-label" for="maritalState1">
                                                Single
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input radio" type="radio" name="maritalState" id="maritalState"
                                                value="Married">
                                            <label class="form-check-label" for="maritalState">
                                                Married
                                            </label>
                                        </div>

                                    </div>
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="labelForm" for="primaddress">Private Address</label>
                                    <input id="primaddress" name="privateAddress" type="text" placeholder="Private Address"
                                        class="form-control input-md" required="">


                                </div>
                                <div class="form-group">
                                    <label class="labelForm" for="resaddress2">Residential Address</label>
                                    <input id="resaddress2" name="resiAddress" type="text" placeholder="Residential Address"
                                        class="form-control input-md" required="">


                                </div>



                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="labelForm" for="designation">Designation</label>
                                    <input id="designation" name="designation" type="text" placeholder="Designation"
                                        class="form-control input-md" required="">
                                </div>

                                <div class="form-group ">
                                   <select id="faculty1" name="faculty" class="custom-select">
                                        <option value="Faculty of Science">Faculty of Science</option>
                                        <option value="Faculty of Medicine">Faculty of Medicine</option>
                                        <option value="Faculty of Managment">Faculty of Managment</option>
                                        <option value="Faculty of Arts">Faculty of Arts</option>
                                        <option value="Faculty of Acadamic">Faculty of Acadamic</option>
                                      
                                    </select>
                                </div>
                                <div class="form-group input-md">
                                    <label class="labelForm" for="designation">RegNo</label>
                                    <input id="designation" name="regno" type="text" placeholder="RegNo"
                                        class="form-control input-md" required="">
                                   
                                       
                                   
                                </div>

                                <div class="form-group">
                                    <label class="labelForm" for="department">Department</label>
                                    <input id="department" name="department" type="text" placeholder="Department" class="form-control input-md"
                                        required="">
                                </div>
                                <!-- Text input-->

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="labelForm" for="height">Height</label>
                                    <input id="height" name="height" type="number" placeholder="Height" class="form-control input-md"
                                        required="">


                                </div>
                                <div class="form-group">
                                    <label class="labelForm" for="weight">Weight</label>
                                    <input id="weight" name="weight" type="number" placeholder="Weight" class="form-control input-md"
                                        required="">


                                </div>
                                <div class="form-group">
                                    <select id="bloodgroup" name="bloodgroup" class="custom-select">
                                        <option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                    </select>

                                </div>


                                <button class="btn btn-outline-primary" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>




                </div>
            </section>

            <section id="content4" class="tab-content">
                <div class="container">
                    <h3></h3>
                    <div class="row">
                        <div class="col-md-8">

                            <div id="accordion">
                                <div class="card">
                                    <button class="btn  carddropdown" data-toggle="collapse" data-target="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne">
                                        <div class="card-header card-header1" id="headingOne">
                                            <h5 class="mb-0">

                                                DOCTOR

                                            </h5>
                                        </div>
                                    </button>
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            <button type="button" class="btn btn-outline-success" data-toggle="modal"
                                                data-target=".modal-add-doctor">ADD DOCTORS</button>
                                            <div class="modal fade modal-add-doctor" tabindex="100" role="dialog"
                                                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="doctorH5">ADD DOCTORS</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form class="" id="doctorRegister" method="POST" action="{{ route('doctor.register') }}">
                                                                {{ csrf_field() }}
                                                                <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                                                                    <label class="labelForm" for="doctorname">Doctor's
                                                                        Name</label>
                                                                    <input id="doctorname" name="username" type="text"
                                                                        placeholder="Doctor's Name" class="form-control input-md "
                                                                        id="healthCenterDoctorName" required="">
                                                                </div>
                                                                <div class="form-group{{ $errors->has('Doctor_regNo') ? ' has-error' : '' }}">
                                                                    <label class="labelForm" for="Doctor_regNo" class="col-md-4 control-label">Doctor_regNo</label>


                                                                    <input id="Doctor_regNo" type="text" class="form-control"
                                                                        name="Doctor_regNo" class="form-control input-md healthCenterStaffRegFormName"
                                                                        value="{{ old('Doctor_regNo') }}" placeholder="Doctor Regno"
                                                                        required autofocus>

                                                                    @if ($errors->has('Doctor_regNo'))
                                                                    <span class="help-block">
                                                                        <strong>{{ $errors->first('Doctor_regNo')
                                                                            }}</strong>
                                                                    </span>
                                                                    @endif

                                                                </div>



                                                                <div class="form-group{{ $errors->has('phonenumber') ? ' has-error' : '' }}">
                                                                    <label class="labelForm" for="doctorphone">Phone
                                                                        Number</label>
                                                                    <input id="doctorphone" name="phonenumber" type="number"
                                                                        placeholder="Phone Number" class="form-control input-md healthCenterStaffRegFormPhoneNumber"
                                                                        required="">
                                                                </div>
                                                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                                    <label class="labelForm" for="doctorphone">Email
                                                                        Address</label>
                                                                    <input id="doctoremail" name="email" type="email"
                                                                        placeholder="Email Address" class="form-control input-md healthCenterStaffRegFormPhoneNumber"
                                                                        required="">
                                                                </div>
                                                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                                                    <label class="labelForm" for="doctorpassword">Password</label>
                                                                    <input id="doctorpassword" name="password" type="password"
                                                                        placeholder="Password" class="form-control input-md healthCenterStaffRegFormPassword"
                                                                        required="">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="password_confirm" class="col-md-4 control-label">Confirm
                                                                        Password</label>


                                                                    <input id="password_confirm" type="password" class="form-control"
                                                                        name="password_confirmation" placeholder="Confirm Password"
                                                                        required>

                                                                </div>
                                                                <button type="button" class="btn btn-outline-danger"
                                                                    data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-outline-primary">ADD
                                                                    DOCTOR</button>
                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <button type="button" class="btn btn-info btn-info-hover" data-toggle="modal"
                                                data-target=".modal-doctor">DOCTORS</button>
                                            <div class="modal fade modal-doctor" tabindex="100" role="dialog"
                                                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="DOCTORSLabel">ADD DOCTORS</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <table class="table table-striped">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col"></th>
                                                                        <th scope="col">DOCTOR NAME</th>
                                                                        <th scope="col">Phone Number</th>

                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach($doctors as $doctor)
                                                                    <tr>
                                                                        <th scope="row" class="tdcontent"></th>
                                                                        <td scope="row" class="tdcontent">{{ $doctor->username }}</td>
                                                                        <td scope="row" class="tdcontent">{{ $doctor->phonenumber }}</td>

                                                                    </tr>
                                                                    @endforeach

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="modal-footer">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <br>
                                <div class="card">
                                    <button class="btn carddropdown collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                        aria-expanded="false" aria-controls="collapseTwo">
                                        <div class="card-header card-header1" id="headingTwo">
                                            <h5 class="mb-0">

                                                PHARMACIST

                                            </h5>
                                        </div>
                                    </button>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="card-body">


                                       

                                                            <button type="submit"  class="btn btn-outline-primary">
                                                                PHARMACIST</button>
                                                        
                                        <div class="modal fade modal-add-pharmacist" tabindex="100" role="dialog"
                                            aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        
                                                    </div>
                                                    <div class="modal-body">
                                                        
                                                    </div>
                                                    <div class="modal-footer">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        
                                        <div class="modal fade modal-pharmacist" tabindex="100" role="dialog"
                                            aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="PharmacisLabel">PHARMACIST</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <table class="table table-striped">
                                                            <thead>
                                                                <tr>
                                                                    
                                                                    <th scope="col">PHARMACIST NAME</th>
                                                                    <th scope="col">Phone Number</th>
                                                                    

                                                                </tr>
                                                            </thead>
                                                            <tbody> @foreach($phamas as $phama)
                                                                <tr>
                                                                   
                                                                    <td scope="row" class="tdcontent">{{ $phama->username }}</td>
                                                                    <td scope="row" class="tdcontent">{{ $phama->phonenumber }}</td>
                                                                   

                                                                </tr>
 @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-footer">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="card">
                                <button class="btn carddropdown collapsed" data-toggle="collapse" data-target="#collapseThree"
                                    aria-expanded="false" aria-controls="collapseThree">
                                    <div class="card-header card-header1" id="headingThree">
                                        <h5 class="mb-0">

                                            RECEPTIONIST

                                        </h5>
                                    </div>
                                </button>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                      
                                                            
                                       

                                        <button type="button" class="btn btn-info btn-info-hover" data-toggle="modal"
                                            data-target=".modal-receptionist">RECEPTIONIST</button>
                                        <div class="modal fade modal-receptionist" tabindex="100" role="dialog"
                                            aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="RECEPTIONISLabel">RECEPTIONIST</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <table class="table table-striped">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">RECEPTIONIST NAME</th>
                                                                    <th scope="col">Phone Number</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach($receps as $recep)
                                                                <tr>
                                                                    
                                                                    <td scope="row" class="tdcontent">{{ $recep->username }}</td>
                                                                    <td scope="row" class="tdcontent">{{ $recep->phonenumber }}</td>
                                                                    

                                                                </tr>
@endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-footer">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="card">
                              
                                  
                                    <button type="submit" onclick="window.location='{{ route("studentsearch") }}'" aria-hidden="true" class="btn carddropdown collapsed"
                                        data-toggle="collapse" data-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        <div class="card-header card-header1" id="headingFour">
                                            <h5 class="mb-0">
                                                STUDENT
                                            </h5>
                                        </div>
                                    </button>
                            </div>
                            <br>
                            <div class="card">
                                <button class="btn carddropdown collapsed" onclick="window.location='{{ route("staffsearch") }}'" data-toggle="collapse" data-target="#collapseFive"
                                    aria-expanded="false" aria-controls="collapseFive">
                                    <div class="card-header card-header1" id="headingFive">
                                        <h5 class="mb-0">

                                            STAFF

                                        </h5>
                                    </div>
                                </button>


                            </div>

                        </div>
                  
            
                        <div class="col-md-4">

                            <div class="card">
                                <button class="btn carddropdown collapsed" data-toggle="collapse" data-target="#collapsesix"
                                    aria-expanded="false" aria-controls="collapsesix">
                                    <div class="card-header card-header1" id="headingsix">
                                        <h5 class="mb-0">

                                            PROFILE SETTING

                                        </h5>
                                    </div>
                                </button>
                                <div id="collapsesix" class="collapse" aria-labelledby="headingsix" data-parent="#accordion">
                                    <div class="card-body">
                                        <a  class="btn btn-primary"  href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>

                                                <a class="btn btn-outline-primary" href="{{ route('password.request') }}">
                                                   Reset Password
                                                </a>
                                            
                        
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </section>


        </div>
    </div>

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



    <script>
        $('.collapse').collapse()
    </script>
</body>

</html>