<?php
$username = $_SERVER['PHP_AUTH_USER'];
$password = $_SERVER['PHP_AUTH_PW'];
if ($username != "zaz" || $password != "jaimelespetitsponeys") {
    header('WWW-Authenticate: Basic realm=\'\'Espace membres\'\'');
    header('HTTP/1.1 401 Unauthorized');
    echo "<html><body>Cette zone est accessible uniquement aux membres du site</body></html>";
}
else {
    $img = base64_encode(file_get_contents('../img/42.png'));
<html><body>Bonjour Zaz<br /><img src='data:image/png;base64, \" . $img . \"'/></body></html>
}
?>
