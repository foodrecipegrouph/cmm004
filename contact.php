<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Form</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
  }

  nav {
    background-color: #ebda1e;
    color: #ed1111;
    padding: 10px 20px;
  }

  nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
  }

  nav ul li {
    display: inline;
    margin-right: 20px;
  }

  nav ul li a {
    text-decoration: none;
    color: #fff;
  }

  nav ul li.active a {
    font-weight: bold;
  }

  .container {
    background-color: #ffffffb5;
    padding: 40px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    width: 400px;
    margin: 20px auto;
  }

  .container h2 {
    margin-bottom: 20px;
    color: #333;
  }

  .input-group {
    margin-bottom: 20px;
    position: relative;
  }

  .input-group input, .input-group textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    transition: border-color 0.3s;
  }

  .input-group input:focus, .input-group textarea:focus {
    border-color: #007bff;
    outline: none;
  }

  .input-group label {
    position: absolute;
    top: 10px;
    left: 10px;
    color: #999;
    font-size: 16px;
    transition: all 0.3s ease-in-out;
    pointer-events: none;
  }

  .input-group input:focus + label, .input-group textarea:focus + label, .input-group input:not(:placeholder-shown) + label, .input-group textarea:not(:placeholder-shown) + label {
    top: -15px;
    left: 5px;
    font-size: 12px;
    color: #007bff;
  }

  button {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 12px 20px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
  }

  button:hover {
    background-color: #0056b3;
  }

  footer {
    background-color: #f0d136;
    color: #e40b0b;
    padding: 20px;
    text-align: center;
    position: fixed;
    bottom: 0;
    width: 100%;
  }
</style>
</head>
<body>

<nav style="text-align: center;">
  <ul>
    <li>
      <a href="index.php">Home</a>
    </li>
    <li>
      <a href="about.html">About</a>
    </li>
    <li>
      <a href="featuredrecipe.html">Featured Recipe</a>
    </li>
    <li>
      <a href="blog.html">Blog</a>
    </li>
    <li class="active">
      <a href="contact.php">Contact Us</a>
    </li>
  </ul>
</nav>

<div class="container">
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <h2>Contact Us</h2>
    <div class="input-group">
      <input type="text" name="name" placeholder="Full Name" required>
     
    </div>
    <div class="input-group">
      <input type="email" name="email" placeholder="Email" required>
      
    </div>
    <div class="input-group">
      <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
      <input type="submit" value="Submit">
    </div>
   
  </form>
  
  <?PHP

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $message = $_POST['message'];
      
     
      $to = 'foodrecipegrough@outlook.com';
   
      $subject = 'New Message from Contact Form';
      
    
      $email_message = "Name: $name\n";
      $email_message .= "Email: $email\n\n";
      $email_message .= "Message:\n$message";
      
    
      $headers = "From: $name <$email>\r\nReply-To: $email\r\n";
      
      
      mail($to, $subject, $email_message, $headers);
      
      
      echo "<p style='color: green; font-weight: bold;'>Message sent successfully!</p>";
  }
  ?>
</div>

<footer>
  <p>© 2024 De- Chef<a href=""> Your Kitchen Companion</a></p>
</footer>

</body>
</html>
