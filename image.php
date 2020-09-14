<?php
require_once('index.php');
session_start();
	if(isset($_POST['RAM']))
	{
		echo "<img src='RAM.png' alt='Phone RAM'>";
	}
	elseif(isset($_POST['ROM']))
	{
		echo "<img src='ROM.png'>";
	}
	elseif(isset($_POST['PROFIT']))
	{
		echo "<img src='Profit.png'>";
	}
	elseif(isset($_POST['BATTERY']))
	{
		echo "<img src='Battery.png'>";
	}
	elseif(isset($_POST['REVENUE']))
	{
		echo "<img src='Revenue.png'>";
	}
	elseif(isset($_POST['SHIPMENT']))
	{
		echo "<img src='Shipment.png'>";
	}
	
	elseif(isset($_POST['FEATURES']))
	{
		echo "<img src='Features.png'>";
	}
	elseif(isset($_POST['CAMERA']))
	{
		echo "<img src='Camera.png'>";
	}
	else
	{
		echo "Not working today! Adios";
	}
?>
