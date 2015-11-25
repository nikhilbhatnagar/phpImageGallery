<?php
$allowed_types=array('jpg','jpeg','gif','png');
$file_parts=array();
$i=1;

function listFolder($dir){
	global $i;
	$ffs = scandir($dir);
	foreach($ffs as $ff){
		if($ff != '.' && $ff != '..'){
			if(is_dir($dir.'/'.$ff)) {
				echo '		<tr>';
				echo '			<td>' .$i++ .'</td>';
				echo '			<td><a href="showPics.php?path=' .$dir.'/'.$ff .'" >' .$ff .'</a></td>';
				echo '		</tr>';

				listFolder($dir.'/'.$ff);
			}
		}
	}
}

function showFiles($dir_handle) {
	global $allowed_types;
	global $file_parts;

	$ext='';
	$title='';
	$i=0;

	while ($file = readdir($dir_handle)) {
		if($file=='.' || $file == '..') continue;

		$file_parts = explode('.',$file);
		$ext = strtolower(array_pop($file_parts));

		$title = implode('.',$file_parts);
		$title = htmlspecialchars($title);

		$nomargin='';

		if(in_array($ext, $allowed_types)) {
			if(($i+1)%4==0) $nomargin='nomargin';

			echo '
		<div class="pic '.$nomargin.'" style="background:url('.$dir_handle.'/'.$file.') no-repeat 50% 50%;">
		<a href="'.$dir_handle.'/'.$file.'" title="'.$title.'" target="_blank">'.$title.'</a>
		</div>';

			$i++;
		}
	}
}

?>