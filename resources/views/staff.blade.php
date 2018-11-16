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
    <link rel="stylesheet" type="text/css" href="staff.css">
</head>

<body>
    <div class="container">

         <form class="form-horizontal"  method="POST" action="recep/staff/{{ $staff->regNo }}">
            
                    {{csrf_field() }} {{method_field('PUT')}}
            <div class="row ">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <h3>
                        <center> <u>STAFF UPDATE FORM</u></center>
                    </h3>
                   
                        {{ csrf_field() }}

                                <input name="user_id" value="{{ Auth::user()->id }}" type="hidden" required="">
                                <div class="form-group input-md">
                                   <label class="labelForm" for="staffRegNO">Reg No</label>
                                    <input id="staffRegNO"  value="{{ $staffs->regNo }}" name="regNo" type="text" placeholder="Reg No" class="form-control input-md"
                                        required="">
                                </div>
                                
                                <div class="form-group">
                                    <label class="labelForm" for="staffFullname">Full Name</label>
                                    <input id="staffFullname"  value="{{ $staffs->fullname }}" name="fullname" type="text" placeholder="Full Name" class="form-control input-md"
                                        required="">
                                </div>
                                <div class="form-group">
                                    <label class="labelForm" for="staffage">Age</label>
                                    <input id="staffage"  value="{{ $staffs->age }}" name="age" type="number" placeholder="Age" class="form-control input-md"
                                        required="">
                                </div>
                                <div class="form-group">
                                    <label class="labelForm" for="phonenumber">Phone number</label>
                                    <input id="phonenumber" value= name="phonenumber" type="text" placeholder="Phone Number"
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
                                    <input id="primaddress" value="{{ $staffs->permanentAddress }}" name="privateAddress" type="text" placeholder="Private Address"
                                        class="form-control input-md" required="">


                                </div>
                                <div class="form-group">
                                    <label class="labelForm" for="resaddress2">Residential Address</label>
                                    <input id="resaddress2" value={{ $staffs->residentAddress }} name="resiAddress" type="text" placeholder="Residential Address"
                                        class="form-control input-md" required="">


                                </div>



                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="labelForm" for="designation">Designation</label>
                                    <input id="designation" value={{ $staffs->designation }} name="designation" type="text" placeholder="Designation"
                                        class="form-control input-md" required="">
                                </div>

                                <div class="form-group ">
                                    <select id="faculty" name="faculty" class="custom-select input-md">
                                        <option value="Faculty">Faculty</option>
                                        <option value="Faculty 2">Faculty 2</option>
                                        <option value="Faculty 3">Faculty 3</option>
                                        <option value="Faculty 4">Faculty 4</option>
                                    </select>
                                </div>


                                <div class="form-group">
                                    <label class="labelForm" for="department">Department</label>
                                    <input id="department" value={{ $staffs->department }} name="department" type="text" placeholder="Department" class="form-control input-md"
                                        required="">
                                </div>
                                <!-- Text input-->

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="labelForm" for="height">Height</label>
                                    <input id="height" value={{ $staffs->height }} name="height" type="number" placeholder="Height" class="form-control input-md"
                                        required="">


                                </div>
                                <div class="form-group">
                                    <label class="labelForm" for="weight">Weight</label>
                                    <input id="weight" value={{ $staffs->weight }} name="weight" type="number" placeholder="Weight" class="form-control input-md"
                                        required="">


                                </div>
                                <div class="form-group">
                                    <label class="labelForm" for="bloodgroup">Blood Group</label>
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


                                <button class="btn btn-outline-warning" type="submit">Update</button>
                            </div>
                        </div>
                    </form>



        </div>
        <div class="col-md-3"></div>
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