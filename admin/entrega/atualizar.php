<?php

    $id = $_GET['id'];
    require_once('class/entrega.php');
    $entrega = new EntregaClass($id);

    if(isset($_POST['tituloEntrega'])){

        require_once('class/entrega.php');
      
        $tituloMetodo       = $_POST['tituloEntrega'];
        $subTituloMetodo    = $_POST['subTituloEntrega'];
        $textometodo        = $_POST['textoEntrega']; 
        $statusmetodos      = $_POST['statusEntrega'];
      
        $arquivo            = $_FILES['imgEntrega'];
      
        if($arquivo['error']){
          throw new Exception('Error' . $arquivo['error']);
        }
      
        if(move_uploaded_file($arquivo['tmp_name'],'../img/entrega/' . $arquivo['name'])){
          $imgEntrega = 'entrega/' . $arquivo ['name'];
        }else{throw new Exception('Error: Não foi possível realizar o Upload da img');
        }
      
        $entrega = new entregaClass();
      
        $entrega ->tituloEntrega        = $tituloEntrega;
        $entrega ->subTituloEntrega     = $subTituloEntrega;
        $entrega ->imgEntrega          = $imgEntrega;
        $entrega ->textoEntrega         = $textoEntrega;
        $entrega ->statusEntrega        = $statusEntrega;
      
        $servico -> Atualizar();
    }

?>



<section class="section">

    <form action="index.php?p=entrega&e=atualizar$id=<?php echo $entrega -> idEntrega ?>" method="post" enctype="multipart/form-data">

        <h2>Cadastre Novas Entregas</h2>

        <span></span>

        <div class="form">

            <div class="img">

                <img src="F<?php echo '../img/' . $entrega -> imgEntrega ?>" alt="imagem" id="imagemExibida" name="imgEntrega">
                <input type="file" name="imgServico" id="inputImagem" class="btnimg" required>

            </div>


            <div class="input">

                <label for="titulo">Título:</label>
                <input type="text" name="tituloEntrega" id="subTituloEntrega" value="<?php echo $entrega->tituloEntrega ?>" required>

                <label for="linkServico">Sub-título: </label>
                <input type="text" name="subTituloEntrega" id="subTituloEntrega" value="<?php echo $entrega->subTituloEntrega ?>" required>

                <label for="texto">Texto:</label>
                <textarea name="textoEntrega" id="textoEntrega" cols="30" rows="10" required><?php echo $entrega->textoEntrega?></textarea>

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

    document.getElementById('imagemExibida').addEventListener('click', function(){
        document.getElementById('inputImagem').click();

});

    document.getElementById('inputImagem').addEventListener('change', function(event){
        let imagemExibida = document.getElementById('imagemExibida');
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

 