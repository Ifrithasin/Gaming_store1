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
                <form class="form-inline my-2 my-lg-0 mr-auto" action="search_product.php" method="get"  >
                    <input class="form-control me-2" name="filter_value" type="search" aria-label="Search"placeholder="Search">
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
                        <a class="nav-link" href="http://localhost/Registration/Login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/Registration/index.php">Register</a>
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
                          <a class="dropdown-item" href="http://localhost/Registration/customer_dashboard_My_account.php">Customer Dashboard</a>
                        </div>
                      </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container my-5">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="Add/img/Advanced_Warfare.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 " src="Add/img/Battlefield_2042_cover_art.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 " src="Add/img/TLOU_1.jpeg" alt="Third slide">
            </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
            
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-3">
                <div class="card mb-3">
                    <img class="card-img-top" src="Add/img/Red_Dead_Redemption_II.jpg" alt="Game 1">
                    <div class="card-body">
                        <h5 class="card-title">Read Dead Redemption 2</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae mauris massa.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Order</button>
                            </div>
                            <small class="text-muted">$24.99</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mb-4">
                    <img class="card-img-top" src="img/god_2.jpeg" alt="Game 1">
                    <div class="card-body">
                        <h5 class="card-title">God Of War Ragnarok</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae mauris massa.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Order</button>
                            </div>
                            <small class="text-muted">$24.99</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mb-4">
                    <img class="card-img-top" height="200px" width="350px" src="img/god_1.jpeg" alt="Game 1">
                    <div class="card-body">
                        <h5 class="card-title">God Of War</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae mauris massa.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Order</button>
                            </div>
                            <small class="text-muted">$69.99</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mb-4">
                    <img class="card-img-top" src="img/TLOU_1.jpeg" alt="Game 1">
                    <div class="card-body">
                        <h5 class="card-title">The Last Of Us</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae mauris massa.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Order</button>
                            </div>
                            <small class="text-muted">$30.99</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img class="card-img-top" height="200px" width="350px" src="img/TLOU_2.jpeg" alt="Game 1">
                    <div class="card-body">
                        <h5 class="card-title">The Last Of Us 2</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae mauris massa.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Order</button>
                            </div>
                            <small class="text-muted">$20.99</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img class="card-img-top" src="img/Death_Stranding.jpg" alt="Game 1">
                    <div class="card-body">
                        <h5 class="card-title">Death Stranding</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae mauris massa.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Order</button>
                            </div>
                            <small class="text-muted">$4.99</small>
                        </div>
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
                        Dhaka, Bangladesh<br>
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
            <p class="text-muted">&copy; 2023 G3A. All rights reserved.</p>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

    
