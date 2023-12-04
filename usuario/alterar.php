<?php 
include "../conect.php";

//EDITAR se existir um id
if (isset($_REQUEST["id"])) {
    $id = $_REQUEST["id"];
    $nome = $_REQUEST["nome"];
    $cpf = $_REQUEST["cpf"];
    $senha = $_REQUEST["senha"];

    //alterar dados usuario
    $sql = "UPDATE usuario_admin SET nome='$nome',cpf='$cpf',senha='$senha' WHERE id='$id' ";
    
    mysqli_query($conect, $sql);
    header("Location:../usuario.php");
}else{
    header("Location:../usuario.php");
}
?>