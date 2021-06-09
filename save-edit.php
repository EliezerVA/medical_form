<?php




$editar= $_POST["id"];
$nombre= $_POST['name'];
$edad= $_POST['edad'];
$NSS= $_POST['NSS'];
$fechana= $_POST['datepicker1'];
$genero= $_POST['gender'];
$apellidos=$_POST["apellidos"];


$server ="localhost";
$database= "medical";
$user= "Eli";
$pass= "root";

$conn = mysqli_connect($server, $user,$pass,$database);

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}



$sql="UPDATE paciente SET names='".$nombre."', apellidos='".$apellidos."',edad='".$edad."',NSS='".$NSS."',fechana='".$fechana."',genero='".$genero."' WHERE id='".$editar."'"; 

if(mysqli_query($conn,$sql)){
    header("Location:lista-pacientes.php");

    
    
}else{
    echo"Error: ".$sql . "<br>". mysqli_error($conn);
}

mysqli_close($conn);
	





 




?>