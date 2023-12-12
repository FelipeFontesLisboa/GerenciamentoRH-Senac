<?php 
 include "../conect.php";
//INSERRIR
   //REQUISSAO recebe os names do formulario e armazena em variaveis
   $nome = $_REQUEST["nome"];
   $salario = $_REQUEST["salario"];
   $data_nascimento = $_REQUEST["data_nascimento"];
   $cpf = $_REQUEST["cpf"];
   $funcao_profissao = $_REQUEST["funcao_profissao"];
   

   //inserir novo usuario
   $sql = "INSERT INTO funcionario (nome, salario, data_nascimento, cpf, funcao_profissao)
    VALUES ('$nome','$salario','$data_nascimento','$cpf','$funcao_profissao')";

   //executa sql
   $resultado = mysqli_query($conect, $sql);


   //alert notie
   //manda para Location , pagina de usuario
   session_start();
   $_SESSION['mensagem'] = "Cadastrado com sucesso";
   //1 sucesso
   //2 erro
   $_SESSION['tipo'] = 1;
   header("Location:../funcionario.php");



?>