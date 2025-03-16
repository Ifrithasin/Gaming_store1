<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Dashboard.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" integrity="sha512-BnbUDfEUfV0Slx6TunuB042k9tuKe3xrD6q4mg5Ed72LTgzDIcLPxg6yI2gcMFRyomt+yJJxE+zJwNmxki6/RA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="header">
    </div>
    <div class="row2">
        
        <div class="search-box">
            

        </div>
      <div class="logo">
          <P><span>O</span>nline Gaming Store</P>
        </div>
            <div class="buttonrow">
                <form method="post" action="logout.php">
       <button type="submit" class="btnlogout" name="logout">Logout</button>
</form>

  <!-- Your form fields here -->

  <button style= "right:10px" class="btnhome" onclick="redirect()">Home</button>

    </div>
    </div>


<div class="left">
    <div class="left_flex_container">
        <div><a href="customer_dashboard_My_account.php">My account</a></div>
       <div><a href="Track_order.php">Track orders</a></div>
      <div><a href="Order_history.php">Order history</a></div>
    </div>

</div>

<div class="right">
<div class="right_main">
<h2>User Information</h2>
<br>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";
$conn = new mysqli($servername, $username, $password, $dbname);
/*
$email = $_SESSION["email"];
$sql = "SELECT address FROM info WHERE email = '$email'";
$result = $conn->query($sql);

// Step 5: Check if there is one row returned
if ($result->num_rows == 1) {
    // Step 6: Get the value of the column and display it
    $row = $result->fetch_array();
    if (isset($_GET['address'])) {
        $row['address'] = $_GET['address'];
    }
    }  ?>*/

    $email = $_SESSION["email"];
$sql = "SELECT firstname,lastname,phone,address FROM info WHERE email = '$email'";
$result = $conn->query($sql);

// Step 5: Check if there is one row returned
if ($result->num_rows == 1) {
    // Step 6: Get the value of the column and display it
    $row = $result->fetch_array();
    if ( isset($_GET['address']) ) {
        $newAddress = $_GET['address'];
        $updateSql = "UPDATE info SET address = '$newAddress' WHERE email = '$email'";
        if ($conn->query($updateSql) === TRUE) {
            // Update successful, update the value in $row as well
            $row['address'] = $newAddress;
        }}
          }
  ?>
  <script>
 function redirect()
{
  // Redirect to another page
  window.location.href= "http://localhost/Add/Php/index.php";
}

</script>
<p>Name:<?php echo $row['firstname'] . ' ' . $row['lastname']; ?></p>

<P>Phone:<?php echo $_SESSION['phone'];?></P>
<p>Gmail:<?php echo $_SESSION['email'] ;?></p>
<p>Addreess:<?php  echo $row['address'];?></p>
 


<button id="edit" style="height:40px;width:90px; margin-top:105px;margin-left:25px;"onclick="location.href='Edit.php';">Edit</button>
</div>


</div>
<div class="footer" style="background-color:brown">
  
<div class="about" style="background-color:brown">
    <div class="about_us" style="background-color:brown">
    <p>About us:</p>
</div>
    <div class="mail" style="background-color:brown">
<p style="background-color:brown">Gmail:<a href="www.Gmail.com">Online_gaming_store@gmail.com</a></p>
</div>
<p>Phone:01xxxxx</p>
<p>Facebook:Online gaming store</p>
</div>
</div>

</body>
</html>