<?php
function writeCommnet($array){	
	$comments=readCommnets();
	if(count($comments)){
		array_unshift($comments,$array);
	}else{
		$comments[]=$array;
	}
	$filename = "results.json";
	if (is_writable($filename)) {
		$fp = fopen($filename, 'w');
		fwrite($fp, json_encode($comments));
		fclose($fp);		
    }
	return json_encode($comments);
}

function readCommnets(){	
	$comments=array();
	$file = file_get_contents('./results.json', true);
	if(!empty($file)){
		$comments=json_decode($file);
		if(count($comments)){ 
			
		}else{
			$comments=array();
		}
	}
	return $comments;
}
