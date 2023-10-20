<?php
  $file = __FILE__;
  $date = "Friday, January, 13, 2023";
  $title = "Using Arithmetic Operators";
  $description = "This is the webpage for lab 4";
  $banner = " Web Development Fundamentals Homepage";
?>

<?php include('./header.php')?>

<?php
    $a = 85;
    $b = 24;

    echo "<P>Original value of \$a is $a and \$b is $b</p>";

    $c = $a + $b;
    echo "<p>Added \$a and \$b and got $c</p>";

    $c = $a - $b;
    echo "<P>Subtracted \$b from \$a and got $c</P>";

    $c = $a * $b;
    echo "<p>Multiplied \$a and \$b and got $c</p>";

    $c = $a / $b;
    echo "<p>Divided \$a by \$b and got $c</p>";

    $c = $a % $b;
    echo "<p>The modulus of \$a and \$b is $c</p>";
?>

<?php include('./footer.php')?>