<html>
<head>
<title>MyMarketa.com - MyACCOUNT</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="shortcut icon" href="https://www.mimarketa.com/mmMain/mmEnglish/mmFotos/mmMastheadPic.png" alt="MyMARKETA.COM" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="mmMyAccount.css">
<script src="mmMyAccount.js"></script> 
</head>
<body  onload='detectMobile()'  >
<?php include 'mmHeader.php'; ?>

<?php
$country =$_GET['country'];
$county =$_GET['county'];
$state =$_GET['state'];

    print"<center>

    <div id='logOnBoxDiv' >"; 
print "
<form name='logInForm' id='logInForm' action = 'https://www.mimarketa.com/mmMain/mmEnglish/mmMyAccount1.php?' method = 'get'>

  <label for='ecorreoBox'>EMAIL</label><br/>
&nbsp;&nbsp;<input  id='ecorreoBox'   type='text' name='ecorreoBox' maxlength='80' size='30' required    onclick='clearBox(id)' value=''   >
 <br/><br/>
 <label for='claveBox'>PASSWORD</label> <br/>
&nbsp;&nbsp;<input  id='claveBox' type='text' name='claveBox' maxlength='20' size='30'   required      onclick='clearBox(id)' value=''  >
<br/>
<input  id='country' readonly  type='hidden' value=$country  name='country'> 
<input  id='county' readonly  type='hidden' value=$county  name='county'> 

<input  id='state' readonly  type='hidden' value=$state  name='state'> 
<br/>

<input type = 'submit' id='nextButton'  value='ENTER'     
style='width:200px;background:linear-gradient(to right, darkgreen, white,darkgreen  );font-size:35px;
border-radius: 15px;cursor:pointer;color:black;font-weight:bold;box-shadow: 1px 2px 4px gray;
text-shadow: 1px 2px 4px gray;'    onmouseover='myAccountColorOn(this)' onmouseout='myAccountColorOff(this)' >


<input type = 'button' id='resetPassword'  value='?'    title='RESET PASSWORD'  
style='width:50px;background:linear-gradient(to right, darkred, white,darkred  );font-size:25px;
border-radius: 15px;cursor:pointer;color:black;font-weight:bold;box-shadow: 1px 2px 4px gray;
text-shadow: 1px 2px 4px gray;'    onmouseover='myAccountColorOn(this)' onmouseout='myAccountColorOffRed(this)' onclick='resetPass2()'   >


  </form >

   </div > </center>
"; 
print "
<script>

</script> "; 
 

?>

</body>
</html>  
