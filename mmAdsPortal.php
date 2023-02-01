<!DOCTYPE html>

<html>
    <head>
    
  <script>
        function redirectPage()
        { 
const queryString = window.location.search;
console.log(queryString);
const urlParams = new URLSearchParams(queryString);

const pw = urlParams.get('pw');
console.log(pw);
         
        if(document.getElementById('activateBox').checked) 
        {
            
        window.location.replace('https://www.mimarketa.com/mmMain/mmEnglish/mmAdActivate.php?pw=' + pw); 
        
        
        }
else if(document.getElementById('pendingBox').checked) 
{
  window.location.replace('https://www.mimarketa.com/mmMain/mmEnglish/mmAdPending.php?pw=' + pw);  
}
else if(document.getElementById('deleteBox').checked) 
{
window.location.replace('https://www.mimarketa.com/mmMain/mmEnglish/mmAdDelete.php?pw=' + pw);  
}
else 
{
alert('Please make a selection.');
}        
        
        }
        
    </script>
        
</head>        
<body>
WHAT WOULD YOU LIKE TO DO?
<br>
<br>
<input type='radio' id='activateBox' name='radioBox' value='activate'>
<label for='activateBox'>ACTIVATE AD</label>
<!--<br> 
<input type='radio' id='pendingBox' name='radioBox' value='pending'>
<label for='pending'>SET AD TO "PENDING"</label>
-->
<br>
<input type='radio' id='deleteBox' name='radioBox' value='delete'>
<label for='deleteBox'>DELETE AD</label>
<br><br>
<input type='button' id='selection' onclick='redirectPage()' value='OK'>


<?php
$pw=$_GET['pw'];

echo " 
<input type='hidden' id='pwBox' value='$pw'>";


?>

</body>
</html>
