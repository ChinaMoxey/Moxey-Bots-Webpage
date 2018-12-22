<!DOCTYPE html>
<!--
Written By: China Moxey
Start Date: 02/xx/2018
Purpose: Make a response website that can store user data using php. When the project is finish users should be able to make an account on the website, when they come back they shouldn't be able to make a new account but they should be ab;e to sign in to there already existing one. After they login they should be able to browser the items on the website and order any of the items they see.
-->
<html>
    
<head>
    <title>MOXEY BOTS</title>
   <link  rel = "stylesheet" type = "text/css" href = "style_login.css"/>
</head>
    

<body>  
<div class ="website">
    <?php 
    include_once 'header.php'; 
    ?>
    
    <aside class = "side-img">
    <div class = "sidebar"></div>
    </aside>
    <main class ="main-content">
        
<div class = "signup-content">
    <h2>New User</h2><br/><br />
    <form action = "includes/signup.inc.php" method = "POST">
    <input type="text" name ="first" placeholder="First Name"/><br /><br />
    <input type="text" name ="last" placeholder="Last Name"/><br /><br />
    <input type="text" name ="email" placeholder="E-mail"/><br /><br />
    <input type="text" name ="uid" placeholder="Username"/><br /><br />
    <input type="password" name ="pwd" placeholder="Password"/><br /><br />
    <button type = "submit" name = "submit">Sign Up</button>
     </form>
    <?php
    if (!isset($_GET['signup'])) {
                echo "<p>&nbsp;</p>";
			}
			else {
				$signupCheck = $_GET['signup'];
				if ($signupCheck == "empty") {
					echo "<p class='error'>Empty Fields</p>";
				}
				elseif ($signupCheck == "name") {
					echo "<p class='error'>Invalid Characters</p>";
				}
				elseif ($signupCheck == "email") {
					echo "<p class='error'>Invalid Email</p>";
				}
                
                elseif ($signupCheck == "usertaken") {
					echo "<p class='error'>User Taken</p>";
				}
                
				elseif ($signupCheck == "success") {
					echo "<p class='success'>User created</p>";
				}
			}
        
        
    ?>
    <h2><a href = "tabledatabase.php">View Database</a></h2>
</div>
    </main>
    

    </div>
</body>
   
</html>  