<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Clinic Management System</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style2.css">
<!--contact-->
  <section id="contact" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="ser-title"><font color=red>Delete Appointments</font></h2>
          <hr class="botm-line">
        </div>
        <div class="col-md-4 col-sm-4">
          
        </div>
        <div class="col-md-8 col-sm-8 marb20">
          <div class="contact-info">
            <h3 class="cnt-ttl">Delete appointment</h3>
            <div class="space"></div>
            
            <form method="post" class="contactForm">
              <div class="form-group">
                <input type="text" class="form-control br-radius-zero" name="patient_id" placeholder="Enter Patient ID to delete" required/>
                <div class="validation"></div>
              </div>
              	<div class="form-action">
                <input type="submit" name="delete" value="Delete Appointment" class="btn btn-form">
             </div>
            
			<?php

if (isset($_POST['delete'])){
$patient_id=$_POST['patient_id'];


	  $servername="localhost";
      $username = "root";
      $password = "";
      $dbname = "clinic";
	  
$link = mysqli_connect($servername, $username, $password, $dbname);
if (!$link){
	die("connection failed".connection_error());
} 
$result = mysqli_query($link, "delete from appointment where patient_id='$patient_id'");

	echo"<font color=red>Records have been successfully deleted</font>";
	echo"<br>";
	echo'<a href=http://localhost:8080/clinic/home.php>BACK</a>';
}

?>
</form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ contact-->
    <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>

</body>

</html>