<?php
$server = "localhost";
$username = "root"
$password = "";
$dbname  = "coursereg"

$conn = mysqli_connect($server, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$username = $_POST["user"];
$password = $_POST["pword"];

$query = "SELECT username, password FROM credentials WHERE username = $username AND password = $password";
$result = mysqli_query($conn, $query);

if mysqli_num_rows(result>0){
	if 
}
?>
