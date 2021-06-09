
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
</head>

<?php


if(isset($_POST['name'],$_POST["apellidos"],$_POST['edad'],$_POST['NSS'],$_POST['datepicker1'],$_POST['gender'])){
//variables a pasar

$nombre= $_POST['name'];
$edad= $_POST['edad'];
$NSS= $_POST['NSS'];
$fechana= $_POST['datepicker1'];
$genero= $_POST['gender'];
$apellidos= $_POST["apellidos"];


$server ="localhost";
$database= "medical";
$user= "Eli";
$pass= "root";

$conn = mysqli_connect($server, $user,$pass,$database);

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}



$sql="INSERT INTO paciente (names,apellidos,edad,NSS,fechana,genero) VALUES ('$nombre','$apellidos','$edad','$NSS','$fechana','$genero')";

if(mysqli_query($conn,$sql)){
    
}else{
    echo"Error: ".$sql . "<br>". mysqli_error($conn);
}

mysqli_close($conn);
	
}




 




?>

<body>
<!--background-->
<h1> </h1>
    <div class="bg-agile">
	<div class="book-appointment">
	<h2>Registrar paciente</h2>
				
			<form action="registre.php" method="post" name="appointment" id="appointment">
			<div id="resultados_ajax" class="gaps"></div>
			<div class="left-agileits-w3layouts same">
			
			<div class="gaps">
				<p>Nombre</p>
					<input type="text" name="name" placeholder="" required=""/>
			</div>
			<div class="gaps">
				<p>Apellidos</p>
					<input type="text" name="apellidos" placeholder="" required=""/>
            </div>
            <div class="gaps">
				<p>Edad</p>
					<input type="text" name="edad" placeholder="" required=""/>
			</div>
            <div class="gaps">
				<p>NSS</p>
					<input type="text" name="NSS" placeholder="" required=""/>
			</div>		
			
			</div>
			<div class="right-agileinfo same">
			<div class="gaps">
				<p>Fecha de Registro</p>		
						<input  id="datepicker1" name="datepicker1" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
			</div>
			
			<div class="gaps">
				<p>Genero</p>	
					<select class="form-control" name="gender" required>
						<option></option>
						<option value="M">Masculino</option>
						<option value="F">Femenino</option>
					</select>
			</div>
			
			</div>
			<div class="clear"></div>
						  <input type="submit" value="Registrar">
			</form>
			<a href="citas.php"><input type="submit" value="Citatorio"></a>
		</div>
   </div>
   

</body>
</html>