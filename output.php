<?php
session_start();
//connection to the databse
include('connect.php');
$ID=$_SESSION['IDclient'];
//checking if user has logged in
if (!empty($ID))
  {
        //all the data about the user with entered login is got from the database
    $result = mysqli_query($conn, "SELECT * FROM clients WHERE IDclient = '$ID'");
    Print "<table border cellpadding=5>";
    Print "<tr><th>Clientname</th><th>IIN</th><th>email</th><th>Contact number</th><th>Card</th></tr>";
    //fetch of result row as an associative array
    while ($row = mysqli_fetch_assoc($result))
      {
        Print "<tr>";
        Print "<td>" . $row['client_full_name'] . "</td>";
        Print "<td>" . $row['IIN'] . "</td>";
        Print "<td>" . $row['email'] . "</td>";
        Print "<td>" . $row['contact_number'] . "</td>";
        Print "<td>" . $row['card'] . "</td>";
        Print "</tr>";
      }
    echo "</table>";
  }
else
  {
    echo "error";
  }
?>
