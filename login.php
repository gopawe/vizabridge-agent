<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="">
    <meta name="description"
        content="">
    <meta name="robots" content="noindex,nofollow">
    <title>Agency Login</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/logo_icon.png">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="admin.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <div class="row">
          <div class="col-md-4" style="border:0.5px solid #ddd;margin: 20px auto;padding: 0px;border-radius: 7px;">
              <div style="width:100%; background: #5B67CA; color: #fff; text-align: center;border-top-right-radius: 7px; border-top-left-radius: 7px;">
                <img src="assets/images/white_logo.png" style="margin-top: 9px;" width="190px" height="auto">
                <br />
                <h5 style="color: #fff;padding: 10px;">Sign In</h5>
              </div>

              <form method="POST" id="form">
                  <div style="margin: 20px;">
                      <strong><label>Email</label></strong>
                  <input type="text" class="form-control" name="email" placeholder="Enter your email" id="email"><br />

                  <strong><label>Password</label></strong>
                  <input type="password" class="form-control" name="password" placeholder="Enter your password" id="password"><br />

                  <div style="text-align: right;">
                    <a href="forgot.php"><u>Forgot Password?</u></a>
                  </div>

                  <input type="submit" style="width: 100%; background: #5B67CA;margin-top: 10px;margin-bottom: 10px;" value="Sign in" name="login" class="btn btn-primary purple-color">
                  </div>
              </form>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script type="text/javascript">
      var form = document.getElementById("form");

      form.addEventListener('submit', function(e){
        e.preventDefault();

        var email = document.getElementById("email");
        var password = document.getElementById("password");

        if (email.value.length <= 0) {
            Swal.fire({
              icon: 'warning',
              title: 'Warning',
              text: 'Account email is required to enter before login',
              footer: 'Vizabridge 대행사 포털'
            })
        }else if(password.value.length <= 0){
            Swal.fire({
              icon: 'warning',
              title: 'Warning',
              text: 'Account password is required to enter before login',
              footer: 'Vizabridge 대행사 포털'
            })
        }else{
          window.location = "dashboard.php";
        }
      });
    </script>
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
        $(".preloader").fadeOut();
    </script>
</body>

</html>