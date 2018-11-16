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
                <center> <u>Update Medicine</u></center>
            </h3>

<form class="form-horizontal"  method="POST" action="medicine/update">
            
                    {{csrf_field() }} {{method_field('PUT')}}
        <fieldset>

          <!-- Form Name -->

          <!-- Text input-->
          <div class="form-group">
            <label class=" control-label" for="fn">Medicine Id</label>
            <div class="">
              <input id="fn" name="id" type="text" placeholder="Medicine Id" value="{{ $medicines->id }}"  class="form-control input-md"
                required="">

            </div>
          </div>
          <div class="form-group">
            <label class=" control-label" for="fn">Medicine Name</label>
            <div class="">
              <input id="fn" name="medicine_name" type="text" value="{{ $medicines->medicine_name }}" placeholder="Medicine Name" class="form-control input-md"
                required="">

            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class=" control-label" for="ln">Batch No</label>
            <div class="">
              <input id="ln" name="batch_no" type="text" value="{{ $medicines->batch_no }}" placeholder="Batch No" class="form-control input-md" required="">

            </div>
          </div>

          <!-- Text input-->


          <!-- Text input-->
          <div class="form-group">
            <label class=" control-label" for="add1">MFG Date</label>
            <div class="">
              <input id="add1" name="mfg_date" type="Date" value="{{ $medicines->mfg_date }}" placeholder="MFG Date" class="form-control input-md"
                required="">

            </div>
          </div>


          <!-- Text input-->
          <div class="form-group">
            <label class=" control-label" for="city"> EXP DATE </label>
            <div class="">
              <input id="city" name="exp_date" type="Date" value="{{ $medicines->exp_date }}" placeholder=" EXP DATE " class="form-control input-md"
                required="">

            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class=" control-label" for="zip">Stock</label>
            <div class="">
              <input id="zip" name="stork" type="text" value="{{ $medicines->stock }}" placeholder="Stork" class="form-control input-md" required="">

            </div>
          </div>
          <input type="hidden" name="user_id" value="{{ $medicines->user_id  }}">


          <div class="">
            <button id="submit" name="submit" class="btn btn-primary">SUBMIT</button>
          </div>






        </fieldset>
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