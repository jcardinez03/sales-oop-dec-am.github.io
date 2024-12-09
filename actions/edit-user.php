<?php

include '../classes/User.php';

$user = new User;

$user->update($_POST, $_FILES);

?>