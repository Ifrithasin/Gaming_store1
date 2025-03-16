

<?php
session_start();
setcookie('address', $_SESSION['address'], time() + (86400 * 30), "/");
?>
<?php
$conn = new mysqli("localhost","root","","registration");
//if ($conn) {
    //echo "Connected";
//}

if(isset($_POST['submit'])) {
    $email = $_POST['email'];
    $passwords = $_POST['password'];
    $passwords_utf8 = mb_convert_encoding($passwords, "UTF-8");
    $pass = password_hash($passwords_utf8, PASSWORD_BCRYPT);
    //$pass=password_hash($passwords,PASSWORD_BCRYPT);
    $email_search = "SELECT * FROM info WHERE email='$email'";
    $query = mysqli_query($conn, $email_search);
    $email_count = mysqli_num_rows($query);
  
    if ($email_count) {
        $email_pass = mysqli_fetch_assoc($query);
        $db_pass = $email_pass['password'];
        $_SESSION['firstname']=$email_pass['firstname'];
        $_SESSION['lastname']=$email_pass['lastname'];
         $_SESSION['phone']=$email_pass['phone'];
         $_SESSION['email']=$email_pass['email'];
         $_SESSION['address']=$email_pass['address'];
        if (password_verify($passwords_utf8, $db_pass)) {
            echo "Login successfully";
            header("location:customer_dashboard_My_account.php");

        } else {
            echo "invalid password";
           
    
         }
     } else {
         echo "Email not found";
     }}

?>