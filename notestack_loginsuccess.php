<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
body {
text-align: center;
margin: 0;}

ul.topnav {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

ul.topnav li {float: left;}

ul.topnav li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

ul.topnav li a:hover:not(.active) {background-color: #111;}

ul.topnav li a.active {background-color: #4CAF50;}

ul.topnav li.right {float: right;}

@media screen and (max-width: 600px){
    ul.topnav li.right, 
    ul.topnav li {float: none;}
}

body {
    background-image: url("images/shr.jpg");
    background-repeat: no-repeat;
	
	
}

.foo{
background-color:rgba(255,255,255,0.8);
}

.buttonEx{
	background-color: #FA8072;
    color: white;
    padding: 28px 40px;
    margin: 24px 0;
    border: none;
    cursor: pointer;
    border-radius: 100%;
}
.buttonEx:hover{
	color: white;
	background: #008080;
}


</style>
<div class="foo">
<body>

<ul class="topnav">
  <li class="right"><a href="notestack_logout.php">LOGOUT</a></li>
  <li class="right"><a href="notestack_contact.html">CONTACT US</a></li>
  <li class="right"><a href="notestack_registration.html">REGISTER</a></li>
  <li class="right"><a href="notestack_login.html">LOGIN</a></li>
  
</ul>
<form method="POST" align="center" action="notestack_2ndyear.html">
		<h1 align="center">Welcome <?php echo $_SESSION['username']; ?> !</h1>
		<h1 align="center">You are successfully logged into your NoteStack account!</h1>
		<h2 align="center">Please choose your year for notes:</h2>
		<button class="buttonEx" type="submit" value="Submit"><font size="4">2nd Year</font></button>
	</form>
	<br>
	<form method="POST" align="center" action="notestack_3rdyear.html">
		<button class="buttonEx" type="submit" value="Submit"><font size="4">3rd Year</font></button>
	</form>
	<br>
	<form method="POST" align="center" action="notestack_4thyear.html">
		<button class="buttonEx" type="submit" value="Submit"><font size="4">4th Year</font></button>
	</form>
	<br>
	<br>
	<br>
	<br>

</body>
</div>
</html>



