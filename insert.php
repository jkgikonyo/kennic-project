<?php
$link = mysqli_connect("localhost", "root", "jkgikonyo40", "demo");
if($link === false){

    die("ERROR: Could not connect. " . mysqli_connect_error());

}

$first_name = mysqli_real_escape_string($link, $_POST['firstname']);

$last_name = mysqli_real_escape_string($link, $_POST['lastname']);

$email_address = mysqli_real_escape_string($link, $_POST['email']);
$_password = mysqli_real_escape_string($link, $_POST['password']);
$confirm_password = mysqli_real_escape_string($link, $_POST['confirmpassword']);

$sql = "INSERT INTO persons (first_name, last_name, email_address, _password, confirm_password) VALUES ('$first_name', '$last_name', '$email_address', '$_password', '$confirm_password')";

if(mysqli_query($link, $sql)){

    echo "Records added successfully.";

} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}
mysqli_close($link);
?>
<html>
<p><a href="login.php">logout</a>.</p>
</html>
