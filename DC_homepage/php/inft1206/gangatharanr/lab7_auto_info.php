<html>
<head>
<title>Favourite Cars</title>
</head>
<body>

<?php
	$file = "lab7_auto_info.php";
	$date = "March, 29, 2023";
	$title = "Favourite Cars";
	$description = "This is the webpage for Lab 7";
	$banner = "Lab 7 - My Favourite Cars";
	?>

<?php include('./header.php')?>



	<p style="text-align: center;">
	This page is a demonstration on the use of SQL (specifically postgreSQL and pgAdminIII) where we integrate a regular PHP site into something useful like SQL.
	This site is a site for the sql for vehicular information. The information in the file is the VIN number, the make, model, year, owner, msrp, and date of purchase.
	</p>
	<!-- setup the table -->
	<table border="1" width="100%" align="center" style="text-align: center;">
		<tr>
            <th>MAKE</th>
            <th>MODEL</th>
            <th>YEAR</th>
            <th>MSRP</th>
		</tr>
        
	<?php

	/*

	 This is a file for the demo for postgreSQL
	 where I implement a database for vehicle information

	*

	* PHP version 7.1

	*

	* @author Ramiyan Gangatharan <ramiyan.gangatharan@dcmail.ca>

	* @version 1.0 (March 30, 2023)

	*/

		$output = ""; //Set up a variable to store the output of the loop 
		//connect
		$conn = pg_connect("host= 127.0.0.1 dbname = gangatharanr_db user = gangatharanr password= 100835223" );  
		//N.B. replace the YOUR variables with your specific information
		//NOTE: "host=localhost..." SHOULD work, but if there is a problem with the config on opentech, use 127.0.0.1 instead

		//issue the query
        $sql = 
		"SELECT make, model, vehicle_year, msrp 
		FROM automobiles 
		ORDER BY vehicle_year ASC;";

			$result = pg_query($conn, $sql);
			$records = pg_num_rows($result);

		//generate the table
			for($i = 0; $i < $records; $i++)
			{  //loop through all of the retrieved records and add to the output variable
				$output .= "<tr>"; 
				$output .= "<td>".pg_fetch_result($result, $i, "make")."</td>"; 
                $output .= "<td>".pg_fetch_result($result, $i, "model")."</td>"; 
                $output .= "<td>".pg_fetch_result($result, $i, "vehicle_year")."</td>"; 
                $output .= "<td>".pg_fetch_result($result, $i, "msrp")."</td>"; 
				$output .= "</tr>"; 
			}
			echo $output; //display the output
	?>
	</table>
	<?php include('footer.php')?>
<!-- end the table -->

	