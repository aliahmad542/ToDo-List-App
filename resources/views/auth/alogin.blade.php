
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Darrebni</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: NiceAdmin
    * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    * Updated: Apr 20 2024 with Bootstrap v5.3.3
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->

</head>

<body>

<main style="background-color: grey">
    <form action="{{route('store.my.info')}}" method="POST">
        <div class="container ">

            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container ">
                    <div class="row justify-content-center ">
                        <div name="login"    class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center  " style="box-shadow: red" >
                            <img src="assets/img/script_192246.png"  height="70px" height="70px" >
                            <div class="d-flex justify-content-center py-4 ">
                                {{--                            <img src="assets/img/script_192246.png"  height="70px" height="70px" >--}}
                                <span class="logo d-flex align-items-center w-auto">
                                <span class="d-none d-lg-block" style="color: red">Welcome to Todo List App</span>
                            </span>
                            </div><!-- End Logo -->
{{--                            shadow-lg p-3 mb-5 bg-white rounded--}}
                            <div class="card mb-3   " style="box-shadow: 2px 1px 4px 6px red  ;">
                                <div class="card-body">
                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4" style="color: red">Make Your Day Better</h5>
                                        <p class="text-center small">Be More regulary and perform your task in a day</p>
                                    </div>


                                    <form class="row g-3 needs-validation" novalidate>

                                        <div class="col-12">
                                            <label for="yourUsername"   class="form-label">Add Task</label>
                                            <div class="input-group has-validation">

                                                <input type="text" name="name" class="form-control" id="yourUsername" required>
                                                <div class="invalid-feedback">Please enter your task.</div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="col-12">
                                            <label for="yourUsername" class="form-label">Add Time</label>
                                            <div class="input-group has-validation">

                                                <input type="datetime-local" name="time" class="form-control" >
                                                <div class="invalid-feedback">Please enter your time</div>
                                            </div>
                                        </div>
                                        <br>


                                        <select name="type_id" class="form-select" aria-label="Default select example">
                                            @foreach($gets as $get)

                                                <option  value="{{$get->id}}">{{$get->name}}</option>

                                            @endforeach
                                        </select>
<br>
                                        <div class="col-12" >
                                            <button class="btn btn-danger btn w-100"  type="submit" style="background-color: red" >Let's Do it</button>
                                        </div>
                                        <br>
                                        <a class="btn btn-danger" style="background-color: red " type="submit" href="{{route('types.create')}}" >Add Type</a>


                                        <div class="btn-group">
                                            <button type="button" style="background-color: red " class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                Show All
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="{{route('all')}}">All Tasks</a></li>
                                                <li><a class="dropdown-item" href="{{route('new-task')}}">Tasks in progress</a></li>
                                                <li><a class="dropdown-item" href="{{route('end-tasks')}}">Ended Tasks</a></li>

                                            </ul>

                                        </div>
                                    </form></div>
                            </div>
{{--                            <div class="row-fluid" style="padding: 10px">--}}
                                <button type="button"  style=" position:absolute;top:120px;right:40px;float: right;background-color: red" class="btn btn-danger dropdown-toggle  " data-bs-toggle="dropdown" aria-expanded="false">
                                    About
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{route('logout')}}">Log Out</a></li>
                                </ul>

                            <div class="credits">
                                Designed by <a href="https://platform.darrebni.net/" style="color: red">Darrebni</a>
                            </div>
                            @csrf
                        </div>
                    </div>
                </div></section>
        </div>

    </form></main><!-- End #main -->
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<!-- Vendor JS Files -->
<script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/chart.js/chart.umd.js"></script>
<script src="assets/vendor/echarts/echarts.min.js"></script>
<script src="assets/vendor/quill/quill.js"></script>
<script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="assets/vendor/tinymce/tinymce.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
</body>

</html>
