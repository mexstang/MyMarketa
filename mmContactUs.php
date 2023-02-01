<html>
<head>
<title>MyMARKETA.com CONTACT US </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<link rel="stylesheet" type="text/css" href="mmContactUs.css">
<script src="mmContactUs.js"></script> 

</head>
<body onload='loadLocation()'  >
   <?php include 'mmHeader.php';?>
<center>

	<table id='contactUsTable' >
        <tr> 
        <td >
		<form  id='contactUsForm'  method='post'   action='' enctype=''  name="mmContactUsForm">
			<input name="hidden_data" id='hidden_data' type="hidden" value='noFoto'  />	
		<input   id='passCounty2' readonly  type='hidden' value='' name='county'>
<input   id='passState2' readonly  type='hidden' value='' name='state' >	
	<br/>
	CONTACT US
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

 </td> 

    </tr>
    </table >
     
	 </center>
	<canvas style='visibility:hidden;border:outset;' width="80" height="80" id="canvas">canvas</canvas>
	
</body>
</html>


