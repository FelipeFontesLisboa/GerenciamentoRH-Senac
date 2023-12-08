<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js"
  integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw=="
  crossorigin="anonymous" referrerpolicy="no-referrer">
  </script>

<?php
//conexao com banco
include 'conect.php';
//validaçao do sistema
include 'validacao.php';

//insert novo  funcao 
$destino = "./funcao/inserir.php";

//se for diferente de vazio, requisiçao get codigo PARA ALTERAR EDITAR
if (!empty($_GET["codigo"])) {
  $id = $_GET["codigo"];
  $sql = "SELECT * FROM funcao_profissao WHERE id='$id'";
  $dados = mysqli_query($conect, $sql);
  $funcoes = mysqli_fetch_assoc($dados);

  $destino = "./funcao/alterar.php";

  //echo para editar no modal
  echo '
<script>
$(document).ready(function(){
  $("#exampleModal").modal("show");
})
</script>
';

}
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

  <!-- jQuery tabela INTELIGENTE -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />

  <!-- galery alerta notieJS -->
  <link rel="stylesheet" type="text/css" href="https://unpkg.com/notie/dist/notie.min.css">


  <title>funcao</title>
</head>

<body>
  <!-- nav container -->
  <?php include 'nav.php' ?>



  <div class="container-fluid p-0 m-0  ">


    <div class="row">

      <div class=" menu col-md-2 p-0 m-0  ">
        <?php include 'menu.php' ?>
      </div>


      <!-- ---------------------------------------------------------------------- -->
      <div class="card col-md">

         <div class="d-grid gap-2 d-md-flex justify-content-md-end">
           <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
             data-bs-whatever="@mdo"> <i class="bi bi-person-fill-add">
             </i>Cadastar</button>
         </div>


        <div class="modal fade" id="exampleModal" data-bs-backdrop="static" tabindex="-1"
          aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
                <a type="button" class="btn-close" href="funcao.php" aria-label="Close"></a>
              </div>
              <div class="modal-body">



                <h3> <i class="bi bi-person-fill-gear"></i> Cadastro</h3>
                <!-- variavel inserir destino  -->
                <form action="<?= $destino; ?>" method="POST" class="align-items-sm-center">

                  <div class="mb-3">
                    <label for="Email">ID:</label>
                    <input name="id" value="<?php echo isset($funcoes) ? $funcoes["id"] : "" ?>" type="text"
                      class="form-control" aria-describedby="emailHelp" placeholder="Insira o ID" />
                  </div>

                  <div class="mb-3">
                    <label for="Email">PROFISSAO:</label>
                    <input name="profissao" value="<?php echo isset($funcoes) ? $funcoes["profissao"] : "" ?>" type="text"
                      class="form-control" aria-describedby="emailHelp" required placeholder="Insira a profissao" />
                  </div>

                  <div class="mb-3">
                    <label for="Email">CARGO:</label>
                    <input name="cargo" value="<?php echo isset($funcoes) ? $funcoes["cargo"] : "" ?>" type="text"
                      class="form-control" aria-describedby="emailHelp" required placeholder="Insira o cargo" />
                  </div>

                  <div class="form-group">
                    <label for="Password">OBSERVAÇOES:</label>
                    <input name="obs" value="<?php echo isset($funcoes) ? $funcoes["obs"] : "" ?>" type="text"
                      class="form-control" placeholder="Insira a obs" required />
                    <small id="emailHelp" class="form-text text-muted">Os Dados Serão Criptografados junto ao banco de
                      dados.</small>


                    <div class="modal-footer">
                      <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Confirmar</button>

                    </div>
                </form>
              </div>


            </div>
          </div>
        </div>
      </div>
      
      <h3><i class="bi bi-card-checklist"></i> Listagem</h3>

      <table id="tabela" class="table table-striped table-hover table-bordered">
        <thead class="table-light">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">PROFISSAO</th>
            <th scope="col">CARGO</th>
            <th scope="col">OBS</th>
            <th scope="col">OPÇÕES</th>
            <!-- <th scope="col">EDITAR</th> -->
            <!-- <th scope="col">EXCLUIR</th> -->
          </tr>
        </thead>
        <tbody>
          <!-- selecione todos o funcoes do banco SQL -->
          <?php
          $sql = "SELECT * FROM funcao_profissao";
          //  depois execute esse comando
          $dados = mysqli_query($conect, $sql);
          //linha vai valer varios registros, que vao ser percorridos
          while ($linha = mysqli_fetch_assoc($dados)) {
            ?>
            <tr>
              <th scope="row">
                <?php echo $linha['id'] ?>
              </th>
              <td>
                <?php echo $linha['profissao'] ?>
              </td>
              <td>
                <?php echo $linha['cargo'] ?>
              </td>
              <td>
                <?php echo $linha['obs'] ?>
              </td>
              <td> <a class="m-3" title="Editar" href="funcao.php?codigo=<?= $linha['id'] ?>"><i class="bi bi-wrench"></i></a> 

               <a title="Excluir" href="<?php echo "./funcao/excluir.php?id=" . $linha['id'] ?>"><i class="bi bi-trash"> </i> </a> </td>
            </tr>
          <?php




          } ?>

        </tbody>
      </table>
    </div>

  </div>

  </div>

  <!-- jQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js"
    integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw=="
    crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>
  <!-- Plugin jQuery Func Table -->
  <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
  <!-- bootstrap icon -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
  <!-- bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
  <script src="./script.js"></script>
  <script src="https://unpkg.com/notie"></script>

  <?php
  if (isset($_SESSION['mensagem'])) {
    echo "<script>
         notie.alert({
          type: " . $_SESSION['tipo'] . ",
          text: '" . $_SESSION['mensagem'] . "',
         });
    </script>";

    unset($_SESSION['mensagem']);
    unset($_SESSION['tipo']);

  }
  ?>

</body>

</html>