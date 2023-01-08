<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Job Portal</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"> --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="css/AdminLTE.min.css">
  <link rel="stylesheet" href="css/_all-skins.min.css">
  <!-- Custom -->
  <link rel="stylesheet" href="css/custom.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]

    Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      </head>
      <body class="hold-transition skin-green sidebar-mini">
      <div class="wrapper">
      
        <header class="main-header">
      
       <!-- add header of welcome page with session -->
                
        </header>
      
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="margin-left: 0px;">
      
          <section class="content-header">
            <div class="container">
              <div class="row">
                <div class="col-md-12 latest-job margin-top-50 margin-bottom-20">
                <h1 class="text-center">Latest Jobs</h1>  
                  <div class="input-group input-group-lg">
                      {{-- <input type="text" id="searchBar" class="form-control" placeholder="Search job"> --}}
                      <span class="input-group-btn">
                        {{-- <button id="searchBtn" type="button" class="btn btn-info btn-flat">Go!</button> --}}
                      </span>
                  </div>
                </div>
              </div>
            </div>
          </section>
      
          <section id="candidates" class="content-header">
            <div class="container">
              <div class="row">
                {{-- <div class="col-md-3">
                  <div class="box box-solid">
                    <div class="box-header with-border">
                      <h3 class="box-title">Filters</h3>
                    </div>
                  </div>
                </div> --}}
                {{-- <div class="col-md-9">
                  @foreach($data as $row)
      
                  <div class="card" style="width: 500px;">
                    <div class="row no-gutters">
                        <div class="col-sm-5">
                            <h5 class="card-title">{{$row->jobtitle}}</h5> 
                        </div>
                        <div class="col-sm-7">
                            <div class="card-body">
                              @php $id=0 @endphp
      
                                <p class="card-text">{{$row->description}}</p>
                                <p class="card-title">{{$row->maximumsalary}}</p>
                                <p class="card-title">{{$row->minimumsalary}}</p>  
                                <form method="put" action="{{ route('apply.job', [$row->j_id,$row->c_id]) }}">
                                  @csrf
                                  <button type="submit">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach 
                  <div id="target-content">
      
                  </div>
                  <div class="text-center">
                    <ul class="pagination text-center" id="pagination"></ul>
                  </div> 
                </div> --}}
                @foreach($data as $row)
                <div class="card" style="width: 18rem;">
                  {{-- <img src="..." class="card-img-top" alt="..."> --}}
                  <div class="card-body">
                    <h5 class="card-title">Title: {{$row->jobtitle}}</h5>
                    <p class="card-text">Desp: {{$row->description}}</p>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">Salary: {{$row->maximumsalary}}</li>
                    <li class="list-group-item">Exp: {{$row->experience}}</li>
                    <li class="list-group-item">Qaulification: {{$row->qualification}}</li>
                  </ul>
                  <div class="card-body">
                    {{-- <a href="#" class="card-link">Card link</a> --}}
                    <form method="put" action="{{ route('apply.job', [$row->j_id,$row->c_id]) }}">
                      @csrf
                      <button class="btn btn-outline-dark" type="submit">Submit</button>
                    </form>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </section>
        </div>
        <!-- /.content-wrapper -->
      
        <footer class="main-footer" style="margin-left: 0px;">
          <div class="text-center">
            <strong>Copyright &copy; 2016-2017 <a href="jonsnow.netai.net">Job Portal</a>.</strong> All rights
          reserved.
          </div>
        </footer>
      
        <!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed
             immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
      
      </div>
      <!-- ./wrapper -->
      
      <!-- jQuery 3 -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <!-- Bootstrap 3.3.7 -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <!-- AdminLTE App -->
      <script src="js/adminlte.min.js"></script>
      <script src="js/jquery.twbsPagination.min.js"></script>
      
      <!-- <script>
        function Pagination() {
          $("#pagination").twbsPagination({
            totalPages: 
            visible: 5,
            onPageClick: function (e, page) {
              e.preventDefault();
              $("#target-content").html("loading....");
              $("#target-content").load("jobpagination.php?page="+page);
            }
          });
        }
      </script> -->
      <!-- 
      <script>
        $(function () {
            Pagination();
        });
      </script>
      
      <script>
        $("#searchBtn").on("click", function(e) {
          e.preventDefault();
          var searchResult = $("#searchBar").val();
          var filter = "searchBar";
          if(searchResult != "") {
            $("#pagination").twbsPagination('destroy');
            Search(searchResult, filter);
          } else {
            $("#pagination").twbsPagination('destroy');
            Pagination();
          }
        });
      </script>
      
      <script>
        $(".experienceSearch").on("click", function(e) {
          e.preventDefault();
          var searchResult = $(this).data("target");
          var filter = "experience";
          if(searchResult != "") {
            $("#pagination").twbsPagination('destroy');
            Search(searchResult, filter);
          } else {
            $("#pagination").twbsPagination('destroy');
            Pagination();
          }
        });
      </script>
      
      <script>
        $(".citySearch").on("click", function(e) {
          e.preventDefault();
          var searchResult = $(this).data("target");
          var filter = "city";
          if(searchResult != "") {
            $("#pagination").twbsPagination('destroy');
            Search(searchResult, filter);
          } else {
            $("#pagination").twbsPagination('destroy');
            Pagination();
          }
        });
      </script>
      
      <script>
        function Search(val, filter) {
          $("#pagination").twbsPagination({
            totalPages: 
            visible: 5,
            onPageClick: function (e, page) {
              e.preventDefault();
              val = encodeURIComponent(val);
              $("#target-content").html("loading....");
              $("#target-content").load("search.php?page="+page+"&search="+val+"&filter="+filter);
            }
          });
        }
      </script> -->
      
      
      </body>
      </html> 
      