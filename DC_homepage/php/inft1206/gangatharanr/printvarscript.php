<?php
  $file = __FILE__;
  $date = "Friday, January, 13, 2023";
  $title = "Printing Variables";
  $description = "This is the webpage for lab 4";
  $banner = "Printing Variable Scripts";
?>

<?php include('./header.php')?>

<?php
    $intVar = "9554215464"; 
    $floatVar = "1542.2232235";
    $stringVar = "This is a string";

    echo "<p>integer: $intVar</p>";
    echo "<p>float: $floatVar</p>";
    echo "<p>string: $stringVar</p>";
?>

<?php include('./footer.php')?>
