<?php
    session_start();
    include 'DBhandler.php';


$u_name = $_POST['name'];
$u_psswrd = $_POST['psswrd'];

$sql = "SELECT * FROM user_owl WHERE u_name='$u_name'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$hash_pwd = $row['psswrd'];
$hash = password_verify($u_psswrd, $hash_pwd);


if($hash < 0){
    
       header("Location: owl_login.php?error=empty");
       //exit(); //PHP throws warning with this exit
} 
else {

    $sql = "SELECT * FROM user_owl WHERE (u_name = '$u_name' AND psswrd = '$hash_pwd')";
    $result = mysqli_query($conn, $sql);

    if (!$row = mysqli_fetch_assoc($result)) {
        echo "Your User name or Password is incorrect!";
    }
    else {
        $_SESSION['id']=$row['id']; //$_SESSION['id'] is a global variable for logged in status
        
    }
    
    //Returns to a specific page:
    header("Location: owl_login.php"); //return to index.php
}
?>