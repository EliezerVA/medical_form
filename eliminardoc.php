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



$sql="DELETE FROM doctores WHERE id='".$eliminar."'";


if(mysqli_query($conn,$sql)){
    header("location: lista-doctores.php");
    
}else{
    echo"Error: ".$sql . "<br>". mysqli_error($conn);
}


mysqli_close($conn);
	
?>