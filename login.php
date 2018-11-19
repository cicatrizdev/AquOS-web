<?php

$entrar = $_POST['entrar'];
$email = $_POST['email'];
$senha = MD5($_POST['senha']);
$connect = mysql_connect('localhost', 'admin', '');
$db = mysql_select_db('aquos');

if(isset($entrar)) {
    $verifica = mysql_query("SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'") or die("Erro ao consultar no banco de dados");

    if(mysql_num_rows($verifica)<=0){
        echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos!');window.location.href='formulario.html';</script>";
        die();
    } else {
        setcookie("$email", $email);
        header("Location:dashboard.php");
    }
}

?>