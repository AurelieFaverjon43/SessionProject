<?php
include 'include.php';


$session = new Session();

var_dump ($session);

$session->name = 'Roland';

var_dump ($session);

$session->password = '12345';

var_dump ($session);
?>