<html>
<head>
<title>MyMARKETA.com POST AD </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="mmPostAd.css">
<script src="mmPostAd.js"></script> 

</head>
<body  >
<?php include 'mmHeader.php'; ?>

<center>
    <table id='formTable'   >
        <tr><td>
		
<form  id='mmPostForm'  method='post'   action='https://www.mimarketa.com/mmMain/mmEnglish/mmPostAd2.php?' enctype='multipart/form-data' accept-charset="utf-8" name="mmPostForm">
<input  id='countryBox2' type='hidden' name='country'  value='' >
<input  id='passCounty2' type='hidden' name='county'  value='' >
<input  id='passState2' type='hidden' name='state'  value='' >
<input  id='hidden_data1' type='hidden' name='hidden_data1'  value='noFoto' >
<input  id='hidden_data2' type='hidden' name='hidden_data2'  value='noFoto' >
<input  id='hidden_data3' type='hidden' name='hidden_data3'  value='noFoto' >

<label id='heading' style='font-size:30px;font-family:book antiqua;' >Post An Ad</label>
<br/><br/>

 <select id='categoria' name='categoria'    onmouseover='postBgColorOn(this)' onmouseout='postBgColorOff(this)'  onchange='changeFontColor(this)'>
 <option value='CATEGORY'>CATEGORY</option>
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
  <br/>  <br/>
Title   <br/>
  <input  id='titulo' type='text' name='title' maxlength='15' size='30'   required   onchange='changeFontColor(this)' value='' style='border:solid;border-color:darkred;border-width:1px;' >
<br/>  <br/>
Price
<br/>
  <input   id='precio'   type='number' name='price' maxlength='15' size='30'   required    onchange='changeFontColor(this)'  value='0'  style='border:solid;border-color:darkred;border-width:1px;'  >
 <br/>  <br/>City
 <br/>
  <input  id='ciudad'   type='text' name='ciudad' maxlength='80' size='30' required   onchange='changeFontColor(this)' value=''  style='border:solid;border-color:darkred;border-width:1px;' >
  <br/>  <br/>Details
  <br/>
   <textarea  id='description'  name='description' maxlength='300' cols='50' rows='2' required   onchange='changeFontColor(this)'  style='border:solid;border-color:darkred;border-width:1px;'  ></textarea>
   <br/>  <br/>
   Email
   <br/>
   
   <input  id='ecorreo'  name='ecorreo'  required    onchange='changeFontColor(this)' style='border:solid;border-color:darkred;border-width:1px;cursor:pointer;color:darkred;text-shadow:1px 1px 1px gray;font-weight:bold;'    value='' >
<br/>
<label style='font-size:15px;color:maroon; text-shadow:1px 1px 1px gray;' >(Your Email will not be shown or shared with anyone.)</label> 
 <br/>

  <br/>
<b style='color:black;font-size:30px; text-shadow: 1px 1px 1px gray;cursor:pointer;font-weight:bold;padding:5px;' > Pic (Optional)</b>  <br/> <br/> 

<img src="" id="output_image1" style='border:outset;border-width:2px;border-radius: 10px;border-color:black; '       /> 
 <br/>
<input  id='userfile1'   name='userfile1'  style='color:black;font-size:20px; text-shadow: 1px 1px 1px gray;cursor:pointer;font-weight:bold;padding:5px;'  type="file"   onchange="preview_image1(event) "    title='CLICK TO ADD A FOTO.'accept="image/*"  >

	
<label  id='pic1' onclick='resetImage(id)' style='color:darkred;font-size:30px; text-shadow: 1px 1px 1px black;
cursor:pointer;font-weight:bold;;'     >X</label> &nbsp;&nbsp;&nbsp;
<br/> 
<br/> 

<!--
<img src="" id="output_image2" style='border:outset;border-width:2px;border-radius: 10px;border-color:black; '     /> 
 <br/>
<input id='userfile2' name='userfile2'  style='color:black;font-size:20px; text-shadow: 1px 1px 1px gray;border:none;cursor:pointer;font-weight:bold;padding:5px;'   type="file"   onchange="preview_image2(event) "   title='CLICK TO ADD A FOTO.' accept="image/*"    >

<label   id='pic2' onclick='resetImage(id)' style='color:darkred;font-size:30px; text-shadow: 1px 1px 1px black;border:none;cursor:pointer;font-weight:bold;padding:5px;'     >X</label>  &nbsp;&nbsp;&nbsp;

<br/> 
<br/> 
<img src="" id="output_image3" style='border:outset;border-width:2px;border-radius: 10px;border-color:black; '       /> 
 <br/>
<input id='userfile3' name='userfile3'   style='color:black;font-size:20px; text-shadow: 1px 1px 1px gray;border:none;cursor:pointer;font-weight:bold;padding:5px;'  type="file"     onchange="preview_image3(event) "   title='CLICK TO ADD A FOTO.'   accept="image/*"   >

<label   id='pic3' onclick='resetImage(id)' style='color:darkred;font-size:30px; text-shadow: 1px 1px 1px black;border:none;cursor:pointer;font-weight:bold;padding:5px;'    >X</label>  &nbsp;&nbsp;&nbsp;

-->




<br/>

Video: (Paste a link to your video.)
  <input  id='videoLink'   type='text' name='videoLink' maxlength='80' size='30' required  onchange='changeFontColor(this)' value='' style='border:solid;border-color:darkred;' >
  <br/>
  
 <br/>
 

<input type="button" id='nextButton'  value="DONE" title='CLICK WHEN YOU ARE DONE FILLING OUT ALL FIELDS.'  onclick='valForm()'   
style='width:150px;background:linear-gradient( to right, darkgreen, white, darkgreen  );font-size:35px;
border-radius: 10px;cursor:pointer;color:black;text-shadow:1px 1px 1px gray;font-weight:bold;font-family:book antiqua;padding:20px;'    onmouseover='postBgColorOn(this)' onmouseout='postBgColorOff(this)' >
</form>
 </td></tr></table> </center>

  
 <script>getLocation();</script> 
  
   
<canvas style='visibility:hidden;border:outset;' width="80" height="80" id="canvas">canvas</canvas>

<div id="loadingDiv" style='position:absolute;left:0px;top:0px;z-index:5;text-align:center;font-size:75px;font-weight:bold;font-family:book antiqua;width:100%;height:300%;background:grey;opacity:.7;visibility:hidden;'  ><br/><br/>Please wait.<br /><br/>Uploading Ad.........<br/><br/><br/><br/><br/><br/></div>

</body>
</html>


