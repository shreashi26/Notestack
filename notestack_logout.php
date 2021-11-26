<?php
 session_start();
 session_destroy();
 echo "You have been successfully logged out!";
 header("Location: notestack_login.html");
 exit();
 ?>