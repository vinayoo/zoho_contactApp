<?php
session_start();
include("Dbconnection.php");
if(isset(($_POST['save'])))
{
  $sql = "SELECT * FROM 'contacts'";
  $q =mysqli_query($conn,$sql);
    if(mysqli_num_rows($q) > 0) {
      echo "<table><tr><th>contact</th><th>phone</th></tr>";
        while($row = mysqli_fetch_assoc($result)) {
          echo"<tr><td>". $row["contact"]. "</td> <td>" . $row["phone"]."<br>";
        }
        echo "</table>";
      } else {
        echo "0 results";
      }
    }
?>
