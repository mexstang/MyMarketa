<html>
<head>
<title>MiMarkets.com - ADS Vivos!</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="shortcut icon" href="https://www.mimarketa.com/mmMain/wwwroot/mmFotos/mmMastheadPic.png" alt="MIMARKETA.COM" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="mmLiveAdsUsername.css">
<script src="mmLiveAdsUsername.js"></script> 
</head>

<body onload='loadLocation()' >
<?php include 'mmHeader.php';?>

<?php
$servername = "localhost";
$username = "u302929136_mexstang";
$password = "mota67Mysql!";
$dbname = "u302929136_MiMarketaDb";
$adsTable = "enAdsTable";

//PHP-> Get Variables from URL to determine User Location++    
$state=$_GET['state'];
$county=$_GET['county'];
$username1=$_GET['username'];
$userpic = $_GET['userpic'];

print "<input class='location'  id='passCounty2' readonly  type='hidden' value='' name='county2'>
<input class='location'  id='passState2' readonly  type='hidden' value='' name='state2' >";

// Open DB and load all records for that county and state
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) 
{ die("Connection failed: " . $conn->connect_error); }    
 

$sql  = "SELECT * FROM $adsTable WHERE  adUsername='".$username1."'  ";

print "<div style='position:fixed;top:90px;left:5px;z-index:5;background:transparent;border:none; ' >

<img  id='userpic' src='".$userpic."'   style='border:outset;border-width:3px;border-radius:30px ; font-weight:bold; color:gray; box-shadow:1px 1px 4px gray ;  width:170px;height:80px;'    >
<br/>
<label  style='font-size:30px;font-family:book antiqua;background:transparent;border:none; 
font-weight:bold; color:darkred;text-shadow:1px 1px black; cursor:none;' > ".$username1." </label></div>";


print "<div id='liveAdsMainDiv'  >
<div id='liveAds1' class='subDivsClass' > ";
//START TABLE 1 +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{ 
$a="1";

while($row = $result->fetch_assoc()) 
{  
    if ($a =="1")
{
$ref1=$row['adTitle'];
$ref2=$row['adPrice'];
$ref3=$row['adCity'];
$ref4=$row['adDescription'];
$ref5=$row['adPicUrl1'];
$ref6=$row['adId'];
$ref7='noSessionId';
$adActive=$row['adActive'];
$h='href';

    if($adActive=='3')
{
$ref1='PENDING';
$h='';
};
print " <div  class='adDivClass' onmouseover='liveAdsBgColorOn(this)' onmouseout='liveAdsBgColorOff(this)'  > ";

print "<input  id='adId' readonly  type='hidden' value='".$ref6."'  > 

<a ".$h."='https://www.mimarketa.com/mmMain/wwwroot/mmLiveAdsEspanolSingleAd.php?state=".$state."&county=".$county."&adId=".$ref6."&title=".$ref1."&sessionId=".$ref7."&picUrl1=".$ref5." '  >
<label>".$ref1."</label>	
<br/><label>$".$ref2."</label><br/>"; 
print "<label>".$ref3."</label></a>";  
print "<textarea   maxlength='100' cols='18' rows='3'  required  readonly >".$ref4."</textarea><br/><a ".$h."='https://www.mimarketa.com/mmMain/wwwroot/mmLiveAdsEspanolSingleAd.php?state=".$state."&county=".$county."&adId=".$ref6."&title=".$ref1."&sessionId=".$ref7."&picUrl1=".$ref5." '  >";  

    if($ref5 !='noFoto')
    {print "<img  id='laPic' src='".$ref5."'   class='adDivPicClass'   >";}

print " </a></div  > ";
}
$a++;

    if ($a =="6"){$a="1";}

}// END WHILE LOOP

}
print " </div  > ";
//END TABLE 1

//TABLE 2 +++++++++++++++++++++++++++++++++++++++++++

print " <div id='liveAds2'  class='subDivsClass'  > ";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{ 

$b="1";

while($row = $result->fetch_assoc()) 
{  
    if ($b =="2")
{
$ref1=$row['adTitle'];
$ref2=$row['adPrice'];
$ref3=$row['adCity'];
$ref4=$row['adDescription'];
$ref5=$row['adPicUrl1'];
$ref6=$row['adId'];
$ref7='noSessionId';
$adActive=$row['adActive'];
$h='href';

    if($adActive=='3')
{
$ref1='PENDING';
$h='';
};
print " <div  class='adDivClass' onmouseover='liveAdsBgColorOn(this)' onmouseout='liveAdsBgColorOff(this)'  > ";

print "<input  id='adId' readonly  type='hidden' value='".$ref6."'  > 

<a ".$h."='https://www.mimarketa.com/mmMain/mmEnglish/mmLiveAdsSingleAd.php?state=".$state."&county=".$county."&adId=".$ref6."&title=".$ref1."&sessionId=".$ref7."&picUrl1=".$ref5." '  >
<label>".$ref1."</label>	
<br/><label>$".$ref2."</label><br/>"; 
print "<label>".$ref3."</label></a>";  
print "<textarea   maxlength='100' cols='18' rows='3'  required  readonly >".$ref4."</textarea><br/><a ".$h."='https://www.mimarketa.com/mmMain/mmEnglish/mmLiveAdsSingleAd.php?state=".$state."&county=".$county."&adId=".$ref6."&title=".$ref1."&sessionId=".$ref7."&picUrl1=".$ref5." '  >";  

    if($ref5 !='noFoto')
    {print "<img  id='laPic' src='".$ref5."'   class='adDivPicClass'   >";}

    
print "</a> </div  > ";
}

$b++;

if ($b =="6"){$b="1";}

}// END WHILE LOOP

}
print " </div> ";
//END TABLE 2

//TABLE 3 +++++++++++++++++++++++++++++++++++++++++++
$result = $conn->query($sql); 
print " <div id='liveAds3'  class='subDivsClass'  > ";

if ($result->num_rows > 0) 
{ 

$c="1";

while($row = $result->fetch_assoc()) 
{  
    if ($c =="3")
{
$ref1=$row['adTitle'];
$ref2=$row['adPrice'];
$ref3=$row['adCity'];
$ref4=$row['adDescription'];
$ref5=$row['adPicUrl1'];
$ref6=$row['adId'];
$ref7='noSessionId';
$adActive=$row['adActive'];
$h='href';

    if($adActive=='3')
{
$ref1='PENDING';
$h='';
};
print " <div  class='adDivClass' onmouseover='liveAdsBgColorOn(this)' onmouseout='liveAdsBgColorOff(this)'  > ";

print "<input  id='adId' readonly  type='hidden' value='".$ref6."'  > 

<a ".$h."='https://www.mimarketa.com/mmMain/mmEnglish/mmLiveAdsSingleAd.php?state=".$state."&county=".$county."&adId=".$ref6."&title=".$ref1."&sessionId=".$ref7."&picUrl1=".$ref5." '  >
<label>".$ref1."</label>	
<br/><label>$".$ref2."</label><br/>"; 
print "<label>".$ref3."</label></a>";  
print "<textarea   maxlength='100' cols='18' rows='3'  required  readonly >".$ref4."</textarea><br/><a ".$h."='https://www.mimarketa.com/mmMain/mmEnglish/mmLiveAdsSingleAd.php?state=".$state."&county=".$county."&adId=".$ref6."&title=".$ref1."&sessionId=".$ref7."&picUrl1=".$ref5." '  >";  

    if($ref5 !='noFoto')
    {print "<img  id='laPic' src='".$ref5."'   class='adDivPicClass'   >";}

    
print " </div  > ";
}

$c++;

if ($c =="6"){$c="1";}

}// END WHILE LOOP

}
print " </div> ";
//END TABLE 3

//TABLE 4 +++++++++++++++++++++++++++++++++++++++++++
 
print " <div id='liveAds4'   class='subDivsClass' > ";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{ 

$d="1";

while($row = $result->fetch_assoc()) 
{
    if ($d =="4")
{
$ref1=$row['adTitle'];
$ref2=$row['adPrice'];
$ref3=$row['adCity'];
$ref4=$row['adDescription'];
$ref5=$row['adPicUrl1'];
$ref6=$row['adId'];
$ref7='noSessionId';
$adActive=$row['adActive'];
$h='href';

    if($adActive=='3')
{
$ref1='PENDING';
$h='';
};
print " <div  class='adDivClass' onmouseover='liveAdsBgColorOn(this)' onmouseout='liveAdsBgColorOff(this)'  > ";

print "<input  id='adId' readonly  type='hidden' value='".$ref6."'  > 

<a ".$h."='https://www.mimarketa.com/mmMain/mmEnglish/mmLiveAdsSingleAd.php?state=".$state."&county=".$county."&adId=".$ref6."&title=".$ref1."&sessionId=".$ref7."&picUrl1=".$ref5." '  >
<label>".$ref1."</label>	
<br/><label>$".$ref2."</label><br/>"; 
print "<label>".$ref3."</label></a>";  
print "<textarea   maxlength='100' cols='18' rows='3'  required  readonly >".$ref4."</textarea><br/><a ".$h."='https://www.mimarketa.com/mmMain/mmEnglish/mmLiveAdsSingleAd.php?state=".$state."&county=".$county."&adId=".$ref6."&title=".$ref1."&sessionId=".$ref7."&picUrl1=".$ref5." '  >";  

    if($ref5 !='noFoto')
    {print "<img  id='laPic' src='".$ref5."'   class='adDivPicClass'   >";}

    
 print " </div  > ";
}

$d++;

if ($d =="6"){$d="1";}

}// END WHILE LOOP

}
print " </div> ";
//END TABLE 4



//TABLE 5 +++++++++++++++++++++++++++++++++++++++++++
 
print " <div id='liveAds5'   class='subDivsClass' > ";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{ 

$e="1";

while($row = $result->fetch_assoc()) 
{  
    if ($e =="5")
{
$ref1=$row['adTitle'];
$ref2=$row['adPrice'];
$ref3=$row['adCity'];
$ref4=$row['adDescription'];
$ref5=$row['adPicUrl1'];
$ref6=$row['adId'];
$ref7='noSessionId';
$adActive=$row['adActive'];
$h='href';

    if($adActive=='3')
{
$ref1='PENDING';
$h='';
};
print " <div  class='adDivClass' onmouseover='liveAdsBgColorOn(this)' onmouseout='liveAdsBgColorOff(this)'  > ";

print "<input  id='adId' readonly  type='hidden' value='".$ref6."'  > 

<a ".$h."='https://www.mimarketa.com/mmMain/mmEnglish/mmLiveAdsSingleAd.php?state=".$state."&county=".$county."&adId=".$ref6."&title=".$ref1."&sessionId=".$ref7."&picUrl1=".$ref5." '  >
<label>".$ref1."</label>	
<br/><label>$".$ref2."</label><br/>"; 
print "<label>".$ref3."</label></a>";  
print "<textarea   maxlength='100' cols='18' rows='3'  required  readonly >".$ref4."</textarea><br/><a ".$h."='https://www.mimarketa.com/mmMain/mmEnglish/mmLiveAdsSingleAd.php?state=".$state."&county=".$county."&adId=".$ref6."&title=".$ref1."&sessionId=".$ref7."&picUrl1=".$ref5." '  >";  

    if($ref5 !='noFoto')
    {print "<img  id='laPic' src='".$ref5."'   class='adDivPicClass'   >";}

    
print " </div  > ";
}

$e++;

if ($e =="6"){$e="1";}

}// END WHILE LOOP

}
print " </div> ";
//END TABLE 5


print " </div> ";
?>



</body>
</html>  
