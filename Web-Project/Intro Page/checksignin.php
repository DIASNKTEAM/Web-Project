<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>controller</title>
</head>
<body>
  
    <?php
    session_start();
    error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE);
require('connection.php');
?>
<?php
$user = $_POST['login'];
$pass = $_POST['password'];
if(isset($_POST['submitin']))
{
    if (empty ($user))
    {
        echo "you must enter your unique username <br />";
    }
    if (empty ($pass)) 
    {
        echo "you must enter your password <br />";
    }
    else{
     $result1 = mysqli_query($conn, "SELECT login, password FROM accounts WHERE login = '".$user."' AND  password = '".$pass."'");
    

    if(mysqli_num_rows($result1) > 0 )
    {
        $_SESSION['login'] = $user;
        $_SESSION['password'] = $pass;   
        require('Football.php');
    }
    else
    {
         echo"<div style = 'background-color:red; width:500px; color:white; padding:15px;'><strong>Warning!</strong>Such account does not exist. Make sure your password or login is correct!</div><br />"; 
    }
  }

}


?>

</body>
</html>