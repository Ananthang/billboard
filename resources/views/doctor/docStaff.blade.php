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




  <link rel="stylesheet" type="text/css" href="/css/page/parm.css">
</head>

<body>

  <div class="row">
    <div class="col-md-12 text-center">
      <div> <img src="/images/UoJ_logo.png"></div>
      <h3 class="my-heading ">MEDICAL CENTRE UNIVERSITY OF <span class="bg-main">JAFFNA</span></h3>
    </div>
  </div>




  <div class="tab_container">
    <input id="tab1" type="radio" name="tabs" checked>
    <label for="tab1" class="bac"><i class="fa fa-code"></i><span>Staff Details</span></label>

    <input id="tab2" type="radio" name="tabs">
    <label for="tab2" class="bac"><i class="fa fa-pencil-square-o"></i><span>Past Medicine Prescription</span></label>

    <input id="tab3" type="radio" name="tabs">
    <label for="tab3" class="bac"><i class="fa fa-bar-chart-o"></i><span></span>Special Note</label>

    <input id="tab4" type="radio" name="tabs">
    <label for="tab4" class="bac"><i class="fa fa-folder-open-o"></i><span>DOCTOR</span></label>



    <section id="content1" class="tab-content">


      <h3>STUDENT</h3>


      <div class="container">
        <div class="row col-md-6 col-md-offset-2 custyle">
          <table class="table table-striped custab">
            <thead>

              <tr>
                <th></th>
                <th></th>
                <th></th>
              </tr>
            </thead>
           
            <tr>
              <td>Reg Number</td>
              <td></td>
              <td>{{ $Staffs->regno }}</td>
            </tr>
            <tr>
              <td>Full Name</td>
              <td></td>
              <td>{{ $Staffs->fullname }}</td>
            </tr>
            <tr>
              <td>Faculty</td>
              <td></td>
              <td>{{ $Staffs->faculty }}</td>
            </tr>
            <tr>
              <td>Resident Address</td>
              <td></td>
              <td>{{ $Staffs->residentAddress }}</td>
            </tr>
            <tr>
              <td>Premanent Address</td>
              <td></td>
              <td>{{ $Staffs->permanentAddress }}</td>
            </tr>
            <tr>
              <td>Sex</td>
              <td></td>
              <td>{{ $Staffs->sex }}</td>
            </tr>
            <tr>
              <td>Marital Status</td>
              <td></td>
              <td>{{ $Staffs->maritalStatus }}</td>
            </tr>
            <tr>
              <td>Department</td>
              <td></td>
              <td>{{ $Staffs->department }}</td>
            </tr>
            <tr>
              <td>Designation</td>
              <td></td>
              <td>{{ $Staffs->designation }}</td>
            </tr>
            <tr>
              <td>Height</td>
              <td></td>
              <td>{{ $Staffs->height }}</td>
            </tr>
            <tr>
              <td>Weight</td>
              <td></td>
              <td>{{ $Staffs->weight }}</td>
            </tr>
            <tr>
              <td>Blood Group</td>
              <td></td>
              <td>{{ $Staffs->bloodGroup }}</td>
            </tr>
            
          </table>

<button  onclick="window.location='{{ route("doctor") }}'" class="btn btn-primary" >Doctor Home Page</button>
        </div>
      </div>
    </section>

    <section id="content2" class="tab-content">

      <h3>Past Medicine Prescription</h3>


      <div class="container">
        <div class="row col-md-6 col-md-offset-2 custyle">
          <table class="table table-striped custab">
            <thead>

              <tr>
                <th>Medicine Name</th>
                <th>Count</th>
                <th>Date</th>
              </tr>
            </thead>
            @if($prescriptions != null)
            @foreach($prescriptions as $prescription)
            <tr>
              <td> {{ $prescription->medicine_name }}</td>
              <td>{{ $prescription->medicine_of_count }}</td>
              <td>{{ $prescription->created_at->format('d M Y - H:i:s') }}</td>
            </tr>
            @endforeach
            @endif
          </table>
        </div>
      </div>
    </section>

    <section id="content3" class="tab-content">

      <h3>Special Note</h3>


       <div class="container">
        <div class="row col-md-6 col-md-offset-2 custyle">
          <table class="table table-striped custab">
            <thead>

              <tr>
                <th></th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <?php $i=0?>
            @foreach($specialNotes as $specialNote)
            <tr>
              <td> </td>
              <td>{{ $specialNote->note }}</td>
              <td>{{ $specialNote->created_at }}</td>
            </tr>
            @endforeach
          </table>
        </div>
      </div>
<button  onclick="window.location='{{ route("doctor") }}'" class="btn btn-primary" >Doctor Home Page</button>
    </section>

    <section id="content4" class="tab-content">

      <h3>Doctor</h3>
<div id="collapsesix" class="collapse" aria-labelledby="headingsix" data-parent="#accordion">
                        <div class="card-body">
                           <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                        </div>


          

    </section>



    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function () {
        $("#mytable #checkall").click(function () {
          if ($("#mytable #checkall").is(':checked')) {
            $("#mytable input[type=checkbox]").each(function () {
              $(this).prop("checked", true);
            });

          } else {
            $("#mytable input[type=checkbox]").each(function () {
              $(this).prop("checked", false);
            });
          }
        });

        $("[data-toggle=tooltip]").tooltip();
      });
    </script>





  </div>
</body>

</html>