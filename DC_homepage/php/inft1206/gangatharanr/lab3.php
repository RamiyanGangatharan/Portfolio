<?php
  $file = "lab3.php";
  $date = "Friday, January, 13, 2023";
  $title = "Lab 03: Formatting and Layout with CSS";
  $description = "This is the webpage for lab 3";
  $banner = "Lab 03: Formatting and Layout with CSS";
?>

<?php include('./header.php')?>


  <p class="website_desc">
    The main purpose of this page is to demonstrate the use of CSS in a website. 
    The way I show the use of CSS in the website is the use and the explanation  
    of selectors, classes, and pseudo-classes. With these demonstrations, I will 
    give an explanation of the syntax behind each selector, class, or pseudo-class and, 
    a step-by-step 'field manual' on how and when to use the items stated above.
  </p>

  <h1 class="title">id (identification)</h1>

  <p class="website_desc">
            The syntax behind this is the following:  (<code>element id="identification name"</code>)  
  </p>

  <p class="website_desc"> 
            The example below uses the hr tag and sets the id to "solid". When I make id's like these,<br/>
            I tend to make the name literal as in if the id name is "solid" I make the hr tag a solid line. 
  </p>

  <div class="example">

          <p style="text-align: center;">
            <code>&lt;hr id="solid"&gt;</code>  
          </p>
          <hr id="solid"/> 

          <p>
            The way I made the solid line in CSS is as the following:  
          </p>
          
          <code>
            #solid 
            { 
              &nbsp;border: solid 2px; 
            }  
          </code>
  
  </div>

  <div>
    <h1 class="title">Element</h1>

    <p class="website_desc">
      The way you use the element selector is to use the literal HTML tag 
      as the CSS tag in your embedded CSS section or external CSS page 
      The only times I use this method of selector would be when I set 
      "global classes". For example, I only use these global elements 
      when I need to change something with the entire website.  
      For example, in this website I used the table, th, and td tags in CSS 
      to address ALL of the tables, table headers, and table data tags 
      to set a font family, border colour and size, and to set the padding. 
    </p>

    <p>HTML Syntax: <code>&lt;p&gt;Sample Text&lt;/p&gt;</code></p>
            <p>CSS Syntax:<br/></p>

      <code>
        p<br/>   
        { <br/> 
          &nbsp;text-align: center;<br/>  
          &nbsp;color: red; <br/> 
        }  <br/> 

        <br/>table, th, td<br/>
        { <br/> 
          &nbsp;border: 1px solid black; <br/> 
          &nbsp;padding: 2px; <br/> 
          &nbsp;Font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; <br/> 
        }   
        <br/> 
      </code>

      <h4 style="text-align: center;">Output Example: </h4>
      <p class="paragraph_tag_example">This is a paragraph tag</p>
      

      <table style="margin-left: 350px;">
        <tr>
          <td>Test Table Example</td>
        </tr>
      </table>
  </div>

  <br/>
  <hr/>
  <br/>

  <div>
    <h2 class="title">Body</h2>
    <p class="website_desc">
      The body tag represents the area of the website with all of the content. 
      The way I used the body tag in HTML is to wrap everything inside the HTML 
      tag but below the head tag in this tag that is written like this: &lt;body&gt;
        
      The way I used this tag as a selector in CSS was to set the height and width 
      of the website. In lab 3 specifically, I set it to 'auto'. Then, I set a  
      background colour of white to comply with the logo's background of white. 
    </p>
  </div>
            
  <br/>
  <hr/>
  <br/>
  
  <div>
      <h2 class="title">Table</h2>
      <p  class="website_desc">
        In this website, I have used many tables, for example, I have used six tables in lab 3. 
        On lab 2, I have used five tables. The way you format tables are a bit odd at first where 
        you need a table tag, then a table row tag, then a table data tag. Keep in mind, you need 
        to nest it this way to create proper tables. You are not able to nest td or tr tags into 
        each other. But, you can nest tables inside tables as shown many times and put td and tr 
        tags below and above eachother and it is shown throughout my website. 
      </p>

      <div style="margin-left: 75px" class="section_border">
      <p>HTML Syntax:</p>
        <code>
            &lt;table&gt; <br/>
          &nbsp;&nbsp;&lt;tr&gt; <br/>
          &nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt; <br/>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;p&gt;Table Information&lt;/p&gt; <br/>
          &nbsp;&nbsp;&nbsp;&nbsp;&lt;/td&gt; <br/>
          &nbsp;&nbsp;&lt;/tr&gt; <br/>
          &lt;/table&gt; <br/>
        </code>
      </div>

      <div class="section_border">
        <p>CSS Syntax:</p>
        <code>
          table, th, td  <br/>
          { <br/>
            &nbsp;border: 1px solid black; <br/>
            &nbsp;padding: 2px; <br/>
            &nbsp;Font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; <br/>
          } <br/><br/>
        </code>
      </div>
  </div>


    <br/>
    <hr/>
    <br/>

  <h2 class="title">tr (table row)</h2>
  <p class="website_desc">
    Table rows are the foundation of a table where it can make or break your table. 
    You make a table row tag every time you need a new "box" and/or row below an  
    existing table row. 
  </p>
  <p class="title"> 
    HTML Syntax: <code> &lt;tr&gt;&lt;/tr&gt; </code>
  </p>

    <br/>
    <hr/>
    <br/>

  <h2 class="title">td (table data)</h2>
  <p style="margin-left: 80px;" class="section_paragraph">
    Table data tags are the tags that hold all of the information you need to put into a table.  
    Without data tags, you cannot store information into those tables. 
  </p>

  <p class="title"> 
    HTML Syntax: <code>&lt;td&gt;&lt;/td&gt;</code>
  </p>

    <br/>
    <hr/>
    <br/>

  <h2 class="title">caption tag</h2>
  <p class="website_desc">
    This tag must be used right next to the table tag and provides  
    a caption above the table to basically annotate what the table  
    is for like closed captioning on movies and TV shows. 
  </p>
  <p class="title">
    HTML Syntax:
    <code>
      &lt;table&gt;&lt;caption&gt;&lt;/caption&gt;&lt;/table&gt; 
    </code>
  </p>

    <br/>
    <hr/>
    <br/>

  <table style="margin-left: 250px" class="BookTab">
    <tr>
      <td colspan="3">
      <p style="text-align: center">Types of Header/Heading tags</p>
      </td>
    </tr>
    <tr>
      <th>Header</th>
      <th>Output</th>
      <th>Syntax</th>
    </tr>
    <tr>
      <td class="title">h1</td>
      <td><h1>Heading #1</h1></td>
      <td><code>&lt;h1&gt;Heading #1&lt;h1&gt;</code></td>
    </tr>
    <tr>
      <td class="title">h2</td>
      <td><h2>Heading #2</h2></td>
      <td><code>&lt;h2&gt;Heading #2&lt;h2&gt;</code></td>
    </tr>
    <tr>
      <td class="title">h3</td>
      <td><h3>Heading #3</h3></td>
      <td><code>&lt;h3&gt;Heading #3&lt;h3&gt;</code></td>
    </tr>
    <tr>
      <td class="title">h4</td>
      <td><h4>Heading #4</h4></td>
      <td><code>&lt;h4&gt;Heading #4&lt;h4&gt;</code></td>
    </tr>
    <tr>
      <td class="title">h5</td>
      <td><h5>Heading #5</h5></td>
      <td><code>&lt;h5&gt;Heading #5&lt;h5&gt;</code></td>
    </tr>
    <tr>
      <td class="title">h6</td>
      <td><h6>Heading #6</h6></td>
      <td><code>&lt;h6&gt;Heading #6&lt;h6&gt;</code></td>
    </tr>
  </table>


    <br/>
    <hr/>
    <br/>

    <h1 class="title">Classes</h1>
      <p class="website_desc">
        This is a class selector, the most used selector in my website.  
        I use this selector for most of my CSS file and I sometimes use 
        descriptive names like ".Table_of_contents" where I use that for 
        the table of contents in the index page where it was used to format 
        the table cells itself and ".contents_TOC_heading" for the table 
        header tags of the table.  
      </p>

    <div style="margin-left: 60px;">
      <div style="vertical-align: top" class="section_border">
        <p>HTML Syntax:</p>
        <br/>
        <br/>
        <p>The code below sets the class and<br/> class name for the paragraph tag:</p>  
        <br/>
        <br/>
        <code style="padding-left: 40px;">
          &lt;p class = "title"&gt;
        </code>
        <br/>
      </div>

      <div class="section_border">
        <p>CSS Syntax: </p>
        <p>The code below makes the paragraph formatted for the paragraph tag:</p>  

        <code>
        .title <br/>
          { <br/>
            &nbsp;text-align: center; <br/>
            &nbsp;color: black; <br/>
            &nbsp;Font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; <br/>
          } <br/><br/>
        </code>
      </div>

      <div class="section_border">
        <p>Description:</p>
        <p style="padding-right: 2px;">   
          It is a paragraph tag that is associated with the class name of "title". The "title" class was mean't to set the text<br/>
          colour to black, align the text to the center the text in the page or section, then the font family to a specific font<br/>
      </p>
      </div>
    </div>
      
  <br/>
  <hr/>
  <br/>

      <h1 class="title">Anchor Tag</h1>
      <p>Description:</p>
      <p>
        The 'a' class refers to an anchor tag in which is most commonly used in hyperlinks.  
        For example I can use "&lt;a href="https://www.google.ca"&gt;Google&lt;/a&gt; 
        to link to the site "www.google.ca" and have the output text show as: 'Google' 
        in which is coloured purple or blue and underlined if there is no styling attached 
        to the tag.
      </p>


        <p>
            
          Here is an example of the statement above: 
            
        </p>
        
        <a class="unstyled" href="https://www.youtube.com/">This is a basic hyperlink.</a>

          

        <a style="text-decoration: none; color: darkslateblue;" href="https://www.youtube.com/">This is a styled hyperlink.</a>

        <br/>
        <br/>
        <hr/>

        <p>
          This is probably a good time to go over pseudo-classes in HTML, 
          (<a href="https://developer.mozilla.org/en-US/docs/Web/CSS/Pseudo-classes">Learn More</a>)
          pseudo-classes are selectors that selects elements that are in a specific state.
        </p>

        <h1 class="title"><b>a:hover</b></h1>

      <div style="margin-left: 175px" class="section_border">
        <p>CSS Syntax</p>
        <br/>
        <code>
            a <br/>
            { <br/>
                text-decoration: none; <br/>
                color: black; <br/>
            }  <br/>
            <br/>
            a:hover <br/>
            { <br/>
                color: red; <br/>
                border: 2px; <br/>
            } <br/>
        </code>
      </div>  

    <div style="display:inline-block">  
      <div style="vertical-align: top; padding-top: 20px" class="section_border">
        <p>HTML Syntax:</p>
        <br/>
        <code>&lt;a href="https://www.google.ca"&gt;Google&lt;/a&gt;</code>
      </div>
      <br/>
      <div style="padding-right: 18px" class="section_border">
        In the example above, it is showing that when<br/> 
        the anchor tag has the pseudo-class of 'hover',<br/>
        it enables you to make a class that changes <br/>
        state when you put your mouse above a link<br/>
        or "hover" above the link. <br/><br/>
        Output: <a href="https://www.google.ca">google</a>
        or <a class="unstyled" href="https://www.google.ca">google</a> if not styled
      </div>  
    </div>    
<?php include('./footer.php')?>