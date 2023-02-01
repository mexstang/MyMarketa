<html>
<head>
<title>MyMARKETA.com MESSAGE CENTER </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<?php
//Get URL Vars
$sessionId=$_GET['sessionId'];

//Set DB Login Vars
$servername = "localhost";
$username = "u302929136_mexstang";
$password = "mota67Mysql!";
$dbname = "u302929136_MiMarketaDb";
$enMessagesTable= 'enMessagesTable';

// DB-Get the Session Record.
$conn2 = new mysqli($servername, $username, $password, $dbname);

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
$conn2->close();
$gotMessage='yes';

echo"
<form action='https://www.mimarketa.com/mmMain/mmEnglish/mmAdsPortalMessage5.php' method='post'>

Seller Message <br/>
<input type='hidden' name='sessionId' value='$sessionId' >
<input type='hidden' name='title' value='$title' >
<input type='hidden' name='sellerEmail' value='$sellerEmail' >
<br>
<textarea  id='messageBox'  
 required maxlength='100'  rows='10' cols='50' name='sellerMessage'   wrap='hard'  readonly >$sellerMessage1</textarea>
 <br/> 
 <textarea  id='replyBox'   name='buyerMessage' 
 required maxlength='50'  rows='10' cols='50'  wrap='hard'   ></textarea>

<input id='messageButton'  type='submit' value='REPLY'   > <br/><br/>
</form> ";
}else
{
   
echo "Sorry. Record not found.";
}

?>

</body>
</html>