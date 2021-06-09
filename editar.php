<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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






$editar=$_GET["dat"];


$server ="localhost";
$database= "medical";
$user= "Eli";
$pass= "root";

$conn = mysqli_connect($server, $user,$pass,$database);
if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}



$sql="SELECT * FROM paciente WHERE id='".$editar."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
$row = $result->fetch_assoc();
   
    
?>
	





 






<body>
<!--background-->
<h1> </h1>
    <div class="bg-agile">
	<div class="book-appointment">
	<h2>Registrar paciente</h2>
				
			<form action="save-edit.php" method="post" name="appointment" id="appointment">
			<div id="resultados_ajax" class="gaps"></div>
			<div class="left-agileits-w3layouts same">
            <div class="gaps">
				<p>#</p>
					<input type="text" name="id" placeholder="" value="<?php echo $row["id"] ?>" readonly required=""/>
			</div>
			
			<div class="gaps">
				<p>Nombre</p>
					<input type="text" name="name" placeholder="" value="<?php echo $row["names"] ?>" required=""/>
			</div>
			<div class="gaps">
				<p>Apellidos</p>
					<input type="text" name="apellidos" placeholder="" value="<?php echo $row["apellidos"] ?>" required=""/>
            </div>
            <div class="gaps">
				<p>Edad</p>
					<input type="text" name="edad" placeholder="" value="<?php echo $row["edad"] ?>" required=""/>
			</div>
            <div class="gaps">
				<p>NSS</p>
					<input type="text" name="NSS" placeholder="" value="<?php echo $row["NSS"] ?>" required=""/>
			</div>		
			
			</div>
			<div class="right-agileinfo same">
			<div class="gaps">
				<p>Fecha de nacimiento</p>		
						<input  id="datepicker1" name="datepicker1" value="<?php echo $row["fechana"] ?>" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
			</div>
			
			<div class="gaps">
				<p>Genero</p>	
					<select class="form-control"  name="gender" required>
						<option ><?php echo $row["genero"] ?></option>
						<option value="M">Masculino</option>
						<option value="F">Femenino</option>
					</select>
			</div>
			
			</div>
			<div class="clear"></div>
						<input type="submit" value="Actualizar"></a>
			</form>
			
		</div>
   </div>
   

</body>
</html>

<?php


} else {
  echo "0 results";
}
$conn->close();


?>