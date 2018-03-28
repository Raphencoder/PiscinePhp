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
			$clone = $nb;
			$test = substr($nb, -1);
			if ($test % 2 == 0)
				echo "Le chiffre $clone est Pair\n";
			else
				echo "Le chiffre $clone est Impair\n";
		}
}
fclose($stdin);
?>
