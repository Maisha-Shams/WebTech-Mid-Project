<?php
error_reporting(0)
?>
<?php 
	if(isset($_COOKIE['status']))
	{
?>

<!DOCTYPE html>
<html>

<head>
      <title>Customer List</title>

</head>

<body>
      <br>
      <table border="1">
            <th>
                  <h2>Username</h2>
            </th>
            <th>
                  <h2>Account No.</h2>
            </th>
            <th>
                  <h2>Email</h2>
            </th>
            <th>
                  <h2>Phone</h2>
            </th>
            <th>
                  <h2>Nid</h2>
            </th>
            <th>
                  <h2>Date of birth</h2>
            </th>
            <th>
                  <h2>Gender</h2>
            </th>
            <th>
                  <h2>Marital Status</h2>
            </th>
            <th>
                  <h2>Blood Group</h2>
            </th>
            <th>
                  <h2>Religion</h2>
            </th>
            <th>
                  <h2>Address</h2>
            </th>
            <?php

            $file = fopen('Files/customer.txt', 'r');




            if ($file == true) {
                  while (!feof($file)) {
                        $data = fgets($file);
                        $user = explode("|", $data);

                        if (empty($user[2])) {
                              break;
                        }

                        echo '  <tr>';
                        echo '<td><h3> ' . $user[0] . '<h3></td>';
                        echo '<td><h3><a href="editCustomer.php?accNum= ' . $user[2] . ' ">' . $user[2] . '</a><h3></td>';
                        echo '<td><h3>' . $user[3] . '<h3></td>';
                        echo '<td><h3>' . $user[4] . '<h3></td>';
                        echo '<td><h3>' . $user[5] . '<h3></td>';
                        echo '<td><h3>' . $user[6] . '<h3></td>';
                        echo '<td><h3>' . $user[7] . '<h3></td>';
                        echo '<td><h3>' . $user[8] . '<h3></td>';
                        echo '<td><h3>' . $user[9] . '<h3></td>';
                        echo '<td><h3>' . $user[10] . '<h3></td>';
                        echo '<td><h3>' . $user[11] . '<h3></td>';
                        echo '   </tr>';
                  }
            } else {
                  echo "<center><h1>No Registered User </h1> </center>";
            }
            ?>
            <h1><a href="UserHome.php">Go Home</a></h1>
      </table>
</body>


</html>
<?php 
	}else{
		echo "invalid request!";
	} 
?>