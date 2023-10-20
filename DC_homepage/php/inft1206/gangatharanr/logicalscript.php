<?php
  $file = __FILE__;
  $date = "Friday, January, 13, 2023";
  $title = "Using Logical Operators";
  $description = "This is the webpage for lab 4";
  $banner = "Logical Script";
?>

<?php include('./header.php')?>

<?php
    $degrees = "95";
    $hot = "yes";

    if (($degrees > 100) || ($hot == "yes")) 
    {
        echo "<P>TEST 1: It's <strong>really</strong> hot!</P>";
    } 
    else 
    {
        echo "<P>TEST 1: It's bearable.</P>";
    }
    
    if (($degrees > 100) && ($hot == "yes"))
    {
        echo "<P>TEST 2: It's <strong>really</strong> hot!</P>";
    }
    else
    {
        echo "<P> TEST 2: It's bearable.</P>";
    }
        
?>
<?php include('./footer.php')?>