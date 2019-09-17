<?php
$id=$_GET['id'];
$conn=mysqli_connect('localhost','root','','city');
$sql="DELETE FROM rent WHERE id=$id";
if(mysqli_query($conn,$sql))
{
 
	header("Location: all_rent.php");
}
else
{
	echo "Deletion is not posssible ";
}
?>