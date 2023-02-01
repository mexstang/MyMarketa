<?php
$email=$_GET['email'];

$servername = "localhost";
$username = "u302929136_mexstang";
$password = "mota67Mysql!";
$dbname = "u302929136_MiMarketaDb";
$lasCuentasTable= 'enLasCuentasTable';

// Create connection to check if Email exists. If NO, do not change existing CLAVE.
$conn1 = new mysqli($servername, $username, $password, $dbname);
if ($conn1->connect_error) { die("Connection failed: " . $conn1->connect_error); }    
 
$sql1  = "SELECT * FROM $lasCuentasTable WHERE ecorreo ='$email'  ";
$results1 = $conn1->query($sql1);

if ($results1->num_rows == '0') 
{ 
    echo "This Email Address cannot be found." ;
    
}


if ($results1->num_rows == '1') 
{
$row1 = $results1->fetch_assoc(); 
$passe=$row1['clave'];

//USER EMAIL ALERT
$from = "mimarketa@mimarketa.com";
$to = $email;
$subject = "MyMarketa.com Message.";

$message = "Hello.\n".
"https://www.mimarketa.com/mmMain/mmEnglish/mmMyAccount.php?country=".$country."&state=".$state."&county=".$county."\n"."PASSWORD: ".$passe;
$headers = "From:" . $from;
mail($to,$subject,$message, $headers);

echo "SUCCESS! Please check your Email Address. "; 

}

?>
