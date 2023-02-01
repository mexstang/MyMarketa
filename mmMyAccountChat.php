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


print "<div   id='chatDiv'   >" ;

// ENVIADO ALERT
print "<div id='enviadoAlert' style='position:fixed; z-index:3;top:100px;right:10px; width:600px;height:600px;visibility:hidden;background:transparent;font-size:65px;font-family:book antiqua;color:darkgreen; text-shadow: 1px 2px 4px gray; text-align:center;' >MESSAGE <br/>SENT!</div>
<br/>



";
print "

<label  onclick='deleteMessage()'   onmouseover='colorOnRed(this)' onmouseout='colorOffRed(this)' style='background:transparent;font-size:25px;font-family:book antiqua;cursor:pointer; text-shadow: 1px 2px 4px gray;' >DELETE  </label>
<button onclick='hideMessages()'   onmouseover='colorOnRed(this)' onmouseout='colorOffRed(this)'  style='float:right;margin:10px;background:transparent ;font-weight:bold;font-size:25px;font-family:book antiqua;border:none;cursor:pointer;'>X</button> 
";

print "<input type='hidden' id='titleBox' value='' readonly>";
print "<center><textarea  id='chatMessageBox' style=' z-index:3;vertical-align:top;background:linear-gradient(white,white, grey);font-size:20px;font-family:book antiqua;border:outset;border-radius: 10px 10px  0px 0px ;  border-color:black;  text-shadow: 1px 2px 4px gray;' readonly maxlength='400' cols='60' rows='4'   wrap='hard'  >".$selectedMessage."</textarea> 
<br/>
<textarea  id='chatSendMessageBox'  
style='float:left;width:490px;background:white;font-size:20px;font-family:book antiqua;border:outset;border-radius:0px 0px 0px 0px ; text-shadow: 1px 2px 4px gray; margin-left:10px;' 
maxlength='100' cols='60' rows='2'   wrap='hard'  ></textarea>

<label type='button' onclick='sendMessage()' onmouseover='colorOnGreen(this)' onmouseout='colorOffGreen(this)' 
style='position:fixed;top:325px;right:20px;width:70px;height:35px;background:linear-gradient(to right, darkgreen,white, darkgreen);font-size:20px;font-family:book antiqua;border:outset;border-radius: 10px  ;   font-size:25px;font-family:book antiqua;cursor:pointer; text-shadow: 1px 2px 4px gray; padding:5px; vertical-align:center;'> SEND</label>
</center>";

print "<div  style='margin-left:10px;margin-bottom:10px;border:outset;border-color:black;width:575px;height:200px;overflow: scroll;background:white;border-radius: 0px 0px 5px 5px;'    >";

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

<input type='text'   placeholder='".$title."' id='".$adId."' name='".$sessionId."' maxlength='100'  onclick='selectMessage(this)' readonly value='".$title."\n".$getMessages."' style='width:100%;height:auto;background:transparent;font-size:25px;font-family:book antiqua;cursor:pointer; text-shadow: 1px 2px 4px gray;'><hr style='border:solid;border-width:2px;'  >";

}// END WHILE LOOP

mysqli_close($conn4);
print "</div>";
//END TABLE 1
}

print "</div>";

?>

</body>
</html>  
