<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = MD5($_POST['senha']);
$connect = mysql_connect('localhost', 'admin', '');
$db = mysql_select_db('aquos');
$query_select = "SELECT email FROM usuario WHERE email = '$email'";
$select = mysql_query($query_select, $connect);
$array = mysql_fetch_array($select);
$logarray = $array['email'];

    if($login == "" || $login == null) {
        echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido!');window.location.href='formulario.html';</script>";
    } else {
        if($logarray == $email){
            echo"<script language='javascript' type='text/javascript'>alert('Esse email já esta cadastrado!');window.location.href='formulario.html';</script>";
            die();
        } else {
            $query = "INSERT INTO usuario (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
            $insert = mysql_query($query, $connect);

            if($insert) {
                echo"<script language='javascript' type='text/javascript'>alert('Usuario cadastrado com sucesso!');window.location.href='formulario.html';</script>";
            } else {
                echo"<script language='javascript' type='text/javascript'>alert('Não foi possivel realizar o cadastro! Tente novamente');window.location.href='formulario.html';</script>";
            }
        }
    }
?>