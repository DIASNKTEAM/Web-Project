<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Check Account</title>
	
</head>
<body>

  <?php
  $password = $_POST["password"];
  $cpassword = $_POST["confirmPassword"];
  $submit = $_POST["submitup"];
  if (isset($password) && isset($cpassword) && isset($submit)) {  
    if ($password != $cpassword ) {
  	echo"<div style = 'background-color:red; color:white; padding:15px;'><strong>Warning!</strong> Passwords are not matching!</div>";
    }
  }
?>
</body>
</html>