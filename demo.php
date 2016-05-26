<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>Registration</title>
    <h1>D&K MEDIA</h1>

</head>

<body>

<form action="insert.php" method="post">

    <p>

        <label for="firstName">First Name:</label>

        <input type="text" name="firstname" id="firstName">

    </p>

    <p>

        <label for="lastName">Last Name:</label>

        <input type="text" name="lastname" id="lastName">

    </p>

    <p>

        <label for="emailAddress">Email Address:</label>

        <input type="text" name="email" id="emailAddress">

    </p>
    <P>
        password: <input type="password" name="password" id="password"/>
    </P>
    <p>
        confirm password: <input type="password" name="confirmpassword" id="confirmpassword"/>
    </p>

    <input type="submit" value="Submit">

</form>

</body>
<p>Return to the <a href="login.php">login page</a>.</p>
</html>

