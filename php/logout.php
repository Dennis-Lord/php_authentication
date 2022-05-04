<?php
require_once('./initialize.php');

logout_admin();
header('Location: ../authentication/login.php');
?>