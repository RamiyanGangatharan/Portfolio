<?php
$file = "lab4.php";
$date = "February 21, 2023";
$title = "Lab 4: PHP Examples from the Textbook";
$description = "Lab 4 page for my INFT 1206 Website";
$banner = "Lab 7 - Introduction to Databases";

include("./header.php");
?>    
    <p class="section_description">
        This webpage demonstrates my knowledge aquired from this web development class about Databases
        using PHP, HTML with Visual Studio Code. Additionally, with the integration of SQL in this website,
        we use the language of SQL with the program pgAdmin III.
    </p>
    <div style="display: inline-block; padding-top: 55px; padding-left: 55px;">
        <table>
            <tr class="title">
                <th>Title</th>
                <th>Page Number</th>
            </tr>

            <tr>
                <td><a class="contents_TOC_heading" href="lab7_bond_info.php">Bond Info (PHP)</a></td>
                <td class="title">00</td>
            </tr>
        
            <tr>
                <td>
                    <a class="contents_TOC_heading" href="lab7_auto_info.php">Auto Info (PHP)</a> 
                </td>
                <td class="title">01</td>
            </tr>
        </table>
    </div>
        
    <div style="display: inline-block; padding-left: 25px;">
        <table>
            <tr class="title">
                <th>Title</th>
                <th>Page Number</th>
            </tr>
            <tr>
                <td>
                    <a class="contents_TOC_heading" href="../gangatharanr/sql/lab7_bond_movies.sql">Bond Info (SQL)</a>
                </td>
                <td class="title">02</td>
            </tr>

            <tr>
                <td>
                    <a class="contents_TOC_heading" href="../gangatharanr/sql/lab7_auto_records.sql">Auto Info (SQL)</a>
                </td>
                <td class="title">03</td>
            </tr>
        </table>
    </div>
        

<?php include('footer.php')?>
    