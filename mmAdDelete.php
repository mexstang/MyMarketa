<?php
$pw=$_GET['pw'];
$servername = "localhost";
$username = "u302929136_mexstang";
$password = "mota67Mysql!";
$dbname = "u302929136_MiMarketaDb";
$adsTable= 'enAdsTable';
// Select country from Ads DB.
$conn2 = new mysqli($servername, $username, $password, $dbname);
if ($conn2->connect_error) { die("Connection failed: " . $conn2->connect_error); }    
 
$sql2  = "SELECT * FROM $adsTable WHERE  adClave ='$pw'  ";
$result2 = $conn2->query($sql2);

if ($result2->num_rows > 0) 
{ 
    
    while($row2 = $result2->fetch_assoc()) 
{  
 
$country=$row2['adCountry'];
$county=$row2['adCounty'];
$state=$row2['adState'];
}
}
mysqli_close($conn2);



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM $adsTable WHERE adClave =$pw "; 

if ($conn->query($sql) === TRUE) 
{
  
echo "<script>
alert('SUCCESS! Your AD has been deleted.'); 
window.location.replace('https://www.mimarketa.com/mmMain/mmEnglish/mmEnglish.php?country=$country&county=$county&state=$state&adCity=ALL&category=ALL');  </script>";
} 
else 
{
 echo "<script> 
  alert('Error. Unable to delete AD. Please make sure AD exists.'); 
window.location.replace('https://www.mimarketa.com/mmMain/mmEnglish/mmEnglish.php?country=$country&county=$county&state=$state&adCity=ALL&category=ALL');  </script>";
  
  
}

$conn->close();





?>