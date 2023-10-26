<?php

if(isset($_POST['subTituloSolucoes'])){

  require_once('class/solucoes.php');

  $subTituloSolucoes   = $_POST['subTituloSolucoes'];
  $textoSolucoes       = $_POST['textoSolucoes']; 
  $statusSolucoes      = $_POST['statusSolucoes'];




  $solucoes = new SolucoesClass();

  $solucoes ->subTituloSolucoes     = $subTituloSolucoes;

  $solucoes ->textoSolucoes         = $textoSolucoes;
  $solucoes ->statusSolucoes        = $statusSolucoes;

  $solucoes->Inserir();

}


?>


<section class="section">

    <form action="index.php?p=solucoes&s=inserir" method="post" enctype="multipart/form-data">

        <h2>Cadastre Novas Solucoess</h2>

        <span></span>

        <div class="form">



            <div class="input">

                <label for="linkServico">Sub-título: </label>
                <input type="text" name="subTituloSolucoes" id="subTituloSolucoes" required>

                <label for="texto">Texto:</label>
                <textarea name="textoSolucoes" id="textoSolucoes" cols="30" rows="10" required></textarea>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" id="statusSolucoes" name="statusSolucoes" style="width:30px; margin-right: 10px;" value="ATIVO">
                    <label class="form-check-label checkbox" for="autoSizingCheck" >ATIVO</label>
                </div>

                <input class="btn" type="submit" value="Inserir">

            </div>

        </div>

    </form>

</section>
 

 
