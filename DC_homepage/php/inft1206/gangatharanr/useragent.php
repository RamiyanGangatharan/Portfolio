<?php
  $file = __FILE__;
  $date = "Friday, January, 13, 2023";
  $title = "Index";
  $description = "This is the webpage for my homepage";
  $banner = " User Agent";
?>

<?php include('./header.php')?>

<?php

// this function displays what web browser you are using and its webkits.
$agent = getenv("HTTP_USER_AGENT");

echo "You are using $agent.";

?>

<?php include('./footer.php')?>