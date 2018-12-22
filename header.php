<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
   <link  rel = "stylesheet" type = "text/css" href = "style_login.css"/>
    </head>
<div>    
<body>

<header class = "head">
    <nav>
<div class = "Login">

    <div class = "navigation">
        <h2>Old User</h2><br /><br />
     <form action = "includes/login.inc.php" method = POST>
     <input type = "text" name = "uid" placeholder = "Username/e-mail"/><br /><br /><br />
     <input type = "password" name = "password" placeholder = "Password" /><br /><br /><br />
     <button type = "submit" name = "submit">Login</button>
     </form>
        <?php
        if(!isset($_GET['login']))
        {
            echo "<p>&nbsp;</p>";
        }else
        {
            $loginCheck = $_GET['login'];
            
            if ($loginCheck == "empty")
            {
                echo "<p class='error'>Please enter your information</p>";
            }
            elseif($loginCheck == "error")
            {
                echo "<p class='error'> Username or Password does not exist</p>";
            }
            elseif($loginCheck == "success")
            {
                echo "<p class='error'>You are Successfully Logged in to the website!</p>";
            }
        }
            
        
        ?>
    </div>
</div>
    </nav>
</header>  
</body>
</div>
</html>