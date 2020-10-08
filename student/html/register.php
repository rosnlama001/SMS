
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>register</title>
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
      <div class="content-wrapper d-flex align-items-center justify-content-center auth border" >
        <div class="container bg-light"> 
            <div class="card-body card-block">
                           <form method="post" action="../php/add_student.php">
                 <div class="form-group">
                  <label class=" form-control-label">氏名</label>
                  <input type="text" value="" name="name" placeholder="学生氏名入力" class="form-control" required>
                </div>
                <div class="form-group">
                  <label class=" form-control-label">メール</label>
                  <input type="email" value="" name="email" placeholder="学生メール入力" class="form-control" required>
                </div>
                <div class="form-group">
                  <label class=" form-control-label">電話番号</label>
                  <input type="text" value="" name="mobile" placeholder="学生電話番号入力" class="form-control" required>
                </div>
                <div class="form-group">
                  <label class=" form-control-label">パスワード</label>
                  <input type="password"  name="password" placeholder="学生パスワード入力" class="form-control" required>
                </div>
              
                <div class="form-group">
                  <label class=" form-control-label">学科</label>
                  <select name="dept_id" required class="form-control">
                    <option value="">学科を選ぶ</option>
                   
                  </select>
                </div>
                <div class="form-group">
                  <label class=" form-control-label">住所</label>
                  <input type="text" value="" name="address" placeholder="学生住所入力" class="form-control" required>
                </div>
                <div class="form-group">
                  <label class=" form-control-label">生年月日</label>
                  <input type="date" value="" name="birthday" placeholder="学生生年月日入力" class="form-control" required>
                </div>
                <div class="form-group">
                  <label class="form-control-label">性別</label><br>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" id="gender" name="gender" class="custom-control-input" checked>
                  <label class="custom-control-label" for="gender">男性</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" id="gender1" name="gender" class="custom-control-input">
                  <label class="custom-control-label" for="gender1">女性</label>
                </div>
              </div>
              <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">アープする</span>
                  </div>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="timage">
                    <label class="custom-file-label" for="timage">写真を乗せる</label>
                  </div>

                </div>
                <div class="form-group">
                  <label class=" form-control-label">国籍</label>
                  <select name="dept_id" required class="form-control">
                    <option value="">国籍を選ぶ</option>
                    <option value="">ネパール</option>
                    <option value="">メンマー</option>
                    <option value="" selected>日本</option>
                    <option value="">ベトナム</option>
                  </select>
                </div>
                <div class="input-group mb-3">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <input type="checkbox" aria-label="Checkbox for following text input">
            </div>
          </div>
          <label class=" form-control-label">サッカー</label>
        </div>
                  <button  type="submit" name="submit" class="btn btn-lg btn-info btn-block">
                 <span id="payment-button-amount">Submit</span>
                 </button>
                </form>
                        </div>
        </div>  
			  <div class="login_msg"><!-- <?php echo $msg?> --></div>
           
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