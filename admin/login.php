<?php
require_once('class/login.php');

session_start();
$msgErro = '';


if (isset($_POST['emailUsuario'])) {

  $email = $_POST['emailUsuario'];
  $senha = $_POST['senhaUsuario'];
  //$senha = password_hash($senha, PASSWORD_DEFAULT);
 

  $login = new Login();
  $login->emailUsuario = $email;
  $login->senhaUsuario = $senha;

  $dadosLogin = $login->VerificarLogin();

  var_dump($dadosLogin);

  if ($dadosLogin == NULL) {
    $msgErro = 'Login falhou! Tente Novamente.';
  } else {
    $_SESSION['login']  = $dadosLogin['emailUsuario'];
    $_SESSION['idUsuario']  = $dadosLogin['idUsuario'];

    header('Location:index.php');

    exit();
  }

  
}

?>
<html lang="BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" href="css/reset.css" />
  <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
  <link rel="stylesheet" href="css/stiloLogin.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">


  <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

  <!-- Bootstrap core CSS -->
  <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="signin.css" rel="stylesheet">
</head>

<body class="text-center">
  <form class="form-signin" action="#" method ="POST" method="POST">
    <img class="mb-4" src="img/logodash.svg" alt="" width="100" height="100">
    <h1 class="h3 mb-3 font-weight-normal">Por favor, informar dados de acesso</h1>
    <!--<label for="inputEmail" class="sr-only">Email</label>-->
    <input type="email" id="emailUsuario" name="emailUsuario" class="form-control" placeholder="Email" required autofocus>
    <!--<label for="inputPassword" class="sr-only">Senha</label>-->
    <input type="password" id="senhaUsuario" name="senhaUsuario" class="form-control" placeholder="Senha" required>
    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> lembre de min
      </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">&copy; Cyber Company</p>
  </form>
</body>

</html>