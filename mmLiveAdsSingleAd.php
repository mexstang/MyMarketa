<!DOCTTYPE html>
<html lang='en'>
<head>
<title>MyMarketa.com - SINGLE AD</title>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1.0' >
<link rel="shortcut icon" href="https://www.mimarketa.com/mmMain/mmEnglish/mmFotos/mmMastheadPic.png" alt="MIMARKETA.COM" type="image/x-icon" />

<link rel="stylesheet" type="text/css" href="mm1Main.css">

</head>

<body onload='loadLocation()'  >
    <div id='wrapper'  class='wrapper' >
        <div class='container1' >
<header id='header' class='header'><?php include 'mmHeader.php';?></header>
</div>
<div class='container2' >
<main>
<section id='singleAdSection'>

<?php
//Hidden Location fields
print "<input class='location'  id='passCounty2' readonly  type='hidden' value='' name='county2'>
<input class='location'  id='passState2' readonly  type='hidden' value='' name='state2' >";
    
//Get URL Vars

$adId=$_GET['adId'];
$category=$_GET['category'];

//Set DB Login Vars
$servername = "localhost";
$username = "u302929136_mexstang";
$password = "mota67Mysql!";
$dbname = "u302929136_MiMarketaDb";
$adsTable = "enAdsTable";

// Create connection to open adsTable and get all records.
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) 
{ die("Connection failed: " . $conn->connect_error); }    
 
$sql  = "SELECT * FROM $adsTable WHERE adId='$adId' ";

    $result = $conn->query($sql);
if ($result->num_rows > 0) 
{ 
$row = $result->fetch_assoc();

$username1=$row['adUsername'];
$ref1=$row['adPrice'];
$ref2=$row['adTitle'];
$ref3=$row['adCity'];
$ref4=$row['adDescription'];
$ref7=$row['adEmail'];
$userpic=$row['adUserPic'];

$pic1=$row['adPicUrl1'];
$pic2=$row['adPicUrl2'];
$pic3=$row['adPicUrl3'];

$county=$row['adCounty'];
$state=$row['adState'];
$videoLink=$row['videoLink'];

    if($videoLink =='')
    {  $videoYesNo = '';   } else{ $videoYesNo = ' Video ';}

//<input type='button'  style='position:fixed;z-index:4px;top:80;left:5px;font-size:30px;font-family:book antiqua;background:transparent;border:none;border-radius:15px ; font-weight//:bold; color:darkred;text-shadow:1px 1px 4px gray ; cursor:pointer;'  onmouseover='bgColorOn(this)' onmouseout='bgColorOff(this)' title='".$category."' onclick='goBack(title)' // value=' Back ' readonly>
//

print "
<label  >$".$ref1."</label>	
  <label  >".$ref2."</label>  "; 
print "<label >".$ref3."</label>
<button id='$videoLink' onclick='goToVideo(id)' >$videoYesNo</button><br/> ";  

print "<img  id='laPic1' src='".$pic1."'  onmouseover='bigPic(this)' onmouseout='lilPic(this)'     >";
//print "<img  id='laPic2' src='".$pic2."'    onmouseover='bigPic(this)' onmouseout='lilPic(this)'       >";
//print "<img  id='laPic3' src='".$pic3."'     onmouseover='bigPic(this)' onmouseout='lilPic(this)'       >";
 
 print "<br/><textarea   rows='4' required  readonly >".$ref4."</textarea><br/>
";
 
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



//<img  id='userpic' src='".$userpic."'   style='width:105px;height:auto;border:outset;border-radius:109px   '   >
//<br/>

print "<div id='chatDiv'  >";

print "<input type='hidden' id='titleBox' value='' readonly >";
print " MESSAGE SELLER <br/>
<textarea  id='chatMessageBox'  
 required maxlength='100'   rows='3' wrap='hard' onfocus='clearChatMessageBox()'  placeholder='ENTER A MESSAGE' ></textarea>
 <br/> 
<input type='email'  id='chatBuyerEmail' required pattern='.+@globex\.com' size='30'   onfocus='clearChatEmailBox()' placeholder='ENTER YOUR EMAIL'  />
<br/>
<input id='chatButton'  type='button' onclick='sendMessage1()' value='SEND'  onmouseover='bgColorOn(this)' onmouseout='bgColorOff2(this)'  > <br/><br/>";

print "</div>";

// END CHAT WINDOW---------------------------------------------------------


?>
</section>
</main></div>
<!-- CONTAINER 3 -->
<div class='container3' >

<canvas style='visibility:hidden;border:outset;' width="80" height="80" id="canvas">canvas</canvas>

<div id="loadingDiv"   ><br/><br/>Please wait.<br /><br/>Uploading Ad.........<br/><br/><br/><br/><br/><br/></div>


<footer>   <?php include 'mmFooter.php'; ?>  </footer>
</div>

</div>   
<script src="mmLiveAdsSingleAd.js"></script> 
<script src="mmHeader.js"></script> 
<script> 
checkViewportWidth();

</script>
<script> 

css();
</script>

</div>
</body>
</html>  
