<?php
    //Author: Ramiyan Gangatharan (100835223)
    $file = __FILE__;
    $date = "Thursday, April, 20, 2023";
    $title = "Lab 11";
    $description = "This is the webpage for lab 11";
    $banner = "Lab 11: Math Quiz";

    include('./header.php') 
?>

<div>
  <p class="section_paragraph">
    This is a bonus lab for Web Development I in which is a demonstration of a math quiz.
    This site uses HTML, CSS, &amp; PHP. Most of the code consists of PHP functions and the 
    HTML is used for the form and button. Honestly I was not able to implement the counter
    functionality where it either broke the site or it did not reset to zero when the page 
    was closed and reopened in another tab.
  </p>
</div>

<div>
  <form method="POST">
    <?php

        function evaluate( $d1, $d2, $op) 
        {
            switch($op) 
            {
                case '+' : // addition
                    $result = $d1 + $d2;
                    break;
                case '-' : // subtraction
                    $result = $d1 - $d2;
                    break;
                case '*' : // multiplication
                    $result = $d1 * $d2;
                    break;
                default :  // Unidentified, return safe value
                    $result = 0;
            }
            return $result;
        }


        /* Return a number in the range 0-9 inclusive
        */
        function random_digit() 
        {
            return mt_rand(0,9);
        } // end functionranddigit()

        function random_operator()
        {
            $ops = array('+', '-', '*');
            // pick a random index between zero and highest index in array.
            $randnum = mt_rand(0,sizeof($ops)-1);
            return $ops[$randnum];  // Use the index to pick the operator
        }

      $num1 = random_digit();
      $num2 = random_digit();
      $op = random_operator();
      $correct_answer = evaluate($num1, $num2, $op);

      echo "<div style='display:inline-block'><strong class='section_paragraph'>$num1 $op $num2 = ?</strong></div>";
      echo "<div style='display:inline-block'><input type='text' name='answer' size='10' /></div>";
      echo "<input type='hidden' name='correct_answer' value='$correct_answer' />";

    if (isset($_POST['answer'])) 
    {
        $answer = $_POST['answer'];
        $correct_answer = $_POST['correct_answer'];

        if ($answer == $correct_answer) 
        {
            echo "<p class='section_paragraph' style='color:green'>Correct!</p>";
        } 
        else 
        {
            echo "<p class='section_paragraph' style='color:red'>Incorrect. The correct answer is $correct_answer.</p>";
        }
    }
    ?>
    
    <div>
      <input style='margin-top: 20px; margin-left: 20px;' type='submit' value='Try it!' />
    </div>
    
  </form>
</div>
  