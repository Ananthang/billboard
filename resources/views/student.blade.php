<html>

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- jQuery library -->

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="file:///G:/3rdyearproject/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">




    <link rel="stylesheet" type="text/css" href="Admin.css">
    <link rel="stylesheet" type="text/css" href="student.css">
</head>

<body>
    <div class="container"></div>
    <div class="row ">

        <div class="col-md-2">

        </div>
        <div class="col-md-8">

            <h3>
                <center> <u>STUDENT UPDATE FORM</u></center>
            </h3>


           <form class="form-horizontal"  method="POST" action="recep/student/{{ $Students->regno }}">
            
                    {{csrf_field() }} {{method_field('PUT')}}
                                <!-- Form Name -->
                                <!-- Text input-->
                                <input type="hidden" value="{{ Auth::user()->id }}" name="receptionist" id="user_id">
                                <div class="form-group">
                                    <select id="faculty1" name="faculty" class="custom-select">
                                        <option value="0">Faculty</option>
                                        <option value="1">Faculty 2</option>
                                        <option value="2">Faculty 3</option>
                                        <option value="3">Faculty 4</option>
                                    </select>

                                </div>
                                
                                <div class="form-group">
                                    <label class="labelForm" for="regNo">Registration Number</label>
                                    <input id="regNo" name="regno" value="{{ $Students->regno }}" type="text" placeholder="Registration Number" class="form-control input-md"
                                        required>
                                </div>
                                



                                <div class="form-group">
                                    <label class="labelForm" for="fullname">Full Name</label>
                                    <input id="fullname" name="fullname" value="{{ $Students->fullname }}" type="text" placeholder="Full Name" class="form-control input-md"
                                        required>
                                </div>



                                <div class="form-group">

                                    <label class="labelForm" for="resaddress1">Residence Address</label>
                                    <input id="resaddress1" name="resaddress" value="{{ $Students->residentAddress }}" type="text" placeholder="Residence Address"
                                        class="form-control input-md" required="">
                                </div>


                                <div class="form-group">
                                    <label class="labelForm" for="peraddress">Permanent Address</label>
                                    <input id="peraddress" name="peraddress" value="{{ $Students->permanentAddress }}" type="text" placeholder="Permanent Address"
                                        class="form-control input-md" required="">
                                </div>



                                <div class="form-group">
                                    <label class="labelForm" for="dob">Date Of Birth</label>
                                    <input id="dob" name="dob" type="date"  placeholder="Date Of Birth" class="form-control input-md"
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


                                <div class="form-group">
                                    <label class="labelForm" for="Lastschoolattend">Last School Attend</label>
                                    <input id="Lastschoolattend" name="lastSchoolAttend"  value="{{ $Students->LastSchoolAttend }}" type="text" placeholder="Last School Attend"
                                        class="form-control input-md" required="">
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="labelForm" for="ParentsGuardianname">Parents/Guardian Name</label>
                                    <input id="ParentsGuardianname" name="parentsGuardianname" value="{{ $Students->parentsGuardianName }}" type="text" placeholder="Parents/Guardian Name"
                                        class="form-control input-md" required="">
                                </div>


                                <div class="form-group">
                                    <label class="labelForm" for="ParentsGuardianAddress">Address</label>
                                    <input id="ParentsGuardianAddress" value="{{ $Students->parentsGuardianAddress }}" name="parentsGuardianAddress" type="text"
                                        placeholder="Address" class="form-control input-md" required="">
                                </div>


                                <div class="form-group">
                                    <label class="labelForm" for="GPhonenumber">Phone Number</label>
                                    <input id="GPhonenumber" name="gPhonenumber" value="{{ $Students->parentsGuardianPhoneNumber }}" type="text" placeholder="Phone Number"
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
                                    <textarea id="anyothertextarea" name="problem[]" type="textarea" rows="2" placeholder="Any other problem specify"
                                        class="form-control input-md"></textarea>
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
                                                            <input name="fOccupation"  id="fOccupation" class="form-control FatherList">
                                                            <input name="fRelation" id="fRelation"  value="Father" class="FatherList"
                                                                type="hidden">
                                                        </td>
                                                        <td>
                                                            <input name="fAge" id="fAge"  class="form-control FatherList">
                                                        </td>
                                                        <td>
                                                            <input name="fIllness" id="fIllness"  class="form-control FatherList">
                                                        </td>
                                                        <td>
                                                            <input name="fIfdead" id="fIfdead"  class="form-control FatherList">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Mother
                                                        </td>
                                                        <td>
                                                            <input name="mOccupation" id="mOccupation"  type="text" class="form-control">
                                                            <input name="mRelation" id="mRelation"  value="Mother" type="hidden">
                                                        </td>
                                                        <td>
                                                            <input name="mAge" id="mAge" type="text"  class="form-control">
                                                        </td>
                                                        <td>
                                                            <input name="mIllness" id="mIllness"  type="text" class="form-control">
                                                        </td>
                                                        <td>
                                                            <input name="mIfdead" id="mIfdead"  type="text" class="form-control">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Brother
                                                        </td>
                                                        <td>
                                                            <input name="bOccupation" id="bOccupation"  type="text" class="form-control">
                                                            <input name="bRelation" id="bRelation"  type="hidden" value="Brother"
                                                                type="hidden">
                                                        </td>
                                                        <td>
                                                            <input name="bAge" id="bAge" type="text"  class="form-control">
                                                        </td>
                                                        <td>
                                                            <input name="bIllness" id="bIllness"  type="text" class="form-control">
                                                        </td>
                                                        <td>
                                                            <input name="bIfdead" id="bIfdead"  type="text" class="form-control">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Sister
                                                        </td>
                                                        <td>
                                                            <input name="sOccupation" id="sOccupation"  type="text" class="form-control">
                                                            <input name="sRelation" id="sRelation"  value="Sister" type="hidden">
                                                        </td>
                                                        <td>
                                                            <input name="sAge" type="text" id="sAge"  class="form-control">
                                                        </td>
                                                        <td>
                                                            <input name="sIllness" type="text"  id="sIllness" class="form-control">
                                                        </td>
                                                        <td>
                                                            <input name="sIfdead" type="text"  id="sIfdead" class="form-control">
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

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="file:///G:/3rdyearproject/slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="file:///G:/3rdyearproject/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="file:///G:/3rdyearproject/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>