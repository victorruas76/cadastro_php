<?php
session_start();

if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
    include_once('config.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];


    $sql = "SELECT * FROM `formulario_bd` WHERE email = ? AND senha = ?;";

    $auth = $conexao->prepare($sql);
    $auth->execute([$email,$senha]);
    $result = $auth->fetchAll();


    if (!isset($result[0]['id'])) {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    } else {
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: sistema.php');
    }
} else {

    header('Location: login.php');
}
