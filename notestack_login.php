<?php
	include 'config.php';
	session_start();
	$uname=$_POST["txtusername"];
	$pwd=$_POST["psw"];
	$sql="SELECT * FROM notestacktable WHERE username='$uname' AND password='$pwd'";
	if($result=$conn->query($sql)){
		$count=$result->num_rows;
		if($count==1){
			$row=$result->fetch_assoc();
			if(isset($_POST["rememberme"])){
				setcookie("txtusername","$uname",time()+60*60*24);
				setcookie("psw","$pwd",time()+60*60*24);
				setcookie("logintime",date("d/m/y, h:i:sa"),time()+60*60*24);
			}
			else{
				setcookie("uname","",time()-5);
				setcookie("pwd","",time()-5);
				setcookie("logintime","",time()-5);
				
			}
			$_SESSION['username'] =$_POST['txtusername'];
			//echo $_SESSION['username'];
			header("location:notestack_loginsuccess.php");
		}
		else{
			echo "<h2>Username and Password invalid</h2>";
		}
		
		ob_flush();
		$conn->close();
	}
?>
