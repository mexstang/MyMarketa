<?php
$urlBox=$_POST['urlBox'];

$country=$_POST['country'];
$county=$_POST['county'];
$state=$_POST['state'];
$city=$_POST['cityBox'];
$username2=$_POST['usernameBox'];
$ecorreo=$_POST['ecorreo'];
$clave=$_POST['clave'];
$usernameChanged=$_POST['usernameChanged'];
$servername = "localhost";
$username = "u302929136_mexstang";
$password = "mota67Mysql!";
$dbname = "u302929136_MiMarketaDb";
$lasCuentasTable = 'enLasCuentasTable';


if ($usernameChanged == 'YES' )
{

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) 
{ die("Connection failed: " . $conn->connect_error); }    
 
$sql5  = "SELECT * FROM $lasCuentasTable WHERE userName= '$username2' ";
$result5 = $conn->query($sql5);

if ($result5->num_rows == TRUE )  
{ print "<script> alert('USERNAME TAKEN.'); window.location.replace('$urlBox');  </script>"; }

}


//START SWITCH TO SEE IF PIC 1 EXISTS

$picUrl1='noFoto';

$hidden_data1=$_POST['hidden_data1'];

switch ($hidden_data1)

{
    case 'noPicUpdate':
  

$con1 = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$con1) {  die('Could not connect: ' . mysqli_error($con1));}


$sql1 ="
UPDATE $lasCuentasTable SET userName='$username2', city='$city'  WHERE ecorreo = '$ecorreo'  ";



if ($con1->query($sql1) === TRUE) 
{ 
mysqli_close($con1);



// JAVASCRIPT REDIRECT .

echo "<script>
alert('SUCCESS! Info Updated. '); 
window.location.replace('$urlBox');
 </script>";
    
}
else
{
echo 'Error: Please try again or email us. MiMarketa@MiMarketa.com';
mysqli_close($con1);
}

         break;
      
     default:  
          $file1 = 'noFoto';
           $picUrl1='https://www.mimarketa.com/mmMain/mmEnglish/mmAdPics/'.$username2.'.png';
        
        
// OPEN CON2 AND INSERT TEXT and PIC. 
$con2 = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$con2) {  die('Could not connect: ' . mysqli_error($con2));}

$sql2 ="
UPDATE $lasCuentasTable SET userName='$username2', userPic='$picUrl1', 
 city='$city'  WHERE ecorreo = '$ecorreo' 
";



if ($con2->query($sql2) === TRUE) 
{ 
mysqli_close($con2);


  
        $upload_dir = "mmAdPics/";
        $file1 = $upload_dir . $username2  . ".png";
        
        $img1 = $_POST['hidden_data1'];
        $img1 = str_replace('data:image/png;base64,', '', $img1);
        $img1 = str_replace(' ', '+', $img1);
        $data1 = base64_decode($img1);


        $success = file_put_contents($file1, $data1);
        print $success ? $file1 : 'Error with foto.';



ini_set( 'display_errors', 1 );
error_reporting( E_ALL );

//USER EMAIL ALERT
$from = "mimarketa@mimarketa.com";
$to = $ecorreo;
$subject = "MyMARKETA.com - YOUR INFO HAS BEEN UPDATED.";

$message = "HI.\nYOUR INFO WAS CHANGED."."\n".
"MiCuenta: https://www.mimarketa.com/mmMain/mmEnglish/mmMyAccount.php?country=".$country."&county=".$county."&state=".$state;
$headers = "From:" . $from;
mail($to,$subject,$message, $headers);


// JAVASCRIPT TIMED REDIRECT TO THE HOME PAGE.

echo "<script>
alert('SUCCESS! INFO & PIC UPDATED. '); 
window.location.replace('$urlBox');
 </script>";
    

}
else
{
echo 'ERROR: NOTHING CHANGED. \n PLEASE EMAIL US. MiMarketa@MiMarketa.com';
mysqli_close($con2);








// JAVASCRIPT TIMED REDIRECT TO THE HOME PAGE.

echo "<script>
alert('ERROR: PLEASE EMAIL US. MiMarketa@MiMarketa.com '); 
window.location.replace('$urlBox');
 </script>";
    
}
        
      
        break;
     
        
     
}// END SWITCH FOR PIC 1
 

?>