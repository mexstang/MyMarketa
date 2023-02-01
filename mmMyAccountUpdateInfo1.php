<?php

$newPicUrl=$_POST['newPicUrl'];
$ecorreo=$_POST['ecorreo'];

$servername = "localhost";
$username = "u302929136_mexstang";
$password = "mota67Mysql!";
$dbname = "u302929136_MiMarketaDb";
 
 
        
        $upload_dir = "mmAdPics/";
        $file1 = $upload_dir . rand()  . ".png";
        
        
        $img1 = $_POST['newPicUrl'];
        $img1 = str_replace('data:image/png;base64,', '', $img1);
        $img1 = str_replace(' ', '+', $img1);
        $data1 = base64_decode($img1);


        $success = file_put_contents($file1, $data1);
        print $success ? $file1 : 'Unable to save the file1.';
           



?>

