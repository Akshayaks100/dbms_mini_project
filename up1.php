<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecourts";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);


if(isset($_POST['update']))
{	
  
	$caseid = mysqli_real_escape_string($conn,$_POST['caseid']);
	
	$amt = mysqli_real_escape_string($conn,$_POST['amount']);

	
		 $sql="UPDATE payment SET Amount='$amt' WHERE CASE_ID='$caseid'";
			mysqli_query($conn, $sql);

			
}

?>

<html>
<head>	
	<title>Edit Data</title>
		  <style>
  body{
  background-image: url("lawyer.jpeg");

 }
 label{color:yellow;}
 h3{color:blue;}
 h2{color:dodgerblue;}
</style>
</head>

<body>
	<a href="http://localhost/mpay.php">






	<h2>See Updated payments</a></h2>
	<br/><br/>
	
	<form  method="post" action=" " >
		
				<h3>CASE_ID<h3>
				<input type="text" name="caseid" placeholder="Entercase id"><br>
			
			<h3>AMOUNT<h3>
				<input type="number" name="amount" placeholder="Enter Amount" ><br><br>
			<input type="submit" name="update" value="Update" ></td>
			
	</form>
</body>
</html>