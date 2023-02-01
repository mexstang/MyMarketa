<?php

$country=$_GET['country'];
$county=$_GET['county'];

$servername = "localhost";
$username = "u302929136_mexstang";
$password = "mota67Mysql!";
$dbname = "u302929136_MiMarketaDb";
$adsTable= 'enAdsTable';
$lasCuentasTable= 'enLasCuentasTable';


$con = new mysqli($servername, $username, $password, $dbname);
if ($con->connect_error) { die("Connection failed: " . $con->connect_error); }    
 
$sql  = "SELECT DISTINCT (adCity) FROM $adsTable WHERE adCountry ='$country' AND  adCounty ='$county'   ORDER BY adCity ASC ";
$result = $con->query($sql);

print" 

 <select id='adCity' name='adCity'     onchange='searchCity()'  
 style='width:auto;background:white;font-size:20px; font-family:book antiqua;border:none; border-radius:2px;'  > 
 <option  id='adCity2' value='All_Cities' >All_Cities</option>
  <option  value='All_Cities' >All_Cities</option>   ";
 
while($row = $result->fetch_assoc()) 
{
$adCity=$row['adCity'];

print"  <option value='$adCity'    >$adCity</option> ";

}

print" </select> ";


mysqli_close($con);


?>
