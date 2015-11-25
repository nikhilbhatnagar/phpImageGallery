<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bhatnagar's Family Pictures</title>
<link rel="stylesheet" type="text/css" href="lightbox/css/jquery.lightbox-0.5.css" />
<link rel="stylesheet" type="text/css" href="gallery.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="lightbox/js/jquery.lightbox-0.5.pack.js"></script>
<script type="text/javascript" src="script.js"></script>

</head>

<body>

<div id="container">

<div id="heading">
<h1>Family Pictures</h1>
</div>

<div id="gallery">

<?php
// This page will list all the folders (gallery) only. No image
// Recomemded folder structure
/*
 * Images should be inside APACHE
 * 
 * Pictures
 * 		Folder1
 * 			Image1
 * 			Image2
 * 		Folder2
 * 			Image1
 * 		Folder3
 * 			Image1
 * */

include 'listFileFolder.php';

//$directory = '/home/hduser/Pictures';
$directory = 'gallery';

echo '<table style="width: 50%;">';
echo '	<thead>';
echo '		<tr>';
echo '			<td>#</td>';
echo '			<td>Album Name</td>';
echo '		</tr>';
echo '		<tr>';
echo '			<td>&nbsp;</td>';
echo '			<td>&nbsp;</td>';
echo '		</tr>';

echo '	</thead>';
echo '	<tbody>';

	listFolder($directory);

echo '	</tbody>';
echo '</table>';

?>
	<div class="clear"></div>
	</div>

	<div id="footer">
	<h2>Bhatnagar's Family Pictures</h2>
	</div>
</div>
</body>
</html>
