<!-- CODIGO PHP CONECXAO COM BANCO -->
<?php

//VARIAVEL PHP link Banco De Dados MySQL ,XAMMP
    $endereco = "localhost";
    $usuario = "root";
    $senha = "";
    $nome = "bancorh";



//conexao toda com o banco
$conect = mysqli_connect($endereco, $usuario, $senha, $nome);




//TRATAMENTO DE ERROR
// if( ! $conect){
//     // (die matar a conexao )  . final para concatenar
//     die("Erro Na conexao com Banco:".mysqli_connect_error());
// };



//TRATAMENTO DE ERROR - (!NOT) CONECT (DIE-STOP) mysql conect error Caso contrario entre conect 
!$conect ? die("erro na conexao com banco".mysqli_connect_error()) : $conect ;

?> 

















<!-- //Tratamento de ERRO Caso Nao houver
//!$conect ? die("erro na conexao com banco" ) -->