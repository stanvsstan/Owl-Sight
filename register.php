<?php
    session_start();
    include 'DBhandler.php';


$u_name = $_POST['name'];
$u_email = $_POST['email'];
$u_psswrd = $_POST['psswrd'];

//Error Handling
//checks if user entered a name
if(empty($u_name)){
    header("Location: owl_register.php?error=empty");
    exit();
}
//check if user entered an email
if(empty($u_email)){
    header("Location: owl_register.php?error=empty");
    exit();
}
//check if user entered password
if(empty($u_psswrd)){
    header("Location: owl_register.php?error=empty");
    exit();
}
else{
    //Hashing password
    $hash_psswrd = password_hash($u_psswrd, PASSWORD_DEFAULT);
    //Inserting into the User Table
    $sql = "INSERT INTO user_owl (u_name, email, psswrd) VALUES ('$u_name', '$u_email', '$hash_psswrd' )";

    $result = mysqli_query($conn, $sql);

    header("Location: owl_login.php");
}


?>
