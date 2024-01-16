<?php
   $conn = mysqli_connect('localhost','root','','student');
   if(isset($_POST['submit'])){
   $sname=$_POST['sname'];
   $sadd= $_POST['sadd'];
   $scon= $_POST['scon'];


if(mysqli_query($conn,"insert into stu_detail(sname,address,contact) values('$sname','$sadd',$scon)"))
{
          echo '<script>alert("Record Inserted");</script>';

}
   else{
	  echo '<script>alert("Error 502 Record not submitted");</script>';	
       }
}
if(isset($_POST['update'])){
   $sid=$_POST['sid'];
   $sname=$_POST['sname'];
   $sadd= $_POST['sadd'];
   $scon= $_POST['scon'];

$sql="update stu_detail set sname='$_POST[sname]',address='$_POST[sadd]',contact=$_POST[scon] where sid=$_POST[sid] ";
		                  
if(mysqli_query($conn,$sql))
{
          echo '<script>alert("Record updated");</script>';

}
   else{
	  echo '<script>alert("Error 502 Record not updated");</script>';	
       }
}
if(isset($_POST['del'])){
   

$sql="delete from stu_detail where sid='$_POST[sid]'";
		                  
if(mysqli_query($conn,$sql))
{
          echo '<script>alert("Record Deleted");</script>';

}
   else{
	  echo '<script>alert("Error 502 Record Not Deleted");</script>';	
       }
}













?>
<html>
<head><title>Connectivity</title></head>
<body>
<form action="" method="POST">
<center><table border="2">
	<tr><td>Student id    ::</td><td><input type="text" name="sid"></td></tr>
      <tr><td>Student Name    ::</td><td><input type="text" name="sname"></td></tr>
      <tr><td>Student Address ::</td><td><input type="text" name="sadd"></td></tr>
      <tr><td>Student Contact ::</td><td><input type="text" name="scon"></td></tr>
       <tr><th colspan="2"><input type="submit" name="submit" value="Save"><input type="submit" name="update" value="Update">
<input type="submit" name="del" value="Remove"></td></tr>


</table>

</form>
</body>
</html>

<html>
<head><title>REPORT</title></head>
<body>

<table border="1">  
<tr>	<td>STUDENT ID</td>
	<td>STUDENT NAME</td>
	<td>ADDRESS</td>
	<td>CONTACT</td>
</tr>
<?php
$query =mysqli_query($conn,"Select * from stu_detail ");
while($result=mysqli_fetch_array($query))

	{


?>
<tr>	<td><?php echo $result['sid'];?></td>
	<td><?php echo $result['sname'];?></td>
	<td><?php echo $result['address'];?></td>
	<td><?php echo $result['contact'];?></td>
</tr>
<?php

	}
?>
</table>

</body>
</html>