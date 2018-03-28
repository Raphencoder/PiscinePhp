#!/usr/bin/php
<?php
if ($argc != 2)
	return ;
$i = 0;
$new_str = trim($argv[1]);
while ($argv[1][$i])
{
	$new_str = str_replace("  ", " ", $new_str);
	$i++;
}
echo "$new_str\n";
?>
