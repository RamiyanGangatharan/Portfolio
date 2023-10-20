<?php
  $file = __FILE__;
  $date = "Friday, January, 13, 2023";
  $title = "Constants";
  $description = "This is the webpage for lab 4";
  $banner = "Constants";
?>

<?php include('./header.php')?>

<?php
    define("MYCONSTANT", "This is a test for defining constants.");
    echo MYCONSTANT;
?>

<?php include('./footer.php')?>