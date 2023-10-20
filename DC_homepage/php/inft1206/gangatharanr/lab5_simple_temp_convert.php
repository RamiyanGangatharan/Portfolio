<?php
  $file = __FILE__;
  $date = "Friday, January, 13, 2023";
  $title = "Index";
  $description = "This is the webpage for my homepage";
  $banner = "Temperature Conversion";
?>

<?php include('./header.php')?>

<p class = "section_paragraph">
    This is a temperature conversion table that consists of the tempuratures Fahrenheit and Celcius.</br>
    This table contains the temperature range of -40 degrees celcius and 100 degrees celcius or -40</br>
    degrees fahrenheit and 212 degrees fahrenheit.</br>
</p>

<table style="margin-left: 220px"><caption>Temperature Conversion Table</caption>

    <tr>
        <th class="title" style="padding-left: 28px; padding-right: 28px;">
            Celcius
        </th>

        <th class="title" style="padding-left: 15px; padding-right: 15px;">
            Fahrenheit
        </th>
    </tr>

    <?php
        for ($i = -40; $i <= 100; $i += 10)
        {
            $conversion = 9/5 * $i + 32;
            echo "<tr>
                    <td class= 'title'>$i&degC</td>
                    <td class= 'title'>$conversion&degF</td>
                  </tr>";
        }
    ?>

</table>

<?php include('./footer.php')?>