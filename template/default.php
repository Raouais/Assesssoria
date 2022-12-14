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
      <div class="me-auto bd-highlight">
        <a href="index.php?p=home">
          <img src="../img/logo.png" alt="" srcset=""  width="80" height="70" >
        </a>
        <a class="text-center" href="index.php?=home">
          <span class="companie_name text-primary">Dinâmica Assessoria Contabil</span>
        </a>
      </div>
      <div class="p-2 bd-highlight">
        <a class="text-primary" href="index.php?p=connection">Conexão</a>
      </div>
      <?php if(isset($session->username)):?>
      <div class="p-2 bd-highlight">
        <a class="text-primary" href="index.php?p=disconnection">Deconexão</a>
      </div>
      <?php endif;?>
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
              <a class="nav-link active" aria-current="page" href="index.php?p=home">Inicial</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?p=about">Sobre nos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?p=contact">Contatos</a>
            </li>
            <?php if(isset($session->username)):?>
            <li class="nav-item">
              <a class="nav-link" href="index.php?p=reset_password">
                <button class="btn btn-primary">Alterar senha</button>
              </a>
            </li>
            <?php endif;?>
            </ul>
        </div>
      </div>
    </nav>

    <div>
        <?php echo $content; ?>
    </div>

    <footer class="container-fluid footer bg-secondary">

      <div class="row text-light text-center bg-dark footer_paragraph">
        
        <div class="col-md-4 ">
          <p>
              <img src="../img/map_point_prev_ui.png" alt="" srcset=""  width="25" height="25">
              <span>194 - Jardim Novo Mundo, Goiânia - GO</span> 
          </p>
        </div>
        
        <div class="col-md-4">
          <p>
              <img src="../img/phone_prev_ui.png" alt="" srcset=""  width="25" height="25">
              <span>(62) 99276-9989</span> 
          </p>
          <p>
              <img src="../img/Logo_Fundo_Branco2_prev_ui.png" alt="" srcset=""  width="25" height="25">
              <span>(62) 99276-99</span> 
          </p>
        </div>
      
        <div class="col-md-4">
          <p>
            <a href="http://" class="text-primary">
              <img src="../img/linkedin.png" alt="" srcset=""  width="25" height="25">
              <span>Follow us in Linkedin</span> 
            </a>
          </p>
        </div>

      </div>

      <div class="text-center bg-secondary">
        <img src="../img/logo.png" alt="" srcset=""  width="80" height="70" >
        <div class="companie_name text-primary">&copy Dinâmica Assessoria Contabil</div>
      </div>

    </footer>

  </body>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</html>
