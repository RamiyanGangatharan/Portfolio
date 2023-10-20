<?php
  $file = __FILE__;
  $date = "Friday, January, 13, 2023";
  $title = "Calculation Form";
  $description = "This is the webpage for my homepage";
  $banner = "CALCULATOR";
?>

<?php include('./header.php')?>

    <?php

        /*
            This is a series of if and else if statements to determine what type of calculation
            the user wants to use, after this is determined, the program calculates the answer
            depending on the parameters the user has given

            EXAMPLE: (V1 = 21, V2 = 21) == [add = 42, subtract = 0, multiply = 441, divide = 1]
        */


        // if value 1 or value 2 or the calculation options are empty, redirect the website back to the form.
        if (($_POST['val1'] == "") || ($_POST['val2'] == "") || ($_POST['calc'] == ""))
        {
            header("Location: calculate_form.php");
            exit;
        }


        //if the user selects the add option, excecute this certain calculation
        if ($_POST['calc'] == "add")
        {
            $result = $_POST['val1'] + $_POST['val2'];
        }


        //if the user selects the subtract option, excecute this certain calculation
        else if ($_POST['calc'] == "subtract")
        {
            $result = $_POST['val1'] - $_POST['val2'];
        }


        //if the user selects the multiply option, excecute this certain calculation
        else if ($_POST['calc'] == "multiply")
        {
            $result = $_POST['val1'] * $_POST['val2'];
        }


        //if the user selects the divide option, excecute this certain calculation
        else if ($_POST['calc'] == "divide")
        {
            $result = $_POST['val1'] / $_POST['val2'];
        }
    ?>
    
    <!--after all of the validation and calculation is done, output the result.-->
    <p>The result of the calculation is: <?php echo "$result"; ?></p>

<?php include('./footer.php')?>