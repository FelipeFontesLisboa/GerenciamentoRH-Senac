<?php 
include "../conect.php";

//EDITAR se existir um id
if (isset($_REQUEST["id"])) {
    $id = $_REQUEST["id"];
    $nome = $_REQUEST["nome"];
    $salario = $_REQUEST["salario"];
    $data_nascimento = $_REQUEST["data_nascimento"];
    $cpf = $_REQUEST["cpf"];
    $funcao_profissao = $_REQUEST["funcao_profissao"];


    //alterar dados usuario
    $sql = "UPDATE funcionario SET nome='$nome',salario='$salario', data_nascimento='$data_nascimento', cpf='$cpf',funcao_profissao='$funcao_profissao'  WHERE id='$id' ";
    
    mysqli_query($conect, $sql);

    session_start();
    $_SESSION['mensagem'] = "Editado com sucesso";
    //1 sucesso
    //2 erro
    $_SESSION['tipo'] = 4;
    header("Location:../funcionario.php");
    
    
}else{
header("Location:../funcionario.php");
}

?>