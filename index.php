<?php

	$con=mysqli_connect('localhost','root','','login');
	
	if(!$con)
	{
		die('Please check your connection'.mysql_error());
	}

?>