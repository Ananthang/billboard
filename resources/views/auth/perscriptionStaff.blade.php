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
  <link rel="stylesheet" type="text/css" href="/css/page/persi.css">
  <link rel="stylesheet" type="text/css" href="/css/dropdown.css">
</head>

<body>


  <div class="container" id="wrap">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">


        <form class="form-horizontal" role="form" method="POST" action="/student/perscription">
              {{ csrf_field() }}
          <fieldset>
            <center>
              <legend>Medicine</legend>
            </center>
            <div class="form-group">

              <table class="table table-user-information">
                <tbody>
                  <tr>
                    <td>Reg.No</td>
                    <td>{{ $Staff->regNo }}</td>
                  </tr>
                  <tr>
                    <td>Full Name</td>
                    <td>{{ $Staff->fullname }}</td>
                  </tr>



                </tbody>
              </table>
<input type="hidden" value="{{ $Staff->regNo }}" name="regNo" >
<input type="hidden" value="1" name="flag" >
<input type="hidden" value="{{ $appiontments->doctor_id }}" name="doctor_id">
<input type="hidden" value="{{  Auth::user()->id}}" name="user_id">
              <div class="form-group">
                <label class="col-sm-3 control-label" for="expiry-month">Select Medicine</label>
                <div class="col-sm-9">
                  <div class="row">
                    <div class="col-xs-4 col-md-4">

                      <select name="medicine1" class="form-control input-lg">
                        @foreach($medicines as $medicine)
                        <option value="{{ $medicine->id }}">{{ $medicine->medicine_name }}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="col-xs-4 col-md-4">
                      <input name='medicien1Count' type="number" placeholder="number of medicine">
                    </div>
                  </div>
                </div>
              </div>


              <div class="form-group">
                <label class="col-sm-3 control-label" for="expiry-month">Select Medicine</label>
                <div class="col-sm-9">
                  <div class="row">
                    <div class="col-xs-4 col-md-4">

                      <select name="medicine2" class="form-control input-lg">
                        @foreach($medicines as $medicine)
                        <option value="{{ $medicine->id }}">{{ $medicine->medicine_name }}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="col-xs-4 col-md-4">
                      <input name='medicien2Count' type="number" placeholder="number of medicine">
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label" for="expiry-month">Select Medicine</label>
                <div class="col-sm-9">
                  <div class="row">
                    <div class="col-xs-4 col-md-4">

                      <select name="medicine3" class="form-control input-lg">
                        @foreach($medicines as $medicine)
                        <option value="{{ $medicine->id }}">{{ $medicine->medicine_name }}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="col-xs-4 col-md-4">
                      <input name='medicien3Count' type="number" placeholder="number of medicine">
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label" for="expiry-month">Select Medicine</label>
                <div class="col-sm-9">
                  <div class="row">
                    <div class="col-xs-4 col-md-4">

                      <select name="medicine4" class="form-control input-lg">
                        @foreach($medicines as $medicine)
                        <option value="{{ $medicine->id }}">{{ $medicine->medicine_name }}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="col-xs-4 col-md-4">
                      <input name='medicien4Count' type="number" placeholder="number of medicine">
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label" for="expiry-month">Select Medicine</label>
                <div class="col-sm-9">
                  <div class="row">
                    <div class="col-xs-4 col-md-4">

                      <select name="medicine5" class="form-control input-lg">
                        @foreach($medicines as $medicine)
                        <option value="{{ $medicine->id }}">{{ $medicine->medicine_name }}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="col-xs-4 col-md-4">
                      <input name='medicien5Count' type="number" placeholder="number of medicine">
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-3 control-label" for="cvv">Special Note</label>
                <div class="col-sm-3">
                  <textarea rows="4" cols="50" name="note" placeholder="Enter Here ...." form="usrform">
</textarea>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                  <button type="button" class="btn btn-success"> Submit</button>
                </div>
              </div>
          </fieldset>
        </form>





      </div>
    </div>
  </div>
  </div>


  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>


</body>

</html>