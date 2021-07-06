<?php

session_start();

include('function.php');

unset($_SESSION['username']);

redirect('admin_login.php');

?>