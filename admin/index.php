<!DOCTYPE html>
<html dir="ltr" lang="en">

<?php include 'includes/header.php'?>

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <?php include 'includes/topbar.php'?>
        <?php include 'includes/sidebar.php'?>

        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="page-title mb-0 p-0"><i class="mdi me-2 mdi-gauge"></i> Dashboard</h3>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title"><i class="fa fa-file fa-3x text-warning"> 23</i></h3>
                                <h6 class="card-subtitle">Number of Invoice</h6>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title"><i class="fa fa-money fa-3x text-success"> Php 900,000.00</i></h3>
                                <h6 class="card-subtitle">Total Collection</h6>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title"><i class="fa fa-barcode fa-3x text-danger"> 123</i></h3>
                                <h6 class="card-subtitle">Number of Products</h6>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title"><i class="fa fa-users fa-3x text-info"> 79</i></h3>
                                <h6 class="card-subtitle">Number of Clients</h6>
                                
                            </div>
                        </div>
                    </div>
                    
                    
                </div>

            </div>
        </div>
    </div>
    <?php include 'includes/footer.php'?>
</body>

</html>