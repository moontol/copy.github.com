<?php 
if(file_exists("save/notebook.txt")){
	echo header("Location: save/notebook.txt");
}else{
	echo header("Location: index.php#notfound");
}
?>