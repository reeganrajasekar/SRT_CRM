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
                        <h3 class="page-title mb-0 p-0"><i class="mdi me-2 mdi me-2 mdi-cards-variant"></i> Products</h3>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"><i class="mdi me-2 mdi me-2 mdi-cards-variant"></i> Product Lists</h4>
                                <div class="table-responsive">
                                    <table class="table user-table">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">Code</th>
                                                <th class="border-top-0">Product Name</th>
                                                <th class="border-top-0">Amount</th>
                                                <th class="border-top-0">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>100</td>
                                                <td>Poco F3</td>
                                                <td>Php 16,000.00</td>
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