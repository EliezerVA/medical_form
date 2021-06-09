<?php
session_start();
$message="";
if(count($_POST)>0) {
 $con = mysqli_connect('localhost','Eli','root','medical') or die('Unable To connect');
$result = mysqli_query($con,"SELECT * FROM paciente WHERE NSS='" . $_POST["NSS"]."'");
$row  = mysqli_fetch_array($result);
if(is_array($row)) {
$_SESSION["id"] = $row['id'];
$_SESSION["name"] = $row['NSS'];
} else {
$message = "Invalid Username or Password!";
}
}
if(isset($_SESSION["id"])) {
header("Location:paciente-vista.php");
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Medical-Guaymas</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Medical Appointment Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs Sign up Web Templates, 
 Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="css/wickedpicker.css" rel="stylesheet" type='text/css' media="all" />
<link rel="stylesheet" href="css/paciente.css">
<!--fonts--> 
<link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
<!--//fonts--> 
</head>
<body>
<!--background-->
<h1> </h1>
    <div class="bg-agile">
	<div class="book-appointment" style="width: 500px; margin-left: 30%;">
	<h2>Bienvenido-Medical</h2>
				
			<form action="" method="post" name="appointment" id="appointment">

                
                <div class="gaps">
                    <p>NSS</p>
                        <input type="text" name="NSS" placeholder="" required=""/>
                </div>
		
			
			<div class="clear"></div>
						  <input type="submit" value="Iniciar">
			</form>
		</div>
   </div>
   

</body>
</html>