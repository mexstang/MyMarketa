<?php
$sessionId=$_GET['sessionId'];
$adId=$_GET['adId'];

$servername = "localhost";
$username = "u302929136_mexstang";
$password = "mota67Mysql!";
$dbname = "u302929136_MiMarketaDb";

// Create connection
$conn1 = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn1->connect_error) {die("Connection failed: " . $conn1->connect_error);}

$sql1  = "SELECT * FROM enMessagesTable WHERE adId='$adId' AND sessionId='$sessionId'  ";
$result1 = $conn1->query($sql1);
$row1 = $result1->fetch_assoc(); 
$buyerMessage1=$row1['buyerMessage1'];
$sellerMessage2=$row1['sellerMessage1'];


$title=$row1['adTitle'];
$county=$row1['adCounty'];
$state=$row1['adState'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "
UPDATE mmMessagesTable
SET adMessages='$adMessages'
WHERE sessionId='$sessionId'";



if ($conn->query($sql) === TRUE) {
 
$conn->close();

 
echo $adId;


ini_set( 'display_errors', 1 );
error_reporting( E_ALL );

$from = "mimarketa@mimarketa.com";
$to = $buyerEmail;

$subject = "MiMarketa.com MENSAJE!- ".$title;


$message = 
$title."\n"."MENSAJE: ".$adMessages. 
"\n"."Entra 'MiCuenta' para responderle:  https://www.mimarketa.com/mmMain/wwwroot/mmMyAccount.php";

$headers = "From:" . $from;
mail($to,$subject,$message, $headers);

}


?>
