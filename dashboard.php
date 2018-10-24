<?php
$login_cookie = $_COOKIE['$email'];

if(isset($login_cookie)) {
    echo"Bem vindo!<br> Este é o painel de usuário";
} else {
    echo"Para acessar as informações, <a href='login.html'>Faça Login</a> em sua conta";
}

?>
