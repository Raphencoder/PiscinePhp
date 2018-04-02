<?php

include 'auth.php';
session_start();
$login = $_POST['login'];
$passwd = $_POST['passwd'];
if (auth($login, $passwd)) {
    $_SESSION['loggued_on_user'] = $login;
    echo "OK\n"; ?>
    <html>
      <head>
        		<meta charset="utf-8"/>
        <style>
            body {
              background-image: url(http://www.bianoti.com/wp-content/uploads/20150327_5515c96a832bc.jpg);
            }
            .data{
              border: solid grey;
              width : 180px;
              height: auto;
              padding-bottom: 10px;
              padding-top: 10px;
              text-align: center;
              position: absolute;
              top: 250px;
              left: 700px;
            }
        </style>
      </head>
      <body>
         <form action="login.php" method="POST">
        <div class="header">
          <a href="./create.html"> Créer un compte</a>
          <a href="./modif.html"> Modifiez le mot de passe</a>
        <a class='logout' href='logout.php'>Log out of <?php echo ucfirst($_SESSION['loggued_on_user']); ?></a>
        </div>
 <iframe name="chat" src="./chat.php" width="100%" height="550px"></iframe>
 <iframe name="speak" src="./speak.php" width="100%" height="50px"></iframe>
      </body>
    </html>
<?php
}
else {
    $_SESSION['loggued_on_user'] = '';
    echo "Error\n";
}

?>
