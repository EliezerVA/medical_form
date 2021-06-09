<?php
session_start();
?>

<?php

if(!isset($_SESSION["id"])) {
header("Location:index.php");
}

?>


<!DOCTYPE HTML>
<html>
<head>
<title>Medical</title>
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
<body>

<?php


if(isset($_POST['paciente'],$_POST['number'],$_POST['email'],$_POST['symptoms'],$_POST['datepicker1'],$_POST['departament'],$_POST['gender'],$_POST['time'])){
//variables a pasar

$nombre= $_POST['paciente'];
$numero= $_POST['number'];
$email= $_POST['email'];
$sintomas=$_POST['symptoms'];
$fecha= $_POST['datepicker1'];
$doctor= $_POST['departament'];
$genero=$_POST['gender'];
$hora=$_POST['time'];


$server ="localhost";
$database= "medical";
$user= "Eli";
$pass= "root";

$conn = mysqli_connect($server, $user,$pass,$database);

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}



$sql="INSERT INTO citas (NSS,NumeroT,Email,Sintomas,fecha,doctor,genero,hora) VALUES ('$nombre','$numero','$email','$sintomas','$fecha','$doctor','$genero','$hora')";

if(mysqli_query($conn,$sql)){
    
}else{
    echo"Error: ".$sql . "<br>". mysqli_error($conn);
}


	
}



?>




<!--background-->
<h1>Medical- Agenda tu cita </h1>
    <div class="bg-agile">
	<div class="book-appointment">
	<h2>Hacer una cita</h2>
				
			<form action="#" method="post" name="appointment" id="appointment">
			<div id="resultados_ajax" class="gaps"></div>
			<div class="left-agileits-w3layouts same">
			
			<div class="gaps">
				<p>Pacientes</p>	
					<select class="form-control" name="paciente">
						<option></option>

						<?php
$servername = "localhost";
$username = "Eli";
$password = "root";
$dbname = "medical";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, names, edad, NSS, fechana, genero FROM paciente";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<option>".$row["NSS"]."</option>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
						
						
					</select>
			</div>	
				<div class="gaps">	
				<p>Número de teléfono</p>
					<input type="text" name="number" placeholder="" required=""/>
				</div>
				<div class="gaps">
				<p>E-mail</p>
						<input type="email" name="email" placeholder="" required="" />
				</div>	
				<div class="gaps">
				<p>Síntomas</p>
						<textarea name="symptoms" placeholder="" required="" ></textarea>
				</div>
			</div>
			<div class="right-agileinfo same">
			<div class="gaps">
				<p>Seleccionar fecha</p>		
						<input  id="datepicker1" name="datepicker1" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
			</div>
		
			<div class="gaps">
				<p>Doctor</p>	
					<select class="form-control" name="departament">
						<option></option>

						<?php
$servername = "localhost";
$username = "Eli";
$password = "root";
$dbname = "medical";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, named, area, pas FROM doctores";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<option>".$row["named"]."--".$row["area"]."</option>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
						
						
					</select>
			</div>
			<div class="gaps">
				<p>Genero</p>	
					<select class="form-control" name="gender" required>
						<option></option>
						<option value="M">Masculino</option>
						<option value="F">Femenino</option>
					</select>
			</div>
			<div class="gaps">
				<p>Hora</p>		
					<input type="text" id="timepicker" name="time" class="timepicker form-control" value="">	
			</div>
			</div>
			<div class="clear"></div>
						  <input type="submit" value="Realizar cita">
						  
						  
			</form>
			<a style="position: absolute; margin-left: 19%; top:58.5%; " href="seleccion.php"><input type="submit" value="Registro"></a>
			<a style="top: 0; position:absolute; margin-top:29.6%; left:55%;" href="logout.php"><input type="submit" value="Salir"></a>
		</div>
   </div>
   

</body>
</html>