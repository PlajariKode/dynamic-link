<?php
$pages = ['dashboard', 'profile', 'pengaturan'];

for ($i=0; $i < count($pages); $i++) { 

	// cek file
	if (file_exists($pages[$i].".html")) {
		echo '<a href="'.$pages[$i].'.html">'.$pages[$i].'</a><br/>';
	} else {
		echo '<a href="404.html">'.$pages[$i].'</a><br/>';
	}
}
?>