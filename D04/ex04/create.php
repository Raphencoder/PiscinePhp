<?php

function ft_search($login, $user_accounts) {
  if (!$user_accounts)
    return (0);
  foreach ($user_accounts as $name) {
      if ($login === $name['login'])
        return (1);
  }
  return (0);
}

$user = array("login" => $_POST['login'], "passwd" => hash('whirlpool', hash('sha3-512', $_POST['passwd'])));
if (!file_exists('../private/passwd')){
  mkdir('../private');
  file_put_contents('../private/passwd', NULL);
}
$user_accounts = unserialize(file_get_contents('../private/passwd'));
if ($user['login'] && $user['passwd'] && (!ft_search($user['login'], $user_accounts))){
  $user_accounts[] = $user;
  file_put_contents('../private/passwd', serialize($user_accounts));
  echo "OK\n";
  header('Refresh: 2; URL="index.html"');
}
else {
  echo "Error\n";
  return ;
}
?>
