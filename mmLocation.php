<html>
<head>
<title>MiMarketa.com  LOCATION</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
 
<link rel="stylesheet" type="text/css" href="https://www.mimarketa.com/mmMain/mmEnglish/mmLocation.css">
<script src="mmLocation.js"></script> 

</head>
<body  >
<?php include 'mmHeader.php'; ?>
<br/>
<div id='locationCountry' style='position:relative;top:60px;visibility:visible;width:100%;height:100%; background:transparent;font-size:20px; height:auto;text-align:center;font-family:book antiqua;' >
<button  name ='US' onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'  onclick='chooseCountry(innerHTML)' style='color:red;font-size:30px;' >US</button>
<button name ='MEXICO'  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'  onclick='chooseCountry(innerHTML)' >MEXICO</button>
<button name ='CHILE'  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'  onclick='chooseCountry(innerHTML)' >CHILE</button>
<button name ='EL_SALVADOR'  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'  onclick='chooseCountry(innerHTML)' >EL_SALVADOR</button>
<button name ='GUATEMALA'  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'  onclick='chooseCountry(innerHTML)' >GUATEMALA</button>
<button name ='NICARAGUA' onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'  onclick='chooseCountry(innerHTML)' >NICARAGUA</button>

<input id='countryBox2' type='hidden' value='US' >
</div>

<div id='US' style='position:fixed;top:150px;left:20px;width:95%;height:100%;background:white;text-align:center;visibility:visible;'>


<?php include 'mmLocationUS.php'; ?>
</div>

<div id='MEXICO' style='position:fixed;width:100%;top:150px;height:100%;background:white;text-align:center;visibility:hidden;'>

<?php include 'mmLocationMEXICO.php'; ?>
   
	     
</div>

<div id='CHILE' style='position:fixed;top:150px;width:90%;height:100%;background:white;text-align:center;visibility:hidden;'>
CHILE

</div>

<div id='EL_SALVADOR' style='position:fixed;top:150px;width:90%;height:100%;background:white;text-align:center;visibility:hidden;'>
EL_SALVADOR

</div>

<div id='GUATEMALA' style='position:fixed;top:150px;width:90%;height:100%;background:white;text-align:center;visibility:hidden;'>

GUATEMALA
</div>

<div id='NICARAGUA' style='position:fixed;top:150px;width:90%;height:100%;background:white;text-align:center;visibility:hidden;'>
NICARAGUA

</div>



</body>
</html>
