<!DOCTYPE HTML>
<html>

<head>
    <title>Medical-Guaymas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords"
        content="Medical Appointment Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs Sign up Web Templates, 
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



$sql="SELECT * FROM doctores WHERE id='".$editar."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
$row = $result->fetch_assoc()
   
    
?>


            <form action="save-doc.php" method="post" name="appointment" id="appointment">

                <div class="gaps">
                    <p>#</p>
                    <input type="text" name="id" value="<?php echo $row["id"] ?>" placeholder="" readonly required="" />
                </div>


                <div class="gaps">
                    <p>Nombre del doctor:</p>
                    <input type="text" name="nombre-doc" value="<?php echo $row["named"] ?>" placeholder="" required="" />
                </div>
                <div class="gaps">
                    <p>Area</p>
                    <input type="text" name="area"value="<?php echo $row["area"] ?>" placeholder="" required="" />
                </div>


                <div class="clear"></div>
                <input type="submit" value="Actualizar">

            </form>
            
        </div>
    </div>


</body>
</html>

<?php


} else {
  echo "0 results";
}



?>