<?php
session_start();
$message="";
if(count($_POST)>0) {
 $con = mysqli_connect('localhost','Eli','root','medical') or die('Unable To connect');
$result = mysqli_query($con,"SELECT * FROM admins WHERE adminname='" . $_POST["admin"] . "' and adminpass = '". $_POST["passowrd"]."'");
$row  = mysqli_fetch_array($result);
if(is_array($row)) {
$_SESSION["id"] = $row['id'];
$_SESSION["name"] = $row['adminname'];
} else {
$message = "Contraseña erronea";
}
}
if(isset($_SESSION["id"])) {
header("Location:citas.php");
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
<link href="css/style.css" rel='stylesheet' type='text/css' /><link href="css/style.css" rel='stylesheet' type='text/css' />
<!--fonts--> 
<link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
<!--//fonts--> 


<style>

input[type="password"]{
    width: 85%;
    color: #fff;
    outline: none;
    font-size: 0.9em;
    line-height: 25px;
    padding: 5px 10px;
    border: none;
    border-bottom: 2px solid #0b6fb2;
    -webkit-appearance: none;
    margin: .3em 0em 1em;
    font-family: 'Roboto', sans-serif;
    background: rgba(127, 178, 212, 0.31);
}

</style>
</head>
<body>
<!--background-->
<h1> </h1>
    <div class="bg-agile">
	<div class="book-appointment" style="width: 500px; margin-left: 30%;">
	<h2>Inicia sesion</h2>
				
			<form action="" method="post" name="appointment" id="appointment">

                <div class="gaps">
                    <p>Admin</p>
                        <input type="text" name="admin" placeholder="" required=""/>
                </div>
                <div class="gaps">
                    <p>Contraseña</p>
                        <input type="password" name="passowrd" placeholder="" required=""/>
                </div>
		
			
			<div class="clear"></div>
						  <input type="submit" name="submit" value="Iniciar">
			</form>
		</div>
   </div>
   

</body>
</html>