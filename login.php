<?php
include 'db_connect.php';
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $_SESSION['login_user'] = $username;
        header("location: inde.php");
    } else {
        $error = "Invalid username or password";
    }
}

mysqli_close($conn);
?>


<!DOCTYPE html>
<html>

<head>
    <title>User Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-oZYXeMQb3Wq6+wXbzbdlHQo/3I4wxrFLpFfZBfiokdCe6XvMOU4LsXQstWmuvyUzTLJ90P6Fb+8p7E/dl6G3zw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            background-image: url('abt.jpg');
            background-color: whitesmoke;
            color: tomato;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background-color: #f0e2aa;
            color: brown;
            padding: 10px;
            text-align: center;
            position: absolute;
            width: 100%;
            top: 0;
        }

        .container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border: 1px solid #ccc;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 5px;
        }

        footer {
            background-color: #f0e2aa;
            color: brown;
            text-align: center;
            padding: 10px 0;
            position: absolute;
            bottom: 0;
            width: 100%;
        }

        h4 {
            text-align: center;
            color: tomato;
        }
    </style>
</head>

<body>

    <div class="navbar">
        <h2>Welcome Back</h2>

    </div>


    <div class="container">
        <h2>User Login</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            Username: <input type="text" name="username"><br><br>
            Password: <input type="password" name="password"><br><br>
            <input type="submit" value="Login">
        </form>
        <p>Don't have an account? <a href="registration.php"><i class="fas fa-hand-point-right"></i> Click here to
                register</a>.</p>
        <?php if (isset ($error)) {
            echo $error;
        } ?>
    </div>

    <footer>
        <!-- Your footer content goes here -->
        Footer Content
    </footer>
</body>

</html>