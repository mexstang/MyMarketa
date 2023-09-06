<!DOCTYPE html>
<html lang='en'>
<head>
<title>MyMarketa.com  LOCATION</title>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1.0' >
<link rel="stylesheet" type="text/css" href="mm1Main.css">

</head>
<body onload='loadLocation()'  >
    <div id='wrapper'  class='wrapper' >
        <div class='container1'>
<header  id='header'  class='header' ><?php include 'mmHeader.php'; ?></header>
</div>

<div class='container2' >
<main>
<section id='locationSection1'>
<nav id='countriesNav' >
<button   id ='US'   name ='US' onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'  onclick='chooseCountry(innerHTML)' style='color:red;font-size:30px;' >US</button>
<button name ='MEXICO'  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'  onclick='chooseCountry(innerHTML)' >MEXICO</button>
<button name ='CHILE'  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'  onclick='chooseCountry(innerHTML)' >CHILE</button>
<button name ='EL_SALVADOR'  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'  onclick='chooseCountry(innerHTML)' >EL_SALVADOR</button>
<button name ='GUATEMALA'  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'  onclick='chooseCountry(innerHTML)' >GUATEMALA</button>
<button name ='NICARAGUA' onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'  onclick='chooseCountry(innerHTML)' >NICARAGUA</button>

<input id='countryBox2' type='hidden' value='US' >
<input id='stateBox' type='hidden' value='' >
</nav>
</section>
<hr>
<section id='locationSection2'>
<button  onmouseover='homeBgColorOn(this)'   onmouseout='homeBgColorOff(this)'        name ='AL'   onclick='chooseState(this,"AL")'  >ALABAMA</button>
<button  onmouseover='homeBgColorOn(this)'    onmouseout='homeBgColorOff(this)'        name ='AK'   onclick='chooseState(this,"AK")'  >ALASKA</button>
<button  onmouseover='homeBgColorOn(this)'   onmouseout='homeBgColorOff(this)'         name ='AZ'   onclick='chooseState(this,"AZ")'  >ARIZONA</button>
<button  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'       name ='AR'   onclick='chooseState(this,"AR")'  >ARKANSAS</button>
<button  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'       name ='CA'   onclick='chooseState(this,"CA")'  >CALIFORNIA</button>
<button  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'       name ='CO'   onclick='chooseState(this,"CO")'  >COLORADO</button>
<button  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'       name ='CT'   onclick='chooseState(this,"CT")'  >CONNECTICUT</button>
<button  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'       name ='DE'   onclick='chooseState(this,"DE")'  >DELAWARE</button>
<button  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'       name ='FL'   onclick='chooseState(this,"FL")'  >FLORIDA</button>
<button  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'       name ='GA'   onclick='chooseState(this,"GA")'  >GEORGIA</button>
<button  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'      name ='HI'    onclick='chooseState(this,"HI")'  >HAWAII</button>
<button  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'       name ='ID'   onclick='chooseState(this,"ID")'  >IDAHO</button>
<button  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'       name ='IL'   onclick='chooseState(this,"IL")'  >ILLINOIS</button>
<button  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'       name ='IN'   onclick='chooseState(this,"IN")'  >INDIANA</button>
<button  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'      name ='IA'    onclick='chooseState(this,"IA")' >IOWA</button>
<button  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'      name ='KS'    onclick='chooseState(this,"KS")'  >KANSAS</button>


<button  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'      name ='KY'    onclick='chooseState(this,"KY")'  >KENTUCKY</button>
<button  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'      name ='LA'    onclick='chooseState(this,"LA")'  >LOUISIANA</button>
<button  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'      name ='ME'    onclick='chooseState(this,"ME")'  >MAINE</button>
<button  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'       name ='MD'   onclick='chooseState(this,"MD")'  >MARYLAND</button>
<button  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'       name ='MA'   onclick='chooseState(this,"MA")'  >MASSACHUSETTS</button>
<button  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'       name ='MI'   onclick='chooseState(this,"MI")'  >MICHIGAN</button>
<button  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'      name ='MN'    onclick='chooseState(this,"MN")'  >MINESOTA</button>
<button  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'      name ='MS'    onclick='chooseState(this,"MS")'  >MISSISSIPPI</button>
<button  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'       name ='MO'   onclick='chooseState(this,"MO")'  >MISSOURI</button>
<button  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'      name ='MT'    onclick='chooseState(this,"MT")'  >MONTANA</button>
<button  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'      name ='NE'    onclick='chooseState(this, "NE")' >NEBRASKA</button>
<button  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'      name ='NV'    onclick='chooseState(this,"NV")'  >NEVADA</button>
<button  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'       name ='NH'   onclick='chooseState(this,"NH")'  >NEW-HAMPSHIRE</button>
<button  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'      name ='NJ'    onclick='chooseState(this, "NJ")' >NEW-JERSEY</button>
<button  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'      name ='NM'    onclick='chooseState(this,"NM")'  >NEW-MEXICO</button>
<button  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'      name ='NY'    onclick='chooseState(this,"NY")'  >NEW-YORK</button>
<button  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'      name ='NC'    onclick='chooseState(this,"NC")'  >NORTH-CAROLINA</button>
<button  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'      name ='ND'    onclick='chooseState(this,"ND")'  >NORTH-DAKOTA</button>
<button  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'      name ='OH'    onclick='chooseState(this,"OH")'  >OHIO</button>
<button  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'       name ='OK'   onclick='chooseState(this,"OK")'  >OKLAHOMA</button>
<button  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'       name ='OR'   onclick='chooseState(this,"OR")'  >OREGON</button>
<button  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'      name ='PA'    onclick='chooseState(this,"PA")'  >PENNSYLVANIA</button>
<button  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'       name ='RI'   onclick='chooseState(this,"RI")'  >RHODE-ISLAND</button>
<button  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'      name ='SC'    onclick='chooseState(this,"SC")'  >SOUTH-CAROLINA</button>
<button  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'       name ='SD'   onclick='chooseState(this,"SD")'  >SOUTH-DAKOTA</button>
<button  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'       name ='TN'   onclick='chooseState(this,"TN")'  >TENNESSEE</button>
<button  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'      name ='TX'    onclick='chooseState(this,"TX")'  >TEXAS</button>
<button  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'       name ='UT'   onclick='chooseState(this,"UT")'  >UTAH</button>
<button  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'      name ='VT'    onclick='chooseState(this,"VT")'  >VERMONT</button>
<button  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'      name ='VA'    onclick='chooseState(this,"VA")'  >VIRGINIA</button>
<button  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'       name ='WA'   onclick='chooseState(this,"WA")'  >WASHINGTON</button>
<button  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'      name ='WV'    onclick='chooseState(this,"WV")'  >WEST-VIRGINIA</button>
<button  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'      name ='WI'    onclick='chooseState(this,"WI")'  >WISCONSIN</button>
<button  onmouseover='homeBgColorOn(this)' onmouseout='homeBgColorOff(this)'      name ='WY'   onclick='chooseState(this,"WY")'  >WYOMING</button>

</section>
<hr>
<section id='locationSection3' >
    
</section>
<section id='hiddenCountySection' >
<?php include 'mmLocationUS.php' ?>
</section>
</main>
</div>


<!-- CONTAINER 3 -->
<section>
<div class='container3' >

<canvas style='visibility:hidden;border:outset;' width="80" height="80" id="canvas">canvas</canvas>

<div id="loadingDiv"   ><br/><br/>Please wait.<br /><br/>Uploading Ad.........<br/><br/><br/><br/><br/><br/></div>


<footer>   <?php include 'mmFooter.php'; ?>  </footer>
</div>
</section>

</div>   

<script src="mmHeader.js"></script> 
<script src="mmLocation.js"></script> 

<script> 
checkViewportWidth();

</script>
<script> 

css();
</script>






</body>
</html>
