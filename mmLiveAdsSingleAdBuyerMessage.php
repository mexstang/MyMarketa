<?php
$title=$_GET['title'];

$county=$_GET['county'];
$state=$_GET['state'];
$adId=$_GET['adId'];
$adMessages=$_GET['q'];
$buyerEmail=$_GET['buyerEmail'];
$servername = "localhost";
$username = "u302929136_mexstang";
$password = "mota67Mysql!";
$dbname = "u302929136_MiMarketaDb";

 
// OPEN DB AND check if Email exists. If NO, REDIRECT TO MICUENTA PAGE.
$connVid = new mysqli($servername, $username, $password, $dbname);
if ($connVid->connect_error) { die("Connection failed: " . $connVid->connect_error); }    
 
$sqlVid  = "SELECT * FROM enLasCuentasTable WHERE ecorreo ='$buyerEmail'   ";
$resultVid = $connVid->query($sqlVid);
$row1 = $resultVid->fetch_assoc(); 

//IF THE BUYER EMAIL DOES EXIST, REDIRECT TO MICUENTA.
switch ($row1 > 0) 
{
  case 'true' :
    $emailCheck='emailDoesExist';
    echo $emailCheck;
    break;
    
    default:
 
mysqli_close($connVid);

//GENERATE A CLAVE
$r=rand();
$t=time();
$clave=$t.$r;

//CREATE  NEW RECORD.
$connVid2 = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$connVid2) {  die('Could not connect: ' . mysqli_error($connVid2));}

$sqlVid2 ="INSERT INTO `enLasCuentasTable`(`ecorreo`,`clave`) VALUES ('".$buyerEmail."','".$clave."') ";

if ($connVid2->query($sqlVid2)===true)
{
mysqli_close($connVid2);
}

// OPEN DB AND GET THE AD EMAIL VIA ADID.
$conn1 = new mysqli($servername, $username, $password, $dbname);
if ($conn1->connect_error) {die("Connection failed: " . $conn1->connect_error);}

$sql1  = "SELECT * FROM enAdsTable WHERE adId='$adId' ";
$result1 = $conn1->query($sql1);
$row1 = $result1->fetch_assoc(); 
$adEmail=$row1['adEmail'];
mysqli_close($conn1);

//GENERATE A CLAVE
$r2=rand();
$t2=time();
$sessionId=$r2.$t2;

// OPEN DB AND CREATE A MESSAGE ACCOUNT SO BUYER AND SELLER can chat by updating DB-adMessages field.
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);}

$sql = "INSERT INTO enMessagesTable (sessionId, adTitle, adId, adCounty, adState, buyerMessage1, sellerEmail, buyerEmail)
VALUES ('$sessionId', '$title', '$adId',  '$county', '$state', '$adMessages', '$adEmail', '$buyerEmail')";

if ($conn->query($sql) === TRUE) 
{
$conn->close();

// ECHO  TO RETURN IT TO JS FILE AS VAR VID.
$emailCheck ='EmailNotFoundNewAccountCreated';
echo $emailCheck;

ini_set( 'display_errors', 1 );
error_reporting( E_ALL );

$from = "mimarketa@mimarketa.com";
$to = $adEmail;
$subject = "MyMarketa.com MESSAGE!- ".$title;

$message = $title. 
"\n\n"."MESSAGE: ".$adMessages. 
"\n\n"."Please log into ~MyACCOUNT~ to reply.\n https://www.mimarketa.com/mmMain/mmEnglish/mmMyAccount.php?state=".$state."&county=".$county;


$headers = "From:" . $from;
mail($to,$subject,$message, $headers);


if ($emailCheck =="EmailNotFoundNewAccountCreated")
{
$from2 = "mimarketa@mimarketa.com";
$to2 = $buyerEmail;
$subject2 = "MyMarketa.com COPY ".$title;
$message2 = "COPY OF YOUR MESSAGE: \n".$title."\n".$adMessages. 
"\n\n"."Please log into ~MyACCOUNT~ to reply to messages.\n https://www.mimarketa.com/mmMain/mmEnglish/mmMyAccount.php?state=".$state."&county=".$county."\n"."Your password!  ".$clave;

$headers2 = "From:" . $from2;
mail($to2,$subject2,$message2, $headers2);
}


}
else
{echo 'Unable to insert record into DB.';}


break;

}

?>
