<!DOCTYPE html>
<html lang='en'>
<head>
<title>MyMARKETA.com CONTACT US </title>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1.0' >
<link rel="stylesheet" type="text/css" href="mm1Main.css">

</head>
<body onload='loadLocation()'  >
<div  id='wrapper'  class='wrapper' >
<div class='container1'>
<header id='header' class='header' ><?php include 'mmHeader.php';?></header>
</div>

<div class='container2'>
<main>
<section id='helpSection'>
		
<form  id='contactUsForm'  method='post'   action='' enctype=''  name="mmContactUsForm">
<input name="hidden_data" id='hidden_data' type="hidden" value='noFoto'  />	
<input   id='passCounty2' readonly  type='hidden' value='' name='county'>
<input   id='passState2' readonly  type='hidden' value='' name='state' >	
<br/>
<label >	CONTACT US</label>
<br/>	<br/>
<label for='email'>EMAIL</label><br/>
<input  id='emailBox'   type='text' value='' name='emailBox' maxlength='80' size='50' required    onmouseover='highlightOn(this)' onmouseout='highlightOff(this)'  onchange='highlightGreen(this)'>
<br/><br/>
<label for='MENSAJE'>MESSAGE</label><br/>
<textarea  id='messageBox'    name='messageBox' maxlength='300' cols='50' rows='4' required       onmouseover='highlightOn(this)' onmouseout='highlightOff(this)'  onchange='highlightGreen(this)' ></textarea>
 <br/>
<br/>
<button id='nextButton'  onclick='valForm()'   
  onmouseover='highlightOn(this)' onmouseout='highlightOff(this)'  onchange='highlightGreen(this)' >SEND</button>
</form>

</section>
</main>
</div>

<!-- CONTAINER 3 -->
<div class='container3' >

<canvas style='visibility:hidden;border:outset;' width="80" height="80" id="canvas">canvas</canvas>

<div id="loadingDiv"   ><br/><br/>Please wait.<br /><br/>Uploading Ad.........<br/><br/><br/><br/><br/><br/></div>


<footer>   <?php include 'mmFooter.php'; ?>  </footer>
</div>
</section>

</div>   


<script src="mmHeader.js"></script> 
<script src="mmContactUs.js"></script> 

<script> 
checkViewportWidth();

</script>
<script> 

css();
</script>

</body>
</html>


