<?php
$clave=$_GET['clave'];
$ecorreo=$_GET['ecorreo'];
//$county=$_GET['county'];
//$state=$_GET['state'];
$servername = "localhost";
$username = "u302929136_mexstang";
$password = "mota67Mysql!";
$dbname = "u302929136_MiMarketaDb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) 
{ die("Connection failed: " . $conn->connect_error); }    
 
$sql  = "SELECT * FROM enLasCuentasTable WHERE clave= '$clave' AND ecorreo= '$ecorreo' ";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$country=$row['country'];
$county=$row['county'];
$state=$row['state'];
$userName=$row['userName'];
$userPic=$row['userPic'];
if ($result->num_rows == '1') 
{ 
Print "https://www.mimarketa.com/mmMain/mmEnglish/mmMyAccount.php?country=$country&county=$county&state=$state&userName=$userName&userPic=$userPic&ecorreoBox=$ecorreo&claveBox=$clave&logOnClaveBox=APPROVED420";
}
else
{
Print 'DENIED420';    
    
}

$conn->close();
  

?>