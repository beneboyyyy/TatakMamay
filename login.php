<?php
require_once('classes/database.php');
$con = new database();
session_start();

// If the user is already logged in, check their account type and redirect accordingly
if (isset($_SESSION['username']) && isset($_SESSION['account_type'])) {
  if ($_SESSION['account_type'] == 0) {
    header('location:dashboard.php');
  } else if ($_SESSION['account_type'] == 1) {
    header('location:user_page.php');
  }
  exit();
}

$error = ""; // Initialize error variable

if (isset($_POST['login'])) {
  $username = $_POST['user'];
  $password = $_POST['pass'];
  $result = $con->check($username, $password);

  if ($result) {
      $_SESSION['username'] = $result['user_name'];
      $_SESSION['account_type'] = $result['account_type'];
      $_SESSION['user_id'] = $result['user_id'];
      $_SESSION['profilepicture'] = $result['user_profile_picture'];
      // Redirect based on account type
      if ($result['account_type'] == 0) {
        header('location:dashboard.php');
      } else if ($result['account_type'] == 1) {
        header('location:user_page.php');
      }
      exit();
  } else {
      $error = "Incorrect username or password. Please try again.";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Tailoring Appointment System
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
  
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
<main>
  <div class="container">
  <?php include('nav.php'); ?>
    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
            
            <div class="card mb-3">
              <div class="card-body">
                <div class="pt-4 pb-2">
                  <h5 class="card-title text-center pb-0 fs-4">Login Your Account</h5>
                  <p class="text-center small">Enter your username & password to login</p>
                </div>

                <form method="post" class="row g-3 needs-validation" novalidate>
                  <div class="col-12">
                    <label for="yourUsername" class="form-label">Username</label>
                    <div class="input-group has-validation">
                      <span class="input-group-text" id="inputGroupPrepend">@</span>
                      <input type="text" name="user" class="form-control <?php if (!empty($error)) echo 'is-invalid'; ?>" id="yourUsername" required>
                      <div class="invalid-feedback">Please enter your username.</div>
                    </div>
                  </div>

                  <div class="col-12">
                    <label for="yourPassword" class="form-label">Password</label>
                    <input type="password" name="pass" class="form-control <?php if (!empty($error)) echo 'is-invalid'; ?>" id="yourPassword" required>
                    <div class="invalid-feedback">Please enter your password!</div>
                  </div>

                 

                 

                  <div class="col-12">
                    <button class="btn btn-primary w-100" type="submit" name="login">Login</button>
                  </div>
                  <div class="col-12">
                    <p class="small mb-0">Don't have an account? <a href="register2.php">Create an account</a></p>
                  </div>
                </form>

              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
  </div>
</main><!-- End #main -->

  
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <!-- Place this tag in your head or just before your close body tag. -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/black-dashboard.min.js?v=1.0.0"></script><!-- Black Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  
</body>

</html>