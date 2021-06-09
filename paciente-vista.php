<?php
session_start();
?>

<?php

if(!isset($_SESSION["id"])) {
header("Location:paciente-index.php");
}



?>



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

$sql = "SELECT * FROM paciente WHERE NSS='" . $_SESSION["name"]."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      echo"<h1>Bienvenido paciente"." ".$row["names"]." ".$row["apellidos"]."</h1><h1>Aqui puede consultar sus citas</h1>";
      
    
   

  }
} else {
  echo "0 results";
  header("Location: paciente-index.php");
}
$conn->close();
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
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<!--fonts--> 
<link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
<!--//fonts--> 
</head>
<body>
<!--background-->
<h1> </h1>
    <div class="bg-agile">
	<div class="book-appointment" style="width: 500px; margin-left: 30%; text-align:center;">
    <h2>Mis citas</h2>
    


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

$sql = "SELECT * FROM citas WHERE NSS='".$_SESSION["name"]."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<div class='card text-white bg-dark mb-3' style='max-width: 18rem;left:15.4%; top:5px;  '>";
    echo"<div class=card-header style=background:gray;>".$row["NSS"]."</div>";
    echo"<div class=card-body>";
    echo"<h5 class=card-title >Tu doctor es:  ".$row["doctor"]."</h5>";
    echo"<p class=card-text  background-color:gray; >La fecha de la cita sera el dia:::".$row["fecha"].":::::La hora de la cita es::::".$row["hora"]."</p>";
    echo"</div>";
    echo"</div>";
    


  }
} else {
  echo "<h2>No tienes citas agendadas</h2>";
}
$conn->close();
?>
    




   

			
        </div>
        <a style="margin-bottom:0;" href="logoutP.php"><input type="submit" value="Cerrar Sesion"></a>
        
   </div>
   

</body>
</html>