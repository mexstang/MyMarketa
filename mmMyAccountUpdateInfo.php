<html>
<head>
<title>MyMARKETA.com UPDATE INFO</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="mmMyAccountUpdateInfo.css">

<script src="mmMyAccountUpdateInfo.js"></script> 
</head>
<body  onload='loadLocation()'  >
<?php include 'mmHeader.php';
 $clave=$_GET['clave'];
$ecorreo=$_GET['ecorreo'];

$servername = "localhost";
$username = "u302929136_mexstang";
$password = "mota67Mysql!";
$dbname = "u302929136_MiMarketaDb";
$lasCuentasTable = "enLasCuentasTable";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) 
{ die("Connection failed: " . $conn->connect_error); }    
 
$sql  = "SELECT * FROM $lasCuentasTable WHERE clave= '$clave' AND ecorreo= '$ecorreo' ";
$result = $conn->query($sql);
$row = $result->fetch_assoc(); 

$foto=$row['userPic'];
$ecorreo=$row['ecorreo'];
$usernameBox=$row['userName'];
$cityBox=$row['city'];
$country=$row['country'];
$county=$row['county'];
$state=$row['state'];

if($country == 'US')
{$county2 = $county . ' County ' ;} else {$county2 = $county;}


Print "
<center>
    <table id='formTable'   >
        <tr><td>
        <form  id='mmUpdateInfoForm' name='mmUpdateInfoForm' method='post'   action='https://www.mimarketa.com/mmMain/mmEnglish/mmMyAccountUpdateInformation2.php?' enctype='multipart/form-data' accept-charset='utf-8' >

<input  id='hidden_data1' type='hidden' name='hidden_data1'  value='noPicUpdate' >
<input  id='urlBox' type='hidden' name='urlBox'  value='noUrl' >
 
   <input    type='text'  id='ecorreo'  name='ecorreo' maxlength='100' size='50' readonly    onmouseover='postBgColorOn(this)' onmouseout='postBgColorOff(this)'  onchange='changeFontColor(this)' style='cursor:default;font-weight:bold;'  value= '$ecorreo' >
   <br/>
  <input  id='county'   type='text' name='county' maxlength='50' size='20' readonly    onmouseover='postBgColorOn(this)' onmouseout='postBgColorOff(this)'  onchange='changeFontColor(this)' value= '$county2'  style='text-align:right;cursor:default;'  >,
  <input  id='state'   type='text' name='state' maxlength='5' size='2' readonly    onmouseover='postBgColorOn(this)' onmouseout='postBgColorOff(this)'  onchange='changeFontColor(this)'  style='cursor:default;' value='$state'  >
  
  <input  id='country'   type='text' name='country' maxlength='5' size='2' readonly    onmouseover='postBgColorOn(this)' onmouseout='postBgColorOff(this)'  onchange='changeFontColor(this)'  value= '$country'  style='cursor:default;text-align:left;' ><br/>
 
 <br/>
<img src='".$foto."' id='output_image1' style='width:150;height:150px;border:outset;border-width:2px;border-radius: 10px;border:solid;color:darkred; '      onmouseover='postBgColorOn(this)' onmouseout='postBgColorOff(this)'  /> 
  <br/>
&nbsp;&nbsp;&nbsp;&nbsp;<input  id='userfile1'   name='userfile1'  style='font-size:15px;width:100px;margin:5px;' type='file' onchange='preview_image1(event) '    title='' accept='image/*'   
onmouseover='postBgColorOn(this)' onmouseout='postBgColorOff(this)'   >
	
<label  id='pic1' onclick='resetImage(id)' style='font-size:40px;cursor:pointer;color:black;font-weight:bold;padding:5px;'    onmouseover='postBgColorOn(this)' onmouseout='postBgColorOff(this)' >X</label> &nbsp;&nbsp;&nbsp;
  <br/>
 &nbsp;&nbsp;<input  id='usernameBox' type='text' name='usernameBox' maxlength='15' size='30'   required    onmouseover='postBgColorOn(this)' onmouseout='postBgColorOff(this)'  onchange='updateInformation(this)'  value='".$usernameBox."' style='color:darkred;' >

&nbsp;&nbsp;<input  id='usernameBox2' type='hidden' name='usernameBox2' maxlength='15' size='30'   readonly    onmouseover='postBgColorOn(this)' onmouseout='postBgColorOff(this)' value='".$usernameBox."'  >

<br/>
<input  id='cityBox'   type='text' name='cityBox' maxlength='80' size='30' required    onmouseover='postBgColorOn(this)' onmouseout='postBgColorOff(this)'   value='".$cityBox."'  style='color:darkred;' >
  <br/>
 

<input type='password' id='clave'  name='clave'    value='".$clave."'  style='border:solid;width:300px;'   >
<input type='password' id='clave2'  name='clave2'   value='".$clave."' style='border:solid;width:300px;'  >
<label onmouseover='showPass()' onmouseout='hidePass()' style='width:20px;font-size:20px; '  > SHOW </label>
<br/><br/>
<label id='done'   name='done'   onmouseover='postBgColorOn(this)' onmouseout='postBgColorOff(this)' onclick='updateVal()' 
style='border:none;background:linear-gradient(to right, darkgreen, white, darkgreen);font-weight:bold;cursor:pointer;font-size:35px;font-family:book antiqua;padding-right:25px;padding-left:25px; border-radius:10px;' >DONE</label>
</form>
 </td></tr></table> </center>

   
<canvas style='visibility:hidden;border:outset;' width='80' height='80' id='canvas'>canvas</canvas>

<div id='loadingDiv' style='position:absolute;left:0px;top:0px;z-index:5;text-align:center;font-size:55px;font-weight:bold;font-family:book antiqua;width:100%;height:100%;background:grey;opacity:.7;visibility:hidden;'  ><br/><br/>Porfavor espera.<br /><br/><br/>UPDATING.........<br/><br/><br/><br/><br/><br/></div>
";
?>
</body>
</html>

