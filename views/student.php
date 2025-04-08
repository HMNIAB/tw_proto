<html>
	<?php 
		include_once('templates/header.php');
		include_once('templates/navbar.php');
	?>
	<body>
		<h1>Student Page</h1>
		<h2>Instructions:</h2>
        <p>Please fill out at a minimum, first name, last name, team affiliation (selecting 'other' if not an athlete), and one professor email with the metting frequency. This information will be used by faculty to send email(s) to those who need to know regarding student absences.</p>
		<?php include_once('templates/studentForm.php')?>
	</body>
</html>