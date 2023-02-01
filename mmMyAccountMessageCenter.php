<?php
$buyerORseller=$_GET['buyerORseller'];

$sessionId=$_GET['sessionId'];
$adId=$_GET['adId'];
$newMessage=$_GET['q'];

$servername = "localhost";
$username = "u302929136_mexstang";
$password = "mota67Mysql!";
$dbname = "u302929136_MiMarketaDb";

// OPEN DB AND GET THE BUYER AND SELLER MESSAGES.
$conn1 = new mysqli($servername, $username, $password, $dbname);
if ($conn1->connect_error) {die("Connection failed: " . $conn1->connect_error);}

$sql1  = "SELECT * FROM enMessagesTable WHERE adId='$adId' AND sessionId='$sessionId'  ";
$result1 = $conn1->query($sql1);
$row1 = $result1->fetch_assoc(); 
$title=$row1['adTitle'];

if($buyerORseller == 'buyer' )
{  
   $emailAlert=$row1['sellerEmail'];
   $currentMessage=$row1['buyerMessage1'];  
   $messageField='buyerMessage1';  
}

if($buyerORseller == 'seller' )
{
   $emailAlert=$row1['buyerEmail']; 
   $currentMessage=$row1['sellerMessage1']; 
   $messageField='sellerMessage1'; 
   
}
$conn1->close();

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$finalMessage=$newMessage. "  |  ".$currentMessage;

$sql = "
UPDATE enMessagesTable
SET $messageField='$finalMessage'
WHERE sessionId='$sessionId'";

if ($conn->query($sql) === TRUE) {
 
$conn->close();

 
echo $sessionId;


ini_set( 'display_errors', 1 );
error_reporting( E_ALL );

$from = "mimarketa@mimarketa.com";
$to = $emailAlert;

$subject = "MyMarketa.com MESSAGE!- ".$title;


$message = 
$title."\n"."MESSAGE: ".$newMessage. 
"\n"."Please log into ~MyACCOUNT~ to reply. https://www.mimarketa.com/mmMain/mmEnglish/mmMyAccount.php";

$headers = "From:" . $from;
mail($to,$subject,$message, $headers);

}


?>
