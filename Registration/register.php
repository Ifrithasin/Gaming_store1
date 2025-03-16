<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

if(isset($_POST['submit'])) {
  $firstname = $_POST['fname'];
  $lastname = $_POST['lname'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $passwords = $_POST['password'];
  $cpassword = $_POST['cpassword'];
  $pass=password_hash($passwords,PASSWORD_BCRYPT);
  $cpass=password_hash($cpassword,PASSWORD_BCRYPT);
  $passwords_utf8 = mb_convert_encoding($passwords, "UTF-8");
  $pass = password_hash($passwords_utf8, PASSWORD_BCRYPT);


  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Prepare statement
  $stmt = $conn->prepare("INSERT INTO info (firstname, lastname, phone, email, password, cpassword) VALUES (?, ?, ?, ?, ?, ?)");
  $stmt->bind_param("ssssss", $firstname, $lastname, $phone, $email, $pass, $cpass);

  if ($stmt->execute()) {
    //echo "New record created successfully";
    header("location:Login.php");
    
  } else {
    echo "Error: " . $stmt->error;
  }



  $stmt->close();
  $conn->close();
}
?>