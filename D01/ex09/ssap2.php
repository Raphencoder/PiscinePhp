#!/usr/bin/php
<?php
function ft_zero($var){
	return ($var !== FALSE && $var !== NULL && $var !== '');
}

function ft_finalfilter($first, $second, $ref) {
	$a = 0;
	$nb = -1;
	$num = -1;

while ($first[$a] && $second[$a] || ($first[$a] === '#' || $second[$a] === '#'))
{
$nb = array_search($first[$a], $ref);
$num = array_search($second[$a], $ref);
if ($nb === FALSE || $num === FALSE)
{
	if ($nb === FALSE)
	{
		$clone = strtolower($first[$a]);
		$nb = array_search($clone, $ref);
	}
	if ($num === FALSE) {
		$clone = strtolower($second[$a]);
		$num = array_search($clone, $ref);
	}
}
if ($nb != $num) {
	if ($num > $nb)
		return (1);
	else
		return (-1);}
$a++;
}
if (!$first[$a] && !$second[$a])
	return (0);
if (!$first[$a] && !$first[$a-1])
	return (1);
if (!$second[$a] && $second[$a-1])
	return (-1);
return (0);
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
$ref = array_filter(explode(" ", "a b c d e f g h i j k l m n o p q r s t u v w x y z 0 1 2 3 4 5 6 7 8 9 ! \" # $ % & ' ( ) * + , - . / : ; < = > ? @ [ \ ] ^ _ ` { | } ~"), 'ft_zero');
$n = 0;
$l = $l * 2;
while ($l){
	while ($final[$n] || $final[$n] === "0")  {
		if ($final[$n + 1]) {
		if (ft_finalfilter($final[$n], $final[$n+1], $ref) < 0) {
			$clone = $final[$n];
			$final[$n] = $final[$n+1];
			$final[$n+1] = $clone;
		}}
		$n++;
}
	$l--;
	$n = 0;
}
$i = 0;
while($final[$i] || $final[$i] == "0")
{
	print_r($final[$i++]);
	echo "\n";
}
?>
