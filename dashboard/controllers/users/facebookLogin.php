<?php

require '../../utils/json.php';
require '../../config.php';

if(empty($_GET['email'])) {
    returnJson([
        "error" => "O e-mail não foi informado"
    ]);
}

$email = $_GET['email'];

$checkUserExists = "SELECT * FROM `users` WHERE `email` LIKE '$email'";
$checkUserExists = $con->query($checkUserExists)->fetch_all(MYSQLI_ASSOC);

if($checkUserExists) {
    // conta já existe
} else {
    // conta não existe
}

