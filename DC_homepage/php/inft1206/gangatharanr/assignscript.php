<?php
  $file = __FILE__;
  $date = "Friday, January, 13, 2023";
  $title = "Assigning Operators";
  $description = "This is the webpage for lab 4";
  $banner = " Web Development Fundamentals Homepage";
?>

<?php include('./header.php')?>

<?php
    $original_variable = 100;
    echo "<p>Original value is: $original_variable<p>";

    $original_variable += 25;
    echo "<p>Added a value, now it is $original_variable<p>";

    $original_variable -= 12;
    echo "<p>Subtracted a value, now it is $original_variable<p>";

    $original_variable .= " chickens";
    echo "<p>FINAL ANSWER: $original_variable<p>";
?>

<?php include('./footer.php')?>