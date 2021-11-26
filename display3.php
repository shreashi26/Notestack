<?php

	$files = scandir('upload/upload2nd/POC/');
sort($files); // this does the sorting
foreach($files as $file){
   echo'<a href="upload/upload2nd/POC/'.$file.'">'.$file.'</a>';
}
//header('location:display.html');
?>