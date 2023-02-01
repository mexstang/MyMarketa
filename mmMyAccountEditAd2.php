<?php
$cat=$_POST['categoria'];
$title=$_POST['title'];
$description=$_POST['description'];
$email=$_POST['ecorreo'];
$price=$_POST['price'];
$city=$_POST['ciudad'];
$country=$_POST['country'];
$county=$_POST['county'];
$state=$_POST['state'];
$videoLink=$_POST['videoLink'];

// PRINT HIDDEN LOCATION FIELDS
print "
<input id='countryBox2' readonly  type='hidden' value='$country' >
<input id='city' readonly  type='hidden' value='$city' >
<input id='passCounty' readonly  type='hidden' value='$county' > 
<input id='passState' readonly  type='hidden' value='$state' > ";

$servername = "localhost";
$username = "u302929136_mexstang";
$password = "mota67Mysql!";
$dbname = "u302929136_MiMarketaDb";
$adsTable= 'enAdsTable';
$lasCuentasTable= 'enLasCuentasTable';

// Create connection to check if Email exists. If NO, do not change existing CLAVE.
$conn1 = new mysqli($servername, $username, $password, $dbname);
if ($conn1->connect_error) { die("Connection failed: " . $conn1->connect_error); }    
 
$sql1  = "SELECT * FROM $lasCuentasTable WHERE ecorreo ='$email'  ";
$result1 = $conn1->query($sql1);

$row1 = $result1->fetch_assoc(); 
$adUsername=$row1['username'];
$adUserPic=$row1['userPic'];

// GENERATE A RANDOM CLAVE
$clave='';

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


//START PIC 2 SWITCH
$upload_dir = "mmAdPics/";

$hidden_data2=$_POST['hidden_data2'];
$file2 = $upload_dir . rand()  . ".png";
switch ($hidden_data2)

{
    case 'noFoto':
        $file2 = 'noFoto';
        $picUrl2='noFoto';
       
        break;
        
     case '':
          $file2 = 'noFoto';
        $picUrl2='noFoto';
        
        break;
     
        
    
    default:
        $picUrl2='https://www.mimarketa.com/mmMain/mmEnglish/'.$file2;
        $img2 = $_POST['hidden_data2'];
        $img2 = str_replace('data:image/png;base64,', '', $img2);
        $img2 = str_replace(' ', '+', $img2);
        $data2 = base64_decode($img2);

        $success = file_put_contents($file2, $data2);
        print $success ? $file2 : 'Unable to save the file2.';
         
}// END SWITCH FOR PIC 2



//START PIC 3 SWITCH
$upload_dir = "mmAdPics/";

$hidden_data3=$_POST['hidden_data3'];
$file3 = $upload_dir . rand()  . ".png";
switch ($hidden_data3)

{
    case 'noFoto':
        $file3 = 'noFoto';
        $picUrl3='noFoto';
       
        break;
       
     case '':
          $file3 = 'noFoto';
        $picUrl3='noFoto';
        
        break;
     
        
     
    default:
        
        $picUrl3='https://www.mimarketa.com/mmMain/mmEnglish/'.$file3;
        $img3 = $_POST['hidden_data3'];
        $img3 = str_replace('data:image/png;base64,', '', $img3);
        $img3 = str_replace(' ', '+', $img3);
        $data3 = base64_decode($img3);

        $success = file_put_contents($file3, $data3);
        print $success ? $file3 : 'Unable to save the file3.';
         
}// END SWITCH FOR PIC 3




// OPEN CON1 AND INSERT THE RECORD. 
$con1 = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$con1) {  die('Could not connect: ' . mysqli_error($con1));}

$sql1 ="INSERT INTO `$adsTable`(`adTitle`,`adCategory`,`adPrice`,`adCountry`,`adCity`,`adCounty`,`adState`,`adUsername`,`adUserPic`,`adEmail`,`adDescription`,`adPicUrl1`,`adPicUrl2`,`adPicUrl3`,`videoLink`) VALUES ( '".$title."','".$cat."','".$price."','".$country."','".$city."','".$county."','".$state."','".$adUsername."','".$adUserPic."','".$email."','".$description."','".$picUrl1."','".$picUrl2."','".$picUrl3. "','".$videoLink. "' )";

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
$subject = "MyMarketa.com YOUR AD!";

$message = "Hello.\nPlease log into 'MyACCOUNT' to activate your AD."."\n".
"https://www.mimarketa.com/mmMain/mmEnglish/mmMyAccount.php?country=".$country."&state=".$state."&county=".$county."\n"."CLAVE: ".$clave;
$headers = "From:" . $from;
mail($to,$subject,$message, $headers);

//MY COPY OF EMAIL ALERT
$from2 = "mimarketa@mimarketa.com";
$copy = "mexstang@tds.net";
$subject2 = "ALERT!  MyMarketa.com AD has been added!  ".$title.$clave.$to;
$message2 = "ALERT!  MyMarketa.com AD has been added!  ".$title.$clave;
$headers2 = "From:" . $from2;

mail($copy,$subject2,$message2, $headers2);

// JAVASCRIPT TIMED REDIRECT TO THE HOME PAGE.

echo "<script>
alert('SUCCESS! Please check your email to activate your AD. '); 
window.location.replace('https://www.mimarketa.com/mmMain/mmEnglish/mmEnglish.php?country=".$country."&county=".$county."&state=".$state."');  </script>";
    
  


?>
