<?php

if (isset($_POST['tituloMetodo'])) {

  require_once('class/metodo.php');
  $tituloMetodo   = $_POST['tituloMetodo'];
  $textoMetodo   = $_POST['textoMetodo'];
  $statusMetodo  = $_POST['statusMetodo'];

  

  $metodo = new MetodosClass();

  $metodo->tituloMetodo  = $tituloMetodo;
  $metodo->textoMetodo = $textoMetodo;
  $metodo->statusMetodo = $statusMetodo;

  $metodo->Inserir();
}


?>
<section class="section">

<form action="index.php?p=metodo&m=inserir" method="post" enctype="multipart/form-data">

    <h2>Cadastre Novos Metosdos</h2>

    <span></span>

    <div class="form">

        <div class="input">

            <label for="titulo">Título:</label>
            <input type="text" name="tituloMetodo" id="tituloMetodo" required>

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