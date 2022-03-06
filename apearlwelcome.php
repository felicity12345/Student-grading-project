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
<body>


  <nav>
          <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="about.php">About Us</a></li>
              <li><a href="Studentprofile.php">Student Profile</a></li>
              <li><a href="apearllogout.php">Logout</a></li>

          </ul>

  </nav>

    <h1> Welcome Apearl Student.</h1>
   <P>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur quidem aperiam nostrum dignissimos ad porro temporibus illo doloribus aliquid, eius nisi veniam debitis facere est sapiente laudantium quas nam? Pariatur quidem rerum aliquam dolores amet ex porro culpa veniam eius, libero officia doloribus praesentium incidunt dolore quibusdam cumque tempora adipisci nobis, quae accusantium reiciendis molestias voluptate qui voluptatum? Repudiandae ea atque id ex nisi optio molestiae, suscipit placeat possimus autem, esse accusamus aperiam debitis laborum dolor a voluptatum? Quis aspernatur sint in dolor. Corporis deleniti ipsa impedit ut architecto fuga earum officiis nostrum sequi, ipsum quo dolorum at repellendus esse., dolor sit amet consectetur adipisicing elit. Ducimus ad laboriosam et cupiditate veritatis.</P>
   
   <a href="Studentprofile.php" class="Button">View profile</a>

</body>
</html>



        
 <?php
  include_once 'footer.php';
  ?>