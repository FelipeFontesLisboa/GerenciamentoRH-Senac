<?php
//VALIDAÇAO PARA MANTER O LOGIN ATIVO NA SESSOES DA PAGINA 

//inicia ela e depois avalia
session_start();
//se nao estiver logado mnanda para o login
//se nao existir variavel de sessao de cpf OU senha
if(!isset($_SESSION["cpf"])  or !isset($_SESSION["senha"])) {

    //destroi ela finaliza limpando todas a variaveis de sessao
    session_destroy();
    unset($_SESSION["cpf"]);
    unset($_SESSION["senha"]);

    //e manda para a tela inicial
    header("location:login.html");
}
?>
