<?php

function ft_search_match($user, $user_accounts) {
  if (!$user_accounts)
    return (0);
  foreach ($user_accounts as $nom) {
      if ($user['login'] == $nom['login']){
        if ($user['oldpasswd'] === $nom['passwd']) {
          return (1);
        }
      }
  }
  return (0);
}
$user = array("login" => $_POST['login'], "oldpasswd" => hash('whirlpool', hash('sha3-512', $_POST['oldpw'])), "newpasswd" => hash('whirlpool', hash('sha3-512', $_POST['newpw'])));
$user_accounts = unserialize(file_get_contents('../private/passwd'));
if (!empty($user['login']) && !empty($user['oldpasswd']) && !empty($user['newpasswd']) && (ft_search_match($user, $user_accounts))){
  foreach ($user_accounts as $key => $name) {
    if ($user['login'] === $name['login']) {
      $i = $key;
    }
  }
  $user_accounts[$i]['passwd'] = $user['newpasswd'];
    file_put_contents('../private/passwd', serialize($user_accounts));
  echo "OK\n";
}
else {
  echo "Error\n";
  return ;
}
?>
