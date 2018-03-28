<?php

function ft_zero($var){
	return ($var !== FALSE && $var !== NULL && $var !== '');
}

function ft_split($str)
{
	$str = array_filter(explode(" ", $str), 'ft_zero');
	sort($str);
	return ($str);
}
?>
