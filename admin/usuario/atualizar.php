<?php

$id = $_GET['id'];
require_once('class/usuario.php');
$usuario = new UsuarioClass($id);

if(isset($_POST['nomeUsuario'])){

  $nomeUsuario     =$_POST['nomeUsuario']; 
  $emailUsuario    =$_POST['emailUsuario'];
  $foneUsuario     =$_POST['foneUsuario'];
  $senhaUsuario    =$_POST['senhaUsuario'];
  $statusUsuario   =$_POST['statusUsuario'];


  if(!empty($_FILES['fotoUsuario']['name'])){

    $arquivo  = $_FILES['fotoUsuario'];

    if ($arquivo['error']) {
        throw new Exception('Error' . $arquivo['error']);
    }
    if (move_uploaded_file($arquivo['tmp_name'], '../img/fotoUsuario/' . $arquivo['name'])) {
        $fotoUsuario = 'fotoUsuario/' . $arquivo['name'];
    } else {
        throw new Exception('Error: Não foi possivel realizar o Upload da imagem');
    }
}else{

    $fotoUsuario = $usuario->fotoUsuario;
}



  $usuario->nomeUsuario  = $nomeUsuario;
  $usuario->fotoUsuario   = $fotoUsuario;
  $usuario->emailUsuario = $emailUsuario;
  $usuario->foneUsuario = $foneUsuario;
  $usuario->senhaUsuario = $senhaUsuario;
  $usuario->statusUsuario = $statusUsuario;

  $usuario->Atualizar();

}


?>


<section class="section">

<<<<<<< HEAD
    <form action="index.php?p=usuario&u=atualizar&id=<?php echo $usuario->idUsuario?>" method="post" enctype="multipart/form-data">
=======
<<<<<<< HEAD
    <form action="index.php?p=usuario&u=atualizar&id=<?php echo $usuario->idUsuario?>" method="post" enctype="multipart/form-data">
=======
    <form action="index.php?p=usuario&u=atualizar&id=<?php echo $usuario -> idUsuario ?>" method="post" enctype="multipart/form-data">
>>>>>>> 539a96932d4ccd59691abb140a3082b48f69d7ae
>>>>>>> 22aaec47541840dbacfceae7dc4152489de27b29

        <h2>Cadastre Novas Entregas</h2>

        <span></span>

        <div class="form">



            <div class="input">


            <label for="linkServico">Nome: </label>
<<<<<<< HEAD
                <input type="text" name="nomeUsuario" id="nomeUsuario" value="<?php echo $usuario->nomeUsuario?>" required>
=======
<<<<<<< HEAD
                <input type="text" name="nomeUsuario" id="nomeUsuario" value="<?php echo $usuario->nomeUsuario?>" required>
=======
                <input type="text" name="nomeUsuario " id="nomeUsuario" value="<?php echo $usuario->nomeUsuario ?>" required>
>>>>>>> 539a96932d4ccd59691abb140a3082b48f69d7ae
>>>>>>> 22aaec47541840dbacfceae7dc4152489de27b29

                <div class="col-sm-4">
                        <div>
                            <label for="imagem">Imagem:</label>
<<<<<<< HEAD
                            <img src="<?php echo '../img/' . $usuario->fotoUsuario?>" alt="Imagem" class="img-fluid" id="fotoUsuario">
                            <input type="file" id="inputImagem" name ="fotoUsuario" style="display: none;">
=======
<<<<<<< HEAD
                            <img src="<?php echo '../img/' . $usuario->fotoUsuario?>" alt="Imagem" class="img-fluid" id="fotoUsuario">
                            <input type="file" id="inputImagem" name ="fotoUsuario" style="display: none;">
=======
                            <img src="<?php echo '../img/' . $usuario->fotoUsuario ?>" alt="Imagem" class="img-fluid" id="fotoUsuario">
                            <input type="file" id="inputImagem" name ='fotoUsuario' style="display: none;">
>>>>>>> 539a96932d4ccd59691abb140a3082b48f69d7ae
>>>>>>> 22aaec47541840dbacfceae7dc4152489de27b29
                        </div>
                    </div>

                <label for="linkServico">Email: </label>
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 22aaec47541840dbacfceae7dc4152489de27b29
                <input type="text" name="emailUsuario" id="emailUsuario" value="<?php echo $usuario->emailUsuario?>" required>

                <label for="linkServico">Senha: </label>
                <input type="text" name="senhaUsuario" id="senhaUsuario" value="<?php echo $usuario->senhaUsuario?>" required>

                <label for="linkServico">Telefone: </label>
                <input type="text" name="foneUsuario" id="foneUsuario" value="<?php echo $usuario->foneUsuario?>" required>
<<<<<<< HEAD
=======
=======
                <input type="text" name="emailUsuario " id="emailUsuario" value="<?php echo $usuario->emailUsuario?>" required>

                <label for="linkServico">Telefone: </label>
                <input type="text" name="foneUsuario " id="foneUsuario" value="<?php echo $usuario->foneUsuario?>" required>
>>>>>>> 539a96932d4ccd59691abb140a3082b48f69d7ae
>>>>>>> 22aaec47541840dbacfceae7dc4152489de27b29

                <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" id="statusUsuario" name="statusUsuario" style="width:30px; margin-right: 10px;" value="ATIVO">
                    <label class="form-check-label checkbox" for="autoSizingCheck" >ATIVO</label>
                </div>

                <input class="btn" type="submit" value="Inserir">

            </div>

        </div>

    </form>

</section>

<script>

    // FORMULARIO DO INSERIR QUE DEIXE A IMG A MOSTRA
    document.getElementById('fotoUsuario').addEventListener('click', function() {
        document.getElementById('inputImagem').click();
    });
    document.getElementById('inputImagem').addEventListener('change', function(event) {
        let imagemExibida = document.getElementById('fotoUsuario');
        let arquivo = event.target.files[0];
        if (arquivo) {
            // alert("OK");
            let carregar = new FileReader();
            carregar.onload = function(e) {
                imagemExibida.src = e.target.result;
            }
            carregar.readAsDataURL(arquivo)
        }
    });

</script>