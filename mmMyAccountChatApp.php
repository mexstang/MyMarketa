<?php
$county =$_GET['county'];
$state =$_GET['state'];
$logOnEcorreo =$_GET['ecorreoBox'];
$logOnClave=$_GET['claveBox'];
$logOnClaveBox=$_GET['logOnClaveBox'];
$buyerORseller = 'buyer';

$servername = 'localhost';
$username = 'u302929136_mexstang';
$password = 'mota67Mysql!';
$dbname = 'u302929136_MiMarketaDb';


print "<div   id='chatDiv' '  >" ;

print "<label  style='position:relative;left:5px;background:transparent;font-size:45px;font-family:book antiqua;' >MENSAJES |  </label><label  onclick='deleteMessage()'  style='background:transparent;font-size:45px;font-family:book antiqua;' >BORA  </label>
<button onclick='hideMessages()'  style='float:right;margin:10px;background:transparent ;font-weight:bold;font-size:45px;font-family:book antiqua;border:none;cursor:pointer;'>X</button> 
";

print "<input type='hidden' id='titleBox' value='' readonly>";
print "<center>
<textarea  id='chatMessageBox' style=' z-index:3;vertical-align:top;background:linear-gradient(white,white, darkgreen);font-size:65px;font-family:book antiqua;border:outset;border-radius:15px 15px 0px 0px;border-color:red; ' readonly maxlength='400' cols='24' rows='5'   wrap='hard'  >".$selectedMessage."</textarea> <br/>";

// ENVIADO ALERT
print "<label id='enviadoAlert' style='background:transparent;font-size:1px;font-family:book antiqua;color:darkgreen;' >MENSAJE ENVIADO!</label>
<br/>
<textarea  id='chatSendMessageBox'  
style='background:white;font-size:65px;font-family:book antiqua;border:outset;border-radius:0px 0px 15px 15px;border-color:darkred;' 
maxlength='100' cols='24' rows='3'   wrap='hard'  ></textarea>
<br/>
<input type='button' onclick='sendMessage()' value='ENVIA' style='width:200px;height:60px;background:linear-gradient(white, white,darkgreen  );font-size:60px;font-family:book antiqua;font-weight:bold;border:outset;border-color:black;border-radius:0px 0px 25px 25px  ;cursor:pointer;'> </center>

";
print "<div  style='margin:5px;border:outset;border-radius:15px;border-color:maroon;width:98%;height:450px;overflow: scroll;background:white;'    >";

// Create connection 4
$conn4 = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn4->connect_error) 
{ die("Connection failed: " . $conn4->connect_error); }    

$sql4  = "SELECT * FROM enMessagesTable WHERE sellerEmail='$logOnEcorreo'  OR  buyerEmail='$logOnEcorreo' ORDER BY timeStamp DESC   ";
$result4 = $conn4->query($sql4);
   
if ($result4->num_rows > 0) 
{  
print "<input type='hidden' id='stateBox' value='' readonly >";
print "<input type='hidden' id='countyBox' value='' readonly >";
print "<input type='hidden' id='adIdBox' value='' readonly >";
print "<input type='hidden' id='sessionIdBox' value='' readonly>"; 
print "<input type='hidden' id='textareaBox' value='' readonly>"; 


while($row4 = $result4->fetch_assoc()) 
{
$getMessages=$row4['sellerMessage1']; 

if($logOnEcorreo != $row4['buyerEmail'])
{
 $buyerORseller = 'seller';
 $getMessages = $row4['buyerMessage1'];
 
}
print "<input type='hidden' id='buyerORsellerBox' value='".$buyerORseller."' readonly>"; 


$title=$row4['adTitle']; 
$sessionId=$row4['sessionId']; 
$adId=$row4['adId']; 
$county=$row4['adCounty'];
$state=$row4['adState'];


print "

<input type='text'   placeholder='".$title."' id='".$adId."' name='".$sessionId."' maxlength='100'  onclick='selectMessage(this)' readonly value='".$title."\n".$getMessages."' style='width:100%;height:auto;background:transparent;font-size:55px;font-family:book antiqua;cursor:pointer;'><hr style='border:solid;border-width:2px;'  >";

}// END WHILE LOOP

mysqli_close($conn4);
print "</div>";
//END TABLE 1
}

print "</div>";

?>

</body>
</html>  
