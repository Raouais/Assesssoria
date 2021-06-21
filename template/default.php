<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Dinamica Assessoria Contabil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="../../assessoria/template/sass/index.css">
   <link rel="stylesheet" href="../../assessoria/template/sass/style.css">
  </head>

  <body>

  <header class="bg-dark">
    <div class="header d-flex bd-highlight ">
      <div class="me-auto p-2 bd-highlight">
        <div>
          <img src="../img/logo.png" alt="" srcset=""  width="80" height="70" >
          <span class="companie_name text-primary">Dinâmica Assessoria Contabil</span>
        </div>
      </div>
      <div class="p-2 bd-highlight">
        <p class="text-primary">Conexão</p>
      </div>
      <div class="p-2 bd-highlight">
        <p class="text-primary">Deconexão</p>
      </div>
      <div class="p-2 bd-highlight">
        <span class="text-primary">(62)&nbsp;978-&nbsp;4561</span>
      </div>
      <div class="p-2 bd-highlight">
        <img src="../img/Logo_Fundo_azul.png" alt="" srcset=""  width="80" height="60" >
      </div>
    </div>
  </header>

    <nav class="navbar navbar-light bg-white border-bottom border-dark navbar-expand-md">
      <div class="container-fluid">
      <!-- <a class="navbar-brand" href="#">
      <img src="../../assessoria/img/logo_d.png" alt="" width="50" height="40" class="d-inline-block align-text-top">
        </a> -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php?p=home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?p=connection">Conectar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?p=disconnection">Sobre nos</a>
            </li>
            <?php if(isset($session->username)):?>
              <li class="nav-item">
                <a class="nav-link" href="index.php?p=disconnection">Desconectar</a>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?p=edit_category">Categorias</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?p=edit_category">Serviços</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?p=reset_password">
                <button class="btn btn-primary">Alterar palavra chave</button>
              </a>
            </li>
            <?php endif;?>
            </ul>
        </div>
      </div>
    </nav>

  <br>
  <br>

    <div class="container-fluid">
        <?php echo $content; ?>
    </div>


    <footer class="container-fluid footer bg-dark ">

    <div class="row text-light">
      <div class="col-md-4 ">
        <p>Logo: </p>
        <p>Telefone: </p>
        <p>Endereço: </p>
      </div>
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <p>&copy Dinâmica Assessoria Contabil</p>
      </div>

    </div>

    </footer>

  </body>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</html>
