<?php


	$a = array("apple","mango","banana","orange");
	/*echo in_array("ngo",$a)*/

	if(array_search("mango",$a)){
		echo "find";
	}else{
		echo "does not find";
	}
?>