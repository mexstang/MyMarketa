<!DOCTYPE html>
<html>
<head>
<title>MyMARKETA.com SELLER REPLY PAGE </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script >
function sendMessage1() 
{
var sessionId=document.getElementById('sessionIdBox').value;  
var sellerMessage=document.getElementById('replyBox').value;   
var buyerEmail=document.getElementById('buyerEmailBox').value;   
var title=document.getElementById('titleBox').value; 


    if (sellerMessage == "") 
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
xmlhttp.open("GET",'https://www.mimarketa.com/mmMain/mmEnglish/mmAds6EmailRelay.php?sessionId='+sessionId+'&email='+buyerEmail+'&message='+sellerMessage+'&title='+title+'&ID=SELLER');
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
<body   >
    
    
<?php include 'mmHeader.php'; ?>
  <br/><br/><br/><br/><br/><br/>
<div id='coverMasthead' style='position:absolute;top:0;left:0;z-index:5;background:transparent; color:transparent; cursor:pointer;width:100%;height:100px;'  onclick='redirectHome()'   ></div>    
    
    
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
$buyerEmail=$row2['buyerEmail'];
$buyerMessage1=$row2['buyerMessage1'];   
$title=$row2['adTitle']; 

$county=$row2['adCounty'];  
$state=$row2['adState'];  
$country=$row2['adCountry'];  


$conn2->close();
$gotMessage='yes';

echo"<center>
<b>BUYER MESSAGE </b><br/>
<input type='hidden' id='sessionIdBox' value='$sessionId' >
<input type='hidden' id='titleBox' value='$title' >
<input type='hidden' id='buyerEmailBox' value='$buyerEmail' >

<input type='hidden' id='countyBox' value='$county' >
<input type='hidden' id='stateBox' value='$state' >
<input type='hidden' id='countryBox' value='$country' >


<br>

<textarea  id='messageBox'  
 required maxlength='100'  rows='5' cols='50'   wrap='hard'  readonly style='background:#DDE5DC;color:black;border:outset;font-size:17px;border-radius:3px;'  >$buyerMessage1</textarea>
 <br/> 
 <textarea  id='replyBox'  
 required maxlength='100'  rows='5' cols='50'  wrap='hard'  style='background:white;color:black;border:outset;font-size:17px;'    ></textarea>
<br/>
<input id='messageButton'  type='button' onclick='sendMessage1()' value='REPLY' style='background:#B3CBAF;color:black;border:outset;font-size:25px;'    > </center><br/><br/>";







}else
{
   
echo "Sorry. Record not found.";
}

?>


</body>
</html>