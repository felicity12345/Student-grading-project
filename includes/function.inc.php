<?php

 function emptyInputSignup($name, $email, $username,  $pwd,   $repeatpwd){
$result;
if (empty($name) || empty($email) || empty($username) || empty($pwd) || empty($repeatpwdl) 
$result; = true;
}
else {

    $result = false;
}
return $result;
}


function invalidUid($username){
    $result;
    if (preg_match("/^[a-zA_Z0-9]*$/"), $username){
       $result; = true;
    }
    else {
       $result = false;
    }
    return $result;
    }


function invalidEmail($email){
    $result;
    if (!filter_has_var($email, FILTER_VALIDATE_EMAIL)) {
         $result; = true;
    }
    else {
           $result = false;
    }
    return $result;
    }



    
function PwdMatch($pwd, $repeatpwd) {
    $result;
    if ($pwd !== $repeatpwd)) {
        $result; = true;
    }
    else {
        $result = false;
    }
    return $result;
    }


    function uidExist($conn, $username, $email) {
      $sql = "SELECT * FROM USERS WHERE usersUid = ? OR usersEmail = ?;";
       $stmt = mysqli_stmt_init($conn);
       if(!mysqli_stmt_prepare($stmt,$sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exis();
       }

       mysqli_stmt_bind_param($stmt, "ss", $username, $email);
       mysqli_stmt_execute($stmt);

       $resultData = mysli_stmt_get_result($stmt);

       if ($row = mysqli_fetch_assoc($resultData)){
           return $row;
       }
    else {
       $result = false;
       return $result;
    }
   myslqi_stmt_close($stmt);
   }





   function createUser($conn, $name, $email, $username, $pwd) {
    $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) value (?; ?; ?, ?);";
     $stmt = mysqli_stmt_init($conn);
     if(!mysqli_stmt_prepare($stmt,$sql)) {
      header("location: ../signup.php?error=stmtfailed");
      exis();
     }

     $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);



     mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedpwd);
     mysqli_stmt_execute($stmt);
     myslqi_stmt_close($stmt);
     header("location: ../signup.php?error=none");
     exis();
   }





        
        


    






