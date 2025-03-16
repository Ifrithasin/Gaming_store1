<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="styles.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="style.css">

</head>
<body>
	<nav class="navbar navbar-expand-md" style="background-color: #15110c;">
        <div class="container">
            <a class="navbar-brand" href="#"><img height="55px" width="55px" src="G2A.com-Logo.jpg" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <form class="form-inline my-2 my-lg-0 mr-auto" action="search_product.php" method="get" >
                    <input class="form-control mr-sm-2" name="filter_value" type="search" placeholder="Search">
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
                        <a class="nav-link" href="Registration/Login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Registration/index.php">Register</a>
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