<?php
$urlBox=$_POST['urlBox'];

$country=$_POST['country'];
$county=$_POST['county'];
$state=$_POST['state'];
$city=$_POST['cityBox'];
$username2=$_POST['usernameBox'];
$ecorreo=$_POST['ecorreo'];
$clave=$_POST['clave'];

$servername = "localhost";
$username = "u302929136_mexstang";
$password = "mota67Mysql!";
$dbname = "u302929136_MiMarketaDb";
$lasCuentasTable = 'enLasCuentasTable';


//START SWITCH TO SEE IF PIC 1 EXISTS

$picUrl1='noFoto';

$hidden_data1=$_POST['hidden_data1'];
$t=time();
  $file1 = 'noFoto';
           $picUrl1='https://www.mimarketa.com/mmMain/mmEnglish/mmAdPics/'.$username2.$t.'.png';
        
        
// OPEN CON2 AND INSERT TEXT and PIC. 
$con2 = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$con2) {  die('Could not connect: ' . mysqli_error($con2));}

$sql2 ="
INSERT INTO $lasCuentasTable (`userName`,`userPic`,`ecorreo`,`clave`,`country`,`state`,`county`,`city` ) VALUES ( '".$username2."','".$picUrl1."','".$ecorreo."','".$clave."','".$country."','".$state."','".$county."','".$city."' )"; 




if ($con2->query($sql2) === TRUE) 
{ 
mysqli_close($con2);


  
        $upload_dir = "mmAdPics/";
        $file1 = $upload_dir . $username2  .$t. ".png";
        
        $img1 = $_POST['hidden_data1'];
        $img1 = str_replace('data:image/png;base64,', '', $img1);
        $img1 = str_replace(' ', '+', $img1);
        $data1 = base64_decode($img1);


        $success = file_put_contents($file1, $data1);
        print $success ? $file1 : 'ERROR WITH THE FOTO.';



ini_set( 'display_errors', 1 );
error_reporting( E_ALL );

//USER EMAIL ALERT
$from = "mimarketa@mimarketa.com";
$to = $ecorreo;
$subject = "MyMARKETA.com - YOUR INFO HAS BEEN UPDATED.";

$message = "HI.\nYOUR INFO WAS CHANGED."."\n".
"MyACCOUNT: https://www.mimarketa.com/mmMain/mmEnglish/mmMyAccount.php?country=".$country."&county=".$county."&state=".$state;
$headers = "From:" . $from;
mail($to,$subject,$message, $headers);


// JAVASCRIPT TIMED REDIRECT TO THE HOME PAGE.

echo "<script>
alert('SUCCESS! INFO & PIC UPDATED. '); 
window.location.replace('https://www.mimarketa.com/mmMain/mmEnglish/mmMyAccount1.php?ecorreoBox=".$ecorreo."&claveBox=".$clave."&country=".$country."&county=".$county."&state=".$state." ');
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
        
      
        

?>