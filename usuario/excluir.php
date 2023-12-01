<?php 
include "../conect.php";

//ECLUIR pegue o id na requisisao armazene para delete exclusao
$id = $_REQUEST["id"];
$sql = "DELETE FROM usuario_admin WHERE id='$id'";

$resultado = mysqli_query($conect,$sql);

header("Location:../usuario.php");

?>