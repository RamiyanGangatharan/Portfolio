<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<?php require('./lab9_functions.php'); ?>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="./inft1206.css"/>

	<!--
	Author: Ramiyan Gangatharan
	Filename: <?php echo $file . "\n"; ?>
	Date: <?php echo $date . "\n"; ?>
	Description: <?php echo $description . "\n"; ?>
	<title>INFT1206 - <?php echo $title; ?></title>
	-->
</head>

<body>
<div id="container">
	<div id="header"><img src= "./images/official_logo.png" alt="YOUR SITE LOGO ALT" /><h1 style="margin-left:75px;" class="title"><?php echo $banner; ?></h1></div>

	<div id="sites">
		<ul>
			<li><a href="https://opentech.durhamcollege.org/pufferd/inft1206/">Course Website</a></li>
			<li><a href="https://www.w3schools.com">W3 - Schools</a></li>
			<li><a href="https://validator.w3.org">XHTML Validator</a></li>
			<li><a href="https://jigsaw.w3.org/css-validator/">CSS Validator</a></li>			
			<li><a href="https://php.net/manual/en/index.php">PHP Manual</a></li>
			<li><a href="https://www.durhamcollege.ca">Durham College</a></li>
            <li><a href="./template.php">Website Template</a></li>
		</ul>
	</div>
	<div id="content-container">
		<div id="navigation">

			<div class="button-container">
				<div class="fake-button">
				<a class="director" href="./index.php">Index</a>
				</div>

				<div class="fake-button">
				<a class="director" href="./lab1.php">Lab 01</a>
				</div>

				<div class="fake-button">
				<a class="director" href="./lab2.php">Lab 02</a>
				</div>

				<div class="fake-button">
				<a class="director" href="./lab3.php">Lab 03</a>
				</div>

				<div class="fake-button">
				<a class="director" href="./termtest1.php">Test 1</a>
				</div>

				<div class="fake-button">
				<a class="director" href="lab4.php">Lab 04</a>
				</div>

				<div class="fake-button">
				<a class="director" href="lab5.php">Lab 05</a>
				</div>

				<div class="fake-button">
				<a class="director" href="lab6.php">Lab 06</a>
				</div>

				<div class="fake-button">
				<a class="director" href="./termtest2.php">Test 2</a>
				</div>

				<div class="fake-button">
				<a class="director" href="./lab7.php">Lab 07</a>
				</div>

				<div class="fake-button">
				<a class="director" href="./lab9.php">Lab 09</a>
				</div>

				<div class="fake-button">
				<a class="director" href="./lab10.php">Lab 10</a>
				</div>

				<div class="fake-button">
					<a class="director" href = "./termtest3.php">Test 3</a>
				</div>

				<div class="fake-button">
					<a class="director" href = "./lab11.php">Bonus</a>
				</div>
			</div>

			<?php
				 function displayCopyright()
				 {
					echo  '<div id="footer">';

					displayCopyrightInfo();

					echo  '<p style="width: 1200px;">';
					echo  '<a href="http://validator.w3.org/check?uri=referer">';
					echo  '<img style="margin-right: 5px; height: 31px; width: 88px;" src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Transitional" />';
					echo  '</a>';
		
					echo '<a href="https://durhamcollege.ca/">';
					echo	'<img style="border: 0; width: 88px; height: 31px; text-align: center"';
					echo	'src="https://durhamcollege.ca/wp-content/uploads/dc-logos-2020-full.svg" alt="DC logo"/>';
					echo '</a>';

					echo '<a href="./index.php">';
					echo	'<img style="border: 0; width: 75px; height: 75px; text-align: center"';
					echo	'src= "./images/official_logo.png" alt="my logo #2"/>';
					echo '</a>';

					echo '<a href="http://jigsaw.w3.org/css-validator/check/referer">';
					echo	'<img style="border: 0; width: 88px; height: 31px; margin-right: 20px;"';
					echo	'src="http://jigsaw.w3.org/css-validator/images/vcss" alt="Valid CSS!"/>';
					echo '</a>';
					echo '</p>';
				 }
			?>
		</div>
	<div id="content">