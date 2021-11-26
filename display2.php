<?php

	$files = scandir('upload/upload2nd/OOAD/');
sort($files); // this does the sorting
foreach($files as $file){
   echo'<a href="upload/upload2nd/OOAD/'.$file.'">'.$file.'</a>';
}
//header('location:display.html');
?>