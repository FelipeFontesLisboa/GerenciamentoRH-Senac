<!-- Back-End Entre FronEnt E Banco de Dados -->
<!-- Autenticaçao  login e senha  -->
<?php
include("conect.php");

 
//requisiçao para logar
//recebe cpf e senha do formulario de login index
$cpf = $_REQUEST["cpf"];
$senha = $_REQUEST ["senha"];

//selecione todos  usuario admin onde coresponde cpf e senha  SQL
$sql = "SELECT * FROM usuario_admin WHERE cpf = '$cpf' AND senha = '$senha' " ;

//resultaado da consulta com o banco verificando o cadastro
$resultado = mysqli_query($conect, $sql);


//cada valor resultados é associado ao nome da coluna no banco
$linha = mysqli_fetch_assoc($resultado);

if(mysqli_num_rows($resultado) > 0 ){session_start(); // iniciar a sessão 
    //cria variaveis de sessao
    $_SESSION["usuario_admin"] = $linha["nome"];
    $_SESSION["cpf"] = $cpf;
    $_SESSION["senha"] = $senha;

    // se estiver tudo ok manda a pessoa para a pagina principal 
    header("location: principal.php");

}else{
    //caso contratri senha e login incoreto deslogar o usuario destroi e manda para pagina de login 
    session_unset();
    session_destroy();
    header("location: login.html");


    alert("Hello World");
    function alert($msg) {
        echo "<script type='text/javascript'>alert('$msg');</script>";
    }
    
}


























// echo $cpf;
// echo $senha;
//PRINTS VERIFICATION REGISTER
//echo mysqli_num_rows($resultado);
?>