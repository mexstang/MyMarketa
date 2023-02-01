


<?php
$pw=$_GET['pw'];
$servername = "localhost";
$username = "u302929136_mexstang";
$password = "mota67Mysql!";
$dbname = "u302929136_MiMarketaDb";
$adsTable= 'enAdsTable';

echo " 
WHAT WOULD YOU LIKE TO DO?
<br>
<br>
<input type='radio' id='activateBox' name='fav_language' value='activate'>
<label for='activateBox'>ACTIVATE AD</label>
<br> 
<input type='radio' id='PendingBox' name='fav_language' value='pending'>
<label for='pending'>SET AD TO PENDING</label>
<br>
<input type='radio' id='deleteBox' name='fav_language' value='delete'>
<label for='deleteBox'>DELETE AD</label>
<br>";



$selection="";
switch ($selection)

{
    case 'delete':
        
       
        break;
     
     case 'activate':
          $file1 = 'noFoto';
          $picUrl1='noFoto';
        
    




// Update DB. Set Activate to 1.
$conn1 = new mysqli($servername, $username, $password, $dbname);
if ($conn1->connect_error) { die("Connection failed: " . $conn1->connect_error); }    

 $sql1="UPDATE $adsTable SET adActive='1' WHERE adClave='" . $pw . "'";

$result1 = $conn1->query($sql1);
mysqli_close($conn1);

// Select country from Ads DB.
$conn2 = new mysqli($servername, $username, $password, $dbname);
if ($conn2->connect_error) { die("Connection failed: " . $conn2->connect_error); }    
 
$sql2  = "SELECT * FROM $adsTable WHERE  adClave ='$pw'  ";
$result2 = $conn2->query($sql2);

if ($result2->num_rows > 0) 
{ 
    
    while($row2 = $result2->fetch_assoc()) 
{  
 $adId=$row2['adId'];
 $category=$row2['adCategory'];
 $title=$row2['adTitle'];
 $picUrl1=$row2['adPicUrl1'];
$country=$row2['adCountry'];
$county=$row2['adCounty'];
$state=$row2['adState'];
}

mysqli_close($conn2);


echo "<script>
alert('SUCCESS! Your AD is now live. Ad will expire in 30 days.'); 
window.location.replace('https://www.mimarketa.com/mmMain/mmEnglish/mmLiveAdsSingleAd.php?country=".$country."&county=".$county."&state=".$state."&adId=".$adId."&category=".$category."&title=".$title."&picUrl1=".$picUrl1."');  </script>";
}

else
{

echo "<script>
alert('ooops, no ad found. '); 
window.location.replace('https://www.mimarketa.com/mmMain/mmEnglish/mmEnglish.php?country=".$country."&county=".$county."&state=".$state."');  </script>";
}
   
   
    break;
     
        
    default:
        
           
}// END SWITCH FOR PIC 1


?>
