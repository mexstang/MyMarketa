<?php
$username2=$_GET['username'];
$ecorreo=$_GET['ecorreo'];
$clave=$_GET['clave'];

$servername = "localhost";
$username = "u302929136_mexstang";
$password = "mota67Mysql!";
$dbname = "u302929136_MiMarketaDb";
$lasCuentasTable = 'enLasCuentasTable';

$conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) 
    { die("Connection failed: " . $conn->connect_error); }    
 
    $sql  = "SELECT * FROM $lasCuentasTable WHERE userName= '$username2' ";
    $result = $conn->query($sql);

    if ($result->num_rows == TRUE )  
    { mysqli_close($conn);
    echo "SORRY. USERNAME TAKEN."; }
    else
    {echo "USERNAME ACCEPTED.";}
  
?>