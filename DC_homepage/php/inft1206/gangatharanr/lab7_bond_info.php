<html>
<head>
<title></title>
</head>
<body>

	<?php
	$file = "lab7_bond_info.php";
	$date = "March, 29, 2023";
	$title = "Bond Movies";
	$description = "This is the webpage for Lab 7";
	$banner = "Lab 7 - James Bond Movies";
	?>

<?php include('./header.php')?>


	<p style="text-align: center;">
	This page utilizes several postgreSQL method calls.  Such as pg_connect(),
	pg_query(), and pg_fetch_result(). 
	</p>
	<!-- setup the table -->
	<table border="1" width="auto" align="center">
		<tr>
			<th width="50%">Movie</th>
			<th width="15%">Year</th>
			<th width="35%">Actor</th>
		</tr>

	<?php

	/*

	 This is a file for the demo for postgreSQL
	 where I implement a database for film information

	* PHP version 7.1
	
	* @author Ramiyan Gangatharan <ramiyan.gangatharan@dcmail.ca>

	* @version 1.0 (March 30, 2023)

	*/

		$output = ""; //Set up a variable to store the output of the loop 
		//connect
		$conn = pg_connect("host= 127.0.0.1 dbname = gangatharanr_db user = gangatharanr password= 100835223" );  
		//N.B. replace the YOUR variables with your specific information
		//NOTE: "host=localhost..." SHOULD work, but if there is a problem with the config on opentech, use 127.0.0.1 instead

		//issue the query
		$sql = "SELECT movies.title, movies.year, actors.name
					FROM movies, actors
					WHERE movies.actor=actors.id
					ORDER BY movies.year ASC";
			$result = pg_query($conn, $sql);
			$records = pg_num_rows($result);

		//generate the table
			for($i = 0; $i < $records; $i++)
			{  //loop through all of the retrieved records and add to the output variable
				$output .= "<tr><td>".pg_fetch_result($result, $i, "title")."</td>"; 
				$output .= "<td>".pg_fetch_result($result, $i, "year")."</td>"; 
				$output .= "<td>".pg_fetch_result($result, $i, "name")."</td></tr>"; 
			}
			echo $output; //display the output
	?>
	</table>
	<?php include('footer.php')?>
<!-- end the table -->

	