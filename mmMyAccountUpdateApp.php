<html>
<head>
<title>MiMARKETA - ActivateAD - APP</title>
</head>
<body   >
<?php
$adId=$_GET['adId'];
$sessionId=$_GET['sessionId'];
$sellerMessage=$_GET['q'];

$servername = "localhost";
$username = "u302929136_mexstang";
$password = "mota67Mysql!";
$dbname = "u302929136_MiMarketaDb";

// Create connection2
$con2 = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$con2) {
  die('Could not connect: ' . mysqli_error($con2));
}

$sql2 = "UPDATE enAdsTable SET adActive='1' WHERE adId=$adId ";

$result2 = $con2->query($sql2);
 
if ($con2->query($sql2) === TRUE) 
{ 

echo "ACTIVO!";
mysqli_close($con2);

}
?>


</body>
</html>