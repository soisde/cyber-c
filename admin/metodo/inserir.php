M<?php

if (isset($_POST['tituloMetodo'])) {

  require_once('class/metodo.php');
  $tituloMetodo   = $_POST['tituloMetodo'];
  $textoMetodo   = $_POST['textoMetodo'];
  $statusMetodo  = $_POST['statusMetodo'];
  $linkMetodo    = $_POST['linkMetodo'];

  $arquivo = $_FILES['imgMetodo'];

  if ($arquivo['error']) {
    throw new Exception('Error' . $arquivo['error']);
  }

  if (move_uploaded_file($arquivo['tmp_name'], '../img/metodo/' . $arquivo['name'])) {
    $imgmetodo = 'metodo/' . $arquivo['name'];
  } else {
    throw new Exception('Error: Não foi possível realizar o Upload da img');
  }

  $metodo = new MetodosClass();
  $metodo->tituloMetodo  = $tituloMetodo;
  $metodo->textoMetodo = $textoMetodo;
  $metodo->statusMetodo = $statusMetodos;
  $metodo->linkMetodo = $linkMetodo;

  $metodo->Inserir();
}


?>
<section class="section">

<form action="index.php?p=metodo&m=inserir" method="post" enctype="multipart/form-data">

    <h2>Cadastre Novos Metosdos</h2>

    <span></span>

    <div class="form">

        <div class="img">

            <img src="img/camera.jpg" alt="imagem" id="imgMetodo" name="imgMetodo">
            <input type="file" name="imgMetodo" id="inputImagem" class="btnimg" >

        </div>


        <div class="input">

            <label for="titulo">Título:</label>
            <input type="text" name="tituloMetodo" id="tituloMetodo" required>

            <label for="linkServico">Sub-título: </label>
            <input type="text" name="subTituloMetodo" id="subTituloMetodo" required>

            <label for="texto">Texto:</label>
            <textarea name="textoMetodo" id="textoMetodo" cols="30" rows="10" required></textarea>
            <div class="form-check mb-2">
                <input class="form-check-input" type="checkbox" id="statusMetodo" name="statusMetodo" style="width:30px; margin-right: 10px;" value="ATIVO">
                <label class="form-check-label checkbox" for="autoSizingCheck" >ATIVO</label>
            </div>

            <input class="btn" type="submit" value="Inserir">

        </div>

    </div>

</form>

</section>

<script>
  document.getElementById('imagemExibida').addEventListener('click', function() {
    document.getElementById('inputImagem').click();
    // alert('test img')

  });

  document.getElementById('inputImagem').addEventListener('change', function(event) {
    let imagemExibida = document.getElementById('imagemExibida');
    let arquivo = event.target.files[0];

    if (arquivo) {
      //alert('ok')
      let carregar = new FileReader();

      carregar.onload = function(e) {
        imagemExibida.src = e.target.result;
      };
      carregar.readAsDataURL(arquivo);

    }


  });
</script>