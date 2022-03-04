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
              <li><a href="studentprofile.php">Students Profile</a></li>
              <li><a href="apearllogout.php">Logout</a></li>

          </ul>

  </nav>

    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to Apearl gradding App.</h1>
    
</body>
</html>



         <section class="index-intro">
          <h1>School Gradding App Introduction</h1>
          <p> purpose of the Gradding Application</p>
        </section>

        <section class="index-about">
            <h2>some basic categories</h2>
            <div class="index-about-list">
            <div>
                <h3>Games</h3>
            </div>
            <div>
                <h3>Competiton</h3>
            </div>
            <div>
                <h3>Sport</h3>
            </div>
            <div>
                <h3>Break</h3>
            </div>
        </div>
    </section>
    <?php
  include_once 'footer.php';
  ?>
