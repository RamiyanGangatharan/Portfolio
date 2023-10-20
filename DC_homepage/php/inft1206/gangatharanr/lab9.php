<?php
    /*
     * Name: Ramiyan Gangatharan
     * Filename: lab9.php
     * Date: 04/05/2023
     * Description: This file contains a login page
     */
    
    // Set the file path, date, and page title
    $file = __FILE__;
    $date = "04/05/2023";
    $title = "Lab 9: User Login";
    
    // Define the page description and banner text
    $description = "This is the webpage for Lab 9";
    $banner = "Lab 9: Database/PHP Lab - User Login";
    ?>
<?php include './header.php'; ?>
<p class="section_paragraph">
    This login page is a demonstration of a form for lab 9 in web development.
    by verifying the user's identity through a username and password, the page can restrict
    unauthorized users from entering your site. For example, banking websites have login pages 
    to protect the finances and financial information of all users in the website. without this 
    security measure in place, the site could be considered to be untrustworthy and vulnerable to
    cybercrime (theft).
</p>
<hr/>
<div style="display: flex; flex-direction: column; align-items: center;">
    <h1 class="title">Login</h1>
    <p class="title">Please enter your login ID and password to connect to this system.</p>
    <form style="font-family: Arial, Helvetica, sans-serif;" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST"> 
        <label style="margin-left: 12px;" for="ID">Login ID:</label>
        <input type="text" id="ID" name="ID" required>

        <br/><br/>

        <label for="pass">Password:</label>
        <input type="password" id="pass" name="pass" required>

        <br/><br/>

        <input style="margin-left: 15px;" type="submit" value="Log in">
        &nbsp;
        <input type="reset" value="Clear">

    </form>
    <p class="title">Please wait after pressing <b>Log in</b> while we retrieve your records from our database.</p>
</div>
<hr/>
<?php include './footer.php'; ?>

<?php
require_once('./functions.php');

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{

    // Get the login ID and password from the form, trimming any white space
    $login = trim($_POST['ID']);
    $password = trim($_POST['pass']);

    // Connect to the database
    $conn = db_connect();

    // Query the database to see if the user exists
    $statement = pg_prepare($conn, "user_query", "SELECT * FROM users WHERE id=$1 AND password=$2");
    $result = pg_execute($conn, "user_query", array($login, $password));

    // Check if the query was successful and if a row was returned
    if ($result && pg_num_rows($result) == 1) 
    {

        // Fetch the user's details from the result set
        $row = pg_fetch_assoc($result);
        $first_name = $row['first_name'];
        $last_name = $row['last_name'];
        $email_address = $row['email_address'];
        $last_access = $row['last_access'];

        // Display a welcome message with the user's details
        echo "<p>Welcome, " . $first_name . " " . $last_name . "</p>";
        echo "<p>Email Address: " . $email_address . "</p>";
        echo "<p>Last Access: " . $last_access . "</p>";

        // Update the user's last_access field in the database
        $query = "UPDATE users SET last_access = '" . date("Y-m-d", time()) . "' WHERE id = '" . $login . "'";
        pg_query($conn, $query);

    } 
    else 
    {

        // If the user was not found, display an error message
        echo "<p>The login ID and password were not found in the table. Please try again.</p>";

        // Check if the login ID exists in the database
        $statement = pg_prepare($conn, "id_query", "SELECT * FROM users WHERE id=$1");
        $result = pg_execute($conn, "id_query", array($login));
    }

    // Close the database connection
    pg_close($conn);
}
?>


