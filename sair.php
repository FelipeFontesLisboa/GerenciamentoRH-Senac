<?php
//iniciar  depois
session_start();
//destroir as variaveis de sessao
session_destroy();


//limpar resetar dados VARIAVEIS DE SESSAO
unset($_SESSION["cpf"]);
unset($_SESSION["senha"]);


//mandar para login inicial
header("location:login.html");
?>