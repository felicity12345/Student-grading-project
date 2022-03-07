<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: apearllogin.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Gradding Application</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>

      <nav>
          <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="about.php">About Us</a></li>
              <li><a href="apearlpassreset.php">PasswordReset</a></li>
              <li><a href="apearllogout.php">Logout</a></li>
          </ul>
      </nav>
      
    
      </head>
      <body>
    
    <header id="showcase">
        <h2>Welcome to Aberdeen City</h2>
        <p>ABERDEEN A PLACE TO VISIT<br>FOR YOUR NEXT TRIP</p>
        <p>The city is historically know for is strong<br>
                        ties with the nortth sea it is the oil<br>
                        hub for europe. <br></p>
        <a href="Thingstodo.php" class="botton">View beautiful places</a>
    </header>
        
</body>
</html>



        
    <?php
  include_once 'footer.php';
  ?>