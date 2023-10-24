<?php

if(isset($_POST['subTituloEntrega'])){

  require_once('class/entrega.php');

  $subTituloEntrega   = $_POST['subTituloEntrega'];
  $textoEntrega       = $_POST['textoEntrega']; 
  $statusEntrega      = $_POST['statusEntrega'];




  $entrega = new EntregaClass();

  $entrega ->subTituloEntrega     = $subTituloEntrega;

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



            <div class="input">

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
 

 
