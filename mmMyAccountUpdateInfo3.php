<?php

$fieldName=$_GET['fieldName'];
$fieldValue=$_GET['fieldValue'];
$ecorreo=$_GET['ecorreo'];
$clave=$_GET['clave'];

$servername = "localhost";
$username = "u302929136_mexstang";
$password = "mota67Mysql!";
$dbname = "u302929136_MiMarketaDb";
$lasCuentasTable = 'enLasCuentasTable';

switch ($fieldName) 
{
    case "usernameBox" :
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) 
    { die("Connection failed: " . $conn->connect_error); }    
 
    $sql  = "SELECT * FROM $lasCuentasTable WHERE userName= '$fieldValue' ";
    $result = $conn->query($sql);

    if ($result->num_rows == TRUE )  
    { mysqli_close($conn);
    echo "SORRY. USERNAME TAKEN."; }
    else
    {
   mysqli_close($conn);  
   
        $con1 = mysqli_connect($servername, $username, $password, $dbname);
            // Check connection
    if (!$con1) {  die('Could not connect: ' . mysqli_error($con1));}

    $sql2 ="
    UPDATE $lasCuentasTable SET userName='$fieldValue'  WHERE ecorreo = '$ecorreo'  ";
    $result2 = $con1->query($sql2);

    mysqli_close($con1);

    echo "SUCCESS! USERNAME UPDATED.";
    }

    break;
    
    
    
    
    case "cityBox":
       
        $con1 = mysqli_connect($servername, $username, $password, $dbname);
            // Check connection
    if (!$con1) {  die('Could not connect: ' . mysqli_error($con1));}

    $sql2 ="
    UPDATE $lasCuentasTable SET city='$fieldValue'  WHERE ecorreo = '$ecorreo'  ";
    $result2 = $con1->query($sql2);

    mysqli_close($con1);

    echo "SUCCESS! CITY UPDATED.";
    
    break;
    
    
    case "clave":

       
        $con1 = mysqli_connect($servername, $username, $password, $dbname);
            // Check connection
    if (!$con1) {  die('Could not connect: ' . mysqli_error($con1));}

    $sql2 ="
    UPDATE $lasCuentasTable SET clave='$fieldValue'  WHERE ecorreo = '$ecorreo'  ";
    $result2 = $con1->query($sql2);

    mysqli_close($con1);

    echo "SUCCESS! CLAVE UPDATED.";

    break;
    
    case "clave2":

       
        $con1 = mysqli_connect($servername, $username, $password, $dbname);
            // Check connection
    if (!$con1) {  die('Could not connect: ' . mysqli_error($con1));}

    $sql2 ="
    UPDATE $lasCuentasTable SET clave='$fieldValue'  WHERE ecorreo = '$ecorreo'  ";
    $result2 = $con1->query($sql2);

    mysqli_close($con1);

    echo "https://www.mimarketa.com/mmMain/mmEnglish/mmMyAccountUpdateInfo.php?clave=".$fieldValue."&ecorreo=".$ecorreo ;

    break;
    
    
}


?>