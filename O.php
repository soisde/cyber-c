
<?php 

require_once('admin/class/metodo.php');

$listaMetodo = new MetodosClass ();
$listar = $listaMetodo->ListarMetodo();
//var_dump($listar);

require_once('admin/class/entrega.php');

$ListaEntrega = new EntregaClass ();
$listaEntrega = $ListaEntrega->ListarEntraga();

require_once('admin/class/solucoes.php');
$ListaSolucoes = new SolucoesClass();
$ListaSolucoes = $ListaSolucoes->ListarSolucoes();

?>




<?php

//Import PHPMailer classes into the global namespace

//These must be at the top of your script, not inside a function

use PHPMailer\PHPMailer\PHPMailer;

use PHPMailer\PHPMailer\SMTP;

use PHPMailer\PHPMailer\Exception;

$ok = 0;

if (isset($_POST['email'])) {

  //Load Composer's autoloader

  require './mailer/Exception.php';

  require './mailer/PHPMailer.php';

  require './mailer/SMTP.php';

  //Create an instance; passing `true` enables exceptions

  $mail = new PHPMailer(true);

  try {

    //Server settings

    //  $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output

    $mail->isSMTP();                                            //Send using SMTP

    $mail->Host       = 'smtp.hostinger.com';                     //Set the SMTP server to send through

    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication

    $mail->Username   = 'cybercompany@smpsistema.com.br';                     //SMTP username

    $mail->Password   = 'Senac@agencia02';                               //SMTP password

    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption

    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`


    //Recipients

    $mail->setFrom('cybercompany@smpsistema.com.br', 'Mailer');

    $mail->addAddress('lucas.oliveira9712@gmail.com', 'Joe User');     //Add a recipient

    //$mail->addAddress('ellen@example.com');               //Name is optional

    //$mail->addReplyTo('info@example.com', 'Information');

    //$mail->addCC('cc@example.com');

    //$mail->addBCC('bcc@example.com');

    //Attachments

    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments

    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content

    $nome = $_POST['nome'];

    $email = $_POST['email'];

    $tel = $_POST['tel'];

    $mens = $_POST['mens'];


    $mail->CharSet = 'UTF-8';                                  //Set email format to HTML

    $mail->isHTML(true);                                  //Set email format to HTML

    $mail->Subject = 'Cyber Company';

    $mail->Body    = "
    Nome: $nome <br>

    E-mail: $email <br>

    Telefone: $tel <br>

    Mensagem: $mens";

    $mail->AltBody = "
    Nome: $nome <br>

    E-mail: $email <br>

    Telefone: $tel <br>

    Mensagem: $mens";

    $mail->send();

    $ok = 1;

    //echo 'Messagem enviada com sucesso';

  } catch (Exception $e) {
    $ok = 2;
    //echo "zaralho fiote : {$mail->ErrorInfo}";

  }
}

?>





<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cyber</title>

  <link rel="stylesheet" href="css/reset.css" />
  <link rel="stylesheet" type="text/css" href="css/slick.css" />
  <link rel="stylesheet" type="text/css" href="css/slick-theme.css" />
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="css/style-O.phpcolaboradores.css" />
</head>
<!--
  :root{
  #0b3961;
  #36393b;
  #fefffe;
  #000000;
  #171717;
  #d6e9ff;
  #00296b;
  #ffd500
  #F7AEF8
  #B388EB
  #8093F1
  #72DDF7
  #5F0A87;
  #2F004F;
}
-->

<body>

  <!-- topo -->

  <?php require_once('conteudo/topo.php'); ?>

  <main>

    <!-- sobre -->

    <!-- orcamento -->

    <section class="orcamentos" id="orca">

<div class="orcamentoP site">

  <div class="txtOrcaP" data-aos="zoom-in-right">
    <h2><i class="fa-sharp fa-regular fa-credit-card" style="color:  #000000;"
        style="margin-right: 2px;"></i> Orçamento</h2>

    <h3><i class="fa-solid fa-comments" style="color: #000000;" style="margin-right: 2px;"></i></i> Briefing</h3>
    <p>Vou falar um pouco sobre o que iremos fazer. Basicamente, quando eu digo "briefing", nós iremos marcar uma
      reunião para conversarmos sobre o projeto e também para nos conhecermos melhor, a fim de entendermos o que
      você deseja e ai iremos trabalhar no projeto.
    </p>

    <h3><i class="fa-solid fa-pencil" style="color: #000000;" style="margin-right: 2px;"></i></i> Wireframe</h3>
    <p>Wireframe nada mais é do que um rascunho de como o site será de acordo com o que conversarmos na reunião.
    </p>

    <h3><i class="fa-solid fa-laptop" style="color: #000000;" style="margin-right: 2px;"></i></i> Layout + Design
    </h3>
    <p>Depois dessas duas etapas, iremos fazer o layout e o design de acordo com o wireframe e as informações que
      temos.</p>
  </div>
</div>
<div class="vermaisOrca" >
          <ul><a class="faqFalarAgora" href="https://chat.whatsapp.com/DgA560gRkon69bio8scEZN">Falar agora</a></ul>
        </div>

</section>
     <!-- formulario -->

     <section class="formulario">
    <div class="site">
        <h2>Vamos fechar negócio?</h2>
        <div>
            <form action="#" method="POST">
                <div>
                <input type="text" id="nome" name="nome" placeholder="nome">
                <input type="email" id="email" name="email" required placeholder="e-mail">
                <input type="tel" id="tel" name="tel" placeholder="telefone">
                
                </div>
                <div>
                    <textarea name="mens" id="mens" cols="30" rows="10" placeholder=" mensagem"></textarea>
                    <div>
                    <input type="submit" value="via e-mail">
                    <button onclick="event.preventDefault(); formWhats()">whatsapp</button>
                    </div>
            </form>            
        </div>
    </div>
</section>


    <!-- metodo -->

    <?php require_once('conteudo/metodo.php'); ?>

    <!-- entrega -->

    <?php require_once('conteudo/entrega.php'); ?>

    <!-- Solucoes -->

    <?php require_once('conteudo/solucoes.php'); ?>


    <!-- Projetos -->

    <?php require_once('conteudo/projetos.php'); ?>

    <!--https://codepen.io/AbubakerSaeed/pen/rNNdvqz   galeria tirada desse link onde eu alterei ela para o projeto-->
    <div class="h1">
    <h1>Colaboradores</h1>
    </div>
    <section class="main">
<ul><a href="https://cybercompany.smpsistema.com.br/_lucas/agencia-tipi01/" target="_blank" rel="noopener noreferrer">
  <div class="wrap wrap--1">
    <div class="container container--1">
     <p>Lucas</p>
    </div>
  </div>
  </a></ul>

  <ul><a href="https://cybercompany.smpsistema.com.br/_nata/agenciaTipi/" target="_blank" rel="noopener noreferrer">
  <div class="wrap wrap--2">
    <div class="container container--2">
     <p>Nãta</p>
    </div>
  </div>
  </a></ul>

  <ul><a href="https://cybercompany.smpsistema.com.br/_gabriel_vasc/" target="_blank" rel="noopener noreferrer">
  <div class="wrap wrap--3">
    <div class="container container--3">
     <p>Gabriel</p>
    </div>
  </div>
  </a></ul>

  <ul><a href="https://cybercompany.smpsistema.com.br/_kaio/Ag%C3%AAncia-TIPI.php/" target="_blank" rel="noopener noreferrer">
  <div class="wrap wrap--4">
    <div class="container container--4">
     <p>Kaio</p>
    </div>
  </div>
  </a></ul>

</section>



    <!-- redes -->

    <?php require_once('conteudo/redes.php'); ?>

    <footer>

       <!-- faq -->

    <?php require_once('conteudo/faq.php'); ?>


    </footer>


    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

    <script src="js/slick.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="js/animacoes.js"></script>
</body>

</html>



