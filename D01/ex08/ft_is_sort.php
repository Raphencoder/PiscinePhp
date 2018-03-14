#!/usr/bin/php
<?php
function ft_is_sort($tab)
{
	$clone = $tab;
	$clonesort = $tab;
	sort($clonesort);
	if ($clone != $clonesort)
		return (false);
	else
		return (true);
}
?>
