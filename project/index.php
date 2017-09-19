<?php
header("Vary: User-Agent, Accept");
?>

<?php 
$diceroll = rand(1,20); 
?>

<!DOCTYPE html>
<html lang="en">
	<head>
    	<title>You rolled a <?php echo($diceroll) ?></title>
	</head>
	<body>
		<img src = 'img/<?php echo($diceroll) ?>.png'>
		<a href="github.com/rcrimp/D20-roller">Github</a>
	</body>
</html>