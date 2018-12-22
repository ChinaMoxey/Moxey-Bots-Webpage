<?php
  include 'includes/dbh.inc.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <title></title>
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
  </head>
  <body>
      <table style="width:75%">
          <tr>
              <th>ID</th>
              <th>Username</th>
              <th>Email</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Password</th>
          </tr>
    <?php
      $sql = "SELECT * FROM users;";
    	$result = mysqli_query($conn, $sql);
    	$resultCheck = mysqli_num_rows($result);
    	if ($resultCheck > 0) {
    		while ($row = mysqli_fetch_assoc($result)) {
    			echo "<tr><td>".$row['user_id'] . "</td><td>" .$row['user_first'] . "</td><td>" .$row['user_last'] . "</td><td>" .$row['user_email'] . "</td><td>" .$row['user_uid'] . "</td><td>" .$row['user_pwd']. "</td></tr>" ;
    		}
    	}
    ?>
      </table>
      <a href="index.php">Back</a>
  </body>
</html>
