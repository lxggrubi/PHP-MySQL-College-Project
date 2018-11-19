<?php

$errors = array();
$filtered_inputs = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  validate("username", "Please enter your first name", FILTER_SANITIZE_STRING);
  $usrname = $_POST['username'];

  $stringRegex = "/^[A-Za-z]+$/";

  if(preg_match($stringRegex, $usrname)) {
    echo $usrname . "Valid username ";
  }
  else {
    echo $usrname . "Invalid username ";
  }
}

function validate($fieldName, $errorMessage, $sanitizeFilter){
  if (filter_has_var(INPUT_POST, $fieldName)) {
    if (strlen($_POST[$fieldName]) == 0) {
      $errors[] = $errorMessage;
    }
    else {
      $filtered_inputs[$fieldName] = filter_input(INPUT_POST, $fieldName, $sanitizeFilter);
    }
  }
}

$DBHostName = "localhost";
$DBUserName = "lxg6892";
$DBPassword = "wholesong";
$DBName = "lxg6892";

$dbLink = mysqli_connect($DBHostName, $DBUserName, $DBPassword);

if (!$dbLink) {
  die("Could not connect: " . mysql_error());
}

mysqli_select_db($dbLink, $DBName);

if (isset($_POST['username']) and isset($_POST['password'])){

  $usrname = $_POST['username'];
  $pass = $_POST['password'];

  $query = "SELECT * FROM credentials WHERE username = '$usrname' and password = '".sha1($pass)."'";

  $result = mysqli_query($dbLink, $query);
  $count = mysqli_num_rows($result);

  if ($count == 1) {
    $_SESSION['username'] = $usrname;
    header("location: landing.php");
  }
  else {
    header("location: incorrect.php");
  }
}

?>
