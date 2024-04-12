<?php
include 'db_connect.php';
session_start();

if(!isset($_SESSION['login_user'])){
    header("location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <style>
        body {
            background-color: yellow;
            color: blue;
        }
    </style>
</head>
<body>
    <h2>Welcome <?php echo $_SESSION['login_user']; ?></h2>
    <p>This is a restricted area. Only logged-in users can access this page.</p>
    <a href="logout.php">Logout</a>
</body>
</html>
