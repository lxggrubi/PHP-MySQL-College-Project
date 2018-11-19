<?php

$errors = array();
$filtered_inputs = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  validate("firstname", "Please enter your first name", FILTER_SANITIZE_STRING);
  validate("lastname", "Please enter your last name", FILTER_SANITIZE_STRING);
  validate("comment", "Please enter your comment", FILTER_SANITIZE_STRING);
  validate("email", "Please enter your email", FILTER_SANITIZE_EMAIL);

  $fname = $_POST['firstname'];
  $lname = $_POST['lastname'];
  $email = $_POST['email'];
  $comment = $_POST['comment'];

  $DBHostName = "localhost";
  $DBUserName = "lxg6892";
  $DBPassword = "wholesong";
  $DBName = "lxg6892";

  $dbLink = mysqli_connect($DBHostName, $DBUserName, $DBPassword);

  if (!$dbLink) {
    die("Could not connect: " . mysql_error());
  }

  mysqli_select_db($dbLink, $DBName);

  $query = "INSERT INTO comment (firstname, lastname, email, comment) values('$fname', '$lname', '$email', '".$comment."')";

  $result = $dbLink->query($query);

  if($result === TRUE) {

  }
  else {
    echo "Error: " . $query . "<br>" . $dbLink->error;
  }

  mysqli_close($dbLink);

  $email_to = "lxg6892@g.rit.edu";
  $headers = "Cc: $email \r\n";
  $subject = 'Comment Received';
  $message = "Hello $fname $lname,\nYou have sent me your comment.\n Please, be patient, I get a lot of comments, and I will answer as soon as possible.
  \nYour comment is: '".$comment."'\nKind regards,\nLeon Grubisic";

  mail($email_to, $subject, $message, $headers);

  $stringRegex = "/^[A-Za-z]+$/";

  if(preg_match($stringRegex, $fname)) {

  }
  else {

  }

  if(preg_match($stringRegex, $lname)) {

  }
  else {

  }

  $commentRegex = "/[a-zA-Z0-9\s]+/";

  if(preg_match($commentRegex, $comment)) {

  }
  else {

  }

  if(filter_var($email, FILTER_VALIDATE_EMAIL)) {

  }
  else {

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

?>
