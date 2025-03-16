
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
    <link rel="stylesheet" href="Track_order.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" integrity="sha512-BnbUDfEUfV0Slx6TunuB042k9tuKe3xrD6q4mg5Ed72LTgzDIcLPxg6yI2gcMFRyomt+yJJxE+zJwNmxki6/RA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="header">
    </div>
    <div class="row2">
        <div class="Togglemenubar"></div>

        <div class="search-box">

        </div>
      <div class="logo">
          <P><span>O</span>nline Gaming Store</P>
        </div>
            <div class="login">
       <button type="button">Logout</button>
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
<div class="right_main" >
    <table class="table_container" style="margin-left:250px;" >
        <thead style="border:4px black "style="margin-left: 100px;" >
    <tr style="  background-color: gray;
    text-align: center;
   ">
    <th style="width:150px;">Sl no.</th>
    <th style="width:150px;">Date</th>
    <th style="width:150px;">Products</th>
    <th style="width:150px;">Total price</th>
    </tr>
</thead>
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";
$conn = new mysqli($servername, $username, $password, $dbname);

    $email = $_SESSION["email"];
$sql = "SELECT Sl_no,Date,products,total_price FROM order_history WHERE email = '$email'";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result)){
    ?>
  <tbody>

    <tr>
    <td style="text-align:center"><?php echo $row['Sl_no'] ;?></td>
    <td style="text-align:center"><?php echo $row['Date'] ;?></td>
    <td style="text-align:center"><?php echo $row['products'] ;?></td>
    <td style="text-align:center"><?php echo $row['total_price'] ;?></td>
    </tr>

    </tbody>
<?php } ?>
    </table>

</div>


</div>
<div class="footer" style="background-color:brown">
  
<div class="about" style="background-color:brown">
    <div class="about_us" style="background-color:brown">
    <p>About us:</p>
</div>
    <div class="mail" style="background-color:brown">
<p>Gmail:<a href="www.Gmail.com">Online_gaming_store@gmail.com</a></p>
</div>
<p>Phone:01xxxxx</p>
<p>Facebook page:Online gaming store</p>
</div>
</div>






</body>
</html>