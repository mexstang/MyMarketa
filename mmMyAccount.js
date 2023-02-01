
function detectMobile() 
 {
 const pageURL= window.location.href;
 const queryString = pageURL;
            console.log(queryString);
            const urlParams = new URLSearchParams(queryString);
            
            const country = urlParams.get('country');
            console.log(country);
            
            const county = urlParams.get('county');
            console.log(county);
            
            const state = urlParams.get('state');
            console.log(state);
 screenResolution= window.screen.width * window.devicePixelRatio;
 
     if( screenResolution < '900')
     { 
      window.location.replace("https://www.mimarketa.com/mmMain/mmEnglishApp/mmMyAccount.php?country="+country+"&county="+county+"&state="+state+"&adCity=All_Cities&category=ALL")
        }

}

function resetPass2()
{
  var ecorreo = prompt("PLEASE ENTER YOUR EMAIL ADDRESS.", " ");
  
  switch (ecorreo)
  {
      case null:
           
      break;
      
      
      case ' ':
      alert('PLEASE ENTER YOUR EMAIL ADDRESS.');    
      break;
      
  default:
      
    email= ecorreo;
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
    xhttp.open("GET", "mmMyAccountResetPassword.php?email="+email, true);
      xhttp.send();

  } // END SWITCH
      
}// END FUNCTION








function preview_image1(event) 
{
 const reader = new FileReader();
 reader.onload = function()
 {
  const output = document.getElementById('laPic1');
  output.src = reader.result;
  
   resizeImage1() ; 
 }
 reader.readAsDataURL(event.target.files[0]);
    const file = document.getElementById("userfile1").files[0];
     const t = file.type.split('/').pop().toLowerCase();
    if (t != "jpeg" && t != "jpg" && t != "png" && t != "bmp" && t != "gif") 
	{
        alert('Please select a valid image file');
        document.getElementById("userfile1").value = '';
        return false;
    }
  
}	

function resizeImage1() 
{

var fileReader = new FileReader();
var filterType = /^(?:image\/bmp|image\/cis\-cod|image\/gif|image\/ief|image\/jpeg|image\/jpeg|image\/jpeg|image\/pipeg|image\/png|image\/svg\+xml|image\/tiff|image\/x\-cmu\-raster|image\/x\-cmx|image\/x\-icon|image\/x\-portable\-anymap|image\/x\-portable\-bitmap|image\/x\-portable\-graymap|image\/x\-portable\-pixmap|image\/x\-rgb|image\/x\-xbitmap|image\/x\-xpixmap|image\/x\-xwindowdump)$/i;

fileReader.onload = function (event) {
  var image = new Image();
  
  image.onload=function(){
      document.getElementById("laPic1").src=image.src;
      var canvas=document.createElement("canvas");
      var context=canvas.getContext("2d");
      canvas.width=250;
      canvas.height=300;
      context.drawImage(image,
          0,
          0,
          image.width,
          image.height,
          0,
          0,
          canvas.width,
          canvas.height
      );  
      
      
      document.getElementById("laPic1").src =  context.canvas.toDataURL();
       document.getElementById("hidden_data1").value = context.canvas.toDataURL();
       
      
  }
  image.src=event.target.result;
};

var loadImageFile = function () {
  var uploadImage = document.getElementById("userfile1");
  
  //check and retuns the length of uploded file.
  if (uploadImage.files.length === 0) { 
    return; 
  }
  
  //Is Used for validate a valid file.
  var uploadFile = document.getElementById("userfile1").files[0];
  if (!filterType.test(uploadFile.type)) {
    alert("Please select a valid image."); 
    return;
  }
  
  fileReader.readAsDataURL(uploadFile);
}
loadImageFile();
}
 

function preview_image2(event) 
{
 const reader = new FileReader();
 reader.onload = function()
 {
  const output = document.getElementById('laPic2');
  output.src = reader.result;
   resizeImage2() ; 
 }
 reader.readAsDataURL(event.target.files[0]);
 
   
 
    const file = document.getElementById("userfile2").files[0];
  
		
    const t = file.type.split('/').pop().toLowerCase();
    if (t != "jpeg" && t != "jpg" && t != "png" && t != "bmp" && t != "gif") 
	{
        alert('Please select a valid image file');
        document.getElementById("userfile2").value = '';
        return false;
    }
    
}	


function resizeImage2() 
{

var fileReader = new FileReader();
var filterType = /^(?:image\/bmp|image\/cis\-cod|image\/gif|image\/ief|image\/jpeg|image\/jpeg|image\/jpeg|image\/pipeg|image\/png|image\/svg\+xml|image\/tiff|image\/x\-cmu\-raster|image\/x\-cmx|image\/x\-icon|image\/x\-portable\-anymap|image\/x\-portable\-bitmap|image\/x\-portable\-graymap|image\/x\-portable\-pixmap|image\/x\-rgb|image\/x\-xbitmap|image\/x\-xpixmap|image\/x\-xwindowdump)$/i;

fileReader.onload = function (event) {
  var image = new Image();
  
  image.onload=function(){
      document.getElementById("laPic2").src=image.src;
      var canvas=document.createElement("canvas");
      var context=canvas.getContext("2d");
      canvas.width=250;
      canvas.height=300;
      context.drawImage(image,
          0,
          0,
          image.width,
          image.height,
          0,
          0,
          canvas.width,
          canvas.height
      );  
      
      
      document.getElementById("laPic2").src =  context.canvas.toDataURL();
       document.getElementById("hidden_data2").value = context.canvas.toDataURL();
       
      
  }
  image.src=event.target.result;
};

var loadImageFile = function () {
  var uploadImage = document.getElementById("userfile2");
  
  //check and retuns the length of uploded file.
  if (uploadImage.files.length === 0) { 
    return; 
  }
  
  //Is Used for validate a valid file.
  var uploadFile = document.getElementById("userfile2").files[0];
  if (!filterType.test(uploadFile.type)) {
    alert("Please select a valid image."); 
    return;
  }
  
  fileReader.readAsDataURL(uploadFile);
}
loadImageFile();
}
 






function preview_image3(event) 
{
 const reader = new FileReader();
 reader.onload = function()
 {
  const output = document.getElementById('laPic3');
  output.src = reader.result;
   resizeImage3() ; 
 }
 reader.readAsDataURL(event.target.files[0]);
 
   
 
    const file = document.getElementById("userfile3").files[0];
  
		
    const t = file.type.split('/').pop().toLowerCase();
    if (t != "jpeg" && t != "jpg" && t != "png" && t != "bmp" && t != "gif") 
	{
        alert('Please select a valid image file');
        document.getElementById("userfile3").value = '';
        return false;
    }
    
}	



function resizeImage3() 
{

var fileReader = new FileReader();
var filterType = /^(?:image\/bmp|image\/cis\-cod|image\/gif|image\/ief|image\/jpeg|image\/jpeg|image\/jpeg|image\/pipeg|image\/png|image\/svg\+xml|image\/tiff|image\/x\-cmu\-raster|image\/x\-cmx|image\/x\-icon|image\/x\-portable\-anymap|image\/x\-portable\-bitmap|image\/x\-portable\-graymap|image\/x\-portable\-pixmap|image\/x\-rgb|image\/x\-xbitmap|image\/x\-xpixmap|image\/x\-xwindowdump)$/i;

fileReader.onload = function (event) {
  var image = new Image();
  
  image.onload=function(){
      document.getElementById("laPic3").src=image.src;
      var canvas=document.createElement("canvas");
      var context=canvas.getContext("2d");
      canvas.width=250;
      canvas.height=300;
      context.drawImage(image,
          0,
          0,
          image.width,
          image.height,
          0,
          0,
          canvas.width,
          canvas.height
      );  
      
      
      document.getElementById("laPic3").src =  context.canvas.toDataURL();
       document.getElementById("hidden_data3").value = context.canvas.toDataURL();
       
      
  }
  image.src=event.target.result;
};

var loadImageFile = function () {
  var uploadImage = document.getElementById("userfile3");
  
  //check and retuns the length of uploded file.
  if (uploadImage.files.length === 0) { 
    return; 
  }
  
  //Is Used for validate a valid file.
  var uploadFile = document.getElementById("userfile3").files[0];
  if (!filterType.test(uploadFile.type)) {
    alert("Please select a valid image."); 
    return;
  }
  
  fileReader.readAsDataURL(uploadFile);
}
loadImageFile();
}
 
 
function resetImage(pic)
{
    switch (pic)
    {
        case 'pic1':
        
        document.getElementById("userfile1").value='';
        document.getElementById("laPic1").src='';  
        break;
        
       case 'pic2':
        
        document.getElementById("userfile2").value='';
        document.getElementById("laPic2").src='';  
        break;
        
        case 'pic3':
        
        document.getElementById("userfile3").value='';
        document.getElementById("laPic3").src='';  
        break;
              
    }  
}
 
 


function showSaveBtn(x)
{
   document.getElementById(x).style.visibility='visible';  

}

function adEdit(x)
{
    x.readOnly = false;
    x.style.background='white';  
}




function myAccountColorOn(x) 
{ 
  x.style.background = "#ccffcc";
  
}

function myAccountColorOff(x) 
{
x.style.background = 'linear-gradient(to right, darkgreen, white,darkgreen  )';
   
}

function myAccountColorOffRed(x) 
{
x.style.background = 'linear-gradient(to right, darkred, white,darkred  )';
   
}

function myAccountColorOff2(x) 
{
x.style.background = 'linear-gradient(to right, white, white,darkred  )';
   
}
//LOG ON PAGE CODE
function claveCheck() 
{    
var clave=document.getElementById('claveBox').value ;
var ecorreo=document.getElementById('ecorreoBox').value ;
  
  
var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange=function() {
    if (this.readyState == 4 && this.status == 200) 
    { 
      var clave2 = this.responseText;
            const queryString = clave2;
            console.log(queryString);
            const urlParams = new URLSearchParams(queryString);
            
            const country = urlParams.get('country');
            console.log(country);
            
            const county = urlParams.get('county');
            console.log(county);
            
            const state = urlParams.get('state');
            console.log(state);
            
             const logOnClaveBox = urlParams.get('logOnClaveBox');
            console.log(logOnClaveBox);
            
      if (logOnClaveBox == 'APPROVED420')
        { 
      document.getElementById('logOnClaveBox').value='APPROVED420' ;
      
       window.location.replace(queryString);
         } else
         {
        
          document.getElementById('logOnClaveBox').value='DENIED420' ;
          document.getElementById('logOnBox').style.visibility='visible' ;
          document.getElementById('logOnBox').style.zIndex=10 ;   
          document.getElementById('claveBox').style.background='red' ;
          document.getElementById('ecorreoBox').style.background='red' ;
           document.getElementById('claveBox').value='' ;
          document.getElementById('ecorreoBox').value='' ; 
         document.getElementById("logInForm").submit();
         }
         
         
         
         
         
         
    }
  };
  xhttp.open("GET", "mmMyAccount2.php?ecorreo="+ecorreo+"&clave="+clave, true);
      
    
  xhttp.send();
  
  if(ecorreo !='' && clave !='')
  {
  alert('! '+ ecorreo);
  }
  
  
  
  
}

function clearBox(c)
{
    
    document.getElementById(c).style.background='white' ;
     
}

function activateMyAd(x) 
{
var a= x.value;
var adActive='0';
var adId= x.id;
var adEmail= x.name;
if (adEmail == "") 
{	alert(adEmail);	
   return;
} 
   var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("textareaBox").innerHTML = this.responseText;
      }
    };

switch(a) 
{
  case 'ON':
   x.style.background = 'linear-gradient(to right, darkgreen, white,darkgreen  )';
	
    adActive='1';
   
    break;
  case 'OFF':
   x.style.background = 'linear-gradient(to right, darkred, white,  darkred)';
    adActive='2'; 
    break;
  case 'PENDING':
   x.style.background = 'linear-gradient(to right, darkgray, white,  darkgray)';
   adActive='3';

    break;
  case 'DELETE':
    x.style.background = 'purple';
  adActive='4';

    break;
default:
      adActive='5';
    break;

}
    xmlhttp.open("GET","mmMyAccountActivate.php?adEmail="+adEmail+"&adId="+adId+"&adActive="+adActive,true);
xmlhttp.send();
 } 




function resetClave()
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
            
            
            const claveBox = urlParams.get('claveBox');
            console.log(claveBox);
            const ecorreoBox = urlParams.get('ecorreoBox');
            console.log(ecorreoBox);
             window.open("https://www.mimarketa.com/mmMain/mmEnglish/mmMyAccountUpdateInfo.php?country="+country+"&county="+county+"&state="+state+"&clave="+claveBox+"&ecorreo="+ecorreoBox);	   
}


function contactUsForm() 
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
            
            window.location.replace("https://www.mimarketa.com/mmMain/mmEnglish/mmContactUs.php?country="+country+"&county="+county+"&state="+state);	   
}


//CHAT SEND MESSAGE FUNCTION---------------------------------------------------

function selectMessage(x)
{
var sId= x.name;
var id= x.id;
var a= x.value;
var t= x.placeholder;

document.getElementById("titleBox").value=t;
document.getElementById("chatMessageBox").value = a;
document.getElementById("adIdBox").value=id;
document.getElementById("sessionIdBox").value=sId;


} 

function sendMessage() 
{ 
buyerORseller=document.getElementById("buyerORsellerBox").value;
title1=document.getElementById("titleBox").value;
adIdBox1=document.getElementById("adIdBox").value;
sessionId=document.getElementById("sessionIdBox").value;
state=document.getElementById("stateBox").value;
county=document.getElementById("countyBox").value;
newMessage=document.getElementById("chatSendMessageBox").value;
document.getElementById("chatSendMessageBox").value= ""; 
document.getElementById("chatSendMessageBox").focus(); 
   
if (newMessage == "") 
{
alert('PLEASE ENTER A MESSAGE.');
document.getElementById("chatSendMessageBox").focus();
   return;
} 

   var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = 
    function() 
    {
      if (this.readyState == 4 && this.status == 200) 
      {
       newMessage2 = this.responseText;
       document.getElementById('enviadoAlert').style.visibility='visible';
       timedAlertEnviado();
       
      }
    }

xmlhttp.open("GET","mmMyAccountMessageCenter.php?q="+newMessage+"&sessionId="+sessionId+"&adId="+adIdBox1+"&title="+title1+"&state="+state+"&county="+county+"&buyerORseller="+buyerORseller,true);
    xmlhttp.send();
    
} 

function timedAlertEnviado() 
{ 
   setTimeout(
       function()
   { 
       document.getElementById('enviadoAlert').style.visibility='hidden'; 
   }, 1000);  

          
    
} 

function refreshMessages() 
{
    const queryString = window.location.search;
            console.log(queryString);
            const urlParams = new URLSearchParams(queryString);
            
window.location.replace(queryString);
   alert('refrescando');
}


//AJAX GET ALL MESSAGES FROM SESSION ID.
function getMessages() 
{
adIdBox1=document.getElementById("adIdBox").value;
sessionId=document.getElementById("sessionIdBox").value;

var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange=
  function() 
  {
    if (this.readyState == 4 && this.status == 200) 
    { 
      var allMessages = this.responseText;
     }
    
  };
  xhttp.open("GET", "mmMyAccountChatRefresh.php?adId="+adId+"&sessionId="+sessionId, true);
  xhttp.send();

}


//AJAX GET ALL MESSAGES FROM SESSION ID.
function deleteMessage() 
{
adId=document.getElementById("adIdBox").value;
sessionId=document.getElementById("sessionIdBox").value;

var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange=
  function() 
  {
    if (this.readyState == 4 && this.status == 200) 
    { 
      var messageDeleted = this.responseText;
      document.getElementById("chatMessageBox").innerHTML = ' ';
      document.getElementById("adId").style.visibility='hidden';
      refreshMessages();
     }
    
  };
  xhttp.open("GET", "mmMyAccountChatDelete.php?adId="+adId+"&sessionId="+sessionId, true);
  xhttp.send();

}



function deleteSelectedMessage(a,s) 
{
 var r = confirm("Are you sure you want to delete this message?");
  
  if (r == true) 
  
  {
      
 

adId=a;
sessionId=s;

var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange=
  function() 
  {
    if (this.readyState == 4 && this.status == 200) 
    { 
      var messageDeleted = this.responseText;
      alert(messageDeleted);
      document.getElementById("chatMessageBox").innerHTML = ' ';
      document.getElementById("adId").style.visibility='hidden';

     }
    
  };
  xhttp.open("GET", "mmMyAccountChatDelete.php?adId="+adId+"&sessionId="+sessionId, true);
  xhttp.send();


      
  } 
  else 
  { return false; }     
      
      
      
  }// END FUNCTION


function showMessages()
{
    
     document.getElementById("chatDiv").style.visibility='visible';
    
}

function hideMessages()
{
document.getElementById("chatDiv").style.visibility = 'hidden';

} 

function colorOnGreen(x) {
  x.style.color = "darkgreen";
  }

function colorOffGreen(x) 
{
 x.style.color = "black";

}
function colorOnRed(x) {
  x.style.color = "darkred";
  }

function colorOffRed(x) 
{
 x.style.color = "black";

}


function goToVideo(n)
{
    if (n !="")
    {
    window.open( n );
    
        
    }


}

