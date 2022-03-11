<?php
session_start();
require_once 'connect.php';

if(isset($_POST) & !empty($_POST)){

$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);


$sql = "INSERT INTO users (email,password,uid) VALUES ('$email','$password','$uid')";

$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));



if($result){



?>
<script type="text/javascript">
alert('Your Account was Successfuly Created, Login Now ');
window.location.href='account.php?message=2';
</script>
<?php
}else{
?>
<script type="text/javascript">
alert('Error ');
window.location.href='account.php?message=2';
</script>
<?php

}
}

?>