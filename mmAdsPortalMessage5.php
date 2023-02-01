
<?php
//Get URL Vars
$title=$_POST['title'];
$sellerEmail=$_POST['sellerEmail'];
$buyerMessage=$_POST['buyerMessage'];
$sessionId=$_POST['sessionId'];


$servername = "localhost";
$username = "u302929136_mexstang";
$password = "mota67Mysql!";
$dbname = "u302929136_MiMarketaDb";$adsTable= 'enAdsTable';
$enMessagesTable= 'enMessagesTable';

// OPEN DB AND send Seller Reply.
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);}

$sql = "UPDATE $enMessagesTable SET buyerMessage1='$buyerMessage' WHERE sessionId='$sessionId' "; 

if ($conn->query($sql) === TRUE) 
{
$conn->close();

ini_set( 'display_errors', 1 );
error_reporting( E_ALL );

$from = "MyMarketa@MyMarketa.com";
$to = $sellerEmail;
$subject = "MyMarketa.com BUYER MESSAGE!- ".$title;

$message = "Message:\n".$buyerMessage."\n\n"."Click the Link below to reply."."\n".
"https://www.mimarketa.com/mmMain/mmEnglish/mmAdsPortalMessage2.php?sessionId=".$sessionId;

$headers = "From:" . $from;
mail($to,$subject,$message, $headers);
echo "<script>
alert('Success. Your message was sent to the Seller for item:. $title');

</script>";


}
else
{
echo "Oops. Unable to send your email. 
Please refresh the browser or close and click the link in your email, again.";    
    
}

echo "<script>

window.location.replace('https://www.mimarketa.com/mmMain/mmEnglish/mmEnglish.php?country='+country+'&county='+county+'&state='+state+'&adCity=All_Cities&category=ALL');
</script>";


?>
