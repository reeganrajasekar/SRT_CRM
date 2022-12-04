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
                        <h3 class="page-title mb-0 p-0"><i class="mdi me-2 mdi-file-multiple"></i> Invoice</h3>
                        <a href="add-invoice.php" class="btn btn-success d-none d-md-inline-block btn-sm text-white"><i class="mdi mdi-plus"></i> Add Invoice</a>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h6><i class="fa fa-money fa-3x text-info"> Php 36,000.00</i></h6>
                                <h6 class="card-subtitle">Total Amount</h6>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h6><i class="fa fa-money fa-3x text-success"> Php 20,000.00</i></h6>
                                <h6 class="card-subtitle">Total Paid</h6>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h6><i class="fa fa-money fa-3x text-warning"> Php 29,000.00</i></h6>
                                <h6 class="card-subtitle">Total Due</h6>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"><i class="mdi me-2 mdi-file-multiple"></i> Invoice List</h4>
                                <div class="table-responsive">
                                    <table class="table user-table">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">Invoice No.</th>
                                                <th class="border-top-0">Status</th>
                                                <th class="border-top-0">Client</th>
                                                <th class="border-top-0">Amount</th>
                                                <th class="border-top-0">Paid</th>
                                                <th class="border-top-0">Amount Due</th>
                                                <th class="border-top-0">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td><span class="badge bg-success">paid</span></td>
                                                <td>Jared Murphy</td>
                                                <td>Php 5,000.00</td>
                                                <td>Php 5,000.00</td>
                                                <td>Php 0.00</td>
                                                <td>
                                                <a href="#" class="btn btn-success d-none d-md-inline-block btn-sm text-white"><i class="mdi mdi-pencil"></i> edit</a>
                                                <a href="#" class="btn btn-danger d-none d-md-inline-block btn-sm text-white"><i class="mdi mdi-eraser"></i> delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td><span class="badge bg-warning">partially paid</span></td>
                                                <td>Leroy Francis</td>
                                                <td>Php 6,500.00</td>
                                                <td>Php 5,500.00</td>
                                                <td>Php 150.00</td>
                                                <td>
                                                <a href="#" class="btn btn-success d-none d-md-inline-block btn-sm text-white"><i class="mdi mdi-pencil"></i> edit</a>
                                                <a href="#" class="btn btn-danger d-none d-md-inline-block btn-sm text-white"><i class="mdi mdi-eraser"></i> delete</a>
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
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