<!-- Secure PHP Login Page -->
<?php
session_start();
if (isset($_SESSION['username'])) {
    header("location:index.php");
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username == "admin" && $password == "password") {
        $_SESSION['username'] = $username;
        header("location:index.php");
    } else {
        echo "Incorrect username or password";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Admin Login</title>
    <link rel="stylesheet" href="../style/admin.css">
</head>

<body>
    <form method="post">
        <label>Username:</label>
        <input type="text" name="username" id="username" />
        <label>Password:</label>
        <input type="password" name="password" id="password" />
        <input type="submit" name="submit" value="Login" />
    </form>
</body>

</html>