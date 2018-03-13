#!/usr/bin/php
<?php
$stdin = fopen("php://stdin", "r");
while ($stdin && !feof($stdin))
{
	echo "Entrez un nombre : ";
	$nb = fgets($stdin);
	if (!$nb)
	{
		echo "^D\n";
		return ;
	}
	$nb = trim ($nb);
	if (!is_numeric($nb))
		echo "'$nb' n'est pas un chiffre\n";
	else
		{
			if ($nb % 2 == 0)
				echo "Le chiffre $nb est Pair\n";
			else
				echo "Le chiffre $nb est Impair\n";
		}
}
fclose($stdin);
?>
