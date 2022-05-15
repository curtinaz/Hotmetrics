<?php

// Verifica se o usuário está logado de fato
if(empty($_COOKIE['token'])) {
    require './views/page__login.php';
}

// Verifica se o usuário possui fbtoken
if(empty($_COOKIE['fbtoken'])) {
    require './views/page__login.php';
}