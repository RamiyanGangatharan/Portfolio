<?php
	$file = "lab2.php";
	$date = "Friday, January, 13, 2023";
	$title = "Lab 02: Working With Tables in HTML";
	$description = "This is the webpage for lab 2";
	$banner = "Lab 02: Working With Tables in HTML";
?>

<?php include('./header.php')?>

		<p class="website_desc">
			The main purpose of this page is to demonstrate the use of tables and it's CSS in a website.
			The secondary purpose of this page is to demonstrate the use of buttons and the CSS associated
			with buttons like borders, padding, and box shadows. This website is divided into two tables,
			and further subdivided into table rows. 
		</p>
		<div class="section_border">
			<p class="title">
				<b>Section Description</b>
			</p>

			<p class="section_paragraph">
				This section of my webpage is for a description of different tags in the language of HTML. To be honest with you, it was a very tedious process making the entire website and was mind numbing. 
				In this textbox, I will explain the section in detail. The first step I made was to make a table tag (&lt;table&gt;), then make a caption tag (&lt;caption&gt;) with the caption: 'HTML Table Tags'. With that, 
				I put in some CSS and made it look decent with padding, and border styling. Step two, make a table row tag (&lt;tr&gt;) for each cell on the table. Within those table row tags, we will need to embed 
				table data tags (&lt;td&gt;) to put information into the cells created by table row tags. After all of that is done for each and every row and column of the cell, we move on to style the entire table 
				using padding and text align. Last but not least, we add all of the information into those table data tags using paragraph tags (&lt;p&gt;), then aligning all of the text accordingly. 
			</p>
		</div>

		<table class="TableTag" ><caption>HTML Table Tags</caption>
			<tr>
				<th>Tags</th>
				<th>Description</th>
			</tr>

			<tr>
				<td>&lt;table&gt;</td>
				<td class = "website_desc">
					Denotes the start of an HTML table in a web page
				</td>
			</tr>	

			<tr>
				<td>&lt;tr&gt;</td>
				<td class = "website_desc">
						Denotes the start of a row in an HTML table. These tags must exist inside &lt;table&gt;...&lt;table/&gt; 
						tags in order to be valid and work correctly. 
				</td>
			</tr>

			<tr>
				<td>&lt;td&gt;</td>
				<td class = "website_desc">
					Denotes a cell or table data in an HTML table. 
					These tags must exist inside &lt;tr&gt;...&lt;tr/&gt; 
					tags in order to be valid and work correctly. 
				</td>
			</tr>

			<tr>
				<td>&lt;th&gt;</td>
				<td class = "website_desc">
					Very similar to the &lt;td&gt; tags described above 
					but the text is bold and centered.
				</td>
			</tr>

			<tr>
				<td>&lt;caption&gt;</td>
				<td class = "website_desc">
					Will place a caption on an HTML table. 
					This tag must be implemented right after 
					the opening &lt;table &gt; tag in order 
					to be valid and work correctly.
				</td>
			</tr>
		</table>

			
		<br/>
		<hr id="Books" style="border: 1px dashed black;"/>
		<br/>

		<div class="BookDesc">
			<p class="title">
				<b>Section Description</b>
			</p>

			<p class="section_paragraph">
				This section of my webpage is a table containing information about the books that I have read which is a table that has five columns, four rows, table headers, and a caption. 
				The way I created this section was to make a table using table tags. Within this table tag, I implemented table row tags for each row (4). within those row tags, specifically 
				making the headers in the very first table row. I made table headers using table heading tags which I type out within the very first table row tag. After all of that is done, 
				I made individual rows and put in the information at this order: [Title, Author, Year of Publication, Description]. Then, like an array in python, I input the list in order 
				of the header tags in each individual table row tag.
			</p>
		</div>

		<table class="BookTab"> <caption>Books That I Have Read</caption>
			<tr>
				<th>
					Title
				</th>

				<th>
					Author
				</th>

				<th>
					Year of Publication
				</th>

				<th>
					Description
				</th>
			</tr>
			<tr>
				<td>
					The Hobbit
				</td>
				<td>
					J. R. R. Tolkien
				</td>
				<td>
					1937
				</td>
				<td>
					The Hobbit is set within Tolkien's fictional universe and follows the quest  
					of home-loving Bilbo Baggins, the titular hobbit, to win a share of the  
					treasure guarded by a dragon named Smaug. Bilbo's journey takes him from 
					his light-hearted, rural surroundings into more sinister territory. 
				</td>
			</tr>

			<tr>
				<td>
					Curious George
				</td>
				<td>
					Margret &amp; H.A. Rey
				</td>
				<td>
					1941
				</td>
				<td>
					The first adventure in this highly popular series tells how the 
					little monkey Curious George, caught in the jungle and brought 
					back to the city by a man in a yellow hat, can't help being 
					interested in all the new things around him. Though well meaning, 
					George's curiosity always gets him into trouble. 
				</td>
			</tr>

			<tr>
				<td>
					The Very Hungry Caterpillar
				</td>
				<td>
					Eric Carle
				</td>
				<td>
					1969
				</td>
				<td>
					A small caterpillar is born hungry and eats everything in sight until 
					it gets a stomach ache. After that experience, he eats a leaf and it 
					helps him to become a beautiful butterfly. The Very Hungry Caterpillar 
					is a story about a small caterpillar who emerges from an egg and begins 
					eating everything in sight. 
				</td>
			</tr>

			<tr>
				<td>
					Goosebumps: 
					Welcome to Dead House
				</td>
				<td>
					R. L. Stine
				</td>
				<td>
					1992
				</td>
				<td>
					Teenagers Amanda and Josh move to a run-down industrial town where a 
					dark secret about the local chemical factory is concealed by the  
					creepy neighbors. Thirteen-year-old Amanda has to leave her 
					friends and home behind to live in a gloomy industrial town. 
				</td>
			</tr>
		</table>
		<br/>
		<hr/>
		<br/>
		<div class="ScheduleDesc">
			<p class="title">
				<b>Section Description</b>
			</p>

			<p class="title">
				<b>Overview</b>
			</p>

			<p class="section_paragraph">
				This section of my webpage is a table containing my weekly schedule for the next fourteen weeks. 
			</p>

				
			<p class="title"><b>WARNING: this gets a bit complicated</b></p>
				

			<p class="section_paragraph">
				A method I used was to look at the DC Connect version of my schedule, draw it out on Microsoft Paint, 
				then I basically winged it and spent approximately three hours on this section alone with the formatting, 
				inline CSS, and the shear volume of text and keywords required to make the schedule at least readable. 
				So... I first use a table tag with a caption tag, then use an abundance of table row tags for <b>EACH. AND.  
				EVERY. ROW</b>; Then in the first tabe row tag I put in seven tags in total with a black space for the time, 
				then a table header tag for each day of the week except saturday and sunday. BUT I made header tags for 
				Monday through Friday and replaced Saturday and Sunday with "WEEKEND" then formatted all the cells  accordingly. 
			</p>
				
			<p class="title">
				<b>Formatting</b>
			</p>

				
			<p class="section_paragraph">
				Formatting was a bit tricky for this section because you had to take into consideration about the other cells' 
				positions. It is kind of like using .grid in Tkinter from Python where you literally put in "row=1, column=1" 
				but in HTML and CSS, you must use the syntax as follows:  
				&lt;td style= <sup>if applicable</sup> class <sup>if applicable</sup>= class_name &nbsp; rowspan = <sup>"row count"</sup> colspan = <sup>"column count"</sup>&gt;
					
			</p>
			<p class="section_paragraph">
				In this case, I had to do that for every table data tag and it was tedius at first but it became easier as cells 
				built up on each other but it was extremely time consuming for sure. The way I manipulated cells were to create 
				blank table data tags with a column and row span of "1" then copy and paste that blank tag as many times as the 
				cell needed to be shuffled over. In the context of styling, the inline and embedded CSS were pretty straight 
				forward containing many padding types, many margin types, in some cases, the use of box shadows with the use of 
				HEX values (#FFFFFF) along side with "shadow-values" (0px 0px 5px 5px) which are typically described in pixels 
				that shows the strength and dimensions of the shadow surrounding the buttons in this website. The way I have 
				implemented inline styles for specific cells were to use the keyword "background-color" then the colour I wanted. 
				For example for Web Development Fundamentals, I used the colour "lightgrey". Before this webpage was submitted, 
				I was playing around with the box-shadows in which I tried to go for the retro look of the 1990's with the 
				greenish-grey background for empty cells with a slate-grey shadow around it but after some consideration, 
				I decided to reserve the box-shadows to the buttons exclusively because I just did not like the look of it 
				with a black and white background of the website. To make the schedule "pop", I put some light colours on the 
				classes I took with different colours for each class to make it colour coded. For now, I will keep everything 
				else black and white. 
			</p>	
		</div>
			
		<hr/>

		<br/>
			
		<table class="Timetable"><caption>Ramiyan's Timetable</caption>
			<tr>
				<th class="Timecell"></th>
				<th>MONDAY</th>
				<th>TUESDAY</th>
				<th>WEDNESDAY</th>
				<th>THURSDAY</th>
				<th>FRIDAY</th>
				<th>WEEKEND</th>
			</tr>

			<tr>
				<td>6:10am/7:00am</td>
				<td class="Timecell" rowspan="1" colspan="2">
					Wake up and get ready
				</td>	
				<td class="Timecell"  rowspan="1" colspan="1"></td>
				<td class="Timecell"  rowspan="1" colspan="1"></td>
				<td class="Timecell"  rowspan="1" colspan="1"></td>
				<td class="Timecell"  rowspan="1" colspan="1"></td>	
			</tr>

			<tr>
				<td>7:10am/8:00am</td>
				<td class="Timecell" rowspan="1" colspan="2">
					COMMUTE
				</td>					
				<td class="Timecell"  rowspan="1" colspan="1"></td>
				<td class="Timecell"  rowspan="1" colspan="1"></td>
				<td class="Timecell"  rowspan="1" colspan="1"></td>
				<td class="Timecell"  rowspan="1" colspan="1"></td>
			</tr>

			<tr>
				<td>8:10am/9:00am</td>
				<td class="Timecell">coffee</td>
				<td class="Timecell" style="background-color: lightblue;" rowspan="2">
					INFT-1207-02  
					Software Testing 
					and Automation  
					8:10am - 10:00am 
					L-114
				</td>
				<td class="Timecell"  rowspan="1" colspan="1"></td>
				<td class="Timecell"  rowspan="1" colspan="1"></td>
				<td class="Timecell"  rowspan="1" colspan="1"></td>
				<td class="Timecell"  rowspan="1" colspan="1"></td>	
			</tr>

			<tr>
				<td>9:10am/10:00am</td>
				<td class="Timecell" style="background-color: lightgrey;" rowspan="2">
					INFT 1206-04  
					Web Development 
					Fundamentals 
						
					9:10am - 11:00am 
					SW - 201
				</td>
				<td class="Timecell"  rowspan="1" colspan="1"></td>
				<td class="Timecell"  rowspan="1" colspan="1"></td>
				<td class="Timecell"  rowspan="1" colspan="1"></td>
				<td class="Timecell"  rowspan="1" colspan="1"></td>
			</tr>

			<tr>
				<td>10:10am/11:00am</td>
				<td class="Timecell" style="background-color: lightgrey;" rowspan="2">
					INFT 1206-04  
					Web Development 
					Fundamentals 
						
					10:10am - 12:00pm 
					SW - 213
				</td>
				<td class="Timecell" rowspan="1" colspan="1">
					Wake up and get ready
				</td>
				<td class="Timecell"  rowspan="1" colspan="1"></td>
				<td class="Timecell"  rowspan="1" colspan="1"></td>
				<td class="Timecell"  rowspan="1" colspan="1"></td>
			</tr>

			<tr>
				<td>11:10am/12:00pm</td>
				<td class="Timecell" rowspan="1">
					GYM TIME
				</td>
				<td class="Timecell" rowspan="1" colspan="1">
					COMMUTE
				</td>
				<td class="Timecell" rowspan="1" colspan="1">
					Wake up and get ready
				</td>
				<td class="Timecell"  rowspan="1" colspan="1"></td>
				<td class="Timecell"  rowspan="1" colspan="1"></td>
			</tr>

			<tr>
				<td>12:10pm/1:00pm</td>
				<td class="Timecell" rowspan="1" colspan="2">
						
					LUNCH
						
						
				</td>
				<td class="Timecell" style="background-color: violet;" rowspan="2" colspan="1">
					<p>
						GNED-1304-AAA  
						Canadian 
						Government  
						12:10pm - 2:00pm 
						A - 319
					</p>
				</td>

				<td class="Timecell"  rowspan="1" colspan="1"></td>
				<td class="Timecell"  rowspan="1" colspan="1"></td>
				<td class="Timecell"  rowspan="1" colspan="1"></td>
			</tr>
			<tr>
				<td>1:10pm/2:00pm</td>
				<td class="Timecell" rowspan="1" colspan="2">
					STUDY TIME
				</td>
				<td class="Timecell" style="background-color: lightcoral;" rowspan="1" colspan="1">
					MGMT-1223-02  
					Systems 
					Development I 
						
					1:10pm - 2:00pm 
					ONLINE
				</td>
				<td class="Timecell"  rowspan="1" colspan="1"></td>
				<td class="Timecell"  rowspan="1" colspan="1"></td>
			</tr>
			

			<tr>
				<td>2:10pm/3:00pm</td>
				<td class="Timecell" style="background-color: lightgreen;" rowspan="2">
					COSC-1200-03  
					Object Oriented 
					Programming 
						
					2:10pm - 4:00pm 
					ONLINE
				</td>
				<td class="Timecell" style="background-color: lightcoral;" rowspan="2">
					MGMT-1223-02  
					Systems 
					Development I 
						
					2:10pm - 4:00pm 
					CFCE - 217
				</td>
				<td class="Timecell" rowspan="1" colspan="1">
					GYM TIME
				</td>
				<td class="Timecell" rowspan="1" colspan="1">
					LUNCH
				</td>
				<td class="Timecell"  rowspan="1" colspan="1"></td>
				<td class="Timecell"  rowspan="1" colspan="1"></td>
			</tr>

			<tr>
				<td>3:10pm/4:00pm</td>
				<td class="Timecell" rowspan="1" colspan="1">
					LUNCH
				</td>
				<td class="Timecell" rowspan="1" colspan="1">
					COMMUTE
				</td>	
				<td class="Timecell" rowspan="1" colspan="1">
					COMMUTE 
					(optional)
				</td>
				<td class="Timecell" style="background-color: darkkhaki;" rowspan="8" colspan="1">
					Shift Work 
					Tim Hortons 
					3:00pm - 11:00pm
				</td>
			</tr>

			<tr>
				<td>4:10pm/5:00pm</td>

				<td class="Timecell" rowspan="1" colspan="2">
					COMMUTE
				</td>	

				<td rowspan="2" colspan="1">
					STUDY TIME
				</td>

				<td class="Timecell" style="background-color: lightgreen;" rowspan="2">
					COSC-1200-03  
					Object Oriented 
					Programming 
						
					4:10pm - 6:00pm 
					C - 307
				</td>

				<td class="Timecell" style="background-color: lightgreen;" rowspan="2">
					COSC-1200-03  
					Object Oriented 
					Programming 
					(optional) 
						
					4:10pm - 6:00pm 
					C - 138
				</td>
			</tr>

			<tr>
				<td>5:10pm/6:00pm</td>
				<td class="Timecell"  rowspan="1" colspan="1"></td>
				<td class="Timecell"  rowspan="1" colspan="1"></td>
			</tr>

			<tr>
				<td>6:10pm/7:00pm</td>
				<td class="Timecell"  rowspan="1" colspan="1"></td>
				<td class="Timecell"  rowspan="1" colspan="1"></td>

				<td class="Timecell" style="background-color: lightblue;" rowspan="2" colspan="1">
					INFT-1207-02  
					Software Testing 
					and Automation  
					6:10pm - 8:00pm 
					L-118
				</td>

				<td class="Timecell" rowspan="1" colspan="1">
					break
				</td>

				<td class="Timecell" rowspan="1" colspan="1">
					COMMUTE
				</td>	
			</tr>

			<tr>
				<td>7:10pm/8:00pm</td>
				<td class="Timecell"  rowspan="1" colspan="1"></td>
				<td class="Timecell"  rowspan="1" colspan="1"></td>
				<td style="background-color: chartreuse;" rowspan="2" colspan="1">
					MGMT-1224-02  
					Business for 
					IT Professionals 
						
					7:10pm - 9:00pm 
					L-203
				</td>
				<td class="Timecell"  rowspan="1" colspan="1"></td>
			</tr>

			<tr>
				<td>8:10pm/9:00pm</td>	
				<td class="Timecell"  rowspan="1" colspan="1"></td>
				<td class="Timecell"  rowspan="1" colspan="1"></td>
				<td class="Timecell" rowspan="1" colspan="1">
					COMMUTE
				</td>	
				<td class="Timecell"  rowspan="1" colspan="1"></td>
			</tr>

			<tr>
				<td>9:10pm/10:00pm</td>
				<td class="Timecell"  rowspan="1" colspan="1"></td>
				<td class="Timecell"  rowspan="1" colspan="1"></td>
				<td class="Timecell"  rowspan="1" colspan="1"></td>
				<td class="Timecell" rowspan="1" colspan="1">
					COMMUTE
				</td>
				<td class="Timecell"  rowspan="1" colspan="1"></td>	
			</tr>

			<tr>
				<td class="Timecell">10:10pm/11:00pm</td>
				<td class="Timecell"  rowspan="1" colspan="1"></td>
				<td class="Timecell"  rowspan="1" colspan="1"></td>
				<td class="Timecell"  rowspan="1" colspan="1"></td>
				<td class="Timecell"  rowspan="1" colspan="1"></td>	
				<td class="Timecell"  rowspan="1" colspan="1"></td>
			</tr>

			<tr>
				<td class="Timecell">11:10pm/12:00am</td>
				<td class="Timecell"  rowspan="1" colspan="1"></td>
				<td class="Timecell"  rowspan="1" colspan="1"></td>
				<td class="Timecell"  rowspan="1" colspan="1"></td>
				<td class="Timecell"  rowspan="1" colspan="1"></td>
				<td class="Timecell"  rowspan="1" colspan="1"></td>
				<td class="Timecell"  rowspan="1" colspan="1"></td>
			</tr>

		</table>
		<hr/>
		<a style="padding-left: 250px;" href="#top">GO BACK TO THE TOP</a>
	<?php include('./footer.php')?>
