<?php
    session_start();
    session_destroy();
    header("Location: owl_login.php");
?>