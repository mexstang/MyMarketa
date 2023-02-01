<?php
//Get URL Vars
$ID=$_GET['ID'];
$title=$_GET['title'];
$email=$_GET['email'];
$message2=$_GET['message'];
$sessionId=$_GET['sessionId'];

$servername = "localhost";
$username = "u302929136_mexstang";
$password = "mota67Mysql!";
$dbname = "u302929136_MiMarketaDb";
$adsTable= 'enAdsTable';
$enMessagesTable= 'enMessagesTable';
 
switch ($ID)
{
case 'BUYER':


// UPDATE the BUYER Message for the Session.
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);}

$sql = "UPDATE $enMessagesTable SET buyerMessage1='$message2' WHERE sessionId='$sessionId' "; 

if ($conn->query($sql) === TRUE) 
{
$conn->close();

ini_set( 'display_errors', 1 );
error_reporting( E_ALL );

$from = "MyMarketa@MyMarketa.com";
$to = $email;
$subject = "MyMarketa.com BUYER MESSAGE!- ".$title;

$message = "MESSAGE:\n".$message2."\n\n"."PLEASE CLICK THIS LINK TO REPLY."."\n".
"https://www.mimarketa.com/mmMain/mmEnglish/mmAds3SellerReply.php?sessionId=".$sessionId;

$headers = "From:" . $from;
mail($to,$subject,$message, $headers);
echo 'SUCCESS. YOUR MESSAGE WAS SENT. ';


}
else
{
echo "Oops. Unable to send your email. 
Please refresh the browser or close and click the link in your email, again.";    
    
}
break;

case 'SELLER':

// UPDATE the Seller Message for the Session.
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);}

$sql = "UPDATE $enMessagesTable SET sellerMessage1='$message2' WHERE sessionId='$sessionId' "; 

if ($conn->query($sql) === TRUE) 
{
$conn->close();

ini_set( 'display_errors', 1 );
error_reporting( E_ALL );

$from = "MyMarketa@MyMarketa.com";
$to = $email;
$subject = "MyMarketa.com SELLER MESSAGE!- ".$title;

$message = "MESSAGE:\n".$message2."\n\n"."PLEASE CLICK THIS LINK TO REPLY."."\n".
"https://www.mimarketa.com/mmMain/mmEnglish/mmAds3BuyerReply.php?sessionId=".$sessionId;

$headers = "From:" . $from;
mail($to,$subject,$message, $headers);

echo "SUCCESS. YOUR MESSAGE WAS SENT.";

}
else
{
echo "Oops. Unable to send your email. 
Please refresh the browser or close and click the link in your email, again.";    
    
}

break;

    
}

?>
