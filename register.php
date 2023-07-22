<?php
include 'connect1.php';
if (isset($_POST['submit'])) {

	// collect value of input field
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$gender = $_POST['gender'];
	$number = $_POST['number'];
	$add = $_POST['add'];
	$mail = $_POST['mail'];
	$pass = $_POST['pass'];


	if (empty($data)) {
		echo "data is empty";
	} else {
		echo $data;
	}
}
$sql='insert into register(fname,lname,gender,cnum,address,email,pass)
value()
'
?>

// Closing the connection.
$conn->close();

?>
