<?php 
include "../conect.php";

//ECLUIR pegue o id na requisisao armazene para delete exclusao
$id = $_REQUEST["id"];
$sql = "DELETE FROM funcionario WHERE id='$id'";

$resultado = mysqli_query($conect,$sql);



session_start();
$_SESSION['mensagem'] = "Funcionario Excluido";
//1 sucesso
//2 waning
//3 erro
//4 information
$_SESSION['tipo'] = 4;
header("Location:../funcionario.php");



?>