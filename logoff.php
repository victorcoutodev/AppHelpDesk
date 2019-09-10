<?php
  //  print_r($_SESSION);
    //remover indices do array de sessao
    //unset()

    //destruir a variavel de sessao
    //session_destroy()


    session_start();

    session_destroy();
    header('Location: index.php ');
?>