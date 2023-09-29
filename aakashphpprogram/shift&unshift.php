	
<?php	
	$fruit = ["mango","pear","pomegranate","papaya"];

		array_unshift($fruit,"banana","apple");
	
		echo "<pre>";
	 	print_r($fruit);
	 	echo "<pre>";
		
	$fruit = ["mango","pear","pomegranate","papaya"];

		array_shift($fruit);
	
		echo "<pre>";
		print_r($fruit);
		echo "<pre>";
?>