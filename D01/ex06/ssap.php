#!/usr/bin/php
<?php
function ft_zero($var){
	return ($var !== FALSE && $var !== NULL && $var !== '');
}

$i = 1;
$j = 0;
$l = 0;
while ($argv[$i] || $argv[$i] == "0")
{
	$tab = array_filter(explode(" ", $argv[$i]), 'ft_zero');
	$i++;
	sort($tab);
	$j = 0;
	while($tab[$j] || $tab[$j] == "0")
		$final[$l++]=$tab[$j++];
}
sort($final);
$i = 0;
while($final[$i] || $final[$i] == "0")
{
	print_r($final[$i++]);
	echo "\n";
}
?>
