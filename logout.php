<?php
session_start();

session_destroy();
unset($_SESSION['auth_user']['username']);
unset($_SESSION['auth_user']['user_id']);
unset($_SESSION['auth_user']['email']);
unset($_SESSION['auth_user']['role']);

header('Location: emplogin.php')
?>