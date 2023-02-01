<?php
//Get URL Vars
$adId=$_GET['adId'];
$sessionId=$_GET['sessionId'];

//Set DB Login Vars
$servername = "localhost";
$username = "u302929136_mexstang";
$password = "mota67Mysql!";
$dbname = "u302929136_MiMarketaDb";
$adsTable= 'enAdsTable';
$enMessagesTable= 'enMessagesTable';

//OPEN adsTable and gets seller email.
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) 
{ die("Connection failed: " . $conn->connect_error); }    
 
$sql  = "SELECT * FROM $adsTable WHERE adId='$adId' ";

$result = $conn->query($sql);
if ($result->num_rows > 0) 
{ 
$row = $result->fetch_assoc();

$sellerEmail=$row['adEmail'];
$title=$row['adTitle'];
$country=$row['adCountry'];
$county=$row['adCounty'];
$state=$row['adState'];


$conn->close();
} else{echo "Error";}
//----------------------------------------------------------------


// ENTER Sellers Email in enMessagesTable, for this Session.
$conn3= new mysqli($servername, $username, $password, $dbname);
if ($conn3->connect_error) { die("Connection failed: " . $conn3->connect_error); }    
$sql3 = "UPDATE $enMessagesTable SET sellerEmail='$sellerEmail', adCountry='$country', adCounty='$county', adState='$state'  WHERE sessionId='$sessionId' ";  

$result3 = $conn3->query($sql3);
$conn3->close();
 
// Create connection to open adsTable and get all records.
$conn2 = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn2->connect_error) 
{ die("Connection failed: " . $conn2->connect_error); }    
 
$sql2  = "SELECT * FROM $enMessagesTable WHERE sessionId='$sessionId' ";
$result2 = $conn2->query($sql2);
if ($result2->num_rows > 0) 
{ 
$row2 = $result2->fetch_assoc();
$buyerMessage1=$row2['buyerMessage1'];

$conn->close();
$gotMessage='yes';
}
// END ADS TABLE LOADING RECORDS---------------------------------------------------------

if ($gotMessage='yes' & $gotSellerEmail='yes') 
{ 
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );

$from = "MyMarketa@MyMarketa.com";
$to = $sellerEmail;
$subject = "MyMarketa.com BUYER MESSAGE!- ".$title;

$message = "MESSAGE:\n\n".$buyerMessage1."\n\n"."PLEASE CLICK THIS LINK TO REPLY."."\n\n".
"https://www.mimarketa.com/mmMain/mmEnglish/mmAds3SellerReply.php?sessionId=".$sessionId;

$headers = "From:" . $from;
mail($to,$subject,$message, $headers);
echo "SUCCESS. YOUR MESSAGE WAS SENT TO THE SELLER.";

echo "<script>
alert('SUCCESS. YOUR MESSAGE WAS SENT TO THE SELLER.');
window.close();
</script>";

}else
{
   
echo "Sorry. Record not found.";
}

?>
