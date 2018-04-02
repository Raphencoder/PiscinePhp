<?php

function auth($login, $passwd)
{
  if (isset($login) && isset($passwd) && file_exists("../private/passwd")))
  {
    $user_accounts = unserialize(file_get_contents("../private/passwd"));
    foreach ($user_accounts as $value)
    {
    if ($value['login'] == $login && $value['passwd'] == hash('whirlpool', hash('sha3-512', $passwd)))
      return (TRUE);
    }
  }
  return(FALSE);
}

?>
