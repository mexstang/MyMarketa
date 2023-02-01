<?php
$email=$_GET['email'];

$country=$_GET['country'];
$county=$_GET['county'];
$state=$_GET['state'];

$servername = "localhost";
$username = "u302929136_mexstang";
$password = "mota67Mysql!";
$dbname = "u302929136_MiMarketaDb";
$lasCuentasTable = "enLasCuentasTable";

// OPEN DB AND check if Email exists. If NO, REDIRECT TO MICUENTA PAGE.
$connVid = new mysqli($servername, $username, $password, $dbname);
if ($connVid->connect_error) { die("Connection failed: " . $connVid->connect_error); }    
 
$sqlVid  = "SELECT * FROM $lasCuentasTable WHERE ecorreo ='$email'   ";
$resultVid = $connVid->query($sqlVid);
$row1 = $resultVid->fetch_assoc(); 

//IF THE EMAIL DOES EXIST, Alert to Please Check Email.
switch ($row1 > 0) 
{
  case 'true' :
    $emailCheck='Sorry. That Email Address is already in use.';
    echo $emailCheck;
    break;
    
  case '0':
 
mysqli_close($connVid);

//GENERATE A CLAVE
$r=rand();
$t=time();
$clave=$t.$r;

//CREATE  NEW RECORD.
$connVid2 = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$connVid2) {  die('Could not connect: ' . mysqli_error($connVid2));}

$sqlVid2 ="INSERT INTO `$lasCuentasTable`(`ecorreo`,`clave`,`country`,`county`,`state`) VALUES ('".$email."','".$clave."','".$country."','".$county."','".$state."') ";

if ($connVid2->query($sqlVid2)===true)
{
mysqli_close($connVid2);

// ECHO  TO RETURN IT TO JS FILE AS VAR VID.
$emailCheck ='Success! Please check your Emailbox to get your password.';
echo $emailCheck;

ini_set( 'display_errors', 1 );
error_reporting( E_ALL );

$from = "mimarketa@mimarketa.com";
$to = $email;
$subject = "MyMarketa.com MESSAGE!- ";

$message = "Welcome! \n\n"." ~MyACCOUNT~ \n https://www.mimarketa.com/mmMain/mmEnglish/mmMyAccount.php?country=".$country."&state=".$state."&county=".$county."\n\n Password: ".$clave;

$headers = "From:" . $from;
mail($to,$subject,$message, $headers);

}
else
{echo 'Unable to insert record into DB.';}


break;

}

?>

