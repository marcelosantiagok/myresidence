<?php
    $dados = $_POST;
    
    $login = $dados['login'];
    
    $senha = $dados['senha'];

    if($login =="myr@myresidence.com" && $senha =="123456")
        header("Location: home.html");
    else
        header("Location: index.html");
?>