<?php
$uname = $_POST['uname'];
$pass = $_POST['pass'];
$error ="";
$sucess ="";

if(isset($_POST['submit'])){
    if($uname =="admin"){
        if($pass =="password"){
            $error ="";
            $success="welcome admin!!";
 }
 else{
      $error = "invalid password!!!";
      $sucess ="";
 }
    }
    else{
        $error = "Invalid Username!!!";
        $success = "";
    }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php login</title>
    
</head>
<body>
    <div class="container">
        <img src="images.jpg" alt="login">
        <p class="error"><?php echo $error;?></p><p class ="success"><?php echo $success;?></p>
        <form method="post">
            <div class="form-input">
                <i class="fa fa-user fa-2x cust" aria-hidden="true"></i>
                <input id="username" type="text" name="uname" placeholder="Enter your Username" required><br/>
                <i class="fa fa-user fa-2x cust" aria-hidden="true"></i>
                <input id="password" type="password" name="pass" placeholder="Enter your password" required><br/>
                <input type="submit" name="submit" value="LOGIN"><br/>
                <a href="#">Forget Password</a>
</div>
</form>
</div>
        
</body>
</html>