<!DOCTYPE html>
<html lang='en'>
<head>
<title>MyMarketa.com - LIVE ADS</title>
<meta charset='utf-8' >
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="shortcut icon" href="https://www.mimarketa.com/mmMain/mmEnglish/mmFotos/mmMastheadPic.png" alt="MYMARKETA.COM" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="mm1Main.css">

</head>
<body onload='loadLocation()'  >
<div id='wrapper' class='wrapper' >
    <div class='container1' >
<header id='header' class='header' ><?php include 'mmHeader.php';?></header>
</div>
<div class='container2' >
<main>
<section id='adsSection'>
   
<?php
$servername = "localhost";
$username = "u302929136_mexstang";
$password = "mota67Mysql!";
$dbname = "u302929136_MiMarketaDb";
$adsTable = "enAdsTable";
$currentDate= date("Y-m-d");
   
// Open DB and DELETE all records for that county and state, 30 days+ old.
$connDelete = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($connDelete->connect_error) {
  die("Connection failed: " . $connDelete->connect_error);
}

// OPEN DB AND DELETE ALL ADS OVER 30 DAYS.
$sqlDelete = "DELETE FROM $adsTable WHERE adDate < DATE_SUB('$currentDate', INTERVAL 30 DAY)  ";

if ($connDelete->query($sqlDelete) === TRUE) {
  $connDelete->close();
} else {
  echo "Error deleting record: " . $connDelete->error;
}
$connDelete->close();

//PHP-> Get Variables from URL to determine User Location++    
$state=$_GET['state'];
$country=$_GET['country'];
$county=$_GET['county'];
$adCity=$_GET['adCity'];
$adCategory=$_GET['category'];
$searchBox=$_GET['searchBox'];
$sortBy=$_GET['sortBy'];
$searchParameter=$_GET['searchParameter'];

print "<input class='location'  id='passCounty2' readonly  type='hidden' value='' name='county2'>
<input class='location'  id='passState2' readonly  type='hidden' value='' name='state2' >";

// OPEN DB AND GET ALL ADS THAT MEET CRITERIA.
$conn = new mysqli($servername, $username, $password, $dbname);
//BEGIN SQL SEARCH SWITCH
if ($conn->connect_error) 
{ die("Connection failed: " . $conn->connect_error); }    

    switch ($searchParameter) {
   
     case '1':
         
    $sql  = "SELECT * FROM $adsTable WHERE   adCountry='$country' AND adCounty='$county' AND  adState='$state'   
             AND   adActive= '1'  AND  adTitle LIKE '%$searchBox%'     ORDER BY tiempo DESC ";

    
    break;
    
     
     case '2':
         
     $sql  = "SELECT * FROM $adsTable WHERE   adCountry='$country' AND adCounty='$county' AND  adState='$state'   AND  adCity='$adCity'  
             AND   adActive= '1'  AND  adTitle LIKE '%$searchBox%'  ORDER BY tiempo DESC ";

    break;
    
     case '3':
         
     $sql  = "SELECT * FROM $adsTable WHERE   adCountry='$country' AND adCounty='$county' AND  adState='$state'   AND  adCategory='$adCategory'  
             AND   adActive= '1'AND  adTitle LIKE '%$searchBox%'  ORDER BY tiempo DESC ";

    break;
    
     case '4':
         
    $sql  = "SELECT * FROM $adsTable WHERE   adCountry='$country' AND adCounty='$county' AND  adState='$state'   
             AND   adActive= '1'   ORDER BY tiempo DESC ";

    
    break;
    

     case '5':
         
     $sql  = "SELECT * FROM $adsTable WHERE   adCountry='$country' AND adCounty='$county' AND  adState='$state'  AND  adCity='$adCity'  
             AND  adActive= '1'  ORDER BY tiempo DESC ";

    break;
      
     case '6':
         
     $sql  = "SELECT * FROM $adsTable WHERE   adCountry='$country' AND adCounty='$county' AND  adState='$state'    
              AND  adCategory='$adCategory'     AND  adActive= '1'   ORDER BY tiempo DESC ";

    break;
   
     case '7':
        
     $sql  = "SELECT * FROM $adsTable WHERE   adCountry='$country' AND adCounty='$county' AND  adState='$state'    AND  adCity='$adCity'    AND  adCategory='$adCategory'  
             AND   adActive= '1'   ORDER BY tiempo DESC ";

    break;
 
    case '8':
        
     $sql  = "SELECT * FROM $adsTable WHERE   adCountry='$country' AND adCounty='$county' AND  adState='$state'    AND   adCategory='$adCategory'  
             AND   adActive= '1' AND  adTitle LIKE '%$searchBox%'     ORDER BY tiempo DESC ";

    break;
 
    case '9':
        
     $sql  = "SELECT * FROM $adsTable WHERE   adCountry='$country' AND adCounty='$county' AND  adState='$state'   AND  adCity='$adCity'     AND   adCategory='$adCategory'  
             AND   adActive= '1'  AND  adTitle LIKE '%$searchBox%'     ORDER BY tiempo DESC ";

    break;
 
    
     case '10':
         
    $sql  = "SELECT * FROM $adsTable WHERE   adCountry='$country' AND adCounty='$county' AND  adState='$state'   
             AND   adActive= '1'  ORDER BY adCity ASC ";

    
    break;
 
    case '11':
         
    $sql  = "SELECT * FROM $adsTable WHERE   adCountry='$country' AND adCounty='$county' AND  adState='$state'   
             AND   adActive= '1'   ORDER BY adCity DESC ";

    
    break;
 
     case '12':
         
    $sql  = "SELECT * FROM $adsTable WHERE   adCountry='$country' AND adCounty='$county' AND  adState='$state'   
             AND adCategory='$adCategory' AND adActive= '1' ORDER BY adCity ASC ";

    
    break;
 
    case '13':
         
    $sql  = "SELECT * FROM $adsTable WHERE   adCountry='$country' AND adCounty='$county' AND  adState='$state'   
             AND adCategory='$adCategory' AND   adActive= '1'   ORDER BY adCity DESC ";

    
    break; 
 
 
 
     case '14':
         
    $sql  = "SELECT * FROM $adsTable WHERE   adCountry='$country' AND adCounty='$county' AND  adState='$state'   
             AND   adActive= '1'   ORDER BY adPrice ASC ";

    
    break;
 
    case '15':
         
    $sql  = "SELECT * FROM $adsTable WHERE   adCountry='$country' AND adCounty='$county' AND  adState='$state'   
             AND   adActive= '1' OR   ORDER BY adPrice DESC ";

    
    break;
 
     case '16':
         
    $sql  = "SELECT * FROM $adsTable WHERE   adCountry='$country' AND adCounty='$county' AND  adState='$state'   
             AND adCategory='$adCategory' AND adActive= '1'   ORDER BY adPrice ASC ";

    
    break;
 
    case '17':
         
    $sql  = "SELECT * FROM $adsTable WHERE   adCountry='$country' AND adCounty='$county' AND  adState='$state'   
             AND adCategory='$adCategory' AND   adActive= '1'  ORDER BY adPrice DESC ";

    
    break; 
 
    
     case '18':
         
    $sql  = "SELECT * FROM $adsTable WHERE   adCountry='$country' AND adCounty='$county' AND  adState='$state'   
             AND   adActive= '1'   ORDER BY tiempo ASC ";

    
    break;
 
    case '19':
         
    $sql  = "SELECT * FROM $adsTable WHERE   adCountry='$country' AND adCounty='$county' AND  adState='$state'   
             AND   adActive= '1'  ORDER BY tiempo DESC ";

    
    break;
 
     case '20':
         
    $sql  = "SELECT * FROM $adsTable WHERE   adCountry='$country' AND adCounty='$county' AND  adState='$state'   
             AND adCategory='$adCategory' AND adActive= '1'   ORDER BY adTime ASC ";

    
    break;
 
    case '21':
         
    $sql  = "SELECT * FROM $adsTable WHERE   adCountry='$country' AND adCounty='$county' AND  adState='$state'   
             AND adCategory='$adCategory' AND   adActive= '1'  ORDER BY adTime DESC ";

    
    break; 
 
    
     case '22':
         
    $sql  = "SELECT * FROM $adsTable WHERE   adCountry='$country' AND adCounty='$county' AND  adState='$state'   
             AND   adActive= '1'  ORDER BY adTitle ASC ";

    
    break;
 
    case '23':
         
    $sql  = "SELECT * FROM $adsTable WHERE   adCountry='$country' AND adCounty='$county' AND  adState='$state'   
             AND   adActive= '1'   ORDER BY adTitle DESC ";

    
    break;
 
     case '24':
         
    $sql  = "SELECT * FROM $adsTable WHERE   adCountry='$country' AND adCounty='$county' AND  adState='$state'   
             AND adCategory='$adCategory' AND adActive= '1'  ORDER BY adTitle ASC ";

    
    break;
 
    case '25':
         
    $sql  = "SELECT * FROM $adsTable WHERE   adCountry='$country' AND adCounty='$county' AND  adState='$state'   
             AND adCategory='$adCategory' AND   adActive= '1'   ORDER BY adTitle DESC ";

    
    break; 
 
   
 
}    

print "

 <button id='categoryBox' name='categoryBox'  style='float:left; width:auto; background:none;cursor:none;border:none;font-weight:bold; text-shadow: 1px 1px 1px gray; font-size: 25px; text-align:left; color: darkred; font-family:book antiqua;'    > $adCategory</button>

<select id='sortByBox' name=$adCategory  style='float:right;  z-index: 19px; top: 80px; right: 5px; width:auto; cursor:pointer;border:outset;  border-radius: 5px;box-shadow: 1px 2px 2px gray;font-wieght:bold;font-size: 17px; text-align:left; color:black; font-family:book antiqua;' onchange='sortBy(value)' onmouseover='homeBgColorOn1(this)' onmouseout='homeBgColorOff1(this)'>
<option value='ORDENA'>SORT BY</option>
<option value='cityAsc' style='background: #ebebe0;text-shadow: 1px 1px 1px gray;' >City(Asc)</option>
<option value='cityDsc' style='background: #ebebe0;text-shadow: 1px 1px 1px gray;' >City(Dsc)</option>
<option value='priceAsc' style='background:  #d6d6c2;text-shadow: 1px 1px 1px gray;' >Price(Asc)</option>
<option value='priceDsc' style='background:  #d6d6c2;text-shadow: 1px 1px 1px gray;' >Price(Dsc)</option>
<br/><option value='timeAsc' style='background:  #ccccb3;text-shadow: 1px 1px 1px gray;' >Time(Asc)</option>
<option value='timeDsc' style='background:  #ccccb3;text-shadow: 1px 1px 1px gray;' >Time(Dsc)</option>
<br/><option value='titleAsc' style='background:  #adad85;text-shadow: 1px 1px 1px gray;' >Title(Asc)</option>
<option value='titleDsc' style='background:  #adad85;text-shadow: 1px 1px 1px gray;' >Title(Dsc)</option>
</select >
</td></tr>
<tr><td>
 

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
$videoLink=$row['videoLink'];

    if($videoLink =='')
    {  $videoYesNo = '';   } else{ $videoYesNo = ' ~ Video ~ ';}



$adActive=$row['adActive'];
$h='href';

    if($adActive=='3')
{
$ref1='PENDING';
$h='';
};
print " <div  class='adDivClass' onmouseover='liveAdsBgColorOn(this)' onmouseout='liveAdsBgColorOff(this)'  > ";

print "<input  id='adId' readonly  type='hidden' value='".$ref6."'  > 

<a ".$h."='https://www.mimarketa.com/mmMain/mmEnglish/mmLiveAdsSingleAd.php?country=".$country."&state=".$state."&county=".$county."&adId=".$ref6."&title=".$ref1."&sessionId=".$ref7."&picUrl1=".$ref5."&category=".$adCategory." '  >
<label>".$ref1."</label>	
<br/><label>$".$ref2."</label><br/>"; 
print "<label>".$ref3."</label></a>";  
print "<textarea   maxlength='100' cols='18' rows='3'  required  readonly >".$ref4."</textarea>
<br/>

<button id='$videoLink' onclick='goToVideo(id)'   style='background:none;border:none;font-weight:bold;font-family:book antiqua;font-size:15px;color:darkred;text-shadow: 1px 1px 1px gray;cursor:pointer;'>$videoYesNo</button>
<br/>
<a ".$h."='https://www.mimarketa.com/mmMain/mmEnglish/mmLiveAdsSingleAd.php?country=".$country."&state=".$state."&county=".$county."&adId=".$ref6."&title=".$ref1."&sessionId=".$ref7."&picUrl1=".$ref5." '  >";  

    if($ref5 !='noFoto')
    {print "<img  id='laPic' src='".$ref5."'   class='adDivPicClass'   >";}

    
print "</a> </div  > ";
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
$videoLink=$row['videoLink'];

    if($videoLink =='')
    {  $videoYesNo = '';   } else{ $videoYesNo = ' ~ Video ~ ';}



$adActive=$row['adActive'];
$h='href';

    if($adActive=='3')
{
$ref1='PENDING';
$h='';
};
print " <div  class='adDivClass' onmouseover='liveAdsBgColorOn(this)' onmouseout='liveAdsBgColorOff(this)'  > ";

print "<input  id='adId' readonly  type='hidden' value='".$ref6."'  > 

<a ".$h."='https://www.mimarketa.com/mmMain/mmEnglish/mmLiveAdsSingleAd.php?country=".$country."&state=".$state."&county=".$county."&adId=".$ref6."&title=".$ref1."&sessionId=".$ref7."&picUrl1=".$ref5." '  >
<label>".$ref1."</label>	
<br/><label>$".$ref2."</label><br/>"; 
print "<label>".$ref3."</label></a>";  
print "<textarea   maxlength='100' cols='18' rows='3'  required  readonly >".$ref4."</textarea>
<br/>


<button id='$videoLink' onclick='goToVideo(id)'   style='background:none;border:none;font-weight:bold;font-family:book antiqua;font-size:15px;color:darkred;text-shadow: 1px 1px 1px gray;cursor:pointer;'>$videoYesNo</button>


<br/>


<a ".$h."='https://www.mimarketa.com/mmMain/mmEnglish/mmLiveAdsSingleAd.php?country=".$country."&state=".$state."&county=".$county."&adId=".$ref6."&title=".$ref1."&sessionId=".$ref7."&picUrl1=".$ref5." '  >";  

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
$videoLink=$row['videoLink'];

    if($videoLink =='')
    {  $videoYesNo = '';   } else{ $videoYesNo = ' ~ Video ~ ';}



$adActive=$row['adActive'];
$h='href';

    if($adActive=='3')
{
$ref1='PENDING';
$h='';
};
print " <div  class='adDivClass' onmouseover='liveAdsBgColorOn(this)' onmouseout='liveAdsBgColorOff(this)'  > ";

print "<input  id='adId' readonly  type='hidden' value='".$ref6."'  > 

<a ".$h."='https://www.mimarketa.com/mmMain/mmEnglish/mmLiveAdsSingleAd.php?country=".$country."&state=".$state."&county=".$county."&adId=".$ref6."&title=".$ref1."&sessionId=".$ref7."&picUrl1=".$ref5." '  >
<label>".$ref1."</label>	
<br/><label>$".$ref2."</label><br/>"; 
print "<label>".$ref3."</label></a>";  
print "<textarea   maxlength='100' cols='18' rows='3'  required  readonly >".$ref4."</textarea>
<br/>


<button id='$videoLink' onclick='goToVideo(id)'   style='background:none;border:none;font-weight:bold;font-family:book antiqua;font-size:15px;color:darkred;text-shadow: 1px 1px 1px gray;cursor:pointer;'>$videoYesNo</button>


<br/>


<a ".$h."='https://www.mimarketa.com/mmMain/mmEnglish/mmLiveAdsSingleAd.php?country=".$country."&state=".$state."&county=".$county."&adId=".$ref6."&title=".$ref1."&sessionId=".$ref7."&picUrl1=".$ref5." '  >";  

    if($ref5 !='noFoto')
    {print "<img  id='laPic' src='".$ref5."'   class='adDivPicClass'   >";}

    
print "</a> </div  > ";
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
$videoLink=$row['videoLink'];

    if($videoLink =='')
    {  $videoYesNo = '';   } else{ $videoYesNo = ' ~ Video ~ ';}



$adActive=$row['adActive'];
$h='href';

    if($adActive=='3')
{
$ref1='PENDING';
$h='';
};
print " <div  class='adDivClass' onmouseover='liveAdsBgColorOn(this)' onmouseout='liveAdsBgColorOff(this)'  > ";

print "<input  id='adId' readonly  type='hidden' value='".$ref6."'  > 

<a ".$h."='https://www.mimarketa.com/mmMain/mmEnglish/mmLiveAdsSingleAd.php?country=".$country."&state=".$state."&county=".$county."&adId=".$ref6."&title=".$ref1."&sessionId=".$ref7."&picUrl1=".$ref5." '  >
<label>".$ref1."</label>	
<br/><label>$".$ref2."</label><br/>"; 
print "<label>".$ref3."</label></a>";  
print "<textarea   maxlength='100' cols='18' rows='3'  required  readonly >".$ref4."</textarea>
<br/>


<button id='$videoLink' onclick='goToVideo(id)'   style='background:none;border:none;font-weight:bold;font-family:book antiqua;font-size:15px;color:darkred;text-shadow: 1px 1px 1px gray;cursor:pointer;'>$videoYesNo</button>


<br/>


<a ".$h."='https://www.mimarketa.com/mmMain/mmEnglish/mmLiveAdsSingleAd.php?country=".$country."&state=".$state."&county=".$county."&adId=".$ref6."&title=".$ref1."&sessionId=".$ref7."&picUrl1=".$ref5." '  >";  

    if($ref5 !='noFoto')
    {print "<img  id='laPic' src='".$ref5."'   class='adDivPicClass'   >";}

    
print "</a> </div  > ";
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
$videoLink=$row['videoLink'];

    if($videoLink =='')
    {  $videoYesNo = '';   } else{ $videoYesNo = ' ~ Video ~ ';}



$adActive=$row['adActive'];
$h='href';

    if($adActive=='3')
{
$ref1='PENDING';
$h='';
};
print " <div  class='adDivClass' onmouseover='liveAdsBgColorOn(this)' onmouseout='liveAdsBgColorOff(this)'  > ";

print "<input  id='adId' readonly  type='hidden' value='".$ref6."'  > 

<a ".$h."='https://www.mimarketa.com/mmMain/mmEnglish/mmLiveAdsSingleAd.php?country=".$country."&state=".$state."&county=".$county."&adId=".$ref6."&title=".$ref1."&sessionId=".$ref7."&picUrl1=".$ref5." '  >
<label>".$ref1."</label>	
<br/><label>$".$ref2."</label><br/>"; 
print "<label>".$ref3."</label></a>";  
print "<textarea   maxlength='100' cols='18' rows='3'  required  readonly >".$ref4."</textarea>
<br/>


<button id='$videoLink' onclick='goToVideo(id)'   style='background:none;border:none;font-weight:bold;font-family:book antiqua;font-size:15px;color:darkred;text-shadow: 1px 1px 1px gray;cursor:pointer;'>$videoYesNo</button>


<br/>


<a ".$h."='https://www.mimarketa.com/mmMain/mmEnglish/mmLiveAdsSingleAd.php?country=".$country."&state=".$state."&county=".$county."&adId=".$ref6."&title=".$ref1."&sessionId=".$ref7."&picUrl1=".$ref5." '  >";  

    if($ref5 !='noFoto')
    {print "<img  id='laPic' src='".$ref5."'   class='adDivPicClass'   >";}

    
print "</a> </div  > ";
}


$e++;

if ($e =="6"){$e="1";}

}// END WHILE LOOP

}
print " </div> ";
//END TABLE 5



?>

    

</section>
</main>  
</div>
<!-- CONTAINER 3 -->
<div class='container3' >

<canvas style='visibility:hidden;border:outset;' width="80" height="80" id="canvas">canvas</canvas>

<div id="loadingDiv"   ><br/><br/>Please wait.<br /><br/>Uploading Ad.........<br/><br/><br/><br/><br/><br/></div>


<footer>   <?php include 'mmFooter.php'; ?>  </footer>
</div>


</div>   


<script src="mmHeader.js"></script> 
<script src="mmLiveAds.js"></script> 
<script> 
checkViewportWidth();

</script>
<script> 

css();
</script>
</body>
</html>  
