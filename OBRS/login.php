<?php
include "include.php";

/*if($_POST)
	echo "exists";*/
	$pass=sha1($_POST["Password"]);
//$sel="SELECT * FROM `user` where Username='".$_POST["Username"]."' and Password='".$_POST["Password"]."'";
$sel="SELECT * FROM `user` where Username='".$_POST["Username"]."' and Password='$pass'";

$result=mysqli_query($conn,$sel) or die(mysql_error());

if(mysqli_num_rows($result) == 0)
{
	session_start();
	$_SESSION['error'] = 'Invalid username or password';
  	header('Location: index4.php');
	//echo "<h3>Invalid username and password combination<br>Go to <a href='home.php'>homepage</a></h3>";
}

//else
	//echo "welcome"
else
{
	//echo "welcome";
	session_start();
	$_SESSION['user']=$_POST["Username"];
echo '<script language="javascript">document.location.href="generic.php"</script>';
}


?>
