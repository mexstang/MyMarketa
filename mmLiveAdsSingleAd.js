function sendMessage1() 
{
const queryString = window.location.search;
console.log(queryString);
const urlParams = new URLSearchParams(queryString);
const title = urlParams.get('title');
console.log(title);
const adId = urlParams.get('adId');
console.log(adId);
 
buyerEmail=document.getElementById("chatBuyerEmail").value;
str1=document.getElementById("chatMessageBox").value;
str=str1;

    if (buyerEmail == "") 
    {
    alert('PLEASE ENTER YOUR EMAIL.');
    document.getElementById("chatBuyerEmail").focus();
    return;
    }

    if (str == "") 
    {   alert('PLEASE ENTER A MESSAGE.');
        document.getElementById("chatMessageBox").focus();
        return;
    } 
    
  
        
randomNum1 = Math.random(); 
sessionId = adId + randomNum1 ; 
url1= window.location.href;  
 
 
 
var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = 
    function() 
    {
        if (this.readyState == 4 && this.status == 200) 
        {
            var response = this.responseText;
            alert(response);
        }
    }//END FUNCTION
xmlhttp.open("GET","mmAds1CreateSession.php?email="+buyerEmail+"&message="+str1+"&adId="+adId+"&sessionId="+sessionId+"&title="+title );
xmlhttp.send();
 
 
 
 
  
}

 






function bigPic(x) 
{
    
    if(x.src =='https://www.mimarketa.com/mmMain/mmEnglish/noFoto')
    {  return; }    
    else
    { x.style.width='550px';x.style.height='auto';   }
}
    
function lilPic(x) 
{
    if(x.src =='https://www.mimarketa.com/mmMain/mmEnglish/noFoto')
    {    return;    }    
    else
     {    x.style.width='350px';    x.style.height='auto';   }
}

function sendMessage() 
{
title1=document.getElementById("titleBox").value;
adIdBox1=document.getElementById("adIdBox").value;

state=document.getElementById("stateBox").value;
county=document.getElementById("countyBox").value;
buyerEmail=document.getElementById("chatBuyerEmail").value;
str1=document.getElementById("chatMessageBox").value;
str=str1;

    if (buyerEmail == "") 
    {
    alert('PLEASE ENTER YOUR EMAIL.');
    document.getElementById("chatBuyerEmail").focus();
    return;
    }

    if (str == "") 
    {   alert('PLEASE ENTER A MESSAGE.');
        document.getElementById("chatMessageBox").focus();
        return;
    } 
emailVid();
}


function emailVid()
{
var xmlhttpVid = new XMLHttpRequest();
xmlhttpVid.onreadystatechange = 
    function() 
    {
        if (this.readyState == 4 && this.status == 200) 
        {
            var emailCheck = this.responseText;
            switch (emailCheck)
            {
            case 'emailDoesExist':
                
              var enterClave = prompt("PLEASE ENTER YOUR PASSWORD.", "");
                if (enterClave != null) 
                 {
                   vidClave(enterClave);
                 } 
           
            break;
                
            default:
                makeNewAccount();
            break;
            } // END SWITCH
        }// END IF
          
          
    } // END FUNCTION  
    
    
randomNum = Math.random(); 
sessionId = adIdBox1 + randomNum + str1;
    
    xmlhttpVid.open("GET","mmLiveAdsSingleAdBuyerMessage.php?q="+str+"&sessionId="+sessionId+"&adId="+adIdBox1+"&buyerEmail="+buyerEmail +"&title="+title1+"&mensaje="+str+"&state="+state+"&county="+county,true);
    xmlhttpVid.send();  
    
}// END FUNCTION  EMAILVID          
            
function makeNewAccount()
{
var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = 
    function() 
    {
        if (this.readyState == 4 && this.status == 200) 
        {
            document.getElementById("textareaBox").innerHTML = this.responseText;
            alert("Success! Message Sent.");
            document.getElementById("chatDiv").style.visibility='hidden';
            document.getElementById("chatMessageBox").value= ""; 
            document.getElementById("chatMessageBox").focus();
        }
    }//END FUNCTION
xmlhttp.open("GET","mmLiveAdsSingleAdBuyerMessage.php?q="+str+"&sessionId="+sessionId+"&adId="+adIdBox1+"&buyerEmail="+buyerEmail +"&title="+title1+"&mensaje="+str+"&state="+state+"&county="+county,true);
xmlhttp.send();

    
}//END FUNCTION

            
function vidClave(c)
{
clave=c;
state=document.getElementById("stateBox").value;
county=document.getElementById("countyBox").value;
ecorreo=document.getElementById("chatBuyerEmail").value;   

var xmlhttpVid = new XMLHttpRequest();
xmlhttpVid.onreadystatechange = 
    function() 
    {
        if (this.readyState == 4 && this.status == 200) 
        {    
            var vidReply = this.responseText;
           switch (vidReply)
            {
            case 'ACTIVO':
            
           claveOKsendMessage();
            break;
                
            default:
               alert('oops. Try again.'); 
            break;
            } // END SWITCH
             
        }// END IF
          
          
    } // END FUNCTION  
    
    xmlhttpVid.open("GET","mmVidClave.php?ecorreo="+ecorreo +"&clave="+clave+"&state="+state+"&county="+county,true);
    xmlhttpVid.send();  
    
}// END FUNCTION  EMAILVID       
 
function claveOKsendMessage()
{ 
title1=document.getElementById("titleBox").value;
adIdBox1=document.getElementById("adIdBox").value;

state=document.getElementById("stateBox").value;
county=document.getElementById("countyBox").value;
buyerEmail=document.getElementById("chatBuyerEmail").value;
str1=document.getElementById("chatMessageBox").value;
str=str1;

    
var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = 
    function() 
    {
        if (this.readyState == 4 && this.status == 200) 
        {
            document.getElementById("textareaBox").innerHTML = this.responseText;
            alert("Success! Message Sent.");
            document.getElementById("chatDiv").style.visibility='hidden';
            document.getElementById("chatMessageBox").value= ""; 
            document.getElementById("chatMessageBox").focus();
        }
    }//END FUNCTION
    
    
xmlhttp.open("GET","mmLiveAdsSingleAdBuyerMessage2.php?q="+str+"&sessionId="+sessionId+"&adId="+adIdBox1+"&buyerEmail="+buyerEmail +"&title="+title1+"&mensaje="+str+"&state="+state+"&county="+county+"&clave="+clave,true);


xmlhttp.send();
    
}//END FUNCTION
  
  
function mmLiveAdsEspanolSingleAdOn(x) {
  x.style.background = "#ccffcc";
  x.style.borderRadius = "15px";
}

function mmLiveAdsEspanolSingleAdOff(x) 
{

   x.style.background = "transparent";

}

function bgColorOn(x) {
  
  x.style.background = "  #eefee6";
}

function bgColorOff(x) 
{
x.style.background = "transparent";

}
function bgColorOff2(x) 
{
x.style.background = " linear-gradient( to right, darkred , white , darkred ) ";

}

function showMessageBox()
{
document.getElementById("chatDiv").style.visibility='visible';
document.getElementById("chatMessageBox").focus();

}

function closeMessageBox()
{
document.getElementById("chatDiv").style.visibility='hidden';

}
function clearChatMessageBox()
{
    a=document.getElementById("chatMessageBox").innerHTML;
    if(a == 'Entra un mensaje aqui.')
    {
    document.getElementById("chatMessageBox").innerHTML='';
    document.getElementById("chatMessageBox").style.background='white';
    document.getElementById("chatMessageBox").focus();
    }

}
function clearChatEmailBox()
{

b=document.getElementById("chatBuyerEmail").innerHTML;
    if(b == 'Entra tu Ecorreo aqui.')
    {
    document.getElementById("chatBuyerEmail").innerHTML='';
    document.getElementById("chatBuyerEmail").style.background='white';
     document.getElementById("chatBuyerEmail").focus();
    }
}

function loadLocation()
{

const queryString = window.location.search;
console.log(queryString);
const urlParams = new URLSearchParams(queryString);
const state = urlParams.get('state');
console.log(state);
const county = urlParams.get('county');
console.log(county);

const title = urlParams.get('title');
console.log(title);
document.getElementById('titleBox').value =title;


document.getElementById('passCounty').value =county;
document.getElementById('passState').value =state;
document.getElementById('passCounty2').value =county;
document.getElementById('passState2').value =state;

const c = document.getElementById('passCounty').value ;
const s = document.getElementById('passState').value ;

const sc ="[+]"+ c + ", " + s;
document.getElementById('countyState').value =sc;   


} 


function goBack(cat)
{
    const queryString = window.location.search;
console.log(queryString);
const urlParams = new URLSearchParams(queryString);
const country = urlParams.get('country');
console.log(country);
const state = urlParams.get('state');
console.log(state);
const county = urlParams.get('county');
console.log(county);
const adCity = urlParams.get('adCity');
console.log(adCity);
const category = urlParams.get('category');
console.log(category);
            
    
window.location.replace("https://www.mimarketa.com/mmMain/mmEnglish/mmLiveAds.php?country="+country+"&county="+county+"&state="+state+"&adCity="+adCity+"&category="+category+"&searchBox=&searchParameter=4&sortBy=timeDsc " );
}


function showAllUsernameAds(user) 
{
const queryString = window.location.search;
console.log(queryString);
const urlParams = new URLSearchParams(queryString);
const country = urlParams.get('country');
console.log(country);
const state = urlParams.get('state');
console.log(state);
const county = urlParams.get('county');
console.log(county);

userpic=document.getElementById('userpic').src;

window.location.replace("https://www.mimarketa.com/mmMain/mmEnglish/mmLiveAdsUsername.php?country="+country+"&county="+county+"&state="+state+"&username="+user+"&userpic="+userpic); 
  
}




function timedHomeRedirect(category) {

cat=category;

alert(cat);
  myVar = setTimeout(goHome2(cat), 15000);
}

function goHome2(cat)
{
cat1=cat;
county = document.getElementById('passCounty').value;
state =document.getElementById('passState').value;


window.location.replace("https://www.mimarketa.com/mmMain/mmEnglish/mmEnglish.php?county="+county+"&state="+state+"&category="+cat1);
}


function goToVideo(n)
{
    if (n !="")
    {
    window.open( n );
    
        
    }


}


