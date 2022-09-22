<?php

require_once('conn.php');

    $email_usuario = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $senha_usuario = md5($_POST['password']);

    $sql = 'SELECT * FROM usuario WHERE email_usuario=:email_usuario AND senha_usuario=:senha_usuario';
    $result = $conn->prepare($sql);
    $result->execute(['email_usuario' => $email_usuario, 'senha_usuario' => $senha_usuario]);
    $user = $result->fetch();

    if (!empty($user)){
        session_start();


        $_SESSION['id_usuario'] = $user['id_usuario'];
        header('location: ../');
    } else{
        echo 'Usuario não cadastrado!';
    }


?>