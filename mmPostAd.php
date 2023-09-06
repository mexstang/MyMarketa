<!DOCTYPE html>
<html lang='en'>
<head>
<title>MyMARKETA.com POST AD </title>
<meta  charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1.0' >
<link rel="stylesheet" type="text/css" href="mm1Main.css">

<script src="mmHeader.js"></script> 
<script src="mmPostAd.js"></script> 
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script> -->
</head>

<body onload='loadLocation()'  >
    
<div id='wrapper'  class='wrapper' >  
<div class='container1' >
<header   id='header'  class='header' > <?php include 'mmHeader.php'; ?></header>     
    </div> 
 
    <div class='container2' >
<main> 
<section class='postSection'>
<form  id='mmPostForm'  method='post'   action='https://www.mimarketa.com/mmMain/mmEnglish/mmPostAd2.php?' enctype='multipart/form-data' name="mmPostForm">
<input  id='countryBox2' type='hidden' name='country'  value='US' >
<input  id='countyBox' type='hidden' name='countyBox'  value='' >
<input  id='stateBox' type='hidden' name='stateBox'  value='' >
<input  id='hidden_data1' type='hidden' name='hidden_data1'  value='noFoto' >
<input  id='hidden_data2' type='hidden' name='hidden_data2'  value='noFoto' >
<input  id='hidden_data3' type='hidden' name='hidden_data3'  value='noFoto' >

<label id='heading' ><h2>Post An Ad</h2></label>
<br/>
 <select id='categoria' name='categoria' >
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
<label for='title' >Title </label>  <br/>
<input  id='titulo' type='text' name='title' maxlength='15' size='30'   required   value=''  >
<br/>  <br/>
<label l for='price' >Price</label>
<br/>
<input   id='precio'   type='number' name='price' maxlength='15' size='30'   required     value='0'    >
<br/>  <br/>
<label l for='city' >City</label>
<br/>
<input  id='ciudad'   type='text' name='ciudad' maxlength='80' size='30' required   value=''  >
<br/>  <br/>
<label l for='description' >Details</label>
<br/>
<textarea  id='description'  name='description' maxlength='300' cols='50' rows='2' required     ></textarea>
<br/><br/>
<label for='ecorreo'>Email</label>
<br/>
   
<input  id='ecorreo'  name='ecorreo'  required       value='' >
<br/>
<label >(Your Email will not be shown or shared with anyone.)</label> 
<br/> <br/>
<label>Video: (Paste a link to your video.)</label> <br/>
<input  id='videoLink'   type='text' name='videoLink' maxlength='80' size='30'   value=''  >
<br/><br/>
<label > Pic (Optional)</label> <br/> 

<img src="" id="output_image1"       /> 
 <br/>
<input  id='userfile1'   name='userfile1'    type="file"   onchange="preview_image1(event) "   accept="image/*"  >
	
<label  id='pic1' onclick='resetImage(id)'   > X</label> &nbsp;&nbsp;&nbsp;

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
<br/><br/> 
 <button id='nextButton'  title='CLICK WHEN YOU ARE DONE FILLING OUT ALL FIELDS.'  onclick='valForm()'  >DONE</button><br/> 
</form> 

 </section>
</main>
</div>  

<!-- CONTAINER 3 -->
<div class='container3' >
<script>getLocation();</script> 
  
<canvas style='visibility:hidden;border:outset;' width="80" height="80" id="canvas">canvas</canvas>



<footer>   <?php include 'mmFooter.php'; ?>  </footer>
</div>
</section>

</div>  
<div id="loadingDiv"   style='background:red;visibility:visible;height:100%;' ><br/><br/>Please wait.<br /><br/>Uploading Ad.........<br/><br/><br/><br/><br/><br/></div>
 
<script> 
getLocation();

</script>

<script> 
checkViewportWidth();

</script>
<script> 

css();
</script>

</body>
</html>


