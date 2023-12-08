<?php 
 include "../conect.php";
//INSERRIR
   //REQUISSAO recebe os names do formulario e armazena em variaveis
   $profissao = $_REQUEST["profissao"];
   $cargo = $_REQUEST["cargo"];
   $obs = $_REQUEST["obs"];
   

   //inserir novo usuario
   $sql = "INSERT INTO funcao_profissao (profissao, cargo, obs) VALUES ('$profissao','$cargo','$obs')";

   //executa sql
   $resultado = mysqli_query($conect, $sql);


   //alert notie
   //alert notie
   //manda para Location , pagina de usuario
   session_start();
   $_SESSION['mensagem'] = "Cadastrado com sucesso";
   //1 sucesso
   //2 erro
   $_SESSION['tipo'] = 1;
   header("Location:../funcao.php");



?>