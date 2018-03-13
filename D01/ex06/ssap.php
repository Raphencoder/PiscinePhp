#!/usr/bin/php
<?php
$i = 1;
$j = 0;
$l = 0;
if ($argc < 2)
	return (0);
while ($argv[$i])
{
	$tab = array_filter(explode(" ", $argv[$i]));
	$i++;
	sort($tab);
	$j = 0;
	while($tab[$j])
		$final[$l++]=$tab[$j++];
}
sort($final);
$i = 0;
while($final[$i])
{
	print_r($final[$i++]);
	echo "\n";
}
?>
