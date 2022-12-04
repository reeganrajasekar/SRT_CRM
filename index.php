<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Invoice Management System </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <!-- Custom CSS -->
    <link href="admin/css/style.min.css" rel="stylesheet">
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    
            <div class="container-fluid" style="margin-top:150px">
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 offset-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material mx-2">
                                <center><a class="navbar-brand ms-4" href="index.html">
                                    <!-- Logo icon -->
                                    <b class="logo-icon">
                                        <img src="assets/images/logo1.png"/>
                                    </b>
                                </a></center>
                                    <div class="form-group">
                                        <label class="col-md-12">Username</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Username"
                                                class="form-control ps-0 form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Password</label>
                                        <div class="col-md-12">
                                            <input type="password" value="password"
                                                class="form-control ps-0 form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <center>
                                        <div class="row">
                                        <div class="col-sm-6">
                                            <a href="admin" class="btn btn-success btn-lg mx-auto mx-md-0 text-white">Login as Admin</a>
                                        </div>
                                        <div class="col-sm-6">
                                            <a href="client" class="btn btn-warning btn-lg mx-auto mx-md-0 text-white">Login as Client</a>
                                        </div>
                                        </div>
                                    </center>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
            </div>

    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="admin/js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="admin/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="admin/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="admin/js/custom.js"></script>
</body>

</html>