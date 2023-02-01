<html>
<head>
<title>MyMARKETA.com REGISTER</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="mmMyAccountRegister.css">

<script src="mmMyAccountRegister.js"></script> 
</head>
<body  onload='loadLocation()'  >
<?php include 'mmHeader.php';

$country=$_GET['country'];
$county=$_GET['county'];
$state=$_GET['state'];


if($country == 'US')
{$county2 = $county . ' County ' ;} else {$county2 = $county;}



Print "
<center>
    <table id='formTable'   >
        <tr><td>
        <form  id='mmUpdateInfoForm' name='mmUpdateInfoForm' method='post'   action='https://www.mimarketa.com/mmMain/mmEnglish/mmMyAccountRegister2.php?' enctype='multipart/form-data' accept-charset='utf-8' >

<input  id='hidden_data1' type='hidden' name='hidden_data1'  value='noPicUpdate' >
<input  id='urlBox' type='hidden' name='urlBox'  value='noUrl' >
 <button style='background:none;border:none;font-size:30px;font-family:book antiqua;font-weight:bold;color:darkred;' >~ New Account ~ </button>
 <br/>
   
  <a href='https://www.mimarketa.com/mmMain/mmEnglish/mmLocation.php?country=$country&county=$county&state=$state&adCity=All_Cities&category=ALL'    >
  <input  id='county'   type='text' name='county' onclick='navigationBar (changeLocationBox) ' maxlength='50' size='20' readonly    onmouseover='postBgColorOn(this)' onmouseout='postBgColorOff(this)'     value= '$county2'  style='font-size:25px;text-align:right;'  >,
  <input  id='state'   type='text' name='state' maxlength='5' size='2' readonly    onmouseover='postBgColorOn(this)' onmouseout='postBgColorOff(this)'     value='$state'  style='font-size:25px;text-align:right;'  >
  
  <input  id='country'   type='text' name='country' maxlength='5' size='2' readonly    onmouseover='postBgColorOn(this)' onmouseout='postBgColorOff(this)'    value= '$country'  style='font-size:25px;text-align:left;' ></a><br/>
 
 <br/>
<img src='".$foto."' id='output_image1' style='width:150;height:150px;border:outset;border-width:2px;border-radius: 10px;border:solid;color:darkred; '      onmouseover='postBgColorOn(this)' onmouseout='postBgColorOff(this)'  /> 
  <br/>
&nbsp;&nbsp;&nbsp;&nbsp;<input  id='userfile1'   name='userfile1'  style='font-size:15px;width:100px;margin:5px;' type='file' onchange='preview_image1(event) '    title='' accept='image/*'   
onmouseover='postBgColorOn(this)' onmouseout='postBgColorOff(this)'   >
	
<label  id='pic1' onclick='resetImage(id)' style='font-size:40px;cursor:pointer;color:black;font-weight:bold;padding:5px;'    onmouseover='postBgColorOn(this)' onmouseout='postBgColorOff(this)' >X</label> &nbsp;&nbsp;&nbsp;
  <br/>
  Username
    <br/>
 &nbsp;&nbsp;<input  id='usernameBox' type='text' name='usernameBox' maxlength='15' size='30'   required    onmouseover='postBgColorOn(this)' onmouseout='postBgColorOff(this)'  onchange='updateInformation(this)'  value='".$usernameBox."' style='width:500px;border:solid;color:darkred;' >

&nbsp;&nbsp;<input  id='usernameBox2' type='hidden' name='usernameBox2' maxlength='15' size='30'   readonly    onmouseover='postBgColorOn(this)' onmouseout='postBgColorOff(this)' value='".$usernameBox."'  > 
<br/>Email
<br/>
<input    type='text'  id='ecorreo'  name='ecorreo' maxlength='100' size='50' required    onmouseover='postBgColorOn(this)' onmouseout='postBgColorOff(this)'  onchange='changeFontColor(this)'  style='width:500px;border:solid;color:darkred;'  value= '' >
  
<br/>
City
  <br/>
<input  id='cityBox'   type='text' name='cityBox' maxlength='80' size='30' required    onmouseover='postBgColorOn(this)' onmouseout='postBgColorOff(this)'   value='".$cityBox."'  style='width:500px;border:solid;color:darkred;' >
  <br/>
 
Password
  <br/>
<input type='text' id='clave'  name='clave'    value='".$clave."'  style='border:solid;width:300px;' required  >
<input type='text' id='clave2'  name='clave2'   value='".$clave."' style='border:solid;width:300px;' required >
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

