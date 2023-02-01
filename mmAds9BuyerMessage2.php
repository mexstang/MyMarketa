<?php

$title=$_POST['title'];
$adId=$_POST['adId'];
$email=$_POST['email'];
$message=$_POST['message'];
$sessionId=$_POST['sessionId'];


$servername = "localhost";
$username = "u302929136_mexstang";
$password = "mota67Mysql!";
$dbname = "u302929136_MiMarketaDb";
$adsTable= 'enAdsTable';

// Create connection to check if Email exists. If NO, do not change existing CLAVE.
$conn1 = new mysqli($servername, $username, $password, $dbname);
if ($conn1->connect_error) { die("Connection failed: " . $conn1->connect_error); }    
 
$sql1  = "SELECT * FROM $lasCuentasTable WHERE ecorreo ='$email'  ";
$result1 = $conn1->query($sql1);

$row1 = $result1->fetch_assoc(); 
$adUsername=$row1['userName'];
$adUserPic=$row1['userPic'];

// GENERATE A RANDOM CLAVE

$r1=rand();
$t1=time();
$clave=$r1.$t1;



if ($result1->num_rows == 0) 
{ 
mysqli_close($conn1);

$a=rand();
$adUsername = $a;



$r=rand();
$t=time();
$clave=$r.$t;

// INSERT A NEW RECORD with Temporary Username and Clave
$conn2 = new mysqli($servername, $username, $password, $dbname);
if ($conn2->connect_error) {die("Connection failed: " . $conn2->connect_error);}

$sql2 = "INSERT INTO $lasCuentasTable (username, ecorreo, clave, country, city , county, state)
VALUES ('$adUsername','$email', '$clave', '$country', '$city', '$county', '$state')";

    if ($conn2->query($sql2) === TRUE) 
    {
     echo "New record created successfully";
  
    } else {
    echo "Error: " . $sql2 . "<br>" . $conn2->error;
    }

$conn2->close();
}//END EMAIL CHECK

//START SWITCH TO SEE IF PIC 1 EXISTS

$picUrl1='noFoto';
$picUrl2='noFoto';
$picUrl3='noFoto';

//START PIC 1 SWITCH
$hidden_data1=$_POST['hidden_data1'];

switch ($hidden_data1)

{
    case 'noFoto':
        $file1 = 'noFoto';
        $picUrl1='noFoto';
       
        break;
     
     case '':
          $file1 = 'noFoto';
          $picUrl1='noFoto';
        
        break;
     
        
    default:
        $upload_dir = "mmAdPics/";
        $file1 = $upload_dir . rand()  . ".png";
        $picUrl1='https://www.mimarketa.com/mmMain/mmEnglish/'.$file1;
        
        $img1 = $_POST['hidden_data1'];
        $img1 = str_replace('data:image/png;base64,', '', $img1);
        $img1 = str_replace(' ', '+', $img1);
        $data1 = base64_decode($img1);


        $success = file_put_contents($file1, $data1);
        print $success ? $file1 : 'Unable to save the file1.';
           
}// END SWITCH FOR PIC 1


// OPEN CON1 AND INSERT THE RECORD. 
$con1 = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$con1) {  die('Could not connect: ' . mysqli_error($con1));}

$sql1 ="INSERT INTO `$adsTable`(`adTitle`,`adCategory`,`adPrice`,`adCountry`,`adCity`,`adCounty`,`adState`,`adUsername`,`adUserPic`,`adEmail`,`adDescription`,`adPicUrl1`,`adPicUrl2`,`adPicUrl3`,`videoLink`,`adClave`) VALUES ( '".$title."','".$cat."','".$price."','".$country."','".$city."','".$county."','".$state."','".$adUsername."','".$adUserPic."','".$email."','".$description."','".$picUrl1."','".$picUrl2."','".$picUrl3. "','".$videoLink. "' ,'".$clave. "')";

if ($con1->query($sql1) === TRUE) 
{ 
mysqli_close($con1);
}
else
{
echo 'Error. \n Please email us your AD. MiMarketa@MiMarketa.com';
mysqli_close($con1);
}






ini_set( 'display_errors', 1 );
error_reporting( E_ALL );

//USER EMAIL ALERT
$from = "mimarketa@mimarketa.com";
$to = $email;
$subject = "MyMarketa.com YOUR AD-".$title;

$message =$title."\n". "Hello.\nPlease click to finish sending your message to the seller."."\n".
"https://www.mimarketa.com/mmMain/mmEnglish/mmAdsPortalMessage.php?pw=".$clave."\n"."AD ID: ".$clave;
$headers = "From:" . $from;
mail($to,$subject,$message, $headers);

//MY COPY OF EMAIL ALERT
$from2 = "mimarketa@mimarketa.com";
$copy = "mexstang@mymarketa.com";
$subject2 = "ALERT!  MyMarketa.com Message sent!  ".$title.$to;
$message2 = "ALERT!  MyMarketa.com Message sent!  ".$title;
$headers2 = "From:" . $from2;

mail($copy,$subject2,$message2, $headers2);

// JAVASCRIPT TIMED REDIRECT TO THE HOME PAGE.

echo "<script>
alert('Please check your email and click on the LINK to finish sending this message to the seller. Thank You. '); 
window.location.replace('https://www.mimarketa.com/mmMain/mmEnglish/mmLiveAdsSingleAd.php?country=US&state=WA&county=Lewis&adId=1807&title=dell%20x2000&sessionId=noSessionId&picUrl1=https://www.mimarketa.com/mmMain/mmEnglish/mmAdPics/1578968390.png&category=ALL ' );
  </script>";
    
  


?>
