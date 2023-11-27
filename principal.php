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


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />


  <title>Deshboard</title>
</head>

<body>

  <?php include 'nav.php' ?>



  <div class="container-fluid p-0 m-0 ">

    
    <div class="row">

       <div class=" menu col-md-2 p-0 m-0  "><?php include 'menu.php' ?></div>

          <div class="card col-md ">  <h3>Bem Vindo: <?php echo $_SESSION ['usuario_admin'] ?> 📃 </h3>  </div>

          <div class="card col-md  ">informaçoes</div>

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