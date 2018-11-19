<?php


  $DBHostName = "localhost";
  $DBUserName = "lxg6892";
  $DBPassword = "wholesong";
  $DBName = "lxg6892";

  $dbLink = mysqli_connect($DBHostName, $DBUserName, $DBPassword);

  if (!$dbLink) {
    die("Could not connect: " . mysql_error());
  }

  mysqli_select_db($dbLink, $DBName);

  $sql = "SELECT * FROM comment";
  $result = mysqli_query($dbLink, $sql);

  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      echo "Name: " . $row["firstname"]. " " . $row["lastname"]. " Comment: " . $row["comment"]. "<br>";
    }
  } else {
    echo "0 results";
  }

  mysqli_close($dbLink);


?>
