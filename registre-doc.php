<?php


if(isset($_POST['nombre-doc'],$_POST['area'])){
//variables a pasar

$nombre= $_POST['nombre-doc'];
$area= $_POST['area'];
$pass= "admin";



$server ="localhost";
$database= "medical";
$user= "Eli";
$pass= "root";

$conn = mysqli_connect($server, $user,$pass,$database);

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}



$sql="INSERT INTO doctores (named,area,pas) VALUES ('$nombre','$area','$pass')";

if(mysqli_query($conn,$sql)){
    
}else{
    echo"Error: ".$sql . "<br>". mysqli_error($conn);
}

mysqli_close($conn);
	
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
	<h2>Registro-Doctores</h2>
				
			<form action="" method="post" name="appointment" id="appointment">

                
                <div class="gaps">
                    <p>Nombre del doctor:</p>
                        <input type="text" name="nombre-doc" placeholder="" required=""/>
                </div>
                <div class="gaps">
                    <p>Area</p>
                        <input type="text" name="area" placeholder="" required=""/>
                </div>
		
			
			<div class="clear"></div>
                          <input type="submit" value="Registrar">
                          
            </form>
            <a href="seleccion.php"><input type="submit" value="Regresar"></a>
		</div>
   </div>
   

</body>
</html>