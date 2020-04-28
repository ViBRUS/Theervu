<?php




 $email=filter_input(INPUT_POST, "email");
 $password=filter_input(INPUT_POST, "password");





$mysqli =new mysqli("103.228.112.39","theervu_login","qwertyuiop1234567890","theervu_login");

{
$result=mysqli_query($mysqli,"select * from login where email='".$email."'
	and password='".$password."'");

if($data = mysqli_fetch_array($result)){
	header('Location: afterlogin.html');
}
}



//$db_name = 'NavlakhumbreDB';
//$db_user = 'NavlakhumbreUser';
//$db_pass ='qwertyuiop123456789@';
//$db_host = '148.66.147.2';





	
?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Login</title>
  <link rel="stylesheet" href="auth.css">
</head>
<body>
 <div class="rlform">
  <div class="rlform rlform-wrapper">
   <div class="rlform-box">
    <div class="rlform-box-inner">
   <form method="post">
    <p>Sign in to continue</p>

    <div class="rlform-group">
     <label>Email</label>
     <input type="email" name="email" class="rlform-input" required>
    </div>

    <div class="rlform-group password-group">
     <label>Password</label>
     <input type="password" name="password" class="rlform-input" required>
    </div>

    <button type="submit" class="rlform-btn" name="signIn">Sign In
    </button>

    <div class="text-foot">
 <!--   Don't have an account? <a href="register.php">Register</a>-->
    </div>
   </form>
  </div>
   </div>
     </div>
 </div>
 </body>
</html>