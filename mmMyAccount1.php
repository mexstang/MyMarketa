<html>
<head>
<title>MyMarketa.com - MyACCOUNT</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="shortcut icon" href="https://www.mimarketa.com/mmMain/mmEnglish/mmFotos/mmMastheadPic.png" alt="MyMARKETA.COM" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="mmMyAccount.css">
<script src="mmMyAccount.js"></script> 
</head>
<body  >
<?php
$clave=$_GET['claveBox'];
$ecorreo=$_GET['ecorreoBox'];
$country=$_GET['country'];
$state=$_GET['state'];
$county=$_GET['county'];

$servername = "localhost";
$username = "u302929136_mexstang";
$password = "mota67Mysql!";
$dbname = "u302929136_MiMarketaDb";
$adsTable = "enAdsTable";
$lasCuentasTable = "enLasCuentasTable";





// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) 
{ die("Connection failed: " . $conn->connect_error); }    
 
$sql  = "SELECT * FROM $lasCuentasTable WHERE clave= '$clave' AND ecorreo= '$ecorreo' ";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if ($result->num_rows == '1') 
{ 

$userName2=$row['userName'];
$userPic2=$row['userPic'];
$country2=$row['country'];
$state2=$row['state'];
$county2=$row['county'];
$city2=$row['city'];
    
$approved = 'yes420';

}

$conn->close();

switch ($approved)
{
    case 'yes420':
        
include 'mmHeader.php';


print "<center> <table id='myAccountMainTable'  ><tr>
<td  id='myAccountMainTableTd1' > ";

// OPEN DB AND GET ALL THE ADS FOR THE EMAIL --------------------------------------------
$conn2 = new mysqli($servername, $username, $password, $dbname);
if ($conn2->connect_error){ die("Connection failed: " . $conn2->connect_error); }    

$sql2  = "SELECT * FROM $adsTable WHERE  adEmail='$ecorreo'   ORDER BY tiempo DESC ";
$result2 = $conn2->query($sql2);
 $conn2->close();
//IF EMAIL DOES HAVE AN AD POSTED, PRINT OUT TD CELLS FOR EACH AD.
//IF EMAIL DOES NOT HAVE ANY ADS, PRINT OUT A BLANK TD.

print "<div id='userToolbar' style='position:fixed;z-index:4;top:75px;left:0px;background:linear-gradient( gray, white, gray); width:100%;border:outset; text-align:center;'   >
    &nbsp; &nbsp;
<img  id='userPic' src='".$userPic2."' style='float:left;border:outset;border-radius:10px;width:50px;height:30px;margin-right:5px;'   >
    
<label style='float:left;font-size:23px; color:darkred;text-shadow: 1px 1px black;margin-right:5px;' >".$userName2."</label> 

 
<input type='button' id='cambiaButton' onclick='resetClave()' value=' INFO ' 
 style='background:transparent;font-size:25px;font-family:book antiqua;border:none;cursor:pointer;margin:2px;'>  
  
 <input type='button' onclick='refreshMessages()' value='REFRESH' 
 style='width:150px;background:transparent;font-size:25px;font-family:book antiqua;border:none;cursor:pointer;margin:2px;'> 

<input type='button' onclick='showMessages()' value='MESSAGES' style='width:200px;background:transparent;font-size:25px;font-family:book antiqua;border:none;cursor:pointer;margin:2px;'>
 
</div>";
if ($result2->num_rows < 1) 
{ 
print "<table id='myAccountMainTableTd1Table' ><tr><td>";
    print "YOU HAVE NOT POSTED ANY ADS YET.
    <input class='location'  id='passCounty2' readonly  type='hidden' value='' name='county'>
<input class='location'  id='passState2' readonly  type='hidden' value='' name='state' >";
    print "</td>";
}

if ($result2->num_rows > 0) 
{ 
print "<table id='myAccountMainTableTd1Table' ><tr>";
while($row2 = $result2->fetch_assoc()) 
{  
$cat=$row2['adCategory'];    
$ref1=$row2['adTitle'];
$ref2=$row2['adPrice'];
$ref4=$row2['adDescription'];
$pic1=$row2['adPicUrl1'];
$pic2=$row2['adPicUrl2'];
$pic3=$row2['adPicUrl3'];
$ref6=$row2['adId'];
$ref7=$row2['adActive'];
$ref8=$row2['adCounty'];
$ref9=$row2['adState'];
$showSaveButton=$ref6.'button' ;

$videoLink=$row2['videoLink'];

    if($videoLink =='')
    {  $videoYesNo = '';   } else{ $videoYesNo = ' ~ Video ~ ';}

print"
<input id='adCounty' readonly  type='hidden' value='".$ref8."'  name='county'>
<input  id='adState' readonly  type='hidden' value='".$ref9."'  name='state' >
 <input class='location'  id='passCounty2' readonly  type='hidden' value='' name='county'>
<input class='location'  id='passState2' readonly  type='hidden' value='' name='state' >


";

if ($ref7 =="1")
{
$ref7="ON";
$color7='linear-gradient(to right, darkgreen, white,darkgreen  )';
}
else
{
$ref7="OFF";
$color7='linear-gradient(to right, darkred, white,darkred  )';
}

print "

	
<form  id='mmSaveForm'  method='post'   action='https://www.mimarketa.com/mmMain/mmEnglish/mmEditAd2.php?' enctype='multipart/form-data' accept-charset='utf-8' name='mmSaveForm'>

<input  id='adId' readonly  type='hidden' value='".$ref6."'  >"; 

 print "<td  >
 <input type='submit' id='".$showSaveButton."'    style='float:right;background:none;border:none;font-weight:bold;font-family:book antiqua;font-size:15px;color:darkred;text-shadow: 1px 1px 1px gray; visibility:hidden;' value='SAVE'>
 <br/>
 $ref6
 <br/>

<select id='".$ref6."'  name='".$ecorreo."' readonly
style='position:relative;margin:2px; width:60%;height:30px;border-radius:5px;
font-size:20px;font-weight:bold;background:".$color7."'
 onchange='activateMyAd(this)'  >
<option value='".$ref7."' > ".$ref7." </option>
<option value='ON'>ON</option>
<option value='OFF'>OFF</option>
<option value='PENDING'>PENDING</option>
<option value='DELETE'>DELETE</option>
</select>

 <br/>
 <select id='categoria' name='".$showSaveButton."'    onmouseover='postBgColorOn(this)' onmouseout='postBgColorOff(this)'  
 onchange='showSaveBtn(name)'  style='position:relative;margin:2px; width:100%;height:30px;border-radius:5px;
font-size:20px;font-weight:bold;background:linear-gradient(to right, gray, white, gray) ; text-align:center;font-family:book antiqua;' >
 <option value='$cat'>$cat</option>
  <option value='ANTIQUES'>ANTIQUES</option>
  <option value='APPLIANCES'>APPLIANCES</option>
  <option value='ARTS-CRAFTS'>ARTS-CRAFTS</option>
  <option value='BABY-STUFF'>BABY-STUFF</option>
  <option value='BARTER'>BARTER</option>
  <option value='BATHROOM'>BATHROOM</option>
  <option value='BICYCLES'>BICYCLES</option>
  <option value='BOOKS'>BOOKS</option>  
  <option value='CLOTHES'>CLOTHES</option>
  <option value='COMPUTERS'>COMPUTERS</option>
  <option value='ELECTRONICS'>ELECTRONICS</option>
   <option value='EXERCISE'>EXERCISE</option>
  <option value='FARM'>FARM</option>
  <option value='FOOD'>FOOD</option>
 
   <option value='FREE'>FREE</option>
  <option value='FRUITS-VEGETABLES'>FRUITS-VEGETABLES</option>
  <option value='FURNITURE'>FURNITURE</option>
  <option value='GARDEN'>GARDEN</option>
  <option value='GARDEN-420'>GARDEN-420</option>
  <option value='SALUD'>HEALTH</option>
  <option value='HEALTH'>HELP</option>  
  <option value='HOME-EXTERIOR'>HOME-EXTERIOR</option>
  <option value='HOME-INTERIOR'>HOME-INTERIOR</option>
  
  <option value='JEWELRY'>JEWELRY</option>
  <option value='KITCHEN'>KITCHEN</option>
  <option value='MOTA'>MOTA</option>
  <option value='MUSIC-GENERAL'>MUSIC-GENERAL</option>
  <option value='MUSIC-INSTRUMENTS'>MUSIC-INSTRUMENTS</option>
  <option value='PET-STUFF'>PET-STUFF</option>
  <option value='PICKER-UPPERS'>PICKER-UPPERS</option>
  <option value='SERVICES'>SERVICES</option>
  <option value='SWAP-MEETS'>SWAP-MEETS</option>
  <option value='TICKETS'>TICKETS</option>
  <option value='TOOLS'>TOOLS</option> 
  <option value='JUGETES'>TOYS</option>
  <option value='TOYS'>THRIFT-STORES</option>
  <option value='VIDEO-GAMES'>VIDEO-GAMES</option>
  <option value='WANTED'>WANTED</option>  
  <option value='YARD-SALES'>YARD-SALES</option>
  <option value='JOBS-FULL-TIME'  style='background:#66cc66;' >JOBS-FULL-TIME</option>
  <option value='JOBS-PART-TIME'  style='background:#66cc66;' >JOBS-PART-TIME</option>
  <option value='AUTOS' style='background:#ccccb3;' >AUTOS</option>
  <option value='BOATS' style='background:#ccccb3;'>BOATS</option>
  <option value='MOTORCYCLES' style='background:#ccccb3;'>MOTORCYCLES</option>
   <option value='OFF ROAD' style='background:#ccccb3;'>OFF-ROAD</option>
   <option value='RVs' style='background:#ccccb3;'>RVs</option>
  <option value='TRUCKS' style='background:#ccccb3;'>TRUCKS</option>
  <option value='APARTMENTS-RENT' style='background:#ff9999;' >APARTMENTS-RENT</option>
  <option value='HOUSES-RENT' style='background:#ff9999;' >HOUSES-RENT</option>
  <option value='CONDOS-RENT' style='background:#ff9999;' >CONDOS-RENT</option>
  <option value='ROOMS-RENT' style='background:#ff9999;' >ROOMS-RENT</option> 
  <option value='RENTAL-WANTED' style='background:#ff9999;' >RENTAL-WANTED</option>
  <option value='ROOM-WANTED' style='background:#ff9999;' >ROOM-WANTED</option>
  <option value='ROOMMATE-WANTED' style='background:#ff9999;' >ROOMMATE-WANTED</option> 
  <option value='CONDOS-SALE' style='background:#ff9999;' >CONDOS-SALE</option> 
  <option value='HOUSES-SALE' style='background:#ff9999;' >HOUSES-SALE</option> 
  <option value='LAND-SALE' style='background:#ff9999;' >LAND-SALE</option> 
  
  
</select> 
  
";

print "<br/><input id='editTitle1' name='".$showSaveButton."'  type='text'  onclick='adEdit(this)'   onchange='showSaveBtn(name )' value='".$ref1."'  readonly 
style='background:linear-gradient(to right, gray, white, gray  ); width:100%;height:30px;'  >
<br/> 
<input id='editPrice'   type='text'  value='".$ref2." '   onclick='adEdit(this)'   name='".$showSaveButton."'   onchange='showSaveBtn(name )'   readonly style=' width:100%;height:30px;background:linear-gradient(to right, gray, white, gray  );'  ><br/>"; 

print "<textarea   wrap='hard' 
style=' width:100%;height:80px;background:linear-gradient(to right, gray, white, gray  )'    
name='".$showSaveButton."' readonly onclick='adEdit(this)'  onchange='showSaveBtn(name )'   >".$ref4."</textarea>


<br/><br/>
<label style='background:none;border:none;font-weight:bold;font-family:book antiqua;font-size:15px;color:darkred;text-shadow: 1px 1px 1px gray;'>Video: </label>
<input   onclick='adEdit(this)'   value='".$videoLink."'  readonly style=' width:100%;height:30px;background:linear-gradient(to right, gray, white, gray  )'     name='".$showSaveButton."'   onchange='showSaveBtn(name )'  >
<br/>

<br/>";  

print "
<hr>
<img  id='laPic1' src='".$pic1."'  name='".$showSaveButton."' style='border:outset;border-width:2px;border-radius: 10px;border-color:black; '       onmouseover='postBgColorOn(this)' onmouseout='postBgColorOff(this)'   /> 
 <br/>
<input id='userfile1' name='".$showSaveButton."'   style='width:100px;font-size:20px; border:none;cursor:pointer;font-weight:bold;padding:5px;'   type='file'   onchange='preview_image1(event),showSaveBtn(name ) '   title='CLICK TO ADD A FOTO.' accept='image/*'   onmouseover='postBgColorOn(this)' onmouseout='postBgColorOff(this)'       >

<label   id='pic1' onclick='resetImage(id)' style='color:darkred;font-size:30px; text-shadow: 1px 1px 1px black;border:none;cursor:pointer;font-weight:bold;padding:5px;'    onmouseover='postBgColorOn(this)' onmouseout='postBgColorOff(this)' >X</label>  &nbsp;&nbsp;&nbsp;

<hr>

<img  id='laPic2' src='".$pic2."'  name='".$showSaveButton."' style='border:outset;border-width:2px;border-radius: 10px;border-color:black; '       onmouseover='postBgColorOn(this)' onmouseout='postBgColorOff(this)'   /> 
 <br/>
<input id='userfile2' name='".$showSaveButton."'   style='width:100px;font-size:20px; border:none;cursor:pointer;font-weight:bold;padding:5px;'   type='file'   onchange='preview_image2(event),showSaveBtn(name ) '   title='CLICK TO ADD A FOTO.' accept='image/*'   onmouseover='postBgColorOn(this)' onmouseout='postBgColorOff(this)'       >

<label   id='pic2' onclick='resetImage(id)' style='color:darkred;font-size:30px; text-shadow: 1px 1px 1px black;border:none;cursor:pointer;font-weight:bold;padding:5px;'    onmouseover='postBgColorOn(this)' onmouseout='postBgColorOff(this)' >X</label>  &nbsp;&nbsp;&nbsp;

<hr>

<img  id='laPic3' src='".$pic3."'  name='".$showSaveButton."' style='border:outset;border-width:2px;border-radius: 10px;border-color:black; '       onmouseover='postBgColorOn(this)' onmouseout='postBgColorOff(this)'   /> 
 <br/>
<input id='userfile3' name='".$showSaveButton."'   style='width:100px;font-size:20px; border:none;cursor:pointer;font-weight:bold;padding:5px;'   type='file'   onchange='preview_image3(event),showSaveBtn(name ) '   title='CLICK TO ADD A FOTO.' accept='image/*'   onmouseover='postBgColorOn(this)' onmouseout='postBgColorOff(this)'       >

<label   id='pic3' onclick='resetImage(id)' style='color:darkred;font-size:30px; text-shadow: 1px 1px 1px black;border:none;cursor:pointer;font-weight:bold;padding:5px;'    onmouseover='postBgColorOn(this)' onmouseout='postBgColorOff(this)' >X</label>  &nbsp;&nbsp;&nbsp;


<hr>

<canvas style='visibility:hidden;border:outset;' width='80' height='80' id='canvas'>canvas</canvas>

<input  id='hidden_data1' type='hidden' name='hidden_data1'  value='noFoto' >
<input  id='hidden_data2' type='hidden' name='hidden_data2'  value='noFoto' >
<input  id='hidden_data3' type='hidden' name='hidden_data3'  value='noFoto' >

</form>


</td>";


}// END WHILE LOOP
$conn2->close();

}

print "</tr></table><br/><br/><br/><br/><br/><br/><br/><br/>";
//END TABLE---------------------------------------------------------------


print "</td></tr></table></center> ";


// CHAT WINDOW START---------------------------------------------------------

include 'mmMyAccountChat.php';   

// END CHAT WINDOW---------------------------------------------------------


print "
<script> 


if('$country2' =='US')
{
 document.getElementById('countyTextBox').innerHTML =   'County ,';
 document.getElementById('countryBox').value ='US';
}


if('$country2' =='MEXICO')
{
 document.getElementById('countyTextBox').innerHTML =   ' , $country2 ';
  document.getElementById('countryBox').value ='MEXICO';
} 

document.getElementById('passCounty').innerHTML='$county2';
document.getElementById('passState').innerHTML='$state2';
</script>";  
   


break;

default:
print "PLEASE TRY AGAIN.
<script> 

window.location.replace('https://www.mimarketa.com/mmMain/mmEnglish/mmMyAccount.php?country=$country&state=$state&county=$county');
</script>";   

}

?>    
</body>
</html>
