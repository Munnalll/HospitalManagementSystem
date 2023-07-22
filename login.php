<?php
include "connect1.php";
if ($_SERVER['REQUEST_METHOD']=='POST') {

	// collect value of input field
	$email = $_POST['email'];
	$pass = $_POST['pass'];

    $sql="SELECT* FROM `form` where email='$email' and pass='$pass'";
    $result = mysqli_query($conn, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  

    if($count == 1){  
        echo "<h1><center> Login successful </center></h1>";
        echo("<script>location.href='Appointment.php'</script>");  
    }  
    else{  
        echo "<h1> Login failed. Invalid username or password.</h1>";  
    }     
    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Form Login and Register</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <div class="login">
        <h1>Login</h1>
        <form action="login.php" method="POST">
            <label>Email</label>
            <input type="email" name="email" required>
            <label>Password</label>
            <input type="password" name="pass" required>
            <input type="submit" name="" required value="Submit">
        </form>
        <p>Not have an account?<a href="signup.php">Sign Up here</a></p>
    
</body>
</html>