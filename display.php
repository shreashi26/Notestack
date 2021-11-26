<?php

	$files = scandir('upload/upload2nd/DAA/');
sort($files); // this does the sorting
foreach($files as $file){
   echo'<a href="upload/upload2nd/DAA/'.$file.'">'.$file.'</a>';
}
//header('location:display.html');
?>