<?php
 
$conn=new mysqli('localhost','root','','notestackdb')


$myuser=$_POST['uname'];
$mypassword=$_POST['pwd'];

$sql="SELECT * FROM notestacktable WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($conn,$sql);

$count=mysql_num_rows($result);

if($count==1){
	$row=mysql_fetch_row($result);
 	$sname=$row[0];
	print("<h1>Welcome, $sname!<br></h1>");
	echo "<h2>Login Success!!!</h2>";
	
	if (isset($_POST['remuser'])){
		setcookie("uname",$myuser,time()+60*60*24);
		setcookie("Pwd",$mypassword,time()+60*60*24);
	}
	else
	{
		setcookie("UName","",time()-5);
		setcookie("Pwd","",time()-5);
	}

//	header("location:login_success.html");
}
else {
	echo "<h2>Login Failed!!!</h2>";
	//header("location:login_failed.php");
}
?>
