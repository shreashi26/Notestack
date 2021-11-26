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
</style>
<div class="foo">
<body align="center">

<ul class="topnav">
  <li class="right"><a href="notestack_logout.php">LOGOUT</a></li>
  <li class="right"><a href="notestack_contact.html">CONTACT US</a></li>
  <li class="right"><a href="notestack_registration.html">REGISTER</a></li>
  <li class="right"><a href="notestack_login.html">LOGIN</a></li>
  
</ul>
<?php

	$files = scandir('upload/upload3rd/PYTHON/');
sort($files); // this does the sorting
foreach($files as $file){
   echo nl2br('<a href="upload/upload3rd/PYTHON/'.$file.'">'.$file.'</a>');
   echo nl2br("\n",false);
}
//header('location:display.html');
?>
</div>
</body>
</html>