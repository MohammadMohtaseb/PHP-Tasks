<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Email</title>
</head>
<body>
  <form action="form.php" method="post">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>
    <label for="password">password</label>
    <input type="password" id="password" name="password" required><br><br>
    <input type="submit" value="Submit">
  </form>
</body>
</html>

<?php 
if($_SERVER["REQUEST_METHOD"]=="POST"){
  $email = $_POST["email"];
  $password = $_POST["password"];
  echo"Form submitted using POST method.<br>";
  echo"Email: ". htmlspecialchars( $email ) ."<br>";
  echo "Password". htmlspecialchars( $password ) ."<br>";
} else {
  echo "Form not Submitted using POST method.";
}

?>