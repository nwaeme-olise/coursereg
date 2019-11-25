<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname  = "coursereg";

$conn = mysqli_connect($server, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$surname = $_POST["surname"]; 
$fname = $_POST["fname"];
$onames = $_POST["onames"]; 
$matric = $_POST["matric"];
$level = $_POST["level"];
$programme = $_POST["programme"];
$gender = $_POST["gender"];

$query = "INSERT INTO student (matric_no, surname, first_name, other_name, gender, level, programme)VALUES('$matric', '$surname', '$fname', '$onames', '$gender', '$level', '$programme')";
$result = mysqli_query($conn, $query);
if($result){
echo "Successful";
echo "<BR>";
}
else {
echo "ERROR";
}
mysqli_close($conn);
?>