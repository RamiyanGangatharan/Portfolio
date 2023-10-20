<?php
  $file = __FILE__;
  $date = "Friday, January, 13, 2023";
  $title = "Calculation Form";
  $description = "This is the webpage for my homepage";
  $banner = "Calculation Form";
?>

<!--This file is used to store the form for a calculator example from the book-->
<?php include('./header.php')?>

<p class="section_paragraph">
  This is a form where it collects information for the actual calculator embedded in the webpage.</br>
  This site first asks for two numbers in the sections 'value 1' and 'value 2', then it asks you for what</br>
  type of calculation you would like to make, in this case, the basic mathematical operations as listed.</br>
</p>

<form method="post" action="calculate.php">
  <div style="display: inline-block; padding-left: 320px">
    <p>Value 1: <input type="text" name="val1" size="10"></p>
    <p>Value 2: <input type="text" name="val2" size="10"></p>
  </div>

  </br>
    <div style="display: inline-block; padding-left: 10px">
      <p style="display: inline-block; padding-left: 175px">Calculation:</br></p>
    </div>

    <div style="display: inline-block; padding-left: 10px">
      <input type="radio" name="calc" value="add">Addition</br>
    </div>

    <div style="display: inline-block; padding-left: 10px">
      <input type="radio" name="calc" value="subtract">Subtraction</br>
    </div>

    <div style="display: inline-block; padding-left: 10px">
      <input type="radio" name="calc" value="multiply">Multiplication</br>
    </div>

    <div style="display: inline-block; padding-left: 10px">
      <input type="radio" name="calc" value="divide">Division</br>
    </div>
  
    <p style="text-align: center"><input type="submit" name="submit" value="Calculate"></p>
</form>

<?php include('./footer.php')?>