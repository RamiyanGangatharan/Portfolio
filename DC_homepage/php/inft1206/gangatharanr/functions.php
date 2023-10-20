<?php
    function db_connect()
    {
        $connection = pg_connect("host=127.0.0.1 dbname = gangatharanr_db");
    }
?>