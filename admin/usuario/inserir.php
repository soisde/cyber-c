<?php

if(isset($_POST['nomeUsuario'])){

  require_once('class/usuario.php');


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
    if (move_uploaded_file($arquivo['tmp_name'], '../img/usuario/' . $arquivo['name'])) {
        $fotoUsuario = 'fotoUsuario/' . $arquivo['name'];
    } else {
        throw new Exception('Error: Não foi possivel realizar o Upload da imagem');
    }
}else{

    $fotoUsuario = $usuario->fotoUsuario;
}


  $usuario = new UsuarioClass();

  $usuario->nomeUsuario  = $nomeUsuario;
  $usuario->fotoUsuario   = $fotoUsuario;
  $usuario->emailUsuario = $emailUsuario;
  $usuario->foneUsuario = $foneUsuario;
  $usuario->senhaUsuario = $senhaUsuario;
  $usuario->statusUsuario = $statusUsuario;

  $usuario->Inserir();

}


?>


<section class="section">

    <form action="index.php?p=usuario&u=inserir" method="post" enctype="multipart/form-data">

        <h2>Cadastre Novos Usuarios</h2>

        <span></span>

        <div class="form">



            <div class="input">


            <label for="linkServico">Nome: </label>
                <input type="text" name="nomeUsuario" id="nomeUsuario" required>

                <div class="col-sm-4">
                        <div>
                            <label for="imagem">Imagem:</label>
                            <img src="img/sem-foto.jpg" alt="Imagem" class="img-fluid" id="fotoUsuario">
                            <input type="file" id="inputImagem" name ='fotoUsuario' style="display: none;">
                        </div>
                    </div>

                <label>Email: </label>
                <input type="text" name="emailUsuario" id="emailUsuario" required>

                <label>Senha: </label>
                <input type="text" name="senhaUsuario" id="senhaUsuario" required>

                <label>Telefone: </label>
                <input type="text" name="foneUsuario" id="foneUsuario" required>

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