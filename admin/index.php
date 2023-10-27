<?php 

session_start();

if(!isset($_SESSION['login'])) {
header('Location:login.php');
}
require_once('class/login.php');

$usuario = new Login();
$usuario->idUsuario = $_SESSION['idUsuario'];
$dadosUsuario = $usuario->VerificarLogin();
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="css/dashboard.css">
  
    <link rel="stylesheet" href="css/styleForm.css">

</head>
<body>


    <section class="dash">

        <nav>
    
            <img  src="img/logodash.svg" alt="">
    
            <ul>
                <li><a href="index.php?p=dashbord">DashBord</a></li>
                <hr>
                <li><a href="index.php?p=metodo">Metodologia</a></li>
                <hr>
                <li><a href="index.php?p=solucoes">Soluções</a></li>
                <hr>
                <li><a href="index.php?p=entrega">Entrega</a></li>
                <hr>
                <li><a href="index.php?p=orcamento">Orçamento</a></li>
                <hr>
                <li><a href="index.php?p=faq">FAQ</a></li>
                <hr>
                <li><a href="index.php?p=usuario">Usuario</a></li>
                <hr>

            </ul>

        </nav>


        <div class="topo">

            <div class="header">
                
            <img style="width:3%;"src="../img/<?php echo $dadosUsuario['fotoUsuario'];?>">
                <h3><?php echo $dadosUsuario['nomeUsuario']; ?></h3>

            </div>

            <main class="corpo"> 
                
                <?php 

                // Mesma lógica do SE, visto em lógica de programação
                
                $pagina = @$_GET['p'];
                // echo $pagina;
    
                // if($pagina == NULL){
                //     echo "Dasboard";
                // }else{
                //     if ($pagina == 'servico'){
                //         require_once('planilha/servico.php');
                //     }
                // }

                switch ($pagina) {
                    case 'deshbord':
                        require_once('dashbord/dashbord.php');
                        break;

                        case 'metodo':
                          require_once('metodo/metodo.php');
                          break;
                    
                          case 'solucoes':
                            require_once('solucoes/solucoes.php');
                            break;
                    
                            case 'entrega':
                              require_once('entrega/entrega.php');
                              break;
                    
                              case 'orcamento':
                                require_once('orcamento/orcamento.php');
                                break;
                    
                                case 'faq':
                                  require_once('faq/faq.php');
                                  break;

                                  case 'usuario':
                                    require_once('usuario/usuario.php');
                                    break;
                    
                    default:
                    require_once('dashbord/dashbord.php');
    
                        break;
                }
    
    
                
                ?></main>

        </div>



    </section>
    
</body>
</html>