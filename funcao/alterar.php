<?php 
include "../conect.php";

//EDITAR se existir um id
if (isset($_REQUEST["id"])) {
    $id = $_REQUEST["id"];
    $profissao = $_REQUEST["profissao"];
    $cargo = $_REQUEST["cargo"];
    $obs = $_REQUEST["obs"];

    //alterar dados usuario
    $sql = "UPDATE funcao_profissao SET profissao='$profissao',cargo='$cargo',obs='$obs' WHERE id='$id' ";
    
    mysqli_query($conect, $sql);

    session_start();
    $_SESSION['mensagem'] = "Editado com sucesso";
    //1 sucesso
    //2 erro
    $_SESSION['tipo'] = 4;
    header("Location:../funcao.php");
    
    
}else{
header("Location:../funcao.php");
}

?>