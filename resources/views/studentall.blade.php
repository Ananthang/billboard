<html>

<head>
    <title></title>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--===============================================================================================-->

    <!--===============================================================================================-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
   
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




      <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Reg No</th>
                <th>Full Name</th>
                <th>Faculty</th>
                <th>Resident Address</th>
                <th>Parents/Guardian Name</th>
                <th>Parents/Guardian Phone Number</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
             @foreach($Students as $student)
            <tr>
               
                <th>{{ $student->regno }}</th>
                <th>{{ $student->fullname }}</th>
                <th>{{ $student->faculty }}</th>
                <th>{{ $student->residentAddress }}</th>
                <th>{{ $student->parentsGuardianName }}</th>
                <th>{{ $student->parentsGuardianPhoneNumber }}</th>
                <th><form method="GET" action="/recep/student/{{ $student->regno }}/edit"><button class="btn btn-warning" type="submit" value="Update">Update</button></form></th>
                <th><form method="POST" action="/recep/student/{{ $student->regno }}">{{ csrf_field() }} {{method_field('DELETE')}}<button class="btn btn-danger" type="submit" value="Delete">Delete</button></form></th>
            </tr>
             @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Reg No</th>
                <th>Full Name</th>
                <th>Faculty</th>
                <th>Resident Address</th>
                <th>Parents/Guardian Name</th>
                <th>Parents/Guardian Phone Number</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </tfoot>
    </table>
    </div>

    <!--===============================================================================================-->

    <!--===============================================================================================-->

    <!--===============================================================================================-->
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="/js/jquery.slim.js"></script>
    <script src="/js/datatable.js"></script>

    <script src="/js/bootstrap.js"></script>
    
    <script>
         
      $(document).ready(function() {
        
    $('#example').DataTable();
} );
    </script>
</body>

</html>