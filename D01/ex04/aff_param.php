#!/usr/bin/php
<?php
$i = 0;
while ($argv[$i])
{
	if ($i == 0)
		$i++;
	print_r($argv[$i++]);
	echo "\n";
}
?>
