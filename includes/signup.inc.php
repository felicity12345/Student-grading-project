<?php

if (isset($_post["submit"])) {
    
    $name =$_post["name"];
    $email =$_post["email"];
    $username =$_post["Uid"];
    $pwd =$_post["pwd"];
    $repeatpwd =$_post["repeatpwd"];

    require_once 'dbh.ich.php';
    require_once 'function.ich.php';

    
    if (emptyInputSignup($name, $email, $username,  $pwd,   $repeatpwd) !== false){
       header("location: ../signup.php?error=emptyinput");
       exis();
}
    if (invalidUid($username) !== false){
    header("location: ../signup.php?error=emptyinput");
    exis();

    }

    if (invalidUid($email) !== false){
        header("location: ../signup.php?error=invalidUid");
        exis();
    }


    if (invalidUid($username) !== false){
        header("location: ../signup.php?error=invalidemail");
        exis();
    }

    if (pwdMatch($pwd, $repeatpwd) !== false){
            header("location: ../signup.php?error=passworddontmatch");
            exis();

    }

    if (Uidexist($conn, $username, $email) !== false){
        header("location: ../signup.php?error=usernamealreadytaken");
        exis();
    }

       createUser($conn, $name, $email, $username, $pwd); 


   else {
       header("location: ../signup.php");
    exis();
}