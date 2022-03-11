<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<!-- $con = mysqli_connect("localhost","your_localhost_database_user","your_localhost_database_password","your_localhost_database_db");
$con = mysqli_connect('localhost', 'root', '',’db_connect’);
The “db_contact” is our database name that we created before.
After connection database you need to take post variable from the form. See the below code
$txtName = $_POST['txtName'];if\9
$txtPassword = $_POST['txtPassword']; -->

<?php

	define('DB_HOST', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASS', '');
	define('DB_NAME', 'form_base');

	 $con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	// $con = new mysqli('localhost', 'root', '','form_base');

	if($con){
		echo 'Success';
	}


	$firstName = $_POST['Firstname'];
	$lastName = $_POST['Lastname'];
	$password = $_POST['Password'];
    $state = $_POST['State'];
    $LCD = $_POST['LCD'];
    $DOB = $_POST['DOB'];
    $course = $_POST['Course'];
    $fee = $_POST['Fee'];


//database insert SQL code
$sql = "INSERT INTO `niitdb` (FirstName, LastName, Password, State, LCD, DOB, Course, Fee)
VALUES ('$firstName','$lastName', '$password', '$state', '$LCD', '$DOB', '$course', '$fee' )";

     $sql -> close();


if($rs) { 
		echo "Contact Records Inserted";

 }
// insert in database 
//  $rs = mysqli_query($con, $sql); 
// $result = $con -> query($sql);

//  if ($result = $con -> query($sql)) {
// 	echo "success" ;
// 	// Free result set
// 	$result -> free_result();
	
//   }

  
?>
			<script type="text/javascript">
			alert('Your Account was Successfuly Created, Login Now ');
			window.location.href='contacts.php?message=2';
			</script>

<?php

 ?>

// $con=mysql_connect("localhost", "root" ,"" ,"form_base");
// if( mysqli_connect_errno( $con ) ) {
//     echo "failed to connect";
// }else{
//     echo "connected";
// }
// mysqli_close($con);
// echo "Done";


	
</body>
</html>
