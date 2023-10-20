<?php
  $file = __FILE__;
  $date = "Friday, January, 13, 2023";
  $title = "Remote Address";
  $description = "This is the webpage for displaying an IP address";
  $banner = "Remote Addressing";
?>

<?php include('./header.php')?>

<?php
    
    /* 
    this file demonstrates the 'getenv' function. in this case,
    we use this function to get the IP address of the system it
    is running on using 'REMOTE_ADDR'.
    */ 

    $address = getenv("REMOTE_ADDR");
    echo "Your IP address is $address.";
?>

<?php include('./footer.php')?>