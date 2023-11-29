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
  <link rel="shortcut icon" href="./assets/icons8-favicon-16.png" type="image/x-icon" />

  <link rel="stylesheet" href="geral.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />

  <title>Usuario</title>
</head>

<body>

  <?php include 'nav.php' ?>



  <div class="container-fluid p-0 m-0 ">

    
    <div class="row">

       <div class=" menu col-md-2 p-0 m-0  "><?php include 'menu.php' ?></div>
       
       <div class="card col-md  ">
        <h3> <i class="bi bi-person-fill-gear"></i>Cadastro</h3>

        <form action="./acesso.php" method="POST" class="align-items-sm-center">


   <div class="mb-3">
  <label for="Email">ID:</label>
  <input name="cpf" type="text"
    class="form-control" aria-describedby="emailHelp" required placeholder="Insira o ID" disabled/>
</div>

  <div class="mb-3">
  <label for="Email">NOME:</label>
  <input name="cpf" type="text"
    class="form-control" aria-describedby="emailHelp" required placeholder="Insira o NOME"/>
</div>

<div class="mb-3">
  <label for="Email">CPF:</label>
  <input name="cpf" type="text"
    class="form-control" aria-describedby="emailHelp" required placeholder="Insira o CPF"/>
  </div>
  
  <div class="form-group">
    <label for="Password">SENHA:</label>
    <input name="senha" 
    type="password"
    class="form-control"
    required
    placeholder="Senha"/>
    <small id="emailHelp" class="form-text text-muted">Os Dados Serão Criptografados.</small>
</div>

  <button type="submit" class="btn btn-primary m-1" >Cadastrar</button>
  <button type="reset" class="btn btn-primary">Limpar</button>

</form>
       </div>


       <div class="card col-md  ">
        <h3><i class="bi bi-card-checklist"></i> Listagem</h3>

        <table id="tabela" class="table table-striped table-hover table-bordered">
  <thead class="table-light">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nome</th>
      <th scope="col">Cpf</th>
      <th scope="col">Editar</th>
      <th scope="col">Excluir</th>
    </tr>
  </thead>
  <tbody>
    <!-- selecione todos o usuarios do banco SQL -->
    <?php
       $sql = "SELECT * FROM usuario_admin";
      //  depois execute esse comando
      $dados = mysqli_query($conect, $sql);
      //linha vai valer varios registros, que vao ser percorridos
      while ($linha = mysqli_fetch_assoc($dados)) {
        
      
    ?>
    <tr>
      <th scope="row">  <?php echo $linha['id']?> </th>
      <td> <?php echo $linha['nome']  ?> </td>
      <td><?php echo $linha['cpf']  ?></td>
      <td><a href="">Editar</a></td>
      <td><a href="">Excluir</a></td>
    </tr>
    <?php } ?>

  </tbody>
</table>
       </div>

    </div>

  </div>

 <!-- jQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js"
   integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw=="
    crossorigin="anonymous"
     referrerpolicy="no-referrer">
    </script>
    <!-- Plugin jQuery Func Table -->
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
 <!-- bootstrap icon -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous">
  </script>
  <!-- bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous">
  </script>

  <script src="./script.js"></script>
</body>

</html>