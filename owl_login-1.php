<?php
    session_start();
?>
<!DOCTYPE HTML>
<html>  
<body>

<form action="login.php" method="POST"> <!--Calls login.php to log in user -->
    User Name: <input type="text" name="name" placeholder="User Name"><br>
    Password: <input type="password" name="psswrd" placeholder="Password"><br>
    <button type="submit">LOG IN</button>
</form>
    <br><br>
    
    
<form action="logout.php"> <!--Calls logout.php to end session -->
    <button>Log Out</button>
</form>
    
    <?php //REMOVE THIS FROM LIVE VERSION
        if(isset($_SESSION['id'])){ //prints user id to the screen, ONLY USED for testing
            echo $_SESSION['id'];
        }
    ?>
</body>
</html>