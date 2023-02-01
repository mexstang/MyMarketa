<?php
$country=$_GET['country'];
$county=$_GET['county'];
$state=$_GET['state'];
$ecorreo=$_GET['ecorreo'];
$clave=$_GET['clave'];

$servername = "localhost";
$username = "u302929136_mexstang";
$password = "mota67Mysql!";
$dbname = "u302929136_MiMarketaDb";

 
// OPEN DB AND check email & pass. 
$connVid = new mysqli($servername, $username, $password, $dbname);
if ($connVid->connect_error) { die("Connection failed: " . $connVid->connect_error); }    
 
$sqlVid  = "SELECT * FROM enLasCuentasTable WHERE ecorreo ='$ecorreo'  AND clave ='$clave' ";

$resultVid = $connVid->query($sqlVid);
$row1 = $resultVid->fetch_assoc(); 

//IF THE BUYER EMAIL DOES EXIST, REDIRECT TO MICUENTA.
switch ($row1 > 0) 
{
  case 'true' :
    $emailCheck='ACTIVO';
    echo $emailCheck;
    break;
    
    default:
 
$emailCheck='NOTACTIVO';
    echo $emailCheck;

break;

}

?>
