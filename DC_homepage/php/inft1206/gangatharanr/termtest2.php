

<?php
  $file = __FILE__;
  $date = "Friday, January, 13, 2023";
  $title = "Ramiyan's Test 2 - Hourly Wage Calculator";
  $description = "This is the webpage for my homepage";
  $banner = "Term Test 2";

  /* 
    Author: Ramiyan Gangatharan
    Date 3/20/2023
    Course Code: INFT 1206-04
  */
?>

<?php include('./header.php')?>

<?php 
  define('STUDENT_MINIMUM_WAGE', 15.50);
  $error1 = "<br/><br/> please enter a value for all fields";
  $error2 = "<br/><br/> The hourly rate must be at or above $15.50.";
  $error3 = "<br/><br/> please enter numeric values only.";
  $error4 = "<br/><br/> Hours Worked must be above zero.";
?>

<?php 
//to make sure form is submitted
 if ($_SERVER['REQUEST_METHOD'] == 'POST')
 {
  $rate = $_POST['rate'];
  $worked = $_POST['worked'];
 }
?>

<p class= "section_paragraph">
This web page will implement several topics that have been covered 
in the Web Development Fundamentals course
<a href="http://opentech.durhamcollege.org/pufferd/inft1205/">INFT1206</a>
CRN: 13839 course this semester. This page still implements CSS technology,
and ensures XHTML validation but was created to demonstrate PHP functionality
including working with HTML forms, data validation (including making the forms 
"sticky"), PHP constants and functions.This page, after doing some data validation, 
will calculate the total pay based on hours worked and the hourly rate.
The minimum hourly wage will be the student hourly rate of $<?php echo constant(number_format('STUDENT_MINIMUM_WAGE', 2));?>
</p>

<form method = "post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <div style="display: inline-block;">
      <div style="margin-left: 40px;">

        <label style="margin-left: 15px;" for="rate">Hourly Rate: </label>
        <input type="text" id="rate" name="rate" value="<?php echo isset($_POST['rate']) ? $_POST['rate'] : ''; ?>"/><br/><br/>

        <label for="stop">Hours Worked: </label>
        <input type="text" id="worked" name="worked" value="<?php echo isset($_POST['worked']) ? $_POST['worked'] : ''; ?>"/><br/><br/>
        <input style="margin-left: 100px;" type="submit" value="Calculate Wages" />
        <?php

        if($rate == '' || $worked == '')
        {
          echo $error1;
        };

        if($rate < STUDENT_MINIMUM_WAGE)
        {
          echo $error2;
        }
        
        if(!is_numeric($rate))
        {
          echo $error3;
        }
        if(!is_numeric($worked) || $worked < 0)
        {
          echo $error4;
        }
        else
      {
        echo "<br/><br/> For a person working " . $worked . " hours at $" . $rate . " per hour, they will make a total of $" . number_format($rate * $worked, 2) .  "."; 
      }
      ?>
      
      </div> 
<!--form ends here-->
    </div>
</form>

<!-- HTML COMMENT-->

<?php include('./footer.php')?>