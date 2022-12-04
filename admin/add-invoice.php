<!DOCTYPE html>
<html dir="ltr" lang="en">

<?php include 'includes/header.php'?>
<link rel="stylesheet" href="../assets/plugins/summernote/summernote-bs4.css">
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
                        <h3 class="page-title mb-0 p-0"><i class="mdi me-2 mdi-file-multiple"></i> Add Invoice</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">Invoice</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"> Add Invoice</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"><i class="mdi me-2 mdi-file-multiple"></i> Invoice Information</h4>
                                    <div class="col-lg-12">
                                    <form class="form-horizontal form-material mx-2">
                                    <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label >Client</label>
                                                    <select class="form-select shadow-none ps-0 border-0 form-control-line">
                                                    <option>Choose client</option>
                                                    <option>client 1</option>
                                                    <option>client 2</option>
                                                    <option>client 3</option>
                                                </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label >Date</label>
                                                    <input type="date" class="form-control ps-0 form-control-line">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label >Invoice No.</label>
                                                    <input type="text" class="form-control ps-0 form-control-line" value="17" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label >Due Date</label>
                                                    <input type="date" class="form-control ps-0 form-control-line">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label >Recurring</label>
                                                    <select class="form-select shadow-none ps-0 border-0 form-control-line">
                                                    <option>yes</option>
                                                    <option>no</option>
                                                </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label >Status</label>
                                                    <select class="form-select shadow-none ps-0 border-0 form-control-line">
                                                    <option>Choose status</option>
                                                    <option>paid</option>
                                                    <option>partially paid</option>
                                                </select>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="table-responsive">
                                    <table class="table user-table">
                                        <thead style="background-color:rgb(30,136,229);color:#fff">
                                            <tr>
                                                <th class="border-top-0" style="color:#fff">Product</th>
                                                <th class="border-top-0" style="color:#fff">Quantity</th>
                                                <th class="border-top-0" style="color:#fff">Unit Price</th>
                                                <th class="border-top-0" style="color:#fff">Tax</th>
                                                <th class="border-top-0" style="color:#fff">Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Poco F3</td>
                                                <td>2</td>
                                                <td>Php 12,000.00</td>
                                                <td>10%</td>
                                                <td>Php 14,000.00</td>
                                            </tr>
                                            <tr>
                                                <td><div class="form-group">
                                                    <select class="form-select shadow-none ps-0 border-0 form-control-line">
                                                    <option>Choose Product</option>
                                                    <option>phone</option>
                                                    <option>pc</option>
                                                    <option>tablet</option>
                                                </select>
                                                </div>
                                            </td>
                                                <td><div class="form-group">
                                                    <input type="text" class="form-control ps-0 form-control-line" placeholder="add quantity">
                                                </div></td>
                                                <td><div class="form-group">
                                                    <input type="text" class="form-control ps-0 form-control-line" placeholder="add price">
                                                </div></td>
                                                <td><div class="form-group">
                                                    <select class="form-select shadow-none ps-0 border-0 form-control-line">
                                                    <option>N/A Tax</option>
                                                    <option>10%</option>
                                                    <option>12%</option>
                                                </select>
                                                </div></td>
                                                <td><div class="form-group">
                                                    <input type="text" class="form-control ps-0 form-control-line" placeholder="Amount">
                                                </div></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>Subtotal</td>
                                                <td><div class="form-group">
                                                    <input type="text" class="form-control ps-0 form-control-line" value="Php 14,000.00">
                                                </div></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                    <div class="row">
                                            <div class="col-md-12">
                                            <a href="#" class="btn btn-success d-none d-md-inline-block btn-md text-white" style="margin-left:90%"><i class="fa fa-plus"></i> add more</a>
                                                </div>
                                            </div>
                                        <a href="payment.php" class="btn btn-danger d-none d-md-inline-block btn-md text-white">Cancel</a>
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