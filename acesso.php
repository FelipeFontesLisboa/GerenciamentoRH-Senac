
<!-- Autenticaçao  login e senha  -->
<?php
include("conect.php");

 
//requisiçao para logar
//recebe cpf e senha do formulario de login index
$cpf = $_REQUEST["cpf"];
$senha = $_REQUEST ["senha"];
$sql = "SELECT * FROM usuario_admin WHERE cpf = '$cpf' AND senha = '$senha' " ;

$resultado = mysqli_query($conect, $sql);
// echo $cpf;
// echo $senha;

//PRINTS VERIFICATION REGISTER
echo mysqli_num_rows($resultado);
?>