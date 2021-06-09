<?php


$eliminar= $_GET['dat'];
$elim= $_GET['dat2'];
$server ="localhost";
$database= "medical";
$user= "Eli";
$pass= "root";

$conn = mysqli_connect($server, $user,$pass,$database);

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}



$sql="DELETE FROM citas WHERE NSS='".$elim."'";


if(mysqli_query($conn,$sql)){
    header("location: lista-pacientes.php");
    
}else{
    echo"Error: ".$sql . "<br>". mysqli_error($conn);
}

	









$conn = mysqli_connect($server, $user,$pass,$database);

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}



$sql="DELETE FROM paciente WHERE id='".$eliminar."'";


if(mysqli_query($conn,$sql)){
    header("location: lista-pacientes.php");
    
}else{
    echo"Error: ".$sql . "<br>". mysqli_error($conn);
}


mysqli_close($conn);
	
?>