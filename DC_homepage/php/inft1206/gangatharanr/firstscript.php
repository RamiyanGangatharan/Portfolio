<?php
  $file = __FILE__;
  $date = "Friday, January, 13, 2023";
  $title = "My First PHP Script";
  $description = "This is the webpage for lab 4";
  $banner = "First Script";
?>

<?php include('./header.php')?>

<?php
    echo 
    "<p>
        <em>
            Hello World! I'm using PHP!
        </em>
    </p>"
?>

<?php include('./footer.php')?>