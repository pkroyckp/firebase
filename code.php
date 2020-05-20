<?php
//Insert Data
session_start();
include('dbconfig.php');
if(isset($_POST['save']))
{
	$username=$_POST['name'];
	$email=$_POST['email'];
	$phoneno=$_POST['phoneno'];
	$data=[
	'username'=>$username,
	'email'=>$email,
	'phoneno'=>$phoneno
	];
	$ref="contact/";
	$postdata = $database->getReference($ref)->push($data);
}
if($postdata)
{
	$_SESSION['status']="Data Saved";
	header("Location:index.php");
}
else
{
		$_SESSION['status']="Data not Save";
	header("Location:index.php");
}
	?>
	
	
	<?php
	//Update Data
if(isset($_POST['update']))
{
	$username=$_POST['name'];
	$email=$_POST['email'];
	$phoneno=$_POST['phoneno'];
	$token=$_POST['token'];
	$data=[
	'username'=>$username,
	'email'=>$email,
	'phoneno'=>$phoneno
	];
	$ref="contact/".$token;
		$postdata = $database->getReference($ref)->update($data);
}
if($postdata)
{
	$_SESSION['status']="Data Updated";
	header("Location:index.php");
}
else
{
		$_SESSION['status']="Data not Updated";
	header("Location:index.php");
}
	?>
	
		<?php
		//Delete Data
if(isset($_POST['delete']))
{

	$token=$_POST['delete_key'];
	$ref="contact/".$token;
	$delete=$database->getReference($ref)->remove();
	
if($delete)
{
	$_SESSION['status']="Data is Deleted";
	header("Location:index.php");
}
else
{
		$_SESSION['status']="Data is not Deleted";
	header("Location:index.php");
}
}
	?>