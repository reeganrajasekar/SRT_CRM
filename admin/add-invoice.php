<!DOCTYPE html>
<html dir="ltr" lang="en">
<?php include 'includes/db.php'?>

<?php include 'includes/header.php'?>
<body>
<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>

<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
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

        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content" style="border-radius:10px !important">
                    <div class="modal-header">
                        <h4 class="modal-title">Add User</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <form onsubmit="return false">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="username" required placeholder="Enter Name" name="name">
                                <label for="code">User Name</label>
                            </div>

                            <div class="form-floating mt-3 mb-3">
                                <input type="text" class="form-control" id="usermob" required placeholder="Enter Mobile No" name="mob">
                                <label for="name">Mobile/Phone No</label>
                            </div>

                            <div class="form-floating mt-3 mb-3"> 
                                <input type="text" class="form-control" id="useraddress" required placeholder="Enter address" name="address">
                                <label for="prize">Address</label>
                            </div>

                            <button onclick="adduser()" class="btn btn-primary w-100" style="background-color:#1e88e5;font-weight:700;height:50px">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

            
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><i class="mdi me-2 mdi-file-multiple"></i>Client Information</h4>
                        <div class="form-horizontal form-material mx-2">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-8">
                                        <div class="form-group">
                                            <label >Client Mobile No</label>
                                            <input type="text" id="mob" class="form-control ps-0 form-control-line" placeholder="Mobile no">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <button id="search_btn" class="btn btn-primary mt-4 w-100" onclick="getuser()" style="background-color:#1e88e5">Search</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label >Client Name</label>
                                        <input type="text" id="name" class="form-control ps-0 form-control-line" placeholder="Client Name">
                                    </div>
                            </div>
                            <div class="col-md-12">
                                    <div class="form-group">
                                        <label >Client Address</label>
                                        <input type="text" id="address" class="form-control ps-0 form-control-line" placeholder="Client Address">
                                    </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>



<script>
function getuser(){
  var id= $('#mob').val();
  $('#usermob').val(id);
  if(id != '')
  {
    $("#search_btn").prop('disabled', true)
   $.ajax({
    url:"/admin/api/getuser.php?mob="+id,
    method:"GET",
    dataType:"JSON",
    success:function(data)
    {
     if(data=="0"){
        $('#myModal').modal('show');
        $("#search_btn").prop('disabled', false)
     }else{
        $("#name").val(data.name)
        $("#address").val(data.address)
        $("#mob").prop('disabled', true)
        $("#name").prop('disabled', true)
        $("#address").prop('disabled', true)
     }
    }
   })
  }
};

function adduser(){
  var name= $('#username').val();
  var address= $('#useraddress').val();
  var mob= $('#usermob').val();
  if(true)
  {
   $.ajax({
    url:"/admin/api/adduser.php?mob="+mob+"&name="+name+"&address="+address,
    method:"GET",
    dataType:"JSON",
    success:function(data)
    {
     if(data=="0"){
        $('#myModal').modal('hide');
        $('#mob').val(mob);
        getuser();
     }else{
        alert("Something went Wrong")
     }
    }
   })
  }
};
</script>






<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"><i class="mdi me-2 mdi-file-multiple"></i> Invoice Information</h4>
                    <div class="col-lg-12">
                    <form class="form-horizontal form-material mx-2">
                            <div class="table-responsive">
                    <table class="table user-table">
                        <thead style="background-color:rgb(30,136,229);color:#fff">
                            <tr>
                                <th class="border-top-0" style="color:#fff">S.No</th>
                                <th class="border-top-0" style="color:#fff">Product</th>
                                <th class="border-top-0" style="color:#fff">Quantity</th>
                                <th class="border-top-0" style="color:#fff">Unit Price</th>
                                <th class="border-top-0" style="color:#fff">Amount</th>
                                <th class="border-top-0" style="color:#fff">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr id="i0"></tr>
                            <script>
                                sno=1;
                                var i=0;
                                function addlist(i){
                                    document.getElementById("i"+i).innerHTML =`
                                    <td>
                                        ${sno} .
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <select onchange="getproduct(${i})" id="itemid${i}" name="itemid${i}" class="form-select shadow-none ps-0 border-0 form-control-line">
                                                <option>Choose Product</option>
                                                <?php
                                                $sql = "SELECT id ,name FROM product";
                                                $result = $conn->query($sql);
            
                                                if ($result->num_rows > 0) {
                                                    while($row = $result->fetch_assoc()) {
                                                ?>
                                                    <option value="<?php echo($row["id"])?>"><?php echo($row["name"])?></option>
                                                <?php
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input onchange="amount(${i})" type="text" id="totalitem${i}" name="totalitem${i}" class="form-control ps-0 form-control-line" placeholder="add quantity">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" id="rate${i}" disabled name="rate${i}" class="form-control ps-0 form-control-line" placeholder="add price">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" id="amount${i}" disabled name="amount${i}" class="form-control ps-0 form-control-line" placeholder="Amount">
                                        </div>
                                    </td>
                                    <td style="color:red;padding:10px;font-weight:800;text-align:center" onclick="delete_node(${i})">
                                        X
                                    </td>
                                    `
                                    function insertAfter(referenceNode, newNode) {
                                        referenceNode.parentNode.insertBefore(newNode, referenceNode.nextSibling);
                                    }

                                    var el = document.createElement("tr");
                                    el.id = 'i'+(i+1);
                                    var div = document.getElementById('i'+i);
                                    insertAfter(div, el);
                                    window.scrollTo({ left: 0, top: document.body.scrollHeight, behavior: "smooth" });
                                }

                                addlist(i)

                                function delete_node(item){
                                    document.getElementById("i"+item).remove();
                                    var get=0;
                                    for(j=0;j<=i;j++){
                                        if($('#amount'+j).val()){
                                            get=parseInt(get)+parseInt($('#amount'+j).val());
                                        }
                                    }
                                    $('#totalamount').val(get);
                                }

                                function getproduct(item){
                                    var product_code= $('#itemid'+item).val();
                                    if(true)
                                    {
                                        $.ajax({
                                        url:"/admin/api/getproduct.php?id="+product_code,
                                        method:"GET",
                                        dataType:"JSON",
                                        success:function(data)
                                        {
                                            if(data=="0"){
                                                alert("Something went Wrong")
                                            }else{
                                                $('#rate'+item).val(data.rate);
                                            }
                                        }
                                        })
                                    }
                                };

                                function amount(item){
                                    var rate= $('#rate'+item).val();
                                    var quan= $('#totalitem'+item).val();
                                    $('#amount'+item).val(rate*quan);
                                    var get=0;
                                    for(j=0;j<=i;j++){
                                        if($('#amount'+j).val()){
                                            get=parseInt(get)+parseInt($('#amount'+j).val());
                                        }
                                    }
                                    $('#totalamount').val(get);
                                };
                                </script>

                               
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Subtotal</td>
                                <td><div class="form-group">
                                    <input type="text" id="totalamount" class="form-control ps-0 form-control-line" disabled>
                                </div></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                    <div class="row">
                            <div class="col-md-12">
                            <span onclick="sno++;i++;addlist(i)" class="btn btn-success d-md-inline-block btn-md text-white" style="margin-left:80%"><i class="fa fa-plus"></i> add more</span>
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

            </div>
        </div>
    </div>

    <?php include 'includes/footer.php'?>
</body>

</html>