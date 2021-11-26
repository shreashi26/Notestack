<?php

	$files = scandir('upload/upload2nd/COA/');
sort($files); // this does the sorting
foreach($files as $file){
   echo'<a href="upload/upload2nd/COA/'.$file.'">'.$file.'</a>';
}
//header('location:display.html');
?>