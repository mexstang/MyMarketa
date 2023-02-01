function homeBgColorOn(x) {
  x.style.background = "#ccffcc";
  x.style.borderRadius = "12px";
}

function homeBgColorOff(x) 
{
  x.style.background = "transparent";
}


	
function chooseCountry(v) 
{ 
var chosenCountry = document.getElementById('countryBox2').value; 
document.getElementById(chosenCountry).style.visibility='hidden'; 

document.getElementById('countryBox2').value =v;
document.getElementById(v).style.visibility='visible';

document.getElementsByName(v)[0].style.color='red';
document.getElementsByName(chosenCountry)[0].style.color='black';

document.getElementsByName(v)[0].style.fontSize= '22px';
document.getElementsByName(chosenCountry)[0].style.fontSize= '20px';

}
	
function chooseState(v) 
{ 
var chosenState = document.getElementById('stateBox').value;  

if(chosenState =='')
{

 document.getElementsByName(v)[0].style.color='red';

document.getElementsByName(v)[0].style.fontSize= '22px';

}


if(chosenState !='')
{
 document.getElementById(chosenState).style.visibility='hidden'; 

 document.getElementsByName(v)[0].style.color='red';
 document.getElementsByName(chosenState)[0].style.color='black';

document.getElementsByName(v)[0].style.fontSize= '22px';
document.getElementsByName(chosenState)[0].style.fontSize= '20px';  

}

document.getElementById(v).style.visibility='hidden';

document.getElementById('stateBox').value =v;
document.getElementById(v).style.visibility='visible';






}



function chooseCounty(v) 
{
    country = document.getElementById('countryBox2').value;   
    state =  document.getElementById('stateBox').value ; 
    
 window.location.replace('https://www.mimarketa.com/mmMain/mmEnglish/mmEnglish.php?country='+country+'&county='+v+'&state='+state+'&category=ALL');
} 






function chooseMxArea(v) 
{
country = document.getElementById('countryBox2').value; 
state =  document.getElementById('stateBox').value ; 
 window.location.replace('https://www.mimarketa.com/mmMain/mmEnglish/mmEnglish.php?country='+country+'&county='+v+'&state='+state+'&category=ALL');

} 