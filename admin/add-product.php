<!DOCTYPE html>
<html dir="ltr" lang="en">

<?php include 'includes/header.php'?>
<link rel="stylesheet" href="../assets/plugins/summernote/summernote-bs4.css">
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
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

        <?php include 'includes/topbar.php'?>
        <?php include 'includes/sidebar.php'?>

        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="page-title mb-0 p-0"><i class="mdi me-2 mdi-barcode-scan"></i> Add Products</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Products</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"><i class="mdi me-2 mdi-barcode-scan"></i> Product Information</h4>
                                    <div class="col-lg-8 col-xlg-9 col-md-7 offset-lg-2">
                                    <form class="form-horizontal form-material mx-2">
                                        
                                    <div class="form-group">
                                            <label class="col-sm-12">Category</label>
                                            <div class="col-sm-12 border-bottom">
                                                <select class="form-select shadow-none ps-0 border-0 form-control-line">
                                                    <option>Choose category</option>
                                                    <option>category 1</option>
                                                    <option>category 2</option>
                                                    <option>category 3</option>
                                                    <option>category 4</option>
                                                    <option>category 5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Product Name</label>
                                            <div class="col-md-12">
                                                <input type="text" class="form-control ps-0 form-control-line" placeholder="Product name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Barcode</label>
                                            <div class="col-md-12">
                                            <i class="fa fa-barcode fa-3x"></i>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Image</label>
                                            <div class="col-md-12">
                                                <input type="file" class="form-control ps-0 form-control-line" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Amount</label>
                                            <div class="col-md-12">
                                                <input type="text" class="form-control ps-0 form-control-line" placeholder="Amount">
                                            </div>
                                        </div>
                                        
                                        <a href="product.php" class="btn btn-danger d-none d-md-inline-block btn-md text-white">Cancel</a>
                                        <a href="#" class="btn btn-success d-none d-md-inline-block btn-md text-white">Save</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->

    <?php include 'includes/footer.php'?>
</body>

</html>