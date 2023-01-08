<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Job Portal</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../css/AdminLTE.min.css">
  <link rel="stylesheet" href="../css/_all-skins.min.css">
  <!-- Custom -->
  <link rel="stylesheet" href="../css/custom.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="index.php" class="logo logo-bg">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>J</b>P</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Job</b> Portal</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
                  
        </ul>
      </div>
    </nav>
  </header>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="margin-left: 0px;">

    <section id="candidates" class="content-header">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="box box-solid">
              <div class="box-header with-border">
              @Auth
                <h3 class="box-title">Welcome  {{auth()->user()->name}}</h3>
              @endauth
              </div>
              <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">
                  <li><a href="/manager/comdashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                  <li><a href="/manager/editcom"><i class="fa fa-tv"></i> My Company</a></li>
                  <li ><a href="/manager/create"><i class="fa fa-file-o"></i> Create Job Post</a></li>
                  <li><a href="/manager/myjob"><i class="fa fa-file-o"></i> My Job Post</a></li>
                  <li class="active"><a href="/manager/jobapp"><i class="fa fa-file-o"></i> Job Application</a></li>
                  <!-- <li><a href="/manager/mailbox"><i class="fa fa-envelope"></i> Mailbox</a></li> -->
                  <li><a href="/manager/settings"><i class="fa fa-gear"></i> Settings</a></li>
                  <!-- <li><a href="/manager/resume"><i class="fa fa-user"></i> Resume Database</a></li> -->
                  <!-- <li><a href="out"><i class="fa fa-arrow-circle-o-right"></i> Logout</a></li> -->
                  @auth
                  <!-- {{auth()->user()->name}} -->
                  <li><a href="{{ route('logout.perform') }}"><i class="fa fa-arrow-circle-o-right"></i> Logout</a></li>
                  @endauth
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-9 bg-white padding-2">
            <h2><i>Recent Applications</i></h2>
          <table id="example2" class="table table-hover">
          <thead>
            <th>Job Id</th>
            <th>Candidate Email</th>
            <th>City</th>
            <th>CV</th>
          </thead>
              <tbody>
              @foreach($jobs::all() as $row)
              <tr>
              <td>{{$row->id}}</td>
              <td>{{$row->email}}</td>
              <td>{{$row->city}}</td>
              <td><a href="{{ route('file.download',[$row->u_id]) }}">Cv Download</a></td>
              </tr>
              @endforeach
              </tbody>                    
          </table>

            </div>
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



</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="../js/adminlte.min.js"></script>
</body>
</html>
