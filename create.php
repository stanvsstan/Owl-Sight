<?php
    session_start();
    include 'DBhandler.php';


$Oname = $_POST['name'];
$date = $_POST['date'];
$dept = $_POST['Dept'];
$location = $_POST['Loc'];
$description = $_POST['description'];




//Error Handling
//checks if user entered a name
if(empty($Oname)){
    header("Location: owl_new_owlert.php?error=Name_empty");
    exit();
}
//check if user entered an email
if(empty($date)){
    header("Location: owl_new_owlert.php?error=Date_empty");
    exit();
}
//check if user entered password
if(empty($dept)){
    header("Location: owl_new_owlert.php?error=Department_empty");
    exit();
}
if(empty($location)){
    header("Location: owl_new_owlert.php?error=Location_empty");
    exit();
}
if(empty($description)){
    header("Location: owl_new_owlert.php?error=Description_empty");
    exit();
}
else{
    
    //Inserting into the User Table
    $sql = "INSERT INTO owlert (name, date, dept, location, description) VALUES ('$Oname', '$date', '$dept', '$location', '$description')";

    $result = mysqli_query($conn, $sql);
    
    header("Location: owl_new_owlert.php?Owlert_has_been_created");
}


?>