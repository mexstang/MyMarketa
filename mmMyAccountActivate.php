
<?php
$adId=$_GET['adId'];
$adActive=$_GET['adActive'];
$adEmail=$_GET['adEmail'];

$servername = "localhost";
$username = "u302929136_mexstang";
$password = "mota67Mysql!";
$dbname = "u302929136_MiMarketaDb";

// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}



switch ($adActive) 
{
  case '1':
    $sql="UPDATE enAdsTable SET adActive='1' WHERE adId='" . $adId . "'";
    
    break;
  case '2':
    $sql="UPDATE enAdsTable SET adActive='2' WHERE adId='" . $adId . "'";
    
break;
  case '3':
    $sql="UPDATE enAdsTable SET adActive='3' WHERE adId='" . $adId . "'";
$adActiveCheck="PENDING";
    break;
    
  case '4':
    $sql="DELETE  FROM enAdsTable  WHERE adId='" . $adId. "'";
    
break;

default:
    
    break;

}

 
$result=mysqli_query($sql);

if ($con->query($sql) === TRUE) 
{ 

echo $adActiveCheck;
mysqli_close($con);

}else
{

echo 'Problem. \n Please email us your Ad. MiMarketa@MiMarketa.com';
mysqli_close($con);
}
?>
