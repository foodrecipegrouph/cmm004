<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (fullname,username, password) VALUES ('$fullname','$username', '$password')";

    if (mysqli_query($conn, $sql)) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>

<head>
    <title>User Registration</title>
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
           top : 0;
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
		
		 background-color: white;
            color: tomato;
            .navbar {
            background-color: #f0e2aa;
            color: tomato ;
            padding: 10px;
            background-image: url('abt.jpg');
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
    }
    
</style>
    
</head>

<body>

   <div class="container">
    <h2>User Registration</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Full name: <input type="text" name="fullname" placeholder="Enter your full name"><br><br>
        Username: <input type="text" name="username" placeholder="Enter your email"><br><br>
        Password: <input type="password" name="password"placeholder="Enter a password"><br><br>
        <input type="submit" value="Register">
    </form>
	<p>Already Registered? <a href="login.php"><i class="fas fa-hand-point-right"></i> Click here login</a>.</p>
</div>
</body>

</html>