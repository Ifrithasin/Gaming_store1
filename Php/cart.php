<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Cart</title>
</head>
<body>
    <?php include "header.php"?>
    <section class="header">
       
        <nav>
            <img src="img/G2A.com-Logo.jpg" alt="">
            <ul>
                <li> <a href="#">SignIn/SignUp</a>
                
                </li>
                
                <li class="active"><a href="#">Catergories</a>
                
                
                  <div class="submenu">
                    <ul>
                      <li><a href="trendingproducts.html">Trending Games</a></li>
                      <li><a href="bestsellers.html">BestSellers</a></li>
                    
                    </ul>
                  </div>
                
                
                
                </li>


                <li> <a href="#">Cart</a></li>
            </ul>
    
            
        </nav>
    
    
</section>



    <section class="cart">
        <div class="container">
            <table>
              <thead>
<th>Name</th>
<th>Price</th>
<th>Qouantity</th>

              </thead>
              <tbody>
<?php
$select_cart=mysqli_query($conn,"Select * from 'cart'");
if(mysqli_num_rows)

?>

              </tbody>
                </table>
            </div>


            <button class="btn btn-primary"> Proceed to checkout</button>

        </div>
       
     

    </section>

</body>
</html>