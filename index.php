<?php
session_start();
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
 <meta charset="utf-8"/>
    <title>ForthAssignment</title>
    <link rel="stylesheet" type="text/css" href="index.css">
</head>

<body>
<div id="container">
	<div id="header">
		<?php 
			if(isset($_SESSION['gold']))
				{
					$gold = $_SESSION['gold'];
				}
		else
				{
					$gold = 0;
				}
		?>
			<label>Your Golden</label><input type="text" name="your_gold" value ="<?php echo $gold; ?>" disabled>
	</div>
	<div id="main">
		<div id="form">
			<h2>Farm</h2>
			<h4>(earns 10-20 golds)</h4>
			<form action="process.php" method="post">
				<input type="hidden" name="building" value="farm" /><input type="submit" value="Find Gold!"/></form>
		</div>
		<div id="form">
			<h2>Cave</h2>
			<h4>(earns 5-10 golds)</h4>
				<form action="process.php" method="post">
				<input type="hidden" name="building" value="cave" /><input type="submit" value="Find Gold!"/></form>
		</div>
		<div id="form">
			<h2>House</h2>
			<h4>(earns 2-5 golds)</h4>
				<form action="process.php" method="post">
				<input type="hidden" name="building" value="house" /><input type="submit" value="Find Gold!"/></form>
		</div>
		<div id="form">
			<h2>Casino!</h2>
			<h4>(earns/takes 0-50 golds)</h4>
				<form action="process.php" method="post">
				<input type="hidden" name="building" value="casino!" /><input type="submit" value="Find Gold!"/></form>
		</div>
	</div>
	<h3>Activities</h3>
	<div id="footer">

    <?php
    echo $_SESSION['activities']."<br>";
    ?>

	</div>

    <form action="process.php" method="post">
				<input type="hidden" name="building" value="reset" /><input type="submit" value="Clear Session"/></form>

</div>

















