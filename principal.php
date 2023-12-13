<?php
//conexao com banco
include 'conect.php';
//validaçao do sistema
include 'validacao.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="./assets/icons8-favicon-16.png" type="image/x-icon " />

  <link rel="stylesheet" href="geral.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />


  <title>Deshboard</title>
</head>

<body>
  <!-- nav container -->
  <?php include 'nav.php' ?>

  <div class="container-fluid p-0 m-0">


    <div class="row">

      <div class=" menu col-md-2 p-0 m-0  ">
        <?php include 'menu.php' ?>
      </div>


      <!-- ---------------------------------------------------------------- -->
      <div class="card col-md ">
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                aria-expanded="true" aria-controls="collapseOne">
                Apresentação.
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>
                  <h3>Bem Vindo:
                    <?php echo $_SESSION['usuario_admin'] ?>
                  </h3>
                </strong>

                <b>Objetivo.</b> <br> Fornecer uma visão abrangente do sistema utilizado pelo departamento de recursos humanos da
                empresa <code>River Tour.</code> Este documento é destinado aos administradores, gerentes de RH, 
                com finalidade de compreender a estrutura, funcionalidade e procedimentos do sistema,
                garantindo o uso eficaz das ferramentas disponíveis.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                info. Documentação do sistema
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <!-- documentação -->
               
                <b>Documentação de requisitos. </b>
                <br>
<b></b><i>Desenvolvedor: Felipe Fontes Lisboa Primo.</i>  <br>
Turma: Programador de sistemas SENAC.<br>
Documentação de software: Documento do sistema de recursos humanos (RH)<br>
Nome do projeto: Sistema para controle de recursos humanos. <br>
 
<br>
<b>Requisitos funcionais:</b> <br>
RF001 - O sistema deve fornecer uma tela de login para autenticação. <br>
RF002 - para acessar o sistema o nome do usuário e senha dever ser validos.<br>
RF003 - O sistema deve permitir o cadastro/adição/exclusão/listagem de usuário.<br>
RF004 - O sistema deve permitir o cadastro/edição/exclusão/listagem de funcionário.<br>
RF005 - O sistema deve permitir o cadastro/edição/exclusão/listagem de profissão.<br>
RF006 - O sistema deve permitir relatórios dos funcionários e folhas de pagamento.<br>
RF007 - O sistema deve ter um controle de admissão e demissão, constando datas e se está ativo.
<br>

<br>
<b>Requisitos não funcionais:</b> <br>
RNF001 - O sistema deve precisar de uma conexão com internet.<br>
RNF002 - O sistema deve ser responsivo, ou seja, ser adaptável para diversas telas e dispositivos moveis.<br>
RNF003 - as respostas dos sistemas devem ter no máximo 4 segundos.<br>
RNF004 - O sistema deve comportar acessibilidade.<br>
<br>
<b>Requisitos de negócio:</b>  <br>
RN001 - Os funcionários cadastrados devem ter no mínimo 16 anos.<br>
RN002 - O sistema deve ter níveis de acesso, Administrador e usuários comum. 



                <!-- ------------------------------------------- -->
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="cllapseThree">
                info. Banco de Dados
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body p-1">
                <strong>Diagrama.</strong> <i>Modelo Entidade Relacionamento MySQL:
Planejamento da construção do banco de dados relacional.
</i> informaçoes de todas as tabelas
                relacionadas ao sistema de gerenciamento RH - Recursos humanos, informaçoes de funcionarios suas devidas
                funções na empresa, cargo e responsabilidade. <br>
                <!-- -------------------------- -->

                <!-- Modal -->
                <div class="container p-1 m-0">
                  <img src="./assets/diagrama.png" alt="Diagrama" class="d-block w-100">
                </div>
                <!-- ----------------------- -->
              </div>
            </div>
          </div>
        </div>
      </div>


      <!-- --------------------------------------------------------------------- -->
      <!-- <div class="card col-md  ">informaçoes</div> -->

    </div>

  </div>



  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"></script>
  <script src="./script.js"></script>
</body>

</html>