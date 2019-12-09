<!DOCTYPE html>
<html>
<head>
	<title>Delete Student Page</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
</head>
<body>
 

<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "delete_student";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

   if ($conn-> connect_error) {
    die("Connection failed: " . $conn-> connect_error);
 } 

 	if ($_GET["matric_no"]){
 		$mno = $_GET["matric_no"];
 		$sql = "DELETE FROM student_remove WHERE matric_no = $mno";
 		 $conn-> query($sql);
 	}

   $sql = "SELECT serial_no, name, matric_no, level, program, gender from student_remove";

   $result = $conn-> query($sql);

   if ($result-> num_rows > 0){
	 echo "<table class='table table-striped table-dark'>";
		echo "<thead><tr> <th>Serial No</th> <th>Name</th> <th>Matric No</th> <th>Level</th> <th>Programme</th> <th>Gender</th> </tr></thead>";
	echo "<tbody>";
	while ($row = $result-> fetch_assoc()){

	    echo "<tr><td>". $row["serial_no"]. "</td><td>". $row["name"]. "</td><td>". $row["matric_no"]. "</td><td>". $row["level"]. "</td><td>". $row["program"]. "</td><td>". $row["gender"]. "</td><td><button onclick = deleteRecord(".$row["matric_no"].") >Delete</button></td><tr>";
	}
  	echo "</tbody>";
  	echo "</table>";
}
    else{
      echo "0 result";
}

    $conn-> close();

?>

   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

   <script>
   		function deleteRecord(matric_no) {
   			window.location.href = "./delete.php?matric_no=" + matric_no;
   		}
   </script>


</body>
</html>