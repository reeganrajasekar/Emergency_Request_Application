<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>User</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/static/img/favicon.png" rel="icon">
  <link href="/static/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/static/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/static/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/static/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/static/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="/static/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="/static/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/static/vendor/simple-datatables/style.css" rel="stylesheet">

  <link href="/static/css/style.css" rel="stylesheet">

</head>

<body style="background-position:center center;background-repeat:no-repeat;background-size:cover">

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">


              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-2 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">User Signup</h5>
                  </div>

                  <form class="row g-3" action="/signup.php" method="post">
                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Name<span class="text-danger">*</span> :</label>
                      <div class="input-group has-validation">
                        <input type="text" name="name" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Please enter your Mobile Number.</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Age<span class="text-danger">*</span> :</label>
                      <div class="input-group has-validation">
                        <input type="number" name="age" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Please enter your Age.</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Mobile Number<span class="text-danger">*</span> :</label>
                      <div class="input-group has-validation">
                        <input type="number" name="mobile" min="1000000000" max="9999999999"  class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Number Must be 10 digit</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password<span class="text-danger">*</span> :</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>
                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Aadhaar Number<span class="text-danger">*</span> :</label>
                      <div class="input-group has-validation">
                        <input type="number" name="ano" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Please enter your Mobile Number.</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Address<span class="text-danger">*</span> :</label>
                      <div class="input-group has-validation">
                        <textarea type="text" name="address" class="form-control" id="yourUsername" required></textarea>
                      </div>
                    </div>
                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Guardian Name<span class="text-danger">*</span> :</label>
                      <div class="input-group has-validation">
                        <input type="text" name="gname" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Please enter your Mobile Number.</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Guardian Mobile Number<span class="text-danger">*</span> :</label>
                      <div class="input-group has-validation">
                        <input type="number" name="gmobile" min="1000000000" max="9999999999" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Please enter your Mobile Number.</div>
                      </div>
                    </div>
                    
                    <div class="col-12">
                      <button class="btn btn-primary w-100" style="background-color:#012970;" type="submit">Signup</button>
                    </div>
                    <p class="text-center">Do you have an Account? <a href="/">Click here</a></p>
                  </form>

                </div>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/static/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="/static/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/static/vendor/chart.js/chart.umd.js"></script>
  <script src="/static/vendor/echarts/echarts.min.js"></script>
  <script src="/static/vendor/quill/quill.min.js"></script>
  <script src="/static/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="/static/vendor/tinymce/tinymce.min.js"></script>
  <script src="/static/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/static/js/main.js"></script>

</body>

</html>