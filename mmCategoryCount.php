<html>
<head>
<title>MyMarkets.com - CategoryCount</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="shortcut icon" href="https://www.mimarketa.com/mmMain/mmEnglish/mmFotos/mmMastheadPic.png" alt="MIMARKETA.COM" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="https://www.mimarketa.com/mmMain/mmEnglish/mmCategoryCount.css">
<script src="mmCategoryCount.js"></script> 
</head>

<body  >
    
<?php
$servername = "localhost";
$username = "u302929136_mexstang";
$password = "mota67Mysql!";
$dbname = "u302929136_MiMarketaDb";

// Open DB and load all records for that county and state
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) 
{ die("Connection failed: " . $conn->connect_error); }  





 $sql  = " SELECT DISTINCT adCategory FROM enAdsTable ";
 
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) 
{  


$catTotal=$row['adCategory'];


 $sql2  = " SELECT *  FROM enAdsTable  WHERE adCategory = '$catTotal' ";
 $result2 = $conn->query($sql2);
 
$rowcount=mysqli_num_rows($result2);

echo 
$catTotal.'-Total: '.$rowcount .'<br/>';



}









?>

</body>
</html>  
