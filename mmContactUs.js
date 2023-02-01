
//POST PAGE CODE
function highlightOn(x) 
{
 x.style.opacity=1;

}

function highlightOff(x) 
{
   x.focus(); 
   x.style.opacity='.8';
   return false; 
} 

function highlightGreen(x) 
{
 x.style.opacity=1;

}

function valForm()
{
  if (emailBox.value == "")                                   
    { 
        window.alert("Please enter your Email."); 
        emailBox.focus(); 
        return false; 
    } 

const mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

if(!(emailBox.value.match(mailformat)))
{
 alert("Please enter your Email correctly.");
document.mmPostForm.emailBox.focus();
return false;
 
}

if (messageBox.value == "")                                   
    { 
        window.alert("Please enter a message."); 
        description.focus(); 
		
        return false; 
    } 

 
emailBox2 =document.getElementById('emailBox').value;
messageBox2 =document.getElementById('messageBox').value;

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = 
    function() 
    {
        if (this.readyState == 4 && this.status == 200) 
        { 
           messageReply = this.responseText;
            
           
        }
    }//END FUNCTION
   
xmlhttp.open("GET","mmContactUs2.php?&emailBox="+emailBox2 +"&messageBox="+messageBox2,true);

xmlhttp.send();
alert('Success! Message sent.');
 }




 