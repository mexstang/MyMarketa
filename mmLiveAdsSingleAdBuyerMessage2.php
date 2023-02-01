<?php
$clave=$_GET['clave'];
$title=$_GET['title'];
$sessionId=$_GET['sessionId'];
$county=$_GET['county'];
$state=$_GET['state'];
$adId=$_GET['adId'];
$adMessages=$_GET['q'];
$buyerEmail=$_GET['buyerEmail'];
$servername = "localhost";
$username = "u302929136_mexstang";
$password = "mota67Mysql!";
$dbname = "u302929136_MiMarketaDb";

// OPEN DB AND GET THE AD EMAIL VIA ADID.
$conn1 = new mysqli($servername, $username, $password, $dbname);
if ($conn1->connect_error) {die("Connection failed: " . $conn1->connect_error);}

$sql1  = "SELECT * FROM enAdsTable WHERE adId='$adId' ";
$result1 = $conn1->query($sql1);
$row1 = $result1->fetch_assoc(); 
$adEmail=$row1['adEmail'];
mysqli_close($conn1);

// OPEN DB AND CREATE A MESSAGE ACCOUNT SO BUYER AND SELLER can chat by updating DB-adMessages field.
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);}

$sql = "INSERT INTO enMessagesTable (sessionId, adTitle, adId, adCounty, adState, buyerMessage1, sellerEmail, buyerEmail)
VALUES ('$sessionId', '$title', '$adId',  '$county', '$state', '$adMessages', '$adEmail', '$buyerEmail')";

if ($conn->query($sql) === TRUE) 
{
$conn->close();


ini_set( 'display_errors', 1 );
error_reporting( E_ALL );

$from = "mimarketa@mimarketa.com";
$to = $adEmail;
$subject = "MyMarketa.com MESSAGE!- ".$title;

$message = $title. 
"\n\n"."MESSAGE: ".$adMessages. 
"\n\n"."Please log into ~MyACCOUNT~ to reply.\n https://www.mimarketa.com/mmMain/mmEnglish/mmMyAccount.php?";


$headers = "From:" . $from;
mail($to,$subject,$message, $headers);

// ECHO  TO RETURN IT TO JS FILE AS VAR VID.
$messageOk ='MessageInsertedSentOk';
echo $messageOk;


}
else
{echo 'Unable to insert record into DB.';}

?>
