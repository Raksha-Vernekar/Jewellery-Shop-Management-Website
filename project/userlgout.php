<?php

session_start();

include('function.php');

unset($_SESSION['username']);

redirect('loginpage.php');

?>