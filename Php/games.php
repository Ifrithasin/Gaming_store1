<!DOCTYPE html>
<html>
<head>
	<title>Game Store - Products</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="styles.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="style.css">
	<style>
		/* Custom CSS styles */
		h1 {
			margin-top: 50px;
			margin-bottom: 30px;
		}

		.card {
			margin-bottom: 30px;
			box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
		}

		.card-img-top {
			height: 250px;
			object-fit: cover;
		}

		.card-title {
			font-size: 24px;
			margin-bottom: 15px;
		}

		.card-text {
			font-size: 16px;
			line-height: 1.5;
		}

		.btn {
			margin-top: 15px;
		}
	</style>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav class="navbar navbar-expand-md" style="background-color: #15110c;">
        <div class="container my-container">
            <a class="navbar-brand" href="#"><img height="55px" width="55px" src="G2A.com-Logo.jpg" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <form class="form-inline my-2 my-lg-0 mr-auto" action="search_product.php" method="get" >
                    <input class="form-control mr-sm-2" name="filter_value" type="text" placeholder="Search">
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit" name="search_btn" value="Search">Search</button>
                </form>
               
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Games</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Cart</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="seller_dashboard.php">Seller Dashboard</a>
                        </div>
                      </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
		<h1>Products</h1>
		<div class="row">
		<?php
                require_once 'config.php';

                if (isset($_GET['search_btn'])) {
                    $value_filter = $_GET['filter_value'];
                    $query = "SELECT * FROM product_info WHERE product_name LIKE '%$value_filter%'";
                    $query_run = mysqli_query($conn, $query);

                    if (mysqli_num_rows($query_run) > 0) {
                        while ($row_pro = mysqli_fetch_array($query_run)) {
                            $pr_name = $row_pro['product_name'];
                            $pr_price = $row_pro['product_price'];
                            $pr_image = $row_pro['product_image'];
                            $pr_des = $row_pro['product_description'];

                            echo "
                                <div class='col-md-4'>
                                    <div class='card'>
                                        <img class='card-img-top'  src='$pr_image' alt='Card image cap'>
                                        <div class='card-body'>
                                            <h5 class='card-title'>$pr_name</h5>
                                            <p class='card-text'>$pr_des</p>
                                            <a href='#' class='btn btn-primary'>Add to Cart</a>
                                            <a href='#' class='btn btn-success'>Order Now</a>
                                        </div>
                                    </div>
                                </div>";
                        }
                    } else {
                        echo "<p>No results found.</p>";
                    }
                }
            ?>
			<div class="col-md-4">
				<a href="productdetails.html">
					<div class="card">
						<img class="card-img-top" src="Resident_Evil_4_remake_cover_art.jpg" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Resident Evil Village</h5>
							<p class="card-text"></p>
							<a href="#" class="btn btn-primary">Add to Cart</a>
							<a href="#" class="btn btn-success">Order Now</a>
						</div>
					</div>
				</a>
			</div>
            <div class="col-md-4">
				<div class="card">
					<img class="card-img-top" src="red_dead.jpeg" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Read Dead Redemption</h5>
						<p class="card-text"></p>
						<a href="#" class="btn btn-primary">Add to Cart</a>
						<a href="#" class="btn btn-success">Order Now</a>
					</div>
				</div>
			</div>
            <div class="col-md-4">
				<div class="card">
					<img class="card-img-top" src="god_1.jpeg" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">God Of War</h5>
						<p class="card-text"></p>
						<a href="#" class="btn btn-primary">Add to Cart</a>
						<a href="#" class="btn btn-success">Order Now</a>
					</div>
				</div>
			</div>
		</div>
	</div>
    <footer class="bg-dark text-light">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>About Game Store</h5>
                    <p class="text-muted">Game Store is your one-stop shop for all your gaming needs. We offer the latest games, consoles, and accessories at competitive prices.</p>
                </div>
                <div class="col-md-4">
                    <h5>Contact Us</h5>
                    <address class="text-muted">
                        1234 Main Street<br>
                        City, State ZIP<br>
                        Phone: (123) 456-7890<br>
                        Email: info@games.com
                    </address>
                </div>
                <div class="col-md-4">
                    <h5>Follow Us</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-muted">Facebook</a></li>
                        <li><a href="#" class="text-muted">Twitter</a></li>
                        <li><a href="#" class="text-muted">Instagram</a></li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="text-muted">&copy; 2023 Game Store. All rights reserved.</p>
        </div>
    </footer>
    
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>



