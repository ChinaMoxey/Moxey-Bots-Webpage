<?php
session_start();
?>
<!DOCTYPE html>
<html>
<!-- 
Written By: China Moxey
Last Edit: 5/ /2018
-->
<head>
    <link  rel = "stylesheet" type = "text/css" href = "ordercss.css"/>
</head>
<body>
<div class = "website">
<header class = "header">
    <h1>MOXEY BOTS</h1>
</header>
    
<main class = "main-content">
<form action = "includes/orders.inc.php" method = "POST">
<div class = "product_one">
<img  heigth = "50px" width = "200px"
     src = "https://i.pinimg.com/originals/5a/70/89/5a7089c20d86c76117858c531e266f6d.jpg" /><br />
<input type = "number" placeholder = "Bipedal Robot Legs" name = "product_one"  />
</div>  
    
<div class = "product_two">
<img  heigth = "200px" width = "200px"
     src = "http://riteshbawri.com/wp-content/uploads/2017/12/prosthetics.jpg" /><br />
<input type = "number" placeholder = "Prothetic Arm" name = "product_two" />
</div>
    
<div class = "product_three">
<img  heigth = "200px" width = "200px"src = "http://www.pinktentacle.com/images/riba_1.jpg" />  <br />   
<input type = "number"  placeholder = "Nurse Robot" name = "product_three"/>
</div>  
    
<div class = "product_four">
<img heigth = "200px" width = "200px" src = "http://avsonline.com/wordpress/wp-content/uploads/2009/02/LowRes_noReflection_TouchScreens_SR260_iPhone6_Keypad_Flatscreen_VariousUI.jpg" />   <br />   
<input type = "number" placeholder = "Smart Home System" name = "product_four"/>
</div>
    
<div class = "product_five">    
<img  heigth = "200px" width = "200px"
     src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4JeUfWyWPiFefJztPfEFaLMHZ9tITheJMK54bJYcDTL2un0JL" /> <br />
 <input type = "number"  placeholder = "Prosthetic Hand " name = "product_five" />
</div>
    
<div class = "product_six">
<img  heigth = "200px" width = "200px"
     src = "http://1.bp.blogspot.com/-TJhJHtOXBQk/TctXpFnneAI/AAAAAAAAFzA/cj-alOGijeM/s1600/SWORDS-war-armed-robot.jpg" /><br />
<input type = "number" placeholder = "RC Military Robot"name = "product_six" /> 
</div>   
    
<div class = "submit_button">
<input type = "submit" name = "submit" />
</div>  
</form>
</main>
    
<footer class = "footer">
    <a href="Inventory.php">View Inventory</a>
</footer>
</div>    
 </body>
</html>