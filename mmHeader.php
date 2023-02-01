<?php
print "
<script>
function loadLocation()
{
const queryString = window.location.search;
console.log(queryString);
const urlParams = new URLSearchParams(queryString);

const country = urlParams.get('country');
console.log(country);

const state = urlParams.get('state')
console.log(state);

const county = urlParams.get('county');
console.log(county);

const city = urlParams.get('adCity');
console.log(city);

const searchBox = urlParams.get('searchBox');
console.log(searchBox);

const category = urlParams.get('category');
console.log(category);

state2 = state ;

if (country ==  'US')
{ document.getElementById('countyTextBox').innerHTML = 'County ,';} 

if (country ==  'MEXICO')
{ document.getElementById('countyTextBox').innerHTML = ', MX'; } 


document.getElementById('searchBox').value =searchBox;
document.getElementById('adCity2').innerHTML =city ;
document.getElementById('countryBox').value =country;
document.getElementById('passCounty').innerHTML =county; 
document.getElementById('passState').innerHTML =state2; 
//document.getElementById('passCounty2').value =county; 
//document.getElementById('passState2').value =state2; 

//document.getElementById('categoryBox').value ='  ' + category;

//if (category ==  null)
//{document.getElementById('categoryBox').style.visibility ='hidden';}
//else
//{document.getElementById('categoryBox').style.visibility ='visible';}

} 

function navigationBar(x)
{
const queryString = window.location.search;
console.log(queryString);
const urlParams = new URLSearchParams(queryString);

const country = urlParams.get('country');
console.log(country);

const state = urlParams.get('state')
console.log(state);

const county = urlParams.get('county');
console.log(county);

const category = urlParams.get('category');
console.log(category);


switch (x)
{
    case 'Home':
    
    window.location.replace('https://www.mimarketa.com/mmMain/mmEnglish/mmEnglish.php?country='+country+'&county='+county+'&state='+state+'&adCity=All_Cities&category=ALL');

    break;
    
    case 'MyAccount':
    
    window.location.replace('https://www.mimarketa.com/mmMain/mmEnglish/mmMyAccount.php?country='+country+'&county='+county+'&state='+state+'&adCity=All_Cities&category=ALL');

    break;
    
    case 'PostAd':
    window.location.replace('https://www.mimarketa.com/mmMain/mmEnglish/mmPostAd.php?country='+country+'&county='+county+'&state='+state+'&adCity=All_Cities&category=ALL');

    break;
    
    case 'Help':
    window.location.replace('https://www.mimarketa.com/mmMain/mmEnglish/mmContactUs.php?country='+country+'&county='+county+'&state='+state+'&adCity=All_Cities&category=ALL');

    break;
    
    case 'changeLocationBox':
    window.location.replace('https://www.mimarketa.com/mmMain/mmEnglish/mmLocation.php?country='+country+'&county='+county+'&state='+state+'&adCity=All_Cities&category=ALL');

    break;
}


}

function mmSpanish()
{
const queryString = window.location.search;
console.log(queryString);
const urlParams = new URLSearchParams(queryString);

const country = urlParams.get('country');
console.log(country);

const state = urlParams.get('state')
console.log(state);

const county = urlParams.get('county');
console.log(county);

const category = urlParams.get('category');
console.log(category);



window.location.replace('https://www.mimarketa.com/mmMain/mmEspanol/mmEspanol.php?country='+country+'&county='+county+'&state='+state+'&adCity=Todas_Ciudades&category=TODO ');
}


function registerNewAccount()
{ 
     const queryString = window.location.search;
            console.log(queryString);
            const urlParams = new URLSearchParams(queryString);
            const country = urlParams.get('country');
            console.log(country);
            const county = urlParams.get('county');
            console.log(county);
            const state = urlParams.get('state');
            console.log(state);
    
   var ecorreo = prompt('THANK YOU FOR SIGNING UP. YOUR INFORMATION WILL ALWAYS REMAIN ANONYMOUS AND IT WILL NOT BE SHARED WITH ANYONE. IT WILL ONLY BE USED TO RELAY MESSAGES BETWEEN BUYERS & SELLERS. PLEASE ENTER YOUR EMAIL ADDRESS TO SIGN UP NOW.', '');
   
   if (ecorreo != null || ecorreo != '') 
  {
      var email= ecorreo.replace(/^\s+|\s+$/gm,'') ;
      
      
            
      
var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange=
  function() 
  {
    if (this.readyState == 4 && this.status == 200) 
    { 
      var message = this.responseText;
      
      alert(message);
      
      
    }
    
  };
  xhttp.open('GET', 'mmMyAccountSignUp.php?email='+email+'&country='+country+'&county='+county+'&state='+state, true);
  xhttp.send();


      
  } 
      
   	   
}



//HOME PAGE CODE

function homeBgColorOn1(x) {
 
  x.style.color = 'darkred';
  
}

function homeBgColorOff1(x) 
{
 
  x.style.color = 'black';
}


function homeBgColorOn(x) 
{
  x.style.background = '#ccffcc';
  x.style.borderRadius = '12px';
}

function homeBgColorOff(x) 
{
  x.style.background = 'transparent';
}


function categoryRedirect(cat)
{ 
const queryString = window.location.search;
console.log(queryString);
const urlParams = new URLSearchParams(queryString);

const country = urlParams.get('country');
console.log(country);

const state = urlParams.get('state')
console.log(state);

const county = urlParams.get('county');
console.log(county);

categoryRedirect = cat;

searchBox = document.getElementById('searchBox').value;
adCity=document.getElementById('adCity').value;



if (searchBox =='' &&   adCity =='All_Cities'  && categoryRedirect =='ALL' )
{
    searchParameter = '4'
}



if (searchBox =='' &&  adCity !='All_Cities'  && categoryRedirect =='ALL' )
{
    searchParameter = '5'
}



if (searchBox !='' &&  adCity =='All_Cities' && categoryRedirect =='ALL' )
{
    searchParameter = '1'
}







if (searchBox =='' &&  adCity =='All_Cities'  && categoryRedirect !='ALL' )
{
    searchParameter = '6'
}



if (searchBox =='' && adCity !=''  &&  adCity !='All_Cities'  && categoryRedirect !='ALL' )
{
    searchParameter = '7'
}



if (searchBox !='' &&  adCity =='All_Cities' && categoryRedirect !='ALL' )
{
    searchParameter = '8'
}




window.location.replace('https://www.mimarketa.com/mmMain/mmEnglish/mmLiveAds.php?country='+country+'&county='+county+'&state='+state+'&adCity='+adCity+'&category='+categoryRedirect+'&searchBox='+searchBox+'&searchParameter='+searchParameter+'&sortBy=timeDsc');


}

function searchAds()
{
const queryString = window.location.search;
console.log(queryString);
const urlParams = new URLSearchParams(queryString);

const country = urlParams.get('country');
console.log(country);

const state = urlParams.get('state')
console.log(state);

const county = urlParams.get('county');
console.log(county);

const category = urlParams.get('category');
console.log(category);

searchBox = document.getElementById('searchBox').value;
adCity=document.getElementById('adCity').value;

if (searchBox =='')
{
    alert('ENTER AN ITEM TO SEARCH FOR.');
    document.getElementById('searchBox').focus();
    return;
}

if ( adCity =='' && category =='' )
{    adCity ='All_Cities'; searchParameter='1'; }

if ( adCity =='' && category =='ALL' )
{    adCity ='All_Cities'; searchParameter='1'; }

if (adCity =='All_Cities' && category =='ALL' )
{    searchParameter='1'; }

if (adCity !='All_Cities' && category =='ALL' )
{    searchParameter='2';  }

if (adCity =='All_Cities' && category !='ALL' )
{     searchParameter='3'; }



window.location.replace('https://www.mimarketa.com/mmMain/mmEnglish/mmLiveAds.php?country='+country+'&county='+county+'&state='+state+'&adCity='+adCity+'&searchBox='+searchBox +'&category='+category+'&searchParameter='+searchParameter );

    
}



function searchCity()
{
const queryString = window.location.search;
console.log(queryString);
const urlParams = new URLSearchParams(queryString);

const country = urlParams.get('country');
console.log(country);

const state = urlParams.get('state')
console.log(state);

const county = urlParams.get('county');
console.log(county);

const category = urlParams.get('category');
console.log(category);

searchBox = document.getElementById('searchBox').value;
adCity=document.getElementById('adCity').value;



if ( adCity =='' && category =='' )
{    adCity ='All_Cities'; searchParameter='1'; }

if ( adCity =='' && category =='TODO' )
{    adCity ='All_Cities'; searchParameter='1'; }

if (adCity =='All_Cities' && category =='ALL' )
{    searchParameter='1'; }

if (adCity !='All_Cities' && category =='ALL' )
{    searchParameter='2';  }

if (adCity =='All_Cities' && category !='ALL' )
{     searchParameter='3'; }



window.location.replace('https://www.mimarketa.com/mmMain/mmEnglish/mmLiveAds.php?country='+country+'&county='+county+'&state='+state+'&adCity='+adCity+'&searchBox='+searchBox +'&category='+category+'&searchParameter='+searchParameter );

    
}




function showCatagoryList()
{

a =document.getElementById('catagoryList').style.visibility;

switch (a)
{
case 'hidden':
    document.getElementById('catagoryList').style.visibility='visible';
    break;
    
    
default:
    document.getElementById('catagoryList').style.visibility='hidden';
    break;
}

    
    
    
    
}



function closeCatagoryList()
{
document.getElementById('catagoryList').style.visibility='hidden';    
}


</script> 


<style>
input
{
font-family:book antiqua;
font-size:20px;
cursor:pointer;
background:transparent;
border:none;
text-shadow: 1px 1px 1px gray;
}
</style>

";


print"
<center>
<table style='position:fixed;top:0px;left:0px;z-index:5;width:100%;background-image: linear-gradient(to right, #609760 ,   #e6ffe6, #609760  ); 
text-align:center;box-shadow: 1px 1px 5px 1px ;' >
     <tr>  
     <td >
    
   <img style='float:left;width:170px;height:60px;border:none;cursor:none;margin:5px;' src='https://www.mimarketa.com/mmMain/mmEnglish/mmFotos/mmMastheadLogo2.png' alt='MyMARKETA.COM MyMarketa.com MyMarketa.com MyMarketa.com'>
  
  </td><td  style='background:transparent;
border:none;
font-size:25px;
font-family:Book Antiqua; 
font-weight:bold;
vertical-align:top; 
text-align:center;
text-shadow: 1px 1px 1px gray ;'  >
       
     
      <label style='cursor:pointer;margin-right:20px;width:auto;'  onclick='navigationBar(innerHTML)'  onmouseover='homeBgColorOn1(this)' onmouseout='homeBgColorOff1(this)'>Home</label>
    
    <label  style='cursor:pointer;margin-right:20px;'  title='POST AN AD!' onclick='navigationBar(innerHTML)' onmouseover='homeBgColorOn1(this)' onmouseout='homeBgColorOff1(this)'>PostAd</label>
    
<label  style='cursor:pointer;margin-right:20px;'  id='helpButton'    
 onclick='navigationBar(innerHTML)'   
 onmouseover='homeBgColorOn1(this)' onmouseout='homeBgColorOff1(this)' >Help</label >
 
 
      
 <label   style='cursor:pointer;margin-right:20px;'  onclick='mmSpanish()'  onmouseover='homeBgColorOn1(this)' onmouseout='homeBgColorOff1(this)' >Español</label>
     
      
      
<span  id='changeLocationBox' name='changeLocationBox'  title='CLICK TO CHANGE LOCATION.' onmouseover='homeBgColorOn1(this)' onmouseout='homeBgColorOff1(this)' onclick='navigationBar(id)' style='cursor:pointer;color:#466d4d;'> 
 <span id='passCounty' readonly  type='text' name='county'  style='background:transparent;border:none;font-size:25px;font-family:book antiqua;font-weight:bold;width:100px;' > </span> 
 <span  id='countyTextBox' readonly  type='text' name='countyTextBox'  style='background:transparent;border:none;font-size:25px;font-family:book antiqua;font-weight:bold;width:100px;' ></span> 
 <span  id='passState' readonly  type='text'  name='state' style='background:transparent;border:none;font-size:25px;font-family:book antiqua;font-weight:bold;width:auto;'    ></span> 
 
</span>  <input  id='countryBox' readonly  type='hidden'  name='country' value='US' style='background:transparent;border:none;font-size:25px;font-family:book antiqua;font-weight:bold;width:50px;'    >
  <br/> 
 
 
 
 
 
 
 
 
  <input id='searchBox' style='width: 400px; height:30px;cursor:pointer;background:white;border-radius: 7px  0px  0px  7px ; font-size:20px;margin-top:5px;'   onmouseover='homeBgColorOn1(this)' onmouseout='homeBgColorOff1(this)'  value=''  required> ";
  
     include 'mmCityUsDb.php';
    
print"  <label  style='height:30px; cursor:pointer;border:solid;border-radius: 0px  7px  7px  0px ;padding-left:30px;padding-right:30px;padding-bottom:1px;font-size:21.5px;'   onclick='searchAds()' onmouseover='homeBgColorOn1(this)' onmouseout='homeBgColorOff1(this)'>Search</label>
</td><td>


 
 <label id='MyAccount' name='MyAccount' style='float:right;width:200px;cursor:pointer;margin-right:15px;color:darkred;font-size:25px;text-align:right;' onclick='navigationBar(id)'  onclick='registerNewAccount()'   onmouseover='homeBgColorOn1(this)' onmouseout='homeBgColorOff1(this)'>MyAccount</label>
 <br/>
  <label id='MyAccount2' name='MyAccount2' style='float:right;width:200px;cursor:pointer;margin-right:15px;color:darkred;font-size:25px;text-align:right;' onclick='registerNewAccount()'   onmouseover='homeBgColorOn1(this)' onmouseout='homeBgColorOff1(this)'>SignUp</label>
 
 
 </td></tr></table></center> 
 
 
 
 
 
 <script>
 loadLocation();
</script> ";



