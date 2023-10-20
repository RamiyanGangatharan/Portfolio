<?php
  $file = __FILE__;
  $date = "Monday, March, 13, 2023";
  $title = "Lab 6";
  $description = "This is the webpage for lab 6";
  $banner = "Lab 6: Self-Referring Forms with Data Validation";

  /* 
    Author: Ramiyan Gangatharan
    Date: 3/15/2023
  */
?>

<?php include('./header.php')?>

<?php 
  //COMMENT GUIDE
  
  //regular comment
  #python style hash comment
  /* C - Style multi-line comment */

  //This is a constant defining the upper limit of iterations.
  define('MAX_ITERATIONS', 100);
  //initalizing variables
  $start = '';
  $stop = '';
  $incr = '';
  $error = '';
  $output = '';
 ?>

<!-- HTML COMMENT-->
<?php 
//to make sure form is submitted
 if ($_SERVER['REQUEST_METHOD'] == 'POST')
 {
  $start = $_POST['start'];
  $stop = $_POST['stop'];
  $incr = $_POST['incr'];
 }
?>

<p class="section_description">
  This webpage demonstrates PHP skills via forms with validation. We first start off with the input section where I use labels and input tags to aquire data
  from the user to initiate the calculation. I used labels because I have used them before for web design in my spare time. After all of that, I start validation
  where I check if the form has been submitted. Once the form checks that the form has been submitted, It checks if there is any information in the text fields. 
  If not, it will redirect you back to the webpage for you to input your values. As soon as that has been validated, it checks for if the user input is a number
  or not. Then, it checks if the numbers inputted are in an appropriate range (less than 100 iterations and more than zero iterations &amp; the starting temperature
  must be more than the larger than the ending or stop temperature). FINALLY! After all of that, the generate button can be pressed and can now display a valid table.
</p>

<!--The actual form starts here-->
<form method = "post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <div style="display: inline-block;">
      <div style="margin-left: 40px;">
        <label for="start">Start temperature:</label>
        <input type="text" id="start" name="start" value="<?php echo isset($_POST['start']) ? $_POST['start'] : ''; ?>"/><br/><br/>

        <label for="stop">Stop temperature:</label>
        <input type="text" id="stop" name="stop" value="<?php echo isset($_POST['stop']) ? $_POST['stop'] : ''; ?>"/><br/><br/>
      </div>  

      <label for="incr">Temperature increment:</label>
      <input type="text" id="incr" name="incr" value="<?php echo isset($_POST['incr']) ? $_POST['incr'] : ''; ?>"/><br/><br/>
    
<!--The actual form ends here-->

      <?php
        //VALIDATION

        //if the fields are empty, redirect.
        if($start == '' || $stop == '' || $incr == '')
        {
          $error .= "please enter a value for all fields";
        }

        //if the fields are not numbers, redirect.
        elseif(!is_numeric($start) || !is_numeric($stop) || !is_numeric($incr))
        {
          $error .= "please enter numeric values only.";
        }

        //if the start field is greater than or equal to the stop field, redirect.
        elseif($start >= $stop)
        {
          $error .= "Start temp must be greater than stop temp.";
        }

        //if the increment is less than zero, redirect.
        elseif($incr <= 0)
        {
          $error .= "Your increment amount must be a positive integer.";
        }

        //if there is no error, redirect to a table.
        if ($error == '')
        {
          $output .= '<table style= "margin-left: 250px; vertical-align: top;">';
          $output .= '<tr><th>Celsius</th><th>Fahrenheit</th></tr>';

          // for loop to create the contents of a table dictated by user input.
          for ($temp = $start; $temp <= $stop; $temp += $incr) 
          {
            $conversion = 9/5 * $temp + 32;
            $output .= '<tr>';
            $output .= '<td class= "title">' . $temp . '&degC' . '</td>';
            $output .= '<td class= "title">' . $conversion . '&degF' .'</td>';
            $output .= '</tr>';
          }
          $output .= '</table>';
    
          //lab6_calculation.php is where a part of the calculation is held
          include('lab6_calculation.php');
        }

      ?>
      <!-- button :) -->
      <input type="submit" value="Generate table" />
    </div>
</form>

<?php echo $output; ?>


<?php include('footer.php')?>