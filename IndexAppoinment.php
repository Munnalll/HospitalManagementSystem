<?php
include "connect1.php";
$sql = "SELECT * FROM appointment";
$result = $conn->query($sql);
//$result = mysqli_query($conn, $sql);
// while ($row = mysqli_fetch_assoc($result)) {
//     echo "ID: ". $row["id"] . "<br>";
//     echo "Name: ". $row["name"] . "<br>";
//     echo "Email: ". $row["email"] . "<br><br>";

// }
   
  
?>


<!DOCTYPE html>
<html>
<head>
    <title>View Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Appointments</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Problem</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody> 

        <?php

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
        ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['date']; ?></td>
            <td><?php echo $row['time']; ?></td>
            <td><?php echo $row['message']; ?></td>
            <td>
               
                    <a class="btn btn-info" href="Appointment.php">Back</a></td>
        </tr>                       

        <?php       }

            }

        ?>                

    </tbody>
</table>
</div> 
</body>
</html>