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
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
    <!--fonts-->
    <link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <!--//fonts-->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>

</head>

<body>
    <!--background-->
    <h1> </h1>
    <div class="bg-agile" >
        <div class="book-appointment" style="width: 900px; margin-left: 16%; text-align:center;">
            <h2>Pacientes En Alta</h2>
            <div class="gaps">
                <table class='table table-dark' style="margin-left: -5%;">
                    <thead>
                        <tr>
                            <th scope='col'>#</th>
                            <th scope='col'>Nombre</th>
                            <th scope='col'>Apellidos</th>
                            <th scope='col'>Edad</th>
                            <th scope='col'>NSS</th>
                            <th scope='col'>Genero</th>
                            <th scope='col'>Eliminar</th>
                            <th scope='col'>Actualizar</th>

                        </tr>
                    </thead>
                    <tbody>



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

$sql = "SELECT * FROM paciente";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
 
    
      echo"<tr>";
    echo "<th scope='row'>".$row["id"]."</th>";
    echo "<th>".$row["names"]."</th>";
    echo "<th>".$row["apellidos"]."</th>";
    echo "<th>".$row["edad"]."</th>";
    echo "<th>".$row["NSS"]."</th>";
    echo "<th>".$row["genero"]."</th>";
    echo"<th><a href='eliminar.php?dat=".$row["id"]."&dat2=".$row["NSS"]."'><button type='button' class='btn btn-danger'></button></a></th>";
    echo"<th><a href='editar.php?dat=".$row["id"]."'><button type='button' class='btn btn-success'></button></a></th>";
   echo" </tr>";
  

  }
} else {
  echo "0 results";
}
$conn->close();
?>


                    </tbody>

                </table>
            </div>







        </div>
        <a style="margin-bottom:0;" href="seleccion.php"><input type="submit" value="Regresar"></a>
    </div>


</body>

</html>