<?php
  include 'includes/dbh.inc.php';
?>
<!DOCTYPE html>
<html>
<!--
    Written By: China Moxey
    Last Edit: 5/ /2018
-->
    <style>
          table, th, td {
              border: 1px solid black;
              border-collapse: collapse;
              text-align: left;
          }
          th, td {
              padding:5px;
          }
      </style>
  <head>
    <title>Inventory Page</title>
  </head>
  <body>
      <table style="width:75%">
          <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Quantity</th>
          </tr>
    <?php
      $sql = "SELECT * FROM inventory;";
    	$result = mysqli_query($conn, $sql);
    	$resultCheck = mysqli_num_rows($result);
    	if ($resultCheck > 0) {
    		while ($row = mysqli_fetch_assoc($result)) {
    			echo "<tr><td>".$row['item_id'] . "</td><td>" .$row['item_name'] . "</td><td>" .$row['item_amount'] . "</td></tr>" ;
    		}
    	}
    ?>
      </table>
      <br /><br />
      <h2>Add Quantity</h2><br />
      <form action = "includes/Inventory_Add.php" method = "POST">
          <input type = "number"  name = "product_one" placeholder= "Add To First Product"/><br /><br />
          <input type = "number"  name = "product_two" placeholder= "Add To Second Product"/><br /><br />
          <input type = "number"  name = "product_three" placeholder= "Add To Third Product"/><br /><br />
          <input type = "number"  name = "product_four" placeholder= "Add To Fourth Product"/><br /><br />
          <input type = "number"  name = "product_five" placeholder= "Add To Fifth Product"/><br /><br />
          <input type = "number"  name = "product_six" placeholder= "Add To Sixth Product"/><br /><br />
          <input type = "submit" name = "submit" />
      </form>
      <br />
      <a href="index.php">Back</a><br><br>
      
  </body>
</html>
