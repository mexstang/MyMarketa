<!DOCTYPE html>
<html lang='en' >
<head>
<title>MyMARKETA.com BUYER REPLY PAGE </title>
<meta charset='utf-8' >
<meta name='viewport' content='width=width-device, initial-scale=1.0' >
<link rel="stylesheet" type="text/css" href="mmAdsMessageReply.css">
<link rel="stylesheet" type="text/css" href="mmHeader.css">
<link rel="stylesheet" type="text/css" href="mmFooter.css">

<script >
function sendMessage1() 
{
var sessionId=document.getElementById('sessionIdBox').value;  
var buyerMessage=document.getElementById('replyBox').value;   
var sellerEmail=document.getElementById('sellerEmailBox').value;   
var title=document.getElementById('titleBox').value; 


    if (buyerMessage == "") 
    {
    alert('PLEASE ENTER YOUR MESSAGE.');
    document.getElementById('replyBox').focus();
    return;
    }

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
xmlhttp.open("GET",'https://www.mimarketa.com/mmMain/mmEnglish/mmAds6EmailRelay.php?sessionId='+sessionId+'&email='+sellerEmail+'&message='+buyerMessage+'&title='+title+'&ID=BUYER');
xmlhttp.send();
  
}


function redirectHome()
{
var county=document.getElementById('countyBox').value;  
var state=document.getElementById('stateBox').value;   
var country=document.getElementById('countryBox').value; 

window.location.replace('https://www.mimarketa.com/mmMain/mmEnglish/mmEnglish.php?country='+country+'&county='+county+'&state='+state+'&adCity=ALL&category=ALL');  
    
}

</script> 

</head>
<body >
 <div class='header' >
     <div class='container1' >
         <header><?php include 'mmHeader.php'; ?></header>
         </div>
  <div class='container2'>
    <main>
        <section id='messageSection' >
<?php
//Get URL Vars
$sessionId=$_GET['sessionId'];

//Set DB Login Vars
$servername = "localhost";
$username = "u302929136_mexstang";
$password = "mota67Mysql!";
$dbname = "u302929136_MiMarketaDb";
$enMessagesTable= 'enMessagesTable';

// Create connection to open adsTable and get all records.
$conn2 = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn2->connect_error) 
{ die("Connection failed: " . $conn2->connect_error); }    
 
$sql2  = "SELECT * FROM $enMessagesTable WHERE sessionId='$sessionId' ";

    $result2 = $conn2->query($sql2);
if ($result2->num_rows > 0) 
{ 
$row2 = $result2->fetch_assoc();
$sellerEmail=$row2['sellerEmail'];
$sellerMessage1=$row2['sellerMessage1'];   
$title=$row2['adTitle']; 

$county=$row2['adCounty'];  
$state=$row2['adState'];  
$country=$row2['adCountry'];  


$conn2->close();
$gotMessage='yes';

echo"
<center>
<label >SELLER MESSAGE </label>
<input type='hidden' id='sessionIdBox' value='$sessionId' >
<input type='hidden' id='titleBox' value='$title' >
<input type='hidden' id='sellerEmailBox' value='$sellerEmail' >

<input type='hidden' id='countyBox' value='$county' >
<input type='hidden' id='stateBox' value='$state' >
<input type='hidden' id='countryBox' value='$country' >


<br><br/> 
<textarea  id='messageBox'  
 required maxlength='100'  rows='4' wrap='hard'  readonly   >$sellerMessage1</textarea>
 <br/> 
 <textarea  id='replyBox'  
 required maxlength='100' rows='4' wrap='hard'  ></textarea>
<br/>  
<button id='messageButton'  type='button' onclick='sendMessage1()' > REPLY </button>";




}else
{
   
echo "Sorry. Record not found.";
}

?>
</section>
</main>
</div>
</div>
<!-- <footer ><?php include 'mmFooter.php' ?></footer> -->


<script src="mmHeader.js"></script> 
</body>
</html>