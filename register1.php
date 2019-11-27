<?php

include('./conn.php');

session_start();
$username = $_POST['username'];
$_SESSION['username'] = $username;

	$username = $_POST['username'];
	$coursename = $_POST['cname'];
	$coursecode = $_POST['ccode'];
	$level = $_POST['level'];
	$program = $_POST['prog'];
	$coursestatus = $_POST['cstat'];

$sql = "INSERT INTO register (username, coursename, coursecode, level, program, coursestatus) VALUES 
	('$username', '$coursename', '$coursecode', '$level', '$program', '$coursestatus')";
		$conn->query($sql);
		echo $conn->error;

 //    if ($conn->query($sql) === TRUE) {
	//     $_SESSION['username'] = $username;
	//     header("Location:login.html");
	//     echo "New record created successfully";
	// }

mysqli_close($conn);
?>