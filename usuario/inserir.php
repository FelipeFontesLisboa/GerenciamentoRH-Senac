<?php 
 include "../conect.php";
//INSERRIR
   //REQUISSAO recebe os names do formulario e armazena em variaveis
   $nome = $_REQUEST["nome"];
   $cpf = $_REQUEST["cpf"];
   $senha = $_REQUEST["senha"];

   //inserir novo usuario
   $sql = "INSERT INTO usuario_admin (nome, cpf, senha) VALUES ('$nome','$cpf','$senha')";

   //executa sql
   $resultado = mysqli_query($conect, $sql);


   //alert notie
   //manda para Location , pagina de usuario
   session_start();
   $_SESSION['mensagem'] = "Cadastrado com sucesso";
   //1 sucesso
   //2 erro
   $_SESSION['tipo'] = 1;
   header("Location:../usuario.php");



?>