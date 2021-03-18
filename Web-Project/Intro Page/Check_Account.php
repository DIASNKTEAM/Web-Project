<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Check Account</title>
	
</head>
<body>

<?php
  error_reporting(E_ALL ^ E_WARNING);
  $check=-1;
  require('connection.php');
  $password = $_POST["password"];
  $cpassword = $_POST["confirmPassword"];
  $name = $_POST["name"];
  $login = $_POST["login"];
  $date = $_POST['date'];
  $email = $_POST["email"];
  $submit = $_POST["submitup"];
  date_default_timezone_set('Asia/Almaty');
  if (isset($password) && isset($cpassword) && isset($submit)) {  
    if ($password != $cpassword ) {
    echo"<div style = 'background-color:red; width:500px; color:white; padding:15px;'><strong>Warning!</strong> Passwords are not matching!</div><br />";
    $check=0;
    
    }
    elseif (strlen($password) < 8 || strlen($cpassword) < 8){
       echo"<div style = 'background-color:red; width:500px; color:white; padding:15px;'><strong>Warning!</strong> Password is not strong!</div><br />"; 
       $check=0;

    }
    elseif(date('Y-m-d')-$date < 18)
    {
      echo"<div style = 'background-color:red; width:500px; color:white; padding:15px;'><strong>Warning!</strong>Your age is restricted!</div><br />";
      $check=0;

    }
    else{
      $check=1;
    }

  }

  if (isset($password) && isset($cpassword) && isset($name) && isset($email) && isset($date) && isset($login) && isset($submit) && $check==1) {
    $sql = "INSERT INTO accounts (name , date , email , login , password , type) VALUES ('".$name."' , '".$date."' , '".$email."' , '".$login."' , '".$password."' , 0)";
    mysqli_query($conn, $sql);
    echo"<div style = 'background-color:green; width:500px; color:white; padding:15px;'><strong>Success!</strong>You are registrated</div><br />";
    echo"<div style = 'background-color:green; width:500px; color:white; padding:15px;'><a style='padding-left:40%; color: white; text-decoration:none' href = 'http://localhost/Web-Project/Intro%20Page/Intro.html'>Go to Web-site</a></div><br />";
    }

  
?>

</body>
</html>