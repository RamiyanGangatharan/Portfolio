<?php
  $file = __FILE__;
  $date = "Friday, January, 13, 2023";
  $title = "Constants";
  $description = "This is the webpage for lab 4";
  $banner = "Constants 2";
?>

<?php include('./header.php')?>

<?php
    echo "<br/>This file is: " .__FILE__;
    echo "<br/>This is line number: " .__LINE__;
    echo "<br/>I am using " .PHP_VERSION;
    echo "<br/>This test is being run on ".PHP_OS;
?>

<?php include('./footer.php')?>