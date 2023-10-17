<?php

if (isset($_POST['tituloMetodo'])) {

  require_once('class/metodo.php');
  $tituloMetodo   = $_POST['tituloMetodo'];
  $textometodo   = $_POST['textometodo'];
  $statusmetodos  = $_POST['statusmetodos'];
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
  $metodo->textometodo = $textometodo;
  $metodo->statusmetodos = $statusmetodos;
  $metodo->linkMetodo = $linkMetodo;

  $metodo->Inserir();
}


?>
<form action="index.php?p=metodo&s=inserir" method="POST" enctype="multipart/form-data">
  <section class="formInserir">
    <div class="conteiner">
      <div class="mb-3">

        <label for="exampleFormControlInput1" class="form-label"></label>
        <input required type="text" class="form-control" id="exampleFormControlInput1" placeholder="Titulo">
        <select required class="form-select" aria-label="Default select example">
          <option selected>Status</option>
          <option value="1">Ativo</option>
          <option value="2">Inativo</option>
          <option value="3">Desativado</option>
        </select>

      </div>
      <div class="mb-2">
        <label for="exampleFormControlTextarea1" class="form-label"></label>
        <textarea required class="form-control" placeholder="Texto" id="exampleFormControlTextarea1" rows="3"></textarea>
        <input type="link" class="form-control" id="exampleFormControlInput1" placeholder="Link">

      </div>
    </div>


    <button type="submit" class="btn btn-outline-light">Inserir</button>

    <div class="imgbtn">
      <label required for="imagem"></label>
      <img src="img\211677_image_icon.png" alt="Imagem" class="img-fluid" id="imagemExibida">
      <input type="file" id="inputImagem" style="display: none;">

    </div>
  </section>

</form>

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