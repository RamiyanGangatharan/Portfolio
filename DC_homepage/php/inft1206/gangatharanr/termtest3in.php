<?php
    /*
     * Name: Ramiyan Gangatharan
     * Filename: termtest3in.php
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

<h1 class="title">Club Registration Form</h1>
<p class="section_description">
    This web page will implement several topics that have been covered in the Web Development Fundamentals (<a href="https://opentech.durhamcollege.org/pufferd/inft1206">INFT1206</a>)
    course this semester. This page still implements CSS technology, and ensures XHTML validation using self-referring 
    forms, but was used to demonstrate incorporating database functionality.
    <br/><br/>
    Interested in creating a club and have at least 10 members to start? 
</p>

<br/>
<p class="title">Please enter the following information.</p>
<form method="post" action="./termtest3out.php">
    <table cellpadding="10" style="margin-left:auto; margin-right:auto;">
            <tr>
                <td><b>Club Code (4 characters) </b></td>
                <td align="center"><input type="text" name="club_code" value="" /></td>
            </tr>
            <tr>
                <td><b>Club Name:</b></td>
                <td align="center"><input type="text" name="club_name" size="20" value="" /></td>
            </tr>
            <tr>
                <td><b>Member Count:</b></td>
                <td align="center"><input type="text" name="members" size="20" value="" /></td>
            </tr>
            <tr>
                <td><b>Club Email:</b></td>
                <td align="center"><input type="text" name="email" value="" /></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input style="margin-left: 70px;" type="submit" value="Submit Application" />
                    <input type="reset" value="Clear" />
                </td>
            </tr>
    </table>
</form>

<?php

    define('CLUB_CODE_LENGTH', 4);
    define('MAX_CLUB_NAME_LENGTH', 60);
    define('MIN_MEMBER_COUNT', 10);
    define('MAXIMUM_EMAIL_LENGTH', 255);

    $error = [];
    

    //if form has been submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        $club_code = trim($_POST['club_code']);
        $club_name = trim($_POST['club_name']);
        $members = trim($_POST['members']);
        $email = trim($_POST['email']);
    }
    

    //INPUT VALIDATION

    if(empty($club_code))
    {
        $error['club_code'] = "Club code is required.";
    }

    elseif(strlen($club_code) !== CLUB_CODE_LENGTH)
    {
        $error['club_code'] = 'Club code must be exactly' . CLUB_CODE_LENGTH . ' characters long.';
    }


    if(empty($club_name))
    {
        $error['club_name'] = "Club name is required.";
    }

    elseif(strlen($club_name) > MAX_CLUB_NAME_LENGTH)
    {
        $error['club_name'] = 'Club name cannot exceed ' . MAX_CLUB_NAME_LENGTH . ' characters.';
    }


    if(empty($email))
    {
        $error['email'] = "Email address is required.";
    }

    elseif(strlen($email) > MAXIMUM_EMAIL_LENGTH)
    {
        $error['email'] = 'Email address cannot exceed ' . MAXIMUM_EMAIL_LENGTH . ' characters.';
    }

    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $error['email'] = 'Email address is not valid, please enter a valid email address';
    }


    if(empty($members))
    {
        $error['members'] = "Member count is required.";
    }

    else
    {
        $members_int = filter_var($members, FILTER_VALIDATE_INT);

        if($members_int === false)
        {
            $error['members'] = 'Member count must be a valid integer.';
        }
        elseif($members_int < MIN_MEMBER_COUNT)
        {
            $error['members'] = 'Member count must be at least ' . MIN_MEMBER_COUNT . '.';
        }
    }


    if(empty($error))
    {
        db_connect();  
    }

?>

<?php include './footer.php'; ?>