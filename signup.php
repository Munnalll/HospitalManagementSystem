<?php
include "connect1.php";
if ($_SERVER['REQUEST_METHOD']=='POST') {

	// collect value of input field
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$gender = $_POST['gender'];
	$number = $_POST['number'];
	$add = $_POST['add'];
	$mail = $_POST['mail'];
	$pass = $_POST['pass'];


    $sql="INSERT INTO `form` (`id`, `fname`, `lname`, `gender`, `cnum`, `address`, `email`, `pass`) VALUES (Null, '$fname', '$lname', '$gender', '$number', '$add', '$mail', '$pass')";
    if(mysqli_query($conn,$sql)){
        echo"<script>alert('new record inserted')</script>";
    }
    else{
        echo"error:".mysqli_error($conn); 
    }
    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login and Register</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <div class="signup">
        <h1>Sign Up</h1>
        <h4>It's free and only takes a minute</h4>
        <form action="signup.php" method="POST">
            <label>First Name</label>
            <input type="text" name="fname" required>
            <label>Last Name</label>
            <input type="text" name="lname" required>
            <label>Gender</label>
            <input type="text" name="gender" required>
            <label>Contact</label>
            <input type="tel" name="number" required>
            <label>Address</label>
            <input type="text" name="add" required>
            <label>Email</label>
            <input type="email" name="mail" required>
            <label>Password</label>
            <input type="password" name="pass" required>
            <input type="submit" name="" required value="Submit">
        </form>
        <p>By clicking the Sign Up button, you agree to our<br>
        <a href="">Terms and Condition</a> and <a href="#">Policy Privacy</a></p>
        <p>Already have an account?<a href="login.php">Login here</a></p>
    </div>
    
</body>
</html>