<?php
 session_start();
if (isset($_SESSION['locked'])) {
  
        $res=time() - $_SESSION['locked'];
       if ($res > 10) {
     unset($_SESSION['locked']);
        unset($_SESSION['attempt_count']);
        session_destroy();
       }

      }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title> Login</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../assets/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../assets/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="../assets/css/bootstrap-datepicker.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body class="sidebar-light">
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left p-5">
              <div class="brand-logo text-center">
                <img src="assets/images/logo.png" alt="logo">
              </div>
              <h6 class="font-weight-light">ログインしてからご利用ください。</h6>
              <form class="pt-3" method="post" action="../php/config.php">
                <div class="form-group">
                  <input type="textbox" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="メール" name="userAccount[]" required>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="パスワード"  name="userAccount[]" required>
                </div>
                <div class="mt-3">
                  <?php if (isset($_SESSION['attempt_count'])) {
                          if ($_SESSION['attempt_count']>2) {
                            $_SESSION['locked']=time();
                            
                            echo "You are Locked for 10 second please wait for 10s and refresh the page!!";
                          }
                  }  ?>
                   <input type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" value=" ログイン" name=" sub"/ 

                    <?php
                    if (isset($_SESSION['locked'])) {
       echo "disabled";}?>>

                  
                </div>
                <div class="login_msg"> 
          <?php if (isset($_SESSION['error'])) {
                           echo $_SESSION['error'];
                           unset($_SESSION['error']);
                          }
                   ?> </div>
                <div class="mt-3">
                 <h1><a href="register.php">ここから新登録する</a></h1>
                </div>
                
              </form>
			  
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>

  <!-- plugins:js -->
  <script src="assets/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="assets/js/Chart.min.js"></script>
  <script src="assets/js/bootstrap-datepicker.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="assets/js/off-canvas.js"></script>
  <script src="assets/js/hoverable-collapse.js"></script>
  <script src="assets/js/template.js"></script>
  <script src="assets/js/settings.js"></script>
  <script src="assets/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="assets/js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>
</html>