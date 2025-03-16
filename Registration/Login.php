<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>

<title></title>
<link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"/>
<link rel="stylesheet" href="Login.css" />

</head>
<body>
<div class="container">



<form id="forms"action="Login1.php" method="POST" >
    <div class="form">
    <h2>Login</h2>
    <div class="form-control">
<label for="email">Email:</label>
<input type="text" name="email" id="email" placeholder="Enter email" autocomplete="off">
</div>
<div class="form-control">
<label for="password">Password:</label>
<input type="password" name="password" id="password" placeholder="Enter password" autocomplete="off">

</div>

<button name="submit"  id="btn">Submit</button>
<p>Click here for log out <a href="Logout.php">Logout</a> </p>
</div>
</div>
</div>

</form>

<script>
    const form=document.getElementById('forms');
const email=document.getElementById('email');
const password=document.getElementById('password');

form.addEventListener('submit',function(e){
  //e.preventDefault();
 
  if(email.value==='')
  { 
   alert('email is required');
  }
  else if(password.value==='')
  {
    alert('password is required');
  }});

</script>


</body>
</html>