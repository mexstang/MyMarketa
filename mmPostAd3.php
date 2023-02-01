<?php
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// STEP1 CAPTURE VARIABLES FROM URL
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
// STEP2 USE EMAIL-IF RECORD EXISTS,ASK FOR A CLAVE AND INSERT || NO-INSERT AND SET TO INACTIVE, SEND EMAIL CODE, ALERT USER TO CHECK EMAIL
$servername = "localhost";
$username = "u302929136_mexstang";
$password = "mota67Mysql!";
$dbname = "u302929136_MiMarketaDb";

// Create connection to check if Email exists. If NO, do not change existing CLAVE.
$con1 = new mysqli($servername, $username, $password, $dbname);
if ($con1->connect_error) { die("Connection failed: " . $con1->connect_error); }    
 
$sql1  = "SELECT * FROM enLasCuentasTable WHERE ecorreo ='$email'  ";
$result1 = $con1->query($sql1);
$row1 = $result1->fetch_assoc(); 
$adUsername=$row1['username'];

 
if ($result1->num_rows > 0) 
{ $userExists = 'doesExist'; }else { $userExists = 'doesNotExist'; } 
 
// STEP3 INSERT THE RECORD. +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
$adCode = rand();
$userfile1=$_FILES['userfile1']['name'];
$userfile2=$_FILES['userfile2']['name'];
$userfile3=$_FILES['userfile3']['name'];

if($userfile1 !="" ){$file1 =  rand()  . ".png"; $picUrl1='https://www.mimarketa.com/mmMain/mmEnglish/mmAdPics/'.$file1;}else{$file1='noFoto';$picUrl1='noFoto';}

if($userfile2 !="" ){$file2 =  rand()  . ".png"; $picUrl2='https://www.mimarketa.com/mmMain/mmEnglish/mmAdPics/'.$file2;}else{$file2='noFoto';$picUrl2='noFoto';}

if($userfile3 !="" ){$file3 =  rand()  . ".png"; $picUrl3='https://www.mimarketa.com/mmMain/mmEnglish/mmAdPics/'.$file3;}else{$file3='noFoto';$picUrl3='noFoto';}

//INSERT AD TEXT 
$sql2 ="INSERT INTO `enAdsTable`(`adCode`,`adTitle`,`adCategory`,`adPrice`,`adCountry`,`adCity`,`adCounty`,`adState`,`adUsername`,`adEmail`,`adDescription`,`adPicUrl1`,`adPicUrl2`,`adPicUrl3`,`videoLink`) VALUES ('".$adCode."','".$title."','".$cat."','".$price."','".$country."','".$city."','".$county."','".$state."','".$adUsername."','".$email."','".$description."','".$picUrl1."','".$picUrl2."','".$picUrl3. "' ,'".$videoLink. "' )";


// STEP4 PHOTO INSERT++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

if ($con1->query($sql2) === TRUE) 
{ 
   if ($picUrl1  != 'noFoto') 
   {
      function resize_image1($file,$max_resolution)
       {
        	if(file_exists($file))
        	{
    	    $original_image = imagecreatefromjpeg($file);

           	//resolution
    	    $original_width = imagesx($original_image);
    	    $original_height = imagesy($original_image);

    	    //try width first
    	    $ratio = $max_resolution / $original_width;
    	    $new_width = 250;
    	    $new_height = 300;
	
                //if that didn't work
    	        if($new_height > $max_resolution )
    	          {
    	         $ratio = $max_resolution / $original_height;
	              $new_height =300;
                	$new_width =  250;
	              }

                   if($original_image )
	                {
                    $new_image = imagecreatetruecolor($new_width,$new_height);
                imagecopyresampled($new_image,$original_image,0,0,0,0,$new_width,$new_height,$original_width,$original_height);
                     imagejpeg($new_image,$file,90);
	               }
             }
          }

        if ($_SERVER['REQUEST_METHOD'] == "POST") 
         {   
               if (isset ($_FILES['userfile1']) ) 
              {
         
             $picDir = "mmAdPics/"; 
             $newName =  $file1;
               move_uploaded_file($_FILES['userfile1']['tmp_name'], $picDir.$newName)   ;
               $file = $picDir.$newName;
               $picUrl1='https://www.mimarketa.com/mmMain/mmEnglish/mmAdPics/'.$newName;
               resize_image1($file,"300");
                }
         }
    }
    
     
   if ($picUrl2  != 'noFoto') 
   {
      function resize_image2($file,$max_resolution)
       {
        	if(file_exists($file))
        	{
    	    $original_image = imagecreatefromjpeg($file);

           	//resolution
    	    $original_width = imagesx($original_image);
    	    $original_height = imagesy($original_image);

    	    //try width first
    	    $ratio = $max_resolution / $original_width;
    	    $new_width = 250;
    	    $new_height = 300;
	
                //if that didn't work
    	        if($new_height > $max_resolution )
    	          {
    	         $ratio = $max_resolution / $original_height;
	              $new_height =200;
                	$new_width = 300 ;
	              }

                   if($original_image )
	                {
                    $new_image = imagecreatetruecolor($new_width,$new_height);
                imagecopyresampled($new_image,$original_image,0,0,0,0,$new_width,$new_height,$original_width,$original_height);
                     imagejpeg($new_image,$file,90);
	               }
             }
          }

        if ($_SERVER['REQUEST_METHOD'] == "POST") 
         {   
               if (isset ($_FILES['userfile2']) ) 
              {
         
             $picDir = "mmAdPics/"; 
             $newName =  $file2;
               move_uploaded_file($_FILES['userfile2']['tmp_name'], $picDir.$newName)   ;
               $file = $picDir.$newName;
               $picUrl2='https://www.mimarketa.com/mmMain/mmEnglish/mmAdPics/'.$newName;
               resize_image2($file,"300");
                }
         }
    } 
    
       
   if ($picUrl3  != 'noFoto') 
   {
      function resize_image3($file,$max_resolution)
       {
        	if(file_exists($file))
        	{
    	    $original_image = imagecreatefromjpeg($file);

           	//resolution
    	    $original_width = imagesx($original_image);
    	    $original_height = imagesy($original_image);

    	    //try width first
    	    $ratio = $max_resolution / $original_width;
    	    $new_width = 250;
    	    $new_height = 300;
	
                //if that didn't work
    	        if($new_height > $max_resolution )
    	          {
    	         $ratio = $max_resolution / $original_height;
	              $new_height =200;
                	$new_width = 300 ;
	              }

                   if($original_image )
	                {
                    $new_image = imagecreatetruecolor($new_width,$new_height);
                imagecopyresampled($new_image,$original_image,0,0,0,0,$new_width,$new_height,$original_width,$original_height);
                     imagejpeg($new_image,$file,90);
	               }
             }
          }

        if ($_SERVER['REQUEST_METHOD'] == "POST") 
         {   
               if (isset ($_FILES['userfile3']) ) 
              {
         
             $picDir = "mmAdPics/"; 
             $newName =  $file3;
             
               move_uploaded_file($_FILES['userfile3']['tmp_name'], $picDir.$newName)   ;
                
               $file = $picDir.$newName;
               $picUrl3='https://www.mimarketa.com/mmMain/mmEnglish/mmAdPics/'.$newName;
               resize_image3($file,"300");
                }
         }
    }
    
   
     
    
    
    
}

$con1->close();  
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
//  STEP 5  SEND EMAIL WITH ACTIVATION CODE TO NEW USERS ONLY.

 

 if ($userExists == 'doesNotExist' )
 {
     $adUsername= time().rand();  
     $clave = rand().time();  
     $cuantosAds = 1;  
 // INSERT A NEW RECORD with Temporary Username and Clave
$conn2 = new mysqli($servername, $username, $password, $dbname);
if ($conn2->connect_error) {die("Connection failed: " . $conn2->connect_error);}

$sql7 = "INSERT INTO enLasCuentasTable (username, ecorreo, clave, country ,  city , county, state, cuantosAds)
VALUES ('$adUsername','$email', '$clave', '$country', '$city', '$county', '$state', '$cuantosAds')";

    if ($conn2->query($sql7) === TRUE) 
    {
     echo "New record created successfully";
  
    } else {
    echo "Error: " . $sql7 . "<br>" . $conn2->error;
    }

$conn2->close();
   
      
       
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );

//USER EMAIL ALERT
$from = "mimarketa@mimarketa.com";
$to = $email;
$subject = "MyMarketa.com YOUR AD!";

$message = "Hello. Please Log Into ~MyAccount~ to activate your AD."."\n".
" https://www.mimarketa.com/mmMain/mmEnglish/mmMyAccount.php?country=".$country."&county=".$county."&state=".$state."\n"."CLAVE: ".$clave;
$headers = "From:" . $from;
mail($to,$subject,$message, $headers);

//MY COPY OF EMAIL ALERT
$from2 = "mimarketa@mimarketa.com";
$copy = "mexstang@tds.net";
$subject2 = "ALERT!  MyMarketa.com AD has been added!  ".$title.$adCode.$to;
$message2 = "ALERT!  MyMarketa.com AD has been added!  ".$title.$adCode;
$headers2 = "From:" . $from2;

mail($copy,$subject2,$message2, $headers2);
 
}  
echo "<script>alert('SUCCESS! PLEASE CHECK YOUR EMAIL OR LOG INTO ~MyAccount~ TO ACTIVATE YOUR AD. THANK YOU.') ;

window.location.replace('https://www.mimarketa.com/mmMain/mmEnglish/mmMyAccount.php?county=');
</script>";


 
header('Location: https://www.mimarketa.com/mmMain/mmEnglish/mmMyAccount.php?county=');  



?>
