<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Madepowes Inc</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style2.css">
  <!-- =======================================================-->
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
  <!--banner-->
  <section id="banner" class="banner">
    <div class="bg-color">
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="col-md-12">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
              <a class="navbar-brand" href="#"><img src="images/log.png" class="img-responsive" style="width: 140px; margin-top: -16px;"></a>
            </div>
            <div class="collapse navbar-collapse navbar-right" id="myNavbar">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#banner">Home</a></li>
                <li class=""><a href="#service"><font size=1>Welcome, to the Clinic Management System</font></a></li>
								
              </ul>
            </div>
          </div>
        </div>
      </nav>
      <div class="container">
        <div class="row">
          <div class="banner-info">
            <div class="banner-logo text-center">
              <img src="images/log.png" class="img-responsive">
            </div>
            <div class="banner-text text-center">
              <h1 class="white">Healthcare Made Easy</h1>
              
              <a href="add/add_appointment.php" class="btn btn-appoint">Add an Appointment.</a>
			  <a href="add/delete_appointment.php" class="btn btn-appoint">Delete an Appointment.</a>
            </div>
            
  </section>
  <section>
  <br>
  <div class="col-md-4 col-sm-4">
  </div>
         <div class="col-md-12">
          <h2 class="ser-title">Next Appointments</h2>
          <hr class="botm-line">
        </div>
        
		
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
echo"<font color=#1e90ff><center><table class=container border=0%><tr><th>Patient ID</th><th>Patient Name</th><th>Age</th><th>Gender</th><th>Occupation</th><th>Illness/Prescription</th><th>Contact</th><th>Address</th><th>Date</th></tr>";
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysqli_fetch_array($retval))
{
	echo"<tr><td>$row[0]</td><td>$row[1]</td><td> $row[2]</td><td> $row[3]</td><td> $row[4]</td><td> $row[5]</td><td> $row[6]</td><td> $row[7]</td><td> $row[8]</td></center>";
} 

mysqli_close($conn);
?>
</table>
</font>
</div>
 </section>
 <br>
 <br>
    <div >
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            © Copyright Madepowes. All Rights Reserved
            <div class="credits">
              
              Designed by <a href="https://facebook/madepowesinc">Madepowes Inc</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--/ footer-->

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>

</body>

</html>
