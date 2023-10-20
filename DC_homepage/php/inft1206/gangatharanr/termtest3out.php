<?php
    /*
     * Name: Ramiyan Gangatharan
     * Filename: termtest3out.php
     * Date: 04/17/2023
     * Course Code: INFT - 1206 - 04
     * Description: Term Test 3
     */
    
    // Set the file path, date, and page title
    $file = __FILE__;
    $date = "04/17/2023";
    $title = "Ramiyan's Test 3 - Club Applications";
    
    // Define the page description and banner text
    $description = "This is the page for term test 3";
    $banner = "Term Test 3: Club Applications";
    ?>

<?php include './header.php'; ?>

<p class="section_description">This is a webpage to demonstrate my abilites. This is the output for term test 3. This is from the database 'club_applications' where I manipulate the data according to the website requirements.</p>
<?php

    $conn = pg_connect("host=127.0.0.1 dbname=gangatharanr_db user=gangatharanr password=100835223");

    $sql = 'SELECT club_code, club_name, contact_email, date_submitted FROM club_applications ORDER BY  date_submitted ASC;';
    $result = pg_query($conn, $sql);

    echo "<table>";
    echo "<tr><th>Club Code</th><th>Club Name</th><th>Contact Email</th><th>Date Submitted</th></tr>";

    while($row = pg_fetch_assoc($result))
    {
        echo "<tr><td>".$row['club_code']."</td><td>".$row['club_name']."</td><td>".$row['contact_email']."</td><td>".$row['date_submitted']."</td></tr>";
    }
?>

<?php include './footer.php'; ?>