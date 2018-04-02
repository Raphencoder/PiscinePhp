<?php
session_start();
date_default_timezone_set('Europe/Paris');
if ($_SESSION['loggued_on_user']) {
  if (!file_exists('../private/chat'))
    file_put_contents('../private/chat', NULL);
  if (isset($_POST['chat'])){
    $time = date("H:i");
    $conversation = unserialize(file_get_contents('../private/chat'));
    $fd = fopen("../private/chat", 'w');
    flock($fd, LOCK_EX);
    $chat = array("login" => $_SESSION['loggued_on_user'], "time" => $time, "msg" => $_POST['chat']);
    $conversation[] = $chat;
    file_put_contents('../private/chat', serialize($conversation));
    fclose($fd);
  }
}
else {
  return (0);
}


?>
<html>
<head>
    <meta charset='utf-8' />
    <script langage="javascript">top.frames['chat'].location = 'chat.php';</script>
    <style>
    form{

    }
    .chat {
      font-size: 30px;
      width: 100%;
      height: auto;
      background-color: transparent;
    }
    ::placeholder{
      color : lightgray;
    }
    </style>
</head>
<body>
<form action='speak.php' method='POST'>
    <input class="chat" type="text" name="chat" value="" placeholder="Enter your message here" autofocus/> <br/> <br/>
</form>
</body>
</html>
