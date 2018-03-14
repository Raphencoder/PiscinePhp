#!/usr/bin/php
<?php
if ($argc < 2)
	return (0);
unset($argv[0]);
$new = trim($argv[1]);
$tab = array_filter(explode(" ", $new));
$first = " ".$tab[0];
unset ($tab[0]);
$final = implode(" ", $tab);
$final .= $first;
echo "$final\n";
?>
