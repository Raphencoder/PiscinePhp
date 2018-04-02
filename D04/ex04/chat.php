<?php

if (file_exists('../private/chat')) {
$conversation = unserialize(file_get_contents('../private/chat'));
if ($conversation)
{
foreach ($conversation as $msg) {
  echo "<br/>";
  echo $msg['login']."<br/>";
  echo $msg['time']. "   ";
  echo $msg['msg']."<br/>";
}}
}

?>
