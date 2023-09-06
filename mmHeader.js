 /* 
function checkViewportWidth()
{
 const winWidth=window.innerWidth ;
 if (winWidth > '500')
 {
  let hh = document.getElementById('header').style.height
  document.getElementById('container1').style.height = hh;
  document.getElementById('header').style.position ='fixed';
 }
}  */

//Get the country, county, state, category from the URL
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
document.getElementById('passCounty2').value =county; 
document.getElementById('passState2').value =state2; 

//document.getElementById('categoryBox').value ='  ' + category;

//if (category ==  null)
//{document.getElementById('categoryBox').style.visibility ='hidden';}
//else
//{document.getElementById('categoryBox').style.visibility ='visible';}

//Get Window Width and set the Header Poisition to FIXED for NON-Mobile devices with larger screens.


} 

//HOME PAGE MASTHEAD buttons ===========================================

document.querySelector("#navBar").addEventListener("click", function(event){
 event.preventDefault();  
let x = event.target.id;

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
    
    case 'passCounty':
    case 'passState':
    case 'countyTextBox':
    window.location.replace('https://www.mimarketa.com/mmMain/mmEnglish/mmLocation.php?country='+country+'&county='+county+'&state='+state+'&adCity=All_Cities&category=ALL');

    break;
    
    case 'Español':
    
window.location.replace('https://www.mimarketa.com/mmMain/mmEspanol/mmEspanol.php?country='+country+'&county='+county+'&state='+state+'&adCity=Todas_Ciudades&category=TODO ');

    break;
    
}

}); //END EVENT LISTENER


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

function homeBgColorOn(x) {
  x.style.color = 'darkred';
}

function homeBgColorOff1(x) 
{
  x.style.color = 'black';
}

//==========Home Page > On Mouse Over============
document.querySelector(".landingPageCategoryButtons").addEventListener("mouseover", function(event) {
let cat = event.target;
  cat.style.background = '#ccffcc';
  cat.style.borderRadius = '12px';
  document.querySelector(".landingPageCategoryButtons").style.background ="transparent";
});

document.querySelector(".landingPageCategoryButtons").addEventListener("mouseout", function(event) {
let cat = event.target;
  cat.style.background = 'transparent';
});


//================= HOME PAGE > SECTION: SELECT A CATEGORY BUTTONS ====================

document.querySelector(".landingPageCategoryButtons").addEventListener("click", function(event) {
let cat = event.target.value;
 
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
    searchParameter = '4';
  }

  if (searchBox =='' &&  adCity !='All_Cities'  && categoryRedirect =='ALL' )
  {
    searchParameter = '5';
  }

  if (searchBox !='' &&  adCity =='All_Cities' && categoryRedirect =='ALL' )
  {
    searchParameter = '1';
  }

  if (searchBox =='' &&  adCity =='All_Cities'  && categoryRedirect !='ALL' )
  {
    searchParameter = '6';
  }

  if (searchBox =='' && adCity !=''  &&  adCity !='All_Cities'  && categoryRedirect !='ALL' )
  {
    searchParameter = '7';
  }

  if (searchBox !='' &&  adCity =='All_Cities' && categoryRedirect !='ALL' )
  {
    searchParameter = '8';
  }

   window.location.replace('https://www.mimarketa.com/mmMain/mmEnglish/mmLiveAds.php?country='+country+'&county='+county+'&state='+state+'&adCity='+adCity+'&category='+categoryRedirect+'&searchBox='+searchBox+'&searchParameter='+searchParameter+'&sortBy=timeDsc');
 

});
//===========================END HOME > SELECT A CATEGORY BUTTONS ====================



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


 
