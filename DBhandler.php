<?php
$conn = mysqli_connect("localhost","root", "", "owl_sight");
            //Database location, username, password, Database name

if(!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}

?>
