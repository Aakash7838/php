<?php
	$fruit = ['grapes','apple','pear',1=>'guvava'];
	$veggie = ['brinjal','pumpkin'];
	
	$mix = array_replace($fruit,$veggie);
	echo "<pre>";
	print_r($mix);
	echo "<pre>";
?> 