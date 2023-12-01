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

   //manda para Location , pagina de usuario
   header("Location:../usuario.php");

?>