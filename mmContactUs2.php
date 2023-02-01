<?php

$emailBox=$_GET['emailBox'];
$messageBox=$_GET['messageBox'];


if ($messageBox!="" ) {
    
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );

$from = $emailBox;
$to = "mexstang@mymarketa.com";
$subject = "MiMarketa.com/mmEnglish HELP! ";

$message = $messageBox;

$headers = "From:" . $from;
mail($to,$subject,$message, $headers);

echo 'Success! Message sent.';

}




?>
