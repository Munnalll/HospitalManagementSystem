<?php
include "connect1.php";
if ($_SERVER['REQUEST_METHOD']=='POST') {

	// collect value of input field
	$name = $_POST['name'];
	$email = $_POST['email'];
	$date = $_POST['date'];
	$time = $_POST['time'];
	$problem = $_POST['message'];

    
    $sql="INSERT INTO `appointment` (`id`,`name`, `email`, `date`, `time`, `message`) VALUES (null,'$name', '$email', '$date', '$time', '$problem')";
    if(mysqli_query($conn,$sql)){
        echo"<script>alert('Appointment has been done')</script>";
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
    <title>Appointment Page</title>
    <link rel="stylesheet" href="Appointment.css">
    
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>
<body>
    <div class="container">
    <a class="btn btn-primary" href="IndexAppoinment.php">View Data</a>
        <h1>Book an Appointment</h1>
        <form action="Appointment.php" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="date">Preferred Date:</label>
                <input type="date" id="date" name="date" required>
            </div>
            <div class="form-group">
                <label for="time">Preferred Time:</label>
                <input type="time" id="time" name="time" required>
            </div>
            <div class="form-group">
                <label for="message">Problem:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <button type="submit">Submit</button>
            </div>
        </form>
        
    </div>
</body>
</html>
