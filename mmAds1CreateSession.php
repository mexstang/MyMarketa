<?php
$title=$_GET['title'];
$adId=$_GET['adId'];
$buyerEmail=$_GET['email'];
$buyerMessage1=$_GET['message'];
$sessionId=RAND();

$servername = "localhost";
$username = "u302929136_mexstang";
$password = "mota67Mysql!";
$dbname = "u302929136_MiMarketaDb";
$adsTable= 'enAdsTable';
$enMessagesTable= 'enMessagesTable';

// OPEN DB AND CREATE A Session to communicate with Seller.
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);}

$sql = "INSERT INTO $enMessagesTable (sessionId, adTitle, adId,  buyerMessage1,  buyerEmail)
VALUES ('$sessionId', '$title', '$adId',  '$buyerMessage1', '$buyerEmail')";

if ($conn->query($sql) === TRUE) 
{
$conn->close();


ini_set( 'display_errors', 1 );
error_reporting( E_ALL );

$from = "MyMarketa@MyMarketa.com";
$to = $buyerEmail;
$subject = "MyMarketa.com MESSAGE!- ".$title;

$message =$title."\n\n". "Hello.\nPLEASE CLICK THIS LINK TO FINISH SENDING YOUR MESSAGE TO THE SELLER."."\n\n".
"https://www.mimarketa.com/mmMain/mmEnglish/mmAds2BuyerVerify.php?sessionId=".$sessionId."&adId=".$adId."&title=".$title;


$headers = "From:" . $from;
mail($to,$subject,$message, $headers);

// ECHO  TO RETURN IT TO JS FILE AS VAR VID.
echo "PLEASE CHECK YOUR EMAIL AND CLICK THE PROVIDED LINK TO FINISH SENDING YOUR MESSAGE TO THE SELLER. THANK YOU. ";

}
else
{echo 'Unable to insert record into DB.';}


  


?>
