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
    $title = "Lab 10: User Registration";
    
    // Define the page description and banner text
    $description = "This is the webpage for Lab 9";
    $banner = "Lab 10: Database/PHP Lab - User Registration";
    ?>
<?php include './header.php'; ?>
<p class="section_paragraph">
    This registration page is a demonstration of a form for lab 10 in web development.
    Using a table and its attributes alongside labels and their attributes, I made this page 
    with the intention to add registered users to the site.
</p>
<hr/>
<div style="text-align: center;">
<h2 class="title">Please register in our system</h2>
<p>Please enter your personal information<br/></p>

<!-- FORM STARTS HERE -->
<form method="post" action="./index.php" >
	<table style="margin: 0 auto;" cellpadding="10" >
	<tr>
		<td><strong>Login ID</strong></td>
		<td><input type="text" name="user_id" size="20" /></td>
	</tr>
	<tr>
		<td><strong>Password</strong></td>
		<td><input type="password" name="password" size="20" /></td>
	</tr>
	<tr>
		<td style="padding: 0 28px;"><strong>Confirm Password</strong></td>
		<td><input type="password" name="confirm_password" size="20" /></td>
	</tr>
	<tr>
		<td><strong>First Name</strong></td>
		<td><input type="text" name="first_name" size="20" /></td>
	</tr>
	<tr>
		<td><strong>Last Name</strong></td>
		<td><input type="text" name="last_name" size="20" /></td>
	</tr>
	<tr>
		<td><strong>Email Address</strong></td>
		<td><input type="text" name="email_address" size="20" /></td>
	</tr>
	</table>
    </br>
    <input type="submit" value = "Register" />
    <input type="reset" value = "Clear" />
</form>
<!-- FORM ENDS HERE -->
</div>

<hr/>
<?php include './footer.php'; ?>

<?php
require('./lab9_functions.php');

$id = "";
$password = "";
$confirm_password = "";
$first_name = "";
$last_name = "";
$email_address = "";
$today = "";
$error = "";

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{

    // Get the login ID and password from the form, trimming any white space
    $id = trim($_POST['ID']);
    $password = trim($_POST['pass']);
    $confirm_password = trim($_POST['confirm_password']);
    $first_name = trim($_POST['first_name']);
    $last_name = trim($_POST['last_name']);
    $email_address = trim($_POST['email_address']);
    $today = trim(date("Y-m-d",time()));

    // to check for input
    if (strlen($id) < 1)
    {
       echo $error .= 'You must enter a user ID';
        $id = "";
    }
    // to check if the ID is within parameters
    elseif(strlen($id) < MIN_ID) 
    {
        $error .= 'Minimum: ' . MIN_ID . "characters.";
        $id = "";
    }
    elseif(strlen($id) > MAX_ID)
    {
        $error .= "Maximum: " . MAX_ID . "characters.";
        $id = "";
    }
    // if parameters are met, then execute the SQL
    else
    {
        //connect to DB
       db_connect();

       $sql = "SELECT id FROM users WHERE id = ".$id."";
       $result = pg_query($conn, $sql);
       $records = pg_num_rows($result);
    }

    // if the user already exists in the system, make an error
    if($records > 0)
    {
        $error .= "The user ID" . $id . "already exists in our system. Please try again.<br/>";
        $records = "";
    }

    // to check for input
    if($password < 1)
    {
        $error .= "enter a password";
        $password = "";
    }

    // to check if parameters are met
    if(strlen($password) < MIN_PASS )
    {
        $error .= 'Minimum: ' . MIN_PASS . "characters.";
        $password = "";
    }

    if(strlen($password) > MAX_PASS)
    {
        $error .= 'Maximum: ' . MAX_PASS . "characters.";
        $password = "";
    }

    
    // to check if passwords do not match
    if($password != $confirm_password)
    {
        $error .= "Passwords do not match";
        $password = "";
    }

    // to check if parameters are met
    if(strlen($first_name) < 1)
    {
        $error .= 'Minimum of 1 character required';
        $first_name = "";
    }

    if(strlen($last_name) < 1)
    {
        $error .= 'Minimum of 1 character required';
        $last_name = "";
    }


    // to check if the names have numbers in them
    elseif(is_numeric($first_name || $last_name))
    {
        $error .= 'Your name cannot contain a number';
        $last_name && $first_name = "";
    }

    elseif(strlen($first_name) > MAX_FNAME)
    {
        $error .= 'Your first name should be less than: '. MAX_FNAME . ' characters';
        $first_name = "";
    }
    elseif(strlen($last_name) > MAX_LNAME)
    {
        $error .= 'Your last name should be less than: '. MAX_LNAME . ' characters';
        $last_name = "";
    }

    // to check if parameters are met
    if(strlen($email_address) < 1)
    {
        $error .= 'Minimum of 1 character required';
        $email_address = "";
    }

    elseif(strlen($email_address) > MAX_MAIL)
    {
        $error .= 'Maximum of ' . MAX_MAIL . ' characters.';
        $email_address = "";
    }

    // to check if the email has valid formatting
    elseif(!filter_var($email_address, FILTER_VALIDATE_EMAIL))
    {
        $error .= 'INVALID EMAIL';
        $email_address = "";
    }

    // if there are no errors, do this
   if (empty($error))
   {
    $today = date("Y-m-d", time());
    $sql = "INSERT INTO users(user_id, password, first_name, last_name, email_address, enrol_date, last_access)
    VALUES('smithb', 'some_password', 'Bill', 'Smith', 'smithb@gmail.com', '2023-04-12', '2023-04-12')";
   }
}

?>


