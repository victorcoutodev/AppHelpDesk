<?php
    //Inicio Sessão
    session_start();

    //variavel que verifica se a autenticacao foi realizada
    $usuario_autenticado = false;

    //usuarios do sistema
    $usuarios_app = array(
        array('email' => 'adm@teste.com.br', 'senha' => '123456'),
        array('email' => 'user@teste.com.br', 'senha' => 'abcd'),
    );
    foreach($usuarios_app as $user) {
        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha'])
            $usuario_autenticado = true;
    }

    if($usuario_autenticado) {
        echo 'Usuário autenticado';
        $_SESSION['autenticado'] = 'SIM';
        header('Location: home.php');

    } else {
        $_SESSION['autenticado'] = 'NAO';
        header('Location:index.php?login=erro');
    }
 ?>
