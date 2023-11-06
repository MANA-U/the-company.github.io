<?php

include '../classes/User.php';

// CREATE AN OBJ
$user = new User;

// CALL A METHOD
$user->login($_POST);

?>