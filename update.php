<html>
<head>
<title>

</title>
<!--CSS header part-->
</head>
<?php
//Database connection link 
include('dbconfig.php');
//Receive data id from edit
$token=$_GET['token']; 
$ref="contact/";
$getdata= $database->getReference($ref)->getChild($token)->getValue();
?>
<body>
<form action="code.php" method="post">
 <input type="hidden"  name="token" value="<?php echo $token;?>" />
Name<br>
    <input type="type"  name="name" value="<?php echo $getdata['username'];?>" /><br>
Email<br>
    <input type="email"  name="email" value="<?php echo $getdata['email'];?>" /><br>
  Phone Number<br>
    <input type="number"  name="phoneno" value="<?php echo $getdata['phoneno'];?>" /><br>

  


  <button type="submit"  name="update">Update</button>
</form>