<html>
<head>
<title>MiMarkets.com - SINGLE LIVE AD</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="shortcut icon" href="https://www.mimarketa.com/mmMain/mmEnglish/mmFotos/mmMastheadPic.png" alt="MIMARKETA.COM" type="image/x-icon" />

<link rel="stylesheet" type="text/css" href="https://www.mimarketa.com/mmMain/mmEnglish/mmLiveAdsSingleAd.css">
<script src="mmLiveAdsSingleAd.js"></script> 

</head>

<body onload='loadLocation()'  >
<center>
<?php include 'mmHeader.php';?>

<?php
//Hidden Location fields
print "<input class='location'  id='passCounty2' readonly  type='hidden' value='' name='county2'>
<input class='location'  id='passState2' readonly  type='hidden' value='' name='state2' >";
    
//Get URL Vars

$adId=$_GET['adId'];



//Set DB Login Vars
$servername = "localhost";
$username = "u302929136_mexstang";
$password = "mota67Mysql!";
$dbname = "u302929136_MiMarketaDb";

// Create connection to open adsTable and get all records.
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) 
{ die("Connection failed: " . $conn->connect_error); }    
 
$sql  = "SELECT * FROM enAdsTable WHERE adId='$adId' ";

    $result = $conn->query($sql);
if ($result->num_rows > 0) 
{ 
$row = $result->fetch_assoc();

$username1=$row['adUsername'];
$ref1=$row['adTitle'];
$ref2=$row['adPrice'];
$ref3=$row['adCity'];
$ref4=$row['adDescription'];
$ref7=$row['adEmail'];
$userPic=$row['adUserPic'];

$pic1=$row['adPicUrl1'];
$pic2=$row['adPicUrl2'];
$pic3=$row['adPicUrl3'];

$county=$row['adCounty'];
$state=$row['adState'];
$videoLink=$row['videoLink'];

    if($videoLink =='')
    {  $videoYesNo = '';   } else{ $videoYesNo = '~ Video ~';}
print "<div id='singleAdDiv'  > 
<img  id='userPic' src='".$userPic."'   style='position:fixed;z-index:4px;top:85;left:10px;font-size:30px;font-family:book antiqua;background:transparent;border:outset;border-width:3px;border-radius:30px ; font-weight:bold; color:gray; box-shadow:1px 1px 4px gray ;  cursor:pointer;width:170px;height:80px;'    >
<br/>
<input type='button'  style='position:fixed;z-index:4px;top:170;left:10px;font-size:30px;font-family:book antiqua;background:transparent;border:none;border-radius:15px ; font-weight:bold; color:darkred;text-shadow:1px 1px 4px gray ; cursor:pointer;'  onmouseover='bgColorOn(this)' onmouseout='bgColorOff(this)'  onclick='showAllUsernameAds(value)'  value='".$username1."' readonly>

<br/><label >".$ref1."</label>	
<br/><label>$".$ref2."</label><br/>"; 
print "<label>".$ref3."</label>";  
 print "<br/><textarea   maxlength='500' cols='20' rows='3' required  readonly >".$ref4."</textarea><br/>
<button id='$videoLink' onclick='goToVideo(id)'   style='background:none;border:none;font-weight:bold;font-family:book antiqua;font-size:25px;color:darkred;text-shadow: 1px 2px 3px gray;cursor:pointer;'>$videoYesNo</button><br/>";
 
print "<img  id='laPic1' src='".$pic1."'  onmouseover='bigPic(this)' onmouseout='lilPic(this)'     >";
print "<img  id='laPic2' src='".$pic2."'    onmouseover='bigPic(this)' onmouseout='lilPic(this)'       >";
print "<img  id='laPic3' src='".$pic3."'     onmouseover='bigPic(this)' onmouseout='lilPic(this)'       >";
print "</div>";
$conn->close();

}else
{$conn->close();
echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><b style='color:red;font-size:60px;' >NO RECORDS</b>";
}
// END ADS TABLE LOADING RECORDS---------------------------------------------------------


// CHAT WINDOW START---------------------------------------------------------


//$randomNum=rand();
//$sessionId=$adId.$randomNum;


print "<input type='hidden' id='countyBox' value='".$county."'  >";
print "<input type='hidden' id='stateBox'  value='".$state."' >";
print "<input type='hidden' id='adIdBox' value='".$adId."'  >";
 
print "<input type='hidden' id='textareaBox'  value='' >"; 

print "<div id='sendMessageButtonDiv'  >
<button onclick='showMessageBox()'  style='width:200px;background-image: linear-gradient( to right, darkred , white , darkred ); font-size:23px;font-weight:bold;font-family:book antiqua;border:outset;border-radius:20px;border-color:gray;box-shadow:1px 1px 4px gray ;  text-shadow:1px 1px 4px gray ; vertical-align:top;cursor:pointer;' onmouseover='bgColorOn(this)' onmouseout='bgColorOff2(this)' wrap='hard'   >SEND A MESSAGE</button > 
</div>";

print "<div id='chatDiv'  >";

print "<input type='hidden' id='titleBox' value='' readonly >";
print " &nbsp;Message To Seller <br/>
<textarea  id='chatMessageBox'  
 required maxlength='100'  rows='10'   wrap='hard' onfocus='clearChatMessageBox()'  ></textarea>
 <br/> &nbsp;Email (Your email will remain anonymous.)<br/>
 <textarea  id='chatBuyerEmail'  
 required maxlength='50'  rows='1'   wrap='hard'  onfocus='clearChatEmailBox()'  ></textarea>

<input id='chatButton'  type='button' onclick='sendMessage()' value='SEND'  onmouseover='bgColorOn(this)' onmouseout='bgColorOff2(this)'  > <br/><br/>";

print "</div>";

// END CHAT WINDOW---------------------------------------------------------


?>
</center>

</body>
</html>  
