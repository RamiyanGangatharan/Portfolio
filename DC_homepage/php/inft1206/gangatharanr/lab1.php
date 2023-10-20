<?php
  $file = __FILE__;
  $date = "Friday, January, 13, 2023";
  $title = "Lab 01: XHTML Basics Including Special Characters";
  $description = "This is the webpage for lab 1";
  $banner = "Lab 01: XHTML Basics Including Special Characters";
?>

<?php include('./header.php')?>

<!-- Description Paragraph -->
    <p class="website_desc">
    The purpose of this page (Lab 1: XHTML Basics including Special Characters)
    is to demonstrate the basic skills of web development.
    In this case I am demonstrating the skills of knowing various tags, how to
    format an HTML page, how to comply with traditional
    XHTML 1.0 standards, and how to use Inline/Embedded CSS in effective ways
    like for logos, links, pictures, and text formatting.
</p>

<hr/>

<!-- Section 1 -->
<h3 class="example">The Parabolic Formula</h3>

<!--Section Description-->
<p class="section_paragraph"> 
    The parabolic formula is a formula that shows the relation between two points
    in a graph in which displays curve. The way I made the formula below on HTML
    was to first incase the formula in header two tags, then type out the around
    italic tags, and finally put superscript tags around the number two.
</p>

<h2 class="example">
    <i> y = ax<sup>2</sup> + bx + c </i>
</h2>

<hr/>

<!--Section 2 -->
<h3 class="example">Currency Conversion (use of special characters)</h3>

<!--Section Description-->
<p class="section_paragraph"> 
    The way you display specific currency symbols are quite straight forward.
    To produce any currency symbol on to your HTML file, you must type out
    "ampersand + currency + semicolon" (remove the plus signs), then the amount
    of money you would like to display.
</p>

<p class="example"> 
    <b>
    $1.00CDN = $0.703USD = &euro;0.487 = &pound;0.651 = &yen;82.77
    </b>
</p>

<hr/>

<!-- Section 3 -->
<h3 class="example">Code Snippet</h3>

<!--Section Description-->
<p class="section_paragraph"> 
    First, you surround the entire code block in a &lt;code&gt; tag.
    Then, to do the first line of the code snippet, type out
    "#include". After that, use the less than and greater than
    symbols (amphersand + lt/gt + semicolon) around the word
    "iostream". To make the second line I typed out "int main()."
    For the third and fourth lines, I put in non-breaking space
    tags (amphersand + nbsp + semicolon), then I typed out the
    lines of code then put the less than and greater than symbols
    around "Hello World!".
</p>
    <div class="example">
        <code>
            #include &lt;iostream&gt;      
            int main()
            {
            &nbsp; cout &lt;&lt; "Hello World!" &lt;&lt; endl;
            &nbsp; return 0;
            }
        </code>
    </div>
<hr/>

<!-- Section 4 -->
<h3 class="example">Chemistry Equation</h3>

<!--Section Description-->
<p class="section_paragraph"> 
    How to print this equation below:
    The first step is to surround the entire equation in heading: 2 tags.
    The second step is to write out the equation without formatting inside the H2 tags.
    The third step is to use subscript tags (&lt;sub&gt;) around the numbers that need
    to be subscripted in the equation as stated in the chemistry syntax.
    (UPDATE: I have found a way to get arrows in HTML using <a href="https://www.toptal.com/designers/htmlarrows/">this site</a>.)
</p>

<!--Equation-->
<h2 class="example"> 2H<sub>2</sub> + O<sub>2</sub> &rarr; 2H<sub>2</sub>O + heat</h2>
<hr/>

<!-- Section 5 -->
<h3 class="example">List Example (Order Important)</h3>

<!--Section Description-->
<p class="section_paragraph"> 
    What you do to make a list like this will be to use an H2 tag for the title,
    
    then you first use the ordered list tag (&lt;ol&gt;), then using the list tag (&lt;li&gt;),
    type out your list inbetween the list tags.
    NOTE: make individual list tags per step like shown below in the example.
</p>

<h2 class="example">How to start a car</h2>
<ol>
    <li>do a small pre-trip inspection (look around the car, and make sure nothing is broken)</li>
    <li>make sure the seat and mirrors are in the right positions</li>
    <li>make sure your car is in park or in neutral</li>
    <li>press and hold the brake and/or clutch pedal(s)</li>
    <li>Place key in the ignition</li>
    <li>Turn the ignition key</li>
    <li>let go of the key once the car has turned over</li>
    <li>make sure the car is at a stable RPM before shifting to a gear level</li>
</ol>

<hr/>

<!-- Section 6 -->
<h3 class="example">List Example (order not Important)</h3>

<!--Section Description-->
<p class="section_paragraph"> 
    What you do to make a list like this will be to use an H2 tag for the title,
    then you first use the unordered list tag (&lt;ul&gt;), then using the list tag (&lt;li&gt;),
    type out your list inbetween the list tags.
    NOTE: make individual list tags per step like shown below in the example.
</p>

<h2 class="example">Pre-Trip Checklist</h2>
<ul>
    <li>Renew Passport</li>
    <li>Convert Currency</li>
    <li>Print out Reservations &amp; Itineraries</li>
    <li>Verify Vaccinations are up-to-date</li>
</ul>

<hr/>

<?php include('./footer.php')?>
