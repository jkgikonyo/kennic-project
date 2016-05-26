<?php
include_once( 'C:\wamp64\www\functions.php' );
$link = mysqli_connect("localhost", "root", "jkgikonyo40", "demo");
if($link === false) {

    die("ERROR: Could not connect. " . mysqli_connect_error());
}
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $myusername = mysqli_real_escape_string($link,$_POST['username']);
    $mypassword = mysqli_real_escape_string($link,$_POST['password']);

    $sql = "INSERT INTO login (_username, _password) VALUES ('$myusername', '$mypassword')";

}
?>
<html>

<head>
    <title>Login Page</title>
    <h1>D&K MEDIA LTD</h1>

    <style type = "text/css">
        body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
        }

        label {
            font-weight:bold;
            width:100px;
            font-size:14px;
        }

        .box {
            border:#666666 solid 1px;
        }
    </style>

</head>

            <form action = "main.php" method = "post">
                <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                <input type = "submit" value = " Submit "/><br />
            </form>
<p>To Create Account click<a href="demo.php">Sign Up</a>.</p>
</body>
</html>