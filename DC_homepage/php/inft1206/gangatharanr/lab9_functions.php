<?php
    function db_connect() 
    {
        return pg_connect("host=127.0.0.1 dbname=gangatharanr_db user=gangatharanr password=100835223");
    }
      
    function displayCopyrightInfo() 
    {
        $year = date('Y');
        echo  "<p class='title'>&copy; $year Ramiyan Gangatharan </p>";
    }


// constants for minimums and maximums
define("MIN_ID", 5);
define("MAX_ID", 20);

define("MIN_PASS", 6);
define("MAX_PASS", 15);

define("MAX_FNAME", 20);
define("MAX_LNAME", 30);
define("MAX_MAIL", 255);

?>
