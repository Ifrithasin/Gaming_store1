
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>

<title></title>
<link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"/>
<link rel="stylesheet" href="style1.css" />

</head>
<body>
<div class="container_edit">


<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  
<div style="   background-color: azure;
    width:400px;
    padding-top:15px;
    padding-left:20px;
    margin-left:700px;
    height:400px;">
<h2>Registration  form</h2>

<div class="form-control">
<label for="address">Address:</label>
<input type="text" name="address" id="address" placeholder="Enter your address" autocomplete="off">
</div>
<button style="height:30px;width:70px;margin-left:270px;background-color:azure;margin-top:10px;"type="submit" id="save" name="save">Save</button>

</form>

</div>
</div>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";


if(isset($_POST['save'])) {

  $address=$_POST['address'];
  
  header("location: customer_dashboard_My_account.php?&address=$address");
 
  exit;
}
$conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $email=$_SESSION['email'];

  // Prepare statement
  //$stmt = $conn->prepare("INSERT INTO info (address) VALUES (?)");
 // $stmt->bind_param("s", $address);
 $stmt = $conn->prepare("UPDATE info SET address=? where email='$email' " );
$stmt->bind_param("s",$address);
  if ($stmt->execute()) {
    echo "New record created successfully";
  
  exit();
  } else {
    echo "Error: " . $stmt->error;
  }


?>


</body>
</html>