<?php

if(isset($_POST['tituloEntrega'])){

  require_once('class/entrega.php');

  $tituloEntrega      = $_POST['tituloEntrega'];
  $subTituloEntrega   = $_POST['subTituloEntrega'];
  $textoEntrega       = $_POST['textoEntrega']; 
  $statusEntrega      = $_POST['statusEntrega'];



  if(!empty($_FILES['imgEntrega']['name'])){   
  $arquivo            = $_FILES['imgEntrega'];

  if($arquivo['error']){
    throw new Exception('Error' . $arquivo['error']);
  }

  if(move_uploaded_file($arquivo['tmp_name'],'../img/entrega/' . $arquivo['name'])){
    $imgEntrega = 'entrega/' . $arquivo ['name'];
  }else{throw new Exception('Error: Não foi possível realizar o Upload da img');
  }

  }else{
    $imgEntrega = $entrega->imgEntrega;
  }

  $entrega = new EntregaClass();

  $entrega ->tituloEntrega        = $tituloEntrega;
  $entrega ->subTituloEntrega     = $subTituloEntrega;
  $entrega ->imgEntrega           = $imgEntrega;
  $entrega ->textoEntrega         = $textoEntrega;
  $entrega ->statusEntrega        = $statusEntrega;

  $entrega->Inserir();

}


?>


<section class="section">

    <form action="index.php?p=entrega&e=inserir" method="post" enctype="multipart/form-data">

        <h2>Cadastre Novas Entregas</h2>

        <span></span>

        <div class="form">

            <div class="img">

                <img src="img/camera.jpg" alt="imagem" id="imgEntrega" name="imgEntrega">
                <input type="file" name="imgEntrega" id="inputImagem" class="btnimg" >

            </div>


            <div class="input">

                <label for="titulo">Título:</label>
                <input type="text" name="tituloEntrega" id="tituloEntrega" required>

                <label for="linkServico">Sub-título: </label>
                <input type="text" name="subTituloEntrega" id="subTituloEntrega" required>

                <label for="texto">Texto:</label>
                <textarea name="textoEntrega" id="textoEntrega" cols="30" rows="10" required></textarea>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" id="statusEntrega" name="statusEntrega" style="width:30px; margin-right: 10px;" value="ATIVO">
                    <label class="form-check-label checkbox" for="autoSizingCheck" >ATIVO</label>
                </div>

                <input class="btn" type="submit" value="Inserir">

            </div>

        </div>

    </form>

</section>

 <script>
    document.getElementById('imgEntrega').addEventListener('click', function(){
      document.getElementById('inputImagem').click();

    });

    document.getElementById('inputImagem').addEventListener('change', function(event){
   let imagemExibida = document.getElementById('imgEntrega');
   let arquivo = event.target.files[0];

   if(arquivo){
  let carregar = new FileReader();

  carregar.onload = function(e){
    imagemExibida.src = e.target.result;
  };
  carregar.readAsDataURL(arquivo);

   }


    });
 </script>

 

 
