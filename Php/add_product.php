
<?php 
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn)
    die("Connection Error");

    if(isset($_POST['insert_product'])){
        $pr_name=$_POST['productName'];
        $pr_price=$_POST['productPrice'];
        $pr_image=$_FILES['productImage']['name'];
        $temp_image=$_FILES['productImage']['tmp_name'];
        $pr_des=$_POST['productDescription'];

        //Checking Empty Condition
        if($pr_name=='' or $pr_image=='' or $pr_price=='' or $pr_des=='' or $temp_image==''){
            echo "<script>alert('Full up the necessary fields')</script>";
            exit();
        } else {
            move_uploaded_file($temp_image, "./upload/$pr_image");

            //Inseritng Query
            $insert_product="INSERT INTO `product_info` (product_name, product_description,product_image,product_price) values('$pr_name','$pr_des','$pr_image','$pr_price')"; //change the product_info to product
            $result=mysqli_query($conn,$insert_product);
            if($result){
                echo"<script>Success</script>";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Seller Dashboard</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="/css/style.css">
</head>
<body>
	<!-- Navigation bar -->
	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
		<div class="container">
			<a class="navbar-brand" href="#">Admin Dashboard</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    			<span class="navbar-toggler-icon"></span>
  			</button>
  			<div class="collapse navbar-collapse" id="collapsibleNavbar">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="/Project/index.html">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Profile</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Logout</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- Main content -->
	<div class="container my-5">
		<div class="row">
			<div class="col-md-3">
       			<a href="#" class="list-group-item list-group-item-action active">Dashboard</a>
        		<a href="" class="list-group-item list-group-item-action" id="add-product">Add Products</a>
        		<a href="#" class="list-group-item list-group-item-action">Orders</a>
			</div>
			
			<div class="col-md-9">
				<!-- Main content area -->
				<h2>Welcome to your dashboard</h2>
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="card">
								<div class="card-body">
                                    <h2>Add Product</h2>
                                    <form id="addProductForm" action="" method="POST" enctype="multipart/form-data">
                                        <input type="text" name="productName" placeholder="Product Name" required><br>
                                        <input type="number" name="productPrice" placeholder="Product Price" required><br>
                                        <textarea name="productDescription" placeholder="Product Description"></textarea><br>
                                        <input type="file" name="productImage" id="productImage" accept="image/*" required><br>
                                        <button type="submit" name="insert_product">Add Product</button>
                                    </form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
</script>
</body>
</html>
