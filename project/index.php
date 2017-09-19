<?php 
$timestamp = time();
//header or readfile ??
//echo('Location: roll.php?fbrefresh=' . $timestamp);
header('Location: roll.php?fbrefresh='.$timestamp);
?>

