<?php
	$count = file_get_contents("count.txt");
	if ($count != NULL) {
		file_put_contents("count.txt",$count + 1);
		echo json_encode(array('count'=>$count+1));
	}
?>
