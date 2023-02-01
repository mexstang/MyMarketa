function getLocation()
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

document.getElementById('countryBox2').value=country;

document.getElementById('passCounty2').value=county;

document.getElementById('passState2').value=state;
}

function changeFontColor(x) 
{
  x.style.color = "black";
 x.style.background = "transparent";
 x.style.border = "transparent";
}

//POST PAGE CODE
function postBgColorOn(x) 
{ 
  x.style.background = "#ccffcc";


}

function postBgColorOff(x) 
{
   
         x.style.background = "transparent";
  document.getElementById('nextButton').style.background = 'linear-gradient(to right, darkgreen, white,darkgreen  )';


} 
	


function valForm()
{ 
if (categoria.value == "" || categoria.value=='CATEGORIA')                               
    { 
        window.alert("PLEASE CHOOSE A CATEGORY. "); 
        categoria.focus(); 
        return false; 
    } 


 if (titulo.value == "" || titulo.value=='TITULO')                               
    { 
        window.alert("PLEASE ENTER A TITLE. "); 
        titulo.focus(); 
        return false; 
    } 
	
	
	
	const letterNumber = /^[0-9a-zA-Z, ]+$/;
    if(!(titulo.value.match(letterNumber)) )
      {
	   window.alert("TITLE: LETTERS AND NUMBERS ONLY. "); 
        titulo.focus(); 
        return false; 
	 
	  }
   
    if (precio.value == "" )                        
    { 
        window.alert("PRICE: NUMBERS ONLY. 0 = Gratis."); 
        precio.focus(); 
        return false; 
    } 
     
   
    
  if (ciudad.value == "" || ciudad.value=='CIUDAD')                       
    { 
        window.alert("PLEASE ENTER A CITY."); 
        ciudad.focus(); 
        return false; 
    }    
    
       
if (description.value == "" || description.value=='DETALLES')                                    
    { 
        window.alert("PLEASE ENTER YOUR DETAILS."); 
        description.focus(); 
		
        return false; 
    } 

   
  if (ecorreo.value == "" || ecorreo.value=='ECORREO')                                      
    { 
        window.alert("PLEASE ENTER YOUR EMAIL."); 
        ecorreo.focus(); 
        return false; 
    } 

const mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

if(!(ecorreo.value.match(mailformat)))
{
 alert("EMAIL FORMAT ERROR");
document.mmPostForm.ecorreo.focus();
return false;
 
}
window.scrollTo(0, 0);
document.getElementById("loadingDiv").style.visibility = 'visible'; 
document.getElementById("mmPostForm").submit(); 


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
  const output = document.getElementById('output_image2');
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
      document.getElementById("output_image2").src=image.src;
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
      
      
      document.getElementById("output_image2").src =  context.canvas.toDataURL();
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
  const output = document.getElementById('output_image3');
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
      document.getElementById("output_image3").src=image.src;
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
      
      
      document.getElementById("output_image3").src =  context.canvas.toDataURL();
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
        document.getElementById("output_image1").src='';  
        break;
        
       case 'pic2':
        
        document.getElementById("userfile2").value='';
        document.getElementById("output_image2").src='';  
        break;
        
        case 'pic3':
        
        document.getElementById("userfile3").value='';
        document.getElementById("output_image3").src='';  
        break;
              
    }  
}
 
 
