<html>
<head>
<title>

</title>
<table border="3">
<tr>
<th>Name
<th>Email
<th>Phone Number
<th>Edit
<th>Delete
</tr>
<?php
//Database connection link 
include('dbconfig.php');
//ref means Table Name
$ref="contact/";
//fatchdata variable for receive data
$fatchdata=$database->getReference($ref)->getValue();
if($fatchdata > 0)
{
foreach($fatchdata as $key => $row)
{
?>
<tr>
<td><?php echo $row['username'];?>
<td><?php echo $row['email'];?>
<td><?php echo $row['phoneno'];?>
<!-- $key is unique data id-->
<td> <a href="update.php?token=<?php echo $key; ?>">Edit</a>
<td>
<form action="code.php" method="post">
<input type="hidden" name="delete_key" value="<?php echo $key; ?>" /> 
<button type="submit" name="delete"> Delete </button> 
</form>
</tr>

<?php
}} 
?>
</table>
</head>
<body>


</body>
</html>