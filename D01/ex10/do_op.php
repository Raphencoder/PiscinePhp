#!/usr/bin/php
<?php
if ($argc == 4)
{
    $sign = str_replace(" ", "", $argv[2]);
    if ($sign == '+')
        $res = $argv[1] + $argv[3];
    else if ($sign == '/')
        $res = $argv[1] / $argv[3];
    else if ($sign == '-')
        $res = $argv[1] - $argv[3];
    else if ($sign == '*')
        $res = $argv[1] * $argv[3];
    else if ($sign == '%')
        $res = $argv[1] % $argv[3];
    echo $res . "\n";
}
else {
    echo "Incorrect Parameters\n";
}
?>
