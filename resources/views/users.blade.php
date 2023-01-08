<html>
<head>
    <title>Datatable Filter With Dropdown In Laravel 9 - Techsolutionstuff</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>   
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>

</head>
<body>
     
<div class="container">
    <h1>Search Desired Job</h1>
    <table class="table table-bordered data-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Job Title</th>
                <th>Experience in Years</th>
                <th>Qualification</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
     
</body>
     
<script type="text/javascript">
  $(function () {
      
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
          url: "{{ route('users.index') }}",
          data: function (d) {
                d.approved = $('#approved').val(),
                d.search = $('input[type="search"]').val()
            }
        },
        columns: [
            {data: 'j_id', name: 'j_id'},
            {data: 'jobtitle', name: 'jobtitle'},
            {data: 'experience', name: 'experience'},
            {data: 'qualification', name: 'qualification'},
            // {data: 'approved', name: 'approved'},
        ]
    });
  
    $('#approved').change(function(){
        table.draw();
    });
      
  });
</script>
</html>