<?php
require_once('index.php');
session_start();
	//if the register button is clickd
	if(isset($_POST['Login'])) 
	{
		if(empty($_POST['username']) || empty($_POST['password']))
		{
			header("location:register.php?Empty= Please fill in the blanks");
		}
		else
		{
			$query="select * from users where username='".$_POST['username']."'and password='".$_POST['password']."'";
			$result=mysqli_query($con,$query);

			if(mysqli_fetch_assoc($result))
			{
				$_SESSION['user']=$_POST['username'];
				header("location:welcome.php");
			}
			else
			{
				header("location:register.php?Invalid= Please enter correct username and password");
			}
		}
	}
	else
	{
		echo "Not working today! Adios";
	}
	
?>