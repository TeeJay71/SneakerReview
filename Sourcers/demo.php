<?php 
	$pattern = "/((?=.+\d)(?=.+[a-z])(?=.+[A-Z])(?=.+\W).{8,15})/";
	$str = "aasgf13DGF_";

	if (preg_match($pattern,$str)) {
		echo 'Password hop le';
	}else{
		echo 'Password ko hop le';
	}
?> 