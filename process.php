<?php
	session_start();	
	$building=$_POST['building'];
	$gold=$_SESSION['gold'];
	if(strcmp($building, "farm"))
	{
		$gold = $gold + rand(10,20);
		$activities = "<p id='green'>You entered a " . $building . " and earned" . $gold . " gold". time() . "</p>";	
	}
	elseif(strcmp($building, "cave"))
	{
		$gold = $gold + rand(5,10);
		$activities = "<p id='green'>You entered a " . $building . " and earned" . $gold . " gold". time() . "</p>";	
	}
	elseif(strcmp($building, "house"))
	{
		$gold = $gold + rand(2,5);
		$activities = "<p id='green'>You entered a " . $building . " and earned" . $gold . " gold". time() . "</p>";	
	}
	elseif(strcmp($building, "casino"))
	{
		$casino_rand = rand(50,150)-100;
		$classId = "green";
		if ($casino_rand < 0) 
		{
			$classId = "red";
		}
		$gold = $gold + $casino_rand;
		$activities = "<p id='" . $classId . "'> You entered a " . $building . " and earned" . $gold . " gold". time() . "</p>";	
	}
	elseif(strcmp($building, "reset"))
	{
		session_destroy();
		header('location: index.php');
	}
	$_SESSION['gold'] = $gold;	
		if(isset($_SESSION['activities']))
				{
					$_SESSION['activities']=$_SESSION['activities'] . $activities;
				}
		else
				{
				$_SESSION['activities'] = $activities;	
				}
	header('location: index.php');
?>