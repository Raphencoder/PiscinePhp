<?php
session_start();
if ($_GET['submit'] == "OK"){
  $_SESSION['login'] = $_GET['login'];
  $_SESSION['passwd'] = $_GET['passwd'];}
?>

<html>
  <head>
    <style>
        .data{
          border: solid black;
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
     <form action="index.php" method="GET">
    <div class="data">
      Identifiant <input type="text" name="login" value="<?php echo $_SESSION['login']; ?>" required> <br \> <br \>
     Mot de passe <input type"text" name="passwd" value="<?php echo $_SESSION['passwd']; ?>" required> <br \> <br \>
      <input type="submit" name="submit" value="OK">
    </div>
  </body>
</html>
