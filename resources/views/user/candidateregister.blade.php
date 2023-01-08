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
          <li>
            <a href="../jobs.php">Jobs</a>
          </li>       
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
                <!-- <ul class="nav nav-pills nav-stacked">
                <li><a href="editcan"><i class="fa fa-user"></i> Edit Profile</a></li>
                  <li><a href="cv-upload"><i class="fa fa-user"></i> Cv Upload</a></li>
                  <li class="active"><a href="index"><i class="fa fa-address-card-o"></i> My Applications</a></li>
                  <li><a href="jobs"><i class="fa fa-list-ul"></i> Jobs</a></li>
                  <li><a href="mail"><i class="fa fa-envelope"></i> Mailbox</a></li>
                  <li><a href="settings"><i class="fa fa-gear"></i> Settings</a></li>
                  <li><a href="out"><i class="fa fa-arrow-circle-o-right"></i> Logout</a></li>
                </ul> -->
                <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="editcan"><i class="fa fa-user"></i> Edit Profile</a></li>
                  <li><a href="cv-upload"><i class="fa fa-user"></i> Cv Upload</a></li>
                  <li class="activecan"><a href="index"><i class="fa fa-address-card-o"></i> My Applications</a></li>
                  <li><a href="jobscan"><i class="fa fa-list-ul"></i> Jobs</a></li>
                  <!-- <li><a href="mailcan"><i class="fa fa-envelope"></i> Mailbox</a></li> -->
                  <li><a href="settingscan"><i class="fa fa-gear"></i> Settings</a></li>
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
            <h2><i>Edit Profile</i></h2>
            {{-- <form action="{{ route('profile.update')}}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="row">
                <div class="col-md-6 latest-job ">
                  <div class="form-group">
                     <label for="fname">First Name</label>
                    <input type="text" value="{{$data->fname}}" class="form-control input-lg" id="fname" name="fname" placeholder="First Name" onkeypress="return validateName(event);"  required="">
                  </div>
                  <div class="form-group">
                    <label for="lname">Last Name</label>
                    <input type="text" value="{{$data->lname}}" class="form-control input-lg" id="lname" name="lname" placeholder="Last Name" onkeypress="return validateName(event);" required="">
                  </div>
                  <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control input-lg" id="email" placeholder="{{ Auth::user()->email }}"  readonly>
                  </div>
                  <div class="form-group">
                    <label for="address">Address</label>
                    <textarea id="address" value="{{$data->address}}" name="address" class="form-control input-lg" rows="5" placeholder="Address">{{$data->address}}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" value="{{$data->city}}" class="form-control input-lg" id="city" name="city" onkeypress="return validateName(event);"  placeholder="city">
                  </div>
                  <div class="form-group">
                    <label for="state">State</label>
                    <input type="text" value="{{$data->state}}" class="form-control input-lg" id="state" name="state"  placeholder="state" onkeypress="return validateName(event);" >
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-flat btn-success">Update Profile</button>
                  </div>
                </div>
                <div class="col-md-6 latest-job ">
                  <div class="form-group">
                    <label for="contactno">Contact Number</label>
                    <input type="text" value="{{$data->phone}}" class="form-control input-lg" id="contactno" name="contactno" placeholder="Contact Number" onkeypress="return validatePhone(event);" maxlength="10" minlength="10">
                  </div>
                  <div class="form-group">
                    <label for="qualification">Highest Qualification</label>
                    <input type="text" value="{{$data->hq}}" class="form-control input-lg" id="qualification" name="qualification" placeholder="Highest Qualification" >
                  </div>
                  <div class="form-group">
                    <label for="stream">Stream</label>
                    <input type="text" value="{{$data->stream}}" class="form-control input-lg" id="stream" name="stream" placeholder="stream" >
                  </div>
                  <div class="form-group">
                    <label>Skills</label>
                    <textarea class="form-control input-lg" rows="4" name="skills" onkeypress="return validateName(event)">{{$data->skills}}</textarea>
                    <!-- <textarea class="form-control input-lg"  value="{{$data->intro}}" rows="4" name="aboutme">{{$data->intro}}</textarea> -->
                  </div>
                  <div class="form-group">
                    <label>About Me</label>
                    <textarea class="form-control input-lg"  value="{{$data->intro}}" rows="4" name="aboutme">{{$data->intro}}</textarea>
                  </div>
                  <!-- <div class="form-group">
                    <label>Upload/Change Resume</label>
                    <input type="file" name="resume" class="btn btn-default">
                  </div> -->
                </div>
              </div>
            </form> --}}
            <form method="PUT" id="registerCandidates" action="csign" enctype="multipart/form-data">
              @csrf
              <div class="col-md-6 latest-job ">
                <div class="form-group">
                  <input class="form-control input-lg" type="text" id="fname" name="fname" placeholder="First Name *" required>
                </div>
                <div class="form-group">
                  <input class="form-control input-lg" type="text" id="lname" name="lname" placeholder="Last Name *" required>
                </div>
                <div class="form-group">
                  <input class="form-control input-lg" type="text" id="email" name="email" value="{{ Auth::user()->email }}" readonly>
                </div>
                <div class="form-group">
                  <textarea class="form-control input-lg" rows="4" id="aboutme" name="intro" placeholder="Brief intro about yourself *" required></textarea>
                </div>
                <div class="form-group">
                  <label>Date Of Birth</label>
                  <input class="form-control input-lg" type="date" id="dob" min="1960-01-01" max="1999-01-31" name="bday" placeholder="Date Of Birth">
                </div>
                <div class="form-group">
                  <input class="form-control input-lg" type="text" id="age" name="age" placeholder="Age" readonly>
                </div>
                <div class="form-group">
                  <label>Passing Year</label>
                  <input class="form-control input-lg" type="date" id="passingyear" name="pyear" placeholder="Passing Year">
                </div>       
                <div class="form-group">
                  <input class="form-control input-lg" type="text" id="qualification" name="hq" placeholder="Highest Qualification">
                </div>
                <div class="form-group">
                  <input class="form-control input-lg" type="text" id="stream" name="stream" placeholder="Stream">
                </div>                    
                <div class="form-group checkbox">
                  <label><input type="checkbox"> I accept terms & conditions</label>
                </div>
                <div class="form-group">
                  <!-- <button class="btn btn-flat btn-success">Register</button> -->
                </div>
                <?php 
                //If User already registered with this email then show error message.
                if(isset($_SESSION['registerError'])) {
                  ?>
                  <div class="form-group">
                    <label style="color: red;">Email Already Exists! Choose A Different Email!</label>
                  </div>
                <?php
                 unset($_SESSION['registerError']); }
                ?> 
  
                <?php if(isset($_SESSION['uploadError'])) { ?>
                <div class="form-group">
                    <label style="color: red;"><?php echo $_SESSION['uploadError']; ?></label>
                </div>
                <?php unset($_SESSION['uploadError']); } ?>     
  
              </div>            
              <div class="col-md-6 latest-job ">
                {{-- <div class="form-group">
                  <input class="form-control input-lg" type="password" id="password" name="password" placeholder="Password *" required>
                </div> --}}
                {{-- <div class="form-group">
                  <input class="form-control input-lg" type="password" id="cpassword" name="cpassword" placeholder="Confirm Password *" required>
                </div> --}}
                {{-- <div id="passwordError" class="btn btn-flat btn-danger hide-me" >
                      Password Mismatch!! 
                    </div> --}}
                <div class="form-group">
                  <input class="form-control input-lg" type="text" id="contactno" name="phone" minlength="10" maxlength="10" onkeypress="return validatePhone(event);" placeholder="Phone Number">
                </div>
                <div class="form-group">
                  <textarea class="form-control input-lg" rows="4" id="address" name="address" placeholder="Address"></textarea>
                </div>
                <div class="form-group">
                  <input class="form-control input-lg" type="text" id="city" name="city" placeholder="City">
                </div>
                <div class="form-group">
                  <input class="form-control input-lg" type="text" id="state" name="state" placeholder="State">
                </div>
                <div class="form-group">
                  <textarea class="form-control input-lg" rows="4" id="skills" name="skills" placeholder="Enter Skills"></textarea>
                </div>              
                <div class="form-group">
                  <input class="form-control input-lg" type="text" id="designation" name="desig" placeholder="Designation">
                </div>
                <!-- <div class="mb-3">
                  <label class="form-label" for="inputFile">File:</label>
                  <input 
                      type="file" 
                      name="file" 
                      id="inputFile"
                      class="form-control @error('file') is-invalid @enderror">
    
                  @error('file')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
              </div> -->
  
                <!-- <div class="form-group">
                  <label style="color: red;">File Format PDF Only!</label>
                  <input type="file" name="file"id="inputFile"  class="btn btn-flat btn-danger" required>
                </div> -->
  
              </div>
              <button type='submit'>Submit</button>
            </form>
            <!-- <form action="{{ route('file.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
  
            <div class="form-group">
                <label class="form-label" for="inputFile">File:</label>
                <input 
                    type="file" 
                    name="file" 
                    id="inputFile"
                    class="form-control @error('file') is-invalid @enderror">
  
                @error('file')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-success">Upload</button>
          </div>
        </form> -->
            <div class="row">
              <div class="col-md-12 text-center">
              </div>
            </div>
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
<script src="../js/adminlte.min.js"></script>
<script type="text/javascript">
  

       function validatePhone(event) {

        //event.keycode will return unicode for characters and numbers like a, b, c, 5 etc.
        //event.which will return key for mouse events and other events like ctrl alt etc. 
        var key = window.event ? event.keyCode : event.which;

        if(event.keyCode == 8 || event.keyCode == 127 || event.keyCode == 37 || event.keyCode == 39) {
          // 8 means Backspace
          //46 means Delete
          // 37 means left arrow
          // 39 means right arrow
          return true;
        } else if( key < 48 || key > 57 ) {
          // 48-57 is 0-9 numbers on your keyboard.
          return false;
        } else return true;
      }
  </script>
      <script type="text/javascript">
  $('#dob').on('change', function() {
    var today = new Date();
    var birthDate = new Date($(this).val());
    var age = today.getFullYear() - birthDate.getFullYear();
    var m = today.getMonth() - birthDate.getMonth();

    if(m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
      age--;
    }

    $('#age').val(age);
  });
</script>


</body>
</html>
