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
     <img src="/images/UoJ_logo.png">
      <h3 class="my-heading ">MEDICAL CENTRE UNIVERSITY OF <span class="bg-main">JAFFNA</span></h3>
    </div>
  </div>




  <div class="tab_container">
    <input id="tab1" type="radio" name="tabs" checked>
    <label for="tab1" class="bac"><i class="fa fa-code"></i><span>STUDENT</span></label>

    <input id="tab2" type="radio" name="tabs">
    <label for="tab2" class="bac"><i class="fa fa-pencil-square-o"></i><span> STAFF</span></label>

    <input id="tab3" type="radio" name="tabs">
    <label for="tab3" class="bac"><i class="fa fa-bar-chart-o"></i><span> ADD MEDICINE</span></label>

    <input id="tab4" type="radio" name="tabs">
    <label for="tab4" class="bac"><i class="fa fa-folder-open-o"></i><span>UPDATE</span></label>



    <section id="content1" class="tab-content">


      <h3>STUDENT</h3>


      <div class="container">
        <div class="row col-md-6 col-md-offset-2 custyle">
          <table class="table table-striped custab">
            <thead>

              <tr>
                <th> Student ID</th>
                <th>Name</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            @foreach($appiontmentStudent as $appiontmentstudent)
            <tr>
              <td> {{ $appiontmentstudent->regNo }}</td>
              <td>{{ $appiontmentstudent->fullname }}</td>
              <td class="text-center"><form action="/perscription" method="POST">{{ csrf_field() }} 
                <input type="hidden" name="regNo" value="{{ $appiontmentstudent->regNo }}"><button  class='btn btn-info btn-xs' type="submit"><span class="glyphicon glyphicon-edit"></span>
                  Give medicine</button></form></td>
            </tr>
            @endforeach
          </table>
        </div>
      </div>
    </section>

    <section id="content2" class="tab-content">

      <h3>STAFF</h3>


      <div class="container">
        <div class="row col-md-6 col-md-offset-2 custyle">
          <table class="table table-striped custab">
            <thead>

              <tr>
                <th> Staff Reg No</th>
                <th>Staff Name</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            @foreach($appiontmentStaff as $appiontmentstaff)
            <tr>
              <td> {{ $appiontmentstaff->regNo }}</td>
              <td>{{ $appiontmentstaff->fullname }}</td>
             <td class="text-center"><form action="/phamaregister" method="POST">{{ csrf_field() }} 
                <input type="hidden" name="regNo" value="{{ $appiontmentstaff->regNo }}"><button  class='btn btn-info btn-xs' type="submit"><span class="glyphicon glyphicon-edit"></span>
                  Give medicine</button></form></td>
            </tr>
            @endforeach
          </table>
        </div>
      </div>
    </section>

    <section id="content3" class="tab-content">

      <h3>MEDICINES</h3>


      <form class="form-horizontal" method="POST" action="medicine">
        <fieldset>
      {{ csrf_field() }}
          <!-- Form Name -->
          <legend>Add New Medicine</legend>


             <div class="form-group">
            <label class="col-md-4 control-label" for="fn">Medicine Id</label>
            <div class="col-md-4">
              <input id="fn" name="id" type="text" placeholder="Medicine Id" class="form-control input-md"
                required="">

            </div>
          </div>
          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="fn">Medicine Name</label>
            <div class="col-md-4">
              <input id="fn" name="medicine_name" type="text" placeholder="Medicine Name" class="form-control input-md"
                required="">

            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="ln">Batch No</label>
            <div class="col-md-4">
              <input id="ln" name="batch_no" type="text" placeholder="Batch No" class="form-control input-md" required="">

            </div>
          </div>

          <!-- Text input-->


          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="add1">MFG Date</label>
            <div class="col-md-4">
              <input id="add1" name="mfg_date" type="Date" placeholder="MFG Date" class="form-control input-md"
                required="">

            </div>
          </div>


          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="city"> EXP DATE </label>
            <div class="col-md-4">
              <input id="city" name="exp_date" type="Date" placeholder=" EXP DATE " class="form-control input-md"
                required="">

            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="zip">Stock</label>
            <div class="col-md-4">
              <input id="zip" name="stork" type="text" placeholder="Stock" class="form-control input-md" required="">

            </div>
          </div>
          <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">


          <div class="col-md-4">
            <button id="submit" class="btn btn-primary" type="submit">SUBMIT</button>
          </div>






        </fieldset>
      </form>

    </section>

    <section id="content4" class="tab-content">

      <h3>Medicine</h3>
      <div>
             <a  class="btn btn-primary"  href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                        
                                       


                                                <a class="btn btn-danger" href="{{ route('password.request') }}">
                                                   Reset Password
                                                </a>
                                            
                        
                                    </div>
                           
      
        <div class="table-responsive">


          <table id="mytable" class="table table-bordred table-striped">

            <thead>

              
              <th>Medicine Id</th>
              <th>Medicine Name</th>
              <th>Batch No</th>
              <th>MFG date</th>
              <th>EXP date</th>
              <th>stock</th>
              <th>Update</th>
              <th>Delete</th>
            </thead>
            <tbody>
              @foreach($medicines as $medicine)
              <tr>
                <td>{{ $medicine->id }}</td>
                <td>{{ $medicine->medicine_name }}</td>
                <td>{{ $medicine->batch_no }}</td>
                <td>{{ $medicine->mfg_date }}</td>
                <td>{{ $medicine->exp_date }}</td>
                <td>{{ $medicine->stock }}</td>

                <td>
                <p><form action="medicine/edit" method="POST">{{ csrf_field() }}<input type="hidden" name="id" value="{{ $medicine->id }}"><button type="submit" class="btn btn-primary btn-xs"
                      ><span class="glyphicon glyphicon-pencil"></span></button></form></p>
                </td>
                <td>
                  <p><form method="POST" action="medicine/delete">{{ csrf_field() }}<input type="hidden" name='id' value='{{ $medicine->id  }}'><button class="btn btn-danger btn-xs"
                      ><span class="glyphicon glyphicon-trash"></span></button></p>
                </td>
              <tr>
                @endforeach




            </tbody>

          </table>

          <div class="clearfix"></div>
          <ul class="pagination pull-right">
            <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
          </ul>

        </div>




      </div>
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