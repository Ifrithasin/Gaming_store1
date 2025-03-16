<!DOCTYPE html>
<html>
<head>
	<title>G3A</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="/css/styles.css">
</head>
<body>
	<nav class="navbar navbar-expand-md" style="background-color: #15110c;">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img height="55px" width="55px" src="img/G2A.com-Logo.jpg" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <form class="form-inline my-2 my-lg-0 mr-auto" action="" method="get"  >
                    <input class="form-control me-2" name="filter_value" type="search"  aria-label="Search"placeholder="Search">
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit" name="search_btn" value="Search">Search</button>
                </form>
               
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="html/games.html">Games</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="html/about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Registration/Login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Registration/index.php">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="html/cart.html">Cart</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="php/seller_dashboard.php">Seller Dashboard</a>
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
            // Connect to the database
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "project";

            $conn = mysqli_connect($servername, $username, $password, $dbname);
            if(!$conn){
                die("Connection Error");
            }

            if (isset($_GET['search_btn'])) {
                $value_filter = $_GET['filter_value'];
                $query = "SELECT * FROM product_info WHERE product_name  LIKE '%$value_filter%'";
                $query_run = mysqli_query($conn, $query);

                if (mysqli_num_rows($query_run) > 0) {
                    while ($row_pro = mysqli_fetch_array($query_run)) {
                        $pr_name = $row_pro['product_name'];
                        $pr_price = $row_pro['product_price'];
                        $pr_image = $row_pro['product_image'];
                        $pr_des = $row_pro['product_description'];
 
                        echo '
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <img class="card-img-top" height="200px" width="350px" src="'.$pr_image.'" alt="'.$pr_name.'">
                                <div class="card-body">
                                    <h5 class="card-title">'.$pr_name.'</h5>
                                    <p class="card-text">'.$pr_des.'</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary">Order</button>
                                        </div>
                                        <small class="text-muted">$'.$pr_price.'</small>
                                    </div>
                                </div>
                            </div>
                        </div>';
                    }
                } else {
                    echo "<p>No results found.</p>";
                }
            }
        ?>
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
