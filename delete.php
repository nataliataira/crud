<?php

require __DIR__ . '/users/users.php';
include __DIR__ . '/html-part/header.php';

if (! isset($_POST['id']))
{
    include "/html-part/not_found.php";
    exit;
}

$userId = $_POST['id'];
deleteUser($userId);

header("Location: index.php");
