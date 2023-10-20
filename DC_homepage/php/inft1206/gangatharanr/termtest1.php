<?php
  $file = __FILE__;
  $date = "Friday, January, 13, 2023";
  $title = "Term Test 1";
  $description = "This is the webpage for term test 1";
  $banner = "Term Test 1";
?>

<?php include('./header.php')?>

<p class="section_paragraph">
	This web page will implement several topics that have been covered in Web Development - Fundamentals 
	<a href="https://opentech.durhamcollege.org/pufferd/inft1206/">INFT1206</a> CRN:13839 course this semester at Durham College
	This page implements the XHTML 1.0 standard (see validation image below), HTML Tables, and is styled using Cascading Stylesheet Sheets.
</p>

<table style="margin-left: 25px">
	<tr>
		<td colspan="4" style="text-align: center;">
			<h3 style="text-decoration:underline;">Semester 1 Computer Courses</h3>
		</td>
	</tr>

	<tr>
		<th>

		</th>
		<th>
			Course Name
		</th>
		<th>
			Course Code
		</th>
		<th>
			Credit Hours
		</th>
	</tr>
	<tr>
		<td style="width: 50px">
			<img class="termtest1_images" src="./images/comms.png" alt="comm1100"/>
		</td>

		<td>
			<p class="title">Communication Foundations</p>
		</td>

		<td>
			<code>COMM 1100</code>
		</td>

		<td class="title">
			3.0
		</td>
	</tr>

	<tr>
		<td>
			<img class="termtest1_images" src="./images/hardware.png" alt="comp1116"/>
		</td>

		<td>
			<p class="title">Computer Systems - Hardware</p>
		</td>

		<td>
			<code>COMP 1116</code>
		</td>

		<td class="title">
			4.0
		</td>
	</tr>

	<tr>
		<td>
			<img class="termtest1_images" src="./images/programming.png" alt="cosc1100"/>
		</td>

		<td>
			<p class="title">Introduction to Programming</p>
		</td>

		<td>
			<code>COSC 1100</code>
		</td>

		<td class="title">
			6.0
		</td>
	</tr>

	<tr>
		<td>
			<img class="termtest1_images" src="./images/network.png" alt="inft1104"/>
		</td>

		<td>
			<p class="title">Data Communications &amp; Networking 1</p>
		</td>

		<td>
			<code>INFT 1104</code>
		</td>

		<td class="title">
			4.0
		</td>
	</tr>

	<tr>
		<td>
			<img class="termtest1_images" src="./images/database.png" alt="inft1105"/>
		</td>

		<td>
			<p class="title">Introduction to Databases</p>
		</td>

		<td>
			<code>INFT 1105</code>
		</td>

		<td class="title">
			4.0
		</td>
	</tr>

	<tr>
		<td>
			<img class="termtest1_images" src="./images/math.png" alt="math1110"/>
		</td>

		<td>
			<p class="title">Mathematics for IT</p>
		</td>

		<td>
			<code>MATH 1110</code>
		</td>

		<td class="title">
			3.0
		</td> 
		
	</tr>

	<tr>
		<td colspan="4">
			Course names and codes come from the <a href="https://durhamcollege.ca/programs/computer-programming-analyst-three-year">Computer Programming &amp; Analysis </a>program  information site.
		</td>
	</tr>

</table>
<?php include('./footer.php')?>