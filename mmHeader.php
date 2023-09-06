<?php
print"
<nav id='navBar' > 
<img class='logo' src='https://www.mimarketa.com/mmMain/mmEnglish/mmFotos/mmMastheadLogo420.png' alt='MyMARKETA.COM.com'>
<button id='Home' >Home</button>
<button  id='PostAd' >PostAd</button>
<button  id='Help' >Help</button>
<button  id='Español' >Español</button>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label  id='passCounty' readonly  type='text' name='county' class='locationLabel'   >
CLICK TO CHOOSE </label> 
<label    id='countyTextBox' readonly  type='text' name='countyTextBox' class='locationLabel' onclick='navRedirect(id)' > YOUR </label>
<label    id='passState' readonly  type='text'  name='state' class='locationLabel' onclick='navRedirect(id)'  > LOCATION</label> 


<input class='location'  id='category2' readonly  type='hidden' value='' name='category' >
<input class='location'  id='passCounty2' readonly  type='hidden' value='' name='county'>
<input class='location'  id='passState2' readonly  type='hidden' value='' name='state' >
<input  id='countryBox' readonly  type='hidden'  name='country' value='US'   >
 <br/> 
 
<input id='searchBox'   value=''   required> ";
 
include 'mmCityUsDb.php';
    
print"  <label id='searchButton'  onclick='searchAds()' >Search</label>
 </nav>  ";


