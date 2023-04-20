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

<h2 class="text-center py-2 bg-dark text-white">E-Bot</h2>

<main class="container">
    <h2 class="mt-4">Fire Services:</h2>
    <div class="row mb-4">
        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 mb-2 text-center">
            <button class="btn" onclick="request('Building Fire')">
                <img src="/static/img/build.jpg" class="w-100 rounded border shadow">
            </button>
            <p class="text-center">Building Fire</p>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 mb-2 text-center">
            <button class="btn" onclick="request('Forest Fire')">
                <img src="/static/img/ff.jpg" class="w-100 rounded border shadow">
            </button>
            <p class="text-center">Forest Fire</p>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 mb-2 text-center">
            <button class="btn" onclick="request('Explotion')">
                <img src="/static/img/ex.jpg" class="w-100 rounded border shadow">
            </button>
            <p class="text-center">Explotion</p>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 mb-2 text-center">
            <button class="btn" onclick="request('Animal Rescue')">
                <img src="/static/img/res.jpg" class="w-100 rounded border shadow">
            </button>
            <p class="text-center">Animal Rescue</p>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 mb-2 text-center">
            <button class="btn" onclick="request('Human Rescue')">
                <img src="/static/img/hr.jpg" class="w-100 rounded border shadow">
            </button>
            <p class="text-center">Human Rescue</p>
        </div>
    </div>
</main>

<div id="qr-reader" style="width:100vw;height:100vh"></div>
<div class="alert" id="alert">
      <p id='result'></p>
</div>
<script>
    var service = "Fire"
    var data = ""
    function request(i){
        data = i
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else { 
            alert("GPS NOT DETECTED")
        }
    }
    async function showPosition(position) {
        fetch(`/request.php?service=${service}&data=${data}&lat=${position.coords.latitude}&lan=${position.coords.longitude}`)
        .then((res)=>res.json())
        .then((res)=>{
            if (res==1) {
                document.getElementById('result').innerHTML=`
					<span style='color:green'>${data} Service Requested!</span>
				`;
                document.getElementById('alert').style.display='block';
                document.getElementById('qr-reader').style.display="block";
            } else {
                document.getElementById('result').innerHTML=`
					<span style='color:red'>Something Went Wrong!</span>
				`;
                document.getElementById('alert').style.display='block';
                document.getElementById('qr-reader').style.display="block";
            }
        })
    }
    
</script>

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