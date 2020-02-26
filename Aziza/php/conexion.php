 <?php

$hostname = 'localhost';
$database = 'aziza';
$username = 'root';
$password = '';

$conexion = new mysqli($hostname,$username,$password,$database); 
if ($conexion->connect_errno){
 echo "Lo sentimos hay un problema";
}
?>