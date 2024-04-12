<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>User Dashboard</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center">Do you wish to logout?</h1>
        <form action="logout.php" method="post" class="row justify-content-center mt-4">
            <div class="col-md-auto">
                <button type="submit" class="btn btn-danger mr-3">Logout</button>
                <a href="welcome.php" class="btn btn-success">Cancel</a>
            </div>
        </form>
    </div>
</body>
</html>
