<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job-Portal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"> --}}
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
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<style>
    .slider{
        background-image:url('https://merehead.com/blog/wp-content/uploads/nik-macmillan-YXemfQiPR_E-unsplash.jpg');
        height:52vh;
    }
</style>
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
        <li>
          <a href="/">Jobs</a>
        </li>
        <li>
          <a href="#candidates">Candidates</a>
        </li>
        <li>
          <a href="#company">Company</a>
        </li>
        <li>
          <a href="#about">About Us</a>
        </li>
        <?php if(empty($_SESSION['id_user']) && empty($_SESSION['id_company'])) { ?>
        <li>
          <a href="{{ route('login') }}">Login</a>
        </li>
        <li>
          <a href="{{ route('register') }}">Sign Up</a>
        </li> 
        <li>
          <a href="contact-us">Contact Us</a>
        </li> 
        <?php } else { 

          if(isset($_SESSION['id_user'])) { 
        ?>        
        <li>
          <a href="user/index.php">Dashboard</a>
        </li>
        <?php
        } else if(isset($_SESSION['id_company'])) { 
        ?>        
        <li>
          <a href="company/index.php">Dashboard</a>
        </li>
        <?php } ?>
        <li>
          <a href="logout.php">Logout</a>
        </li>
        <?php } ?>
      </ul>
    </div>
  </nav>
</header>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="margin-left: 0px;">

  <section class="slider">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center index-head">
          <h1>All <strong>JOBS</strong> In One Place</h1>
          <p>One search, global reach</p>
          <p><a class="btn btn-success btn-lg" href="{{Route('users.index')}}" role="button">Search Jobs</a></p>
        </div>
      </div>
    </div>
  </section>

  {{-- <section class="content-header">
    <div class="container">
      <div class="row">
        <div class="col-md-12 latest-job margin-bottom-20">
          <h1 class="text-center">Latest Jobs</h1>            

          <div class="attachment-block clearfix">
            <div  class="add1">
            <img  class="attachment-img" src="img/photo1.png" alt="Attachment Image">
            <p>Required a new Full stack web developer in NewYork.• Job Type: Support Staff - Union• Bargaining Unit: SSA• Regular/Temporary: Regular...</p>
           
          </div>

        </div>
      </div>
    </div>
  </section> --}}

  <section id="candidates" class="content-header">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center latest-job margin-bottom-20">
          <h1>Candidates</h1>
          <p>Finding a job just got easier. Create a profile and apply with single mouse click.</p>            
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4 col-md-4">
          <div class="thumbnail candidate-img">
            <img src="img/browse.jpg" alt="Browse Jobs">
            <div class="caption">
              <h3 class="text-center">Browse Jobs</h3>
            </div>
          </div>
        </div>
        <div class="col-sm-4 col-md-4">
          <div class="thumbnail candidate-img">
            <img src="img/interviewed.jpeg" alt="Apply & Get Interviewed">
            <div class="caption">
              <h3 class="text-center">Apply & Get Interviewed</h3>
            </div>
          </div>
        </div>
        <div class="col-sm-4 col-md-4">
          <div class="thumbnail candidate-img">
            <img src="img/career.jpg" alt="Start A Career">
            <div class="caption">
              <h3 class="text-center">Start A Career</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="company" class="content-header">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center latest-job margin-bottom-20">
          <h1>Companies</h1>
          <p>Hiring? Register your company for free, browse our talented pool, post and track job applications</p>            
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4 col-md-4">
          <div class="thumbnail company-img">
            <img src="img/postjob.png" alt="Browse Jobs">
            <div class="caption">
              <h3 class="text-center">Post A Job</h3>
            </div>
          </div>
        </div>
        <div class="col-sm-4 col-md-4">
          <div class="thumbnail company-img">
            <img src="img/manage.jpg" alt="Apply & Get Interviewed">
            <div class="caption">
              <h3 class="text-center">Manage & Track</h3>
            </div>
          </div>
        </div>
        <div class="col-sm-4 col-md-4">
          <div class="thumbnail company-img">
            <img src="img/hire.png" alt="Start A Career">
            <div class="caption">
              <h3 class="text-center">Hire</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="statistics" class="content-header">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center latest-job margin-bottom-20">
          <h1>Our Statistics</h1>
        </div>
      </div>
      <div class="row">
      <div class="col-lg-3 col-xs-6" >
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            

            <p>Job Offers</p>
          </div>
          <div class="icon">
            <i class="ion ion-ios-paper"></i>
          </div>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
     

            <p>Registered Company</p>
          </div>
          <div class="icon">
              <i class="ion ion-briefcase"></i>
          </div>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
          <div class="inner">

            <p>CV'S/Resume</p>
          </div>
          <div class="icon">
            <i class="ion ion-ios-list"></i>
          </div>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            

            <p>Daily Users</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-stalker"></i>
          </div>
        </div>
      </div>
      <!-- ./col -->
    </div>
    </div>
  </section>

  <section id="about" class="content-header">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center latest-job margin-bottom-20">
          <h1>About US</h1>                      
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <img src="img/browse.jpg" class="img-responsive">
        </div>
        <div class="col-md-6 about-text margin-bottom-20">
          <p>The online job portal application allows job seekers and recruiters to connect.The application provides the ability for job seekers to create their accounts, upload their profile and resume, search for jobs, apply for jobs, view different job openings. The application provides the ability for companies to create their accounts, search candidates, create job postings, and view candidates applications.
          </p>
          <p>
            This website is used to provide a platform for potential candidates to get their dream job and excel in yheir career.
            This site can be used as a paving path for both companies and job-seekers for a better life .
            
          </p>

        </div>
      </div>
    </div>
  </section>

</div>
<!-- /.content-wrapper -->

<footer class="main-footer" style="margin-left: 0px;">
  <div class="text-center">
    <strong>Copyright &copy; 2021-2022 <a href="jonsnow.netai.net">Job Portal</a>.</strong> All rights
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
{{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script> --}}
{{-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script> --}}
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script> --}}
<!-- Bootstrap 3.3.7 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- AdminLTE App -->
<script src="js/adminlte.min.js"></script>
</body>
</html>