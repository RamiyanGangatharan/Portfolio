<?php
  $file = __FILE__;
  $date = "Friday, January, 13, 2023";
  $title = "Using Comparison Operators";
  $description = "This is the webpage for lab 4";
  $banner = "Comparison Script";
?>

<?php include('./header.php')?>

<?php
    $a = 21;
    $b = 15;
    echo "  <p>Original value of \$a is $a and \$b is $b </p>";

    if ($a == $b) 
        {
            echo " <p>TEST 1: \$a equals \$b </p>";
        } 

    else 
        {
            echo " <p>TEST 1: \$a is not equal to \$b </p>";
        }
        
    if ($a != $b) 
        {
            echo " <p>TEST 2: \$a is not equal to \$b </p>";
        }

    else 
        {
            echo " <p>TEST 2: \$a is equal to \$b </p>";
        }

    if ($a > $b) 
        {
            echo " <p>TEST 3: \$a is greater than \$b  </p>";
        } 

    else 
        {
            echo "  <p>TEST 3: \$a is not greater than \$b  </p>";
        }

    if ($a < $b) 
        {
            echo "  <p>TEST 4: \$a is less than \$b  </p>";
        }
    else
        {
            echo "  <p>TEST 4: \$a is not less than \$b  </p>";
        }
        
    if ($a >= $b) 
        {
            echo "  <p>TEST 5: \$a is greater than or equal to \$b  </p>";
        } 
    else
        {
            echo "  <p>TEST 5: \$a is not greater than or equal to \$b  </p>";
        }

    if ($a <= $b) 
        {
            echo "  <p>TEST 6: \$a is less than or equal to \$b </p>";
        } 
    else 
        {
            echo "  <p>TEST 6: \$a is not less than or equal to \$b </p>";
        }      
?>

<?php include('./footer.php')?>