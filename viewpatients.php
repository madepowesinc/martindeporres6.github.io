<!--
Author: Martin Mugumya
-->
<!DOCTYPE html>
<html>
<head>
<title>Clinic Management System</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Tiny Ui Login Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style2.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet">		<!-- font-awesome icons -->
<!-- //Custom Theme files -->
<!-- web font -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'><!--web font-->
<!-- //web font -->
</head>
<body>
<div class="main-agileits">
<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$sql = 'SELECT * from appointment';

mysqli_select_db($conn,'clinic');
$retval = mysqli_query($conn, $sql);
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysqli_fetch_array($retval))
{
	echo"<table border=1><tr><th>Patient ID</th><th>Patient Name</th><th>Age</th><th>Gender</th><th>Occupation</th><th>Contact</th><th>Address</th><th>Date</th></tr>
    <tr><td>$row[0]</td><td>$row[1]</td><td> $row[2]</td><td> $row[3]</td><td> $row[4]</td><td> $row[5]</td><td> $row[6]</td><td> $row[7]</td></table>";
} 

mysqli_close($conn);
?>
</div>
</body>
</html>