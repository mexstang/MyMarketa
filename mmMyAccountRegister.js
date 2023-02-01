function changeBg()
{
    document.getElementById('usernameChanged').value='YES';
    
}


function changeClave()
{
    document.getElementById('clave').style.visibility='visible';
    document.getElementById('clave2').style.visibility='visible';
    
    
}


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
            
            const county = urlParams.get('county');
            console.log(county);
            
            const state = urlParams.get('state');
            console.log(state);
            
             const logOnClaveBox = urlParams.get('logOnClaveBox');
            console.log(logOnClaveBox);
            
      if (logOnClaveBox == 'APPROVED420')
        { 
      document.getElementById('logOnClaveBox').value='APPROVED420' ;
      document.getElementById("logInForm").submit();  
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

function updateInformation(x)
{
    
    username = x.value;
    ecorreo   =   document.getElementById('ecorreo').value;   
    claveBox =  document.getElementById('clave').value;    
    
     var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = 
    function() 
    {
      if (this.readyState == 4 && this.status == 200) 
      {
        usernameCheck = this.responseText;
          
          if (usernameCheck == 'SORRY. USERNAME TAKEN.')
          {   
              
              if(document.getElementById('usernameBox').value  != document.getElementById('usernameBox2').value)
              {alert(usernameCheck);}
              
              document.getElementById('usernameBox').value  = document.getElementById('usernameBox2').value;
          }
          
       }
    }

xmlhttp.open("GET","mmMyAccountUpdateInformation.php?clave="+claveBox+"&ecorreo="+ecorreo+"&username="+username,true);
    xmlhttp.send();
}


function updateVal()
{
 
    if(document.getElementById('clave').value != document.getElementById('clave2').value)
    {
    alert('PASSWORDS MUST MATCH.'); 
    return;
    }
     if(document.getElementById('clave').value == document.getElementById('clave2').value)
    {
    document.getElementById('loadingDiv').style.visibility='visible';
    document.getElementById("mmUpdateInfoForm").submit(); 
    }    
}



function updateInfo2(x)
{
    fieldName=x.name;
    fieldValue=x.value;

if(fieldName =='done' ){ if(document.getElementById('clave').value != document.getElementById('clave2').value){alert('PASSWORDS MUST MATCH.'); return;}}

  ecorreo   =   document.getElementById('ecorreo').value;   
  claveBox =  document.getElementById('clave').value;    
    
     var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = 
    function() 
    {
      if (this.readyState == 4 && this.status == 200) 
      {
        infoUpdated = this.responseText;
          alert(infoUpdated); 
           window.location.replace(infoUpdated); 
   
       
      }
    }

xmlhttp.open("GET","mmMyAccountUpdateInfo2.php?clave="+claveBox+"&ecorreo="+ecorreo+"&fieldName="+fieldName+"&fieldValue="+fieldValue,true);
    xmlhttp.send();
}


function updateInfo()
{ 
  hidden_data1  = document.getElementById('hidden_data1').value;
  usernameBox  =   document.getElementById('usernameBox').value; 
 ecorreoBox   =   document.getElementById('ecorreoBox').value;
  cityBox  =   document.getElementById('cityBox').value; 
   countyBox  =  document.getElementById('countyBox').value;
   stateBox  =  document.getElementById('stateBox').value; 
    claveBox =  document.getElementById('claveBox').value;  
    
     var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = 
    function() 
    {
      if (this.readyState == 4 && this.status == 200) 
      {
        claveChanged = this.responseText;
          alert(claveChanged); 
   
       
      }
    }

xmlhttp.open("GET","mmMyAccountUpdateInfo2.php?clave="+claveBox+"&ecorreo="+ecorreoBox+"&username="+usernameBox+"&cityBox="+cityBox+"countyBox="+countyBox+"&stateBox="+stateBox+"&hidden_data1="+hidden_data1,true);
    xmlhttp.send();
}






function valForm()
{ 
   usernameBg  =   document.getElementById('username2').style.backgroundColor; 
  username2  =   document.getElementById('username2').value; 
  city  =   document.getElementById('city').value; 
    clave =  document.getElementById('clave').value;
    clave2 =  document.getElementById('clave2').value;  
    
  if (usernameBg == 'gray'){ document.getElementById('usernameChanged').value = 'YES'; alert(usernameBg); }
    
    if(username2 == '' || city == '' || clave == '' || clave2 == '' ){alert('EMPTY FIELD.'); return;}
    
    if(clave !== clave2){alert('ERROR. PASSWORDS DO NOT MATCH.'); return;}
    
    if(clave == clave2)
    {
    const queryString = window.location.href;
    document.getElementById("urlBox").value = queryString; 
    document.getElementById("loadingDiv").style.visibility = 'visible'; 
    document.getElementById("mmUpdateInfoForm").submit(); 
    } 

 }  

function preview_image1(event) 
{
 const reader = new FileReader();
 reader.onload = function()
 {
  const output = document.getElementById('output_image1');
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


//FOTO UPLOAD PIC 1

function resizeImage1() 
{ 
var fileReader = new FileReader();
var filterType = /^(?:image\/bmp|image\/cis\-cod|image\/gif|image\/ief|image\/jpeg|image\/jpeg|image\/jpeg|image\/pipeg|image\/png|image\/svg\+xml|image\/tiff|image\/x\-cmu\-raster|image\/x\-cmx|image\/x\-icon|image\/x\-portable\-anymap|image\/x\-portable\-bitmap|image\/x\-portable\-graymap|image\/x\-portable\-pixmap|image\/x\-rgb|image\/x\-xbitmap|image\/x\-xpixmap|image\/x\-xwindowdump)$/i;

fileReader.onload = function (event) {
  var image = new Image();
  
  image.onload=function(){
      document.getElementById("output_image1").src=image.src;
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
      

      
      document.getElementById("output_image1").src =  context.canvas.toDataURL();
      document.getElementById('hidden_data1').value = context.canvas.toDataURL();
       
      
      
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
 


