<html>
<head>
<title>

</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<!--CSS header part-->
</head>
<body>

<form action="code.php" method="post">

Name<br>
    <input type="type"  name="name" value="" /><br>
Email<br>
    <input type="email"  name="email" value="" /><br>
  Phone Number<br>
    <input type="number"  name="phoneno" value="" /><br>

  


  <button type="submit"  name="save">Submit</button>
</form>
<button type="submit"><a href="display.php">Display</a></button>

<!--JAVA SCRIPT header part-->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<?php
$status="";
session_start();
$status= $status.$_SESSION['status'];
echo $status;
$status="";
?>

</body>
</html>
