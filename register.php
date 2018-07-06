<?php
$username=$_POST['username'];
$password=$_POST['password'];
$con=@mysql_connect("localhost","root","") or die(mysql_error());
$db=@mysql_select_db("clinic",$con)or die(mysql_error());
if(@mysql_num_rows(@mysql_query("select username from login where username='$username'"))){
	echo "<font color=red>Username exists, choose different username</font>";
}else
$str="insert into login values('$username','$password')";
$res=@mysql_query($str)or die(mysql_error());
if($res>=0)
{
echo'<br><br><b>Thank you for registeration !! <br>';
} 

?>
<html>
<?php header("location:index.html"); ?>
</html>