<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
// define variables and set to empty values
$email = $phone = $username = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = test_input($_POST["email"]);
  $phone = test_input($_POST["phone"]);
  $username = test_input($_POST["username"]);
  $password = test_input($_POST["password"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  
  E-mail: <input type="email" name="email" required>
  <br><br>
  Phone Number: <input type="text" name="phone" value="+62" minlength="8" maxlength="15">
  <br><br>
  Username: <input type="text" name="username" minlength="5" maxlength="9">
  <br><br>
  Password: <input type="text" name="password" minlength="8">
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $email;
echo "<br>";
echo $phone;
echo "<br>";
echo $username;
echo "<br>";
echo $password;
echo "<br>";
?>

</body>
</html>