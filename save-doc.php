<?php




$editar= $_POST["id"];
$nombre= $_POST['nombre-doc'];
$area= $_POST['area'];



$server ="localhost";
$database= "medical";
$user= "Eli";
$pass= "root";

$conn = mysqli_connect($server, $user,$pass,$database);

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}



$sql="UPDATE doctores SET named='".$nombre."', area='".$area."' WHERE id='".$editar."'"; 

if(mysqli_query($conn,$sql)){
    header("Location:lista-doctores.php");

    
    
}else{
    echo"Error: ".$sql . "<br>". mysqli_error($conn);
}

mysqli_close($conn);
	





 




?>