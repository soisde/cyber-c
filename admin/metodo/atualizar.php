<?php
$id = $_GET['id'];
require_once('class/metodo.php');
$metodo = new MetodosClass($id);

if (isset($_POST['tituloMetodo'])) {
  $tituloMetodo = $_POST['tituloMetodo'];
  $textoMetodo = $_POST['textoMetodo'];
  $statusMetodo = $_POST['statusMetodo'];

  $metodo->tituloMetodo = $tituloMetodo;
  $metodo->textoMetodo = $textoMetodo;
  $metodo->statusMetodo = $statusMetodo;

  $metodo->Atualizar();
}
?>
<section class="section">
  <form action="index.php?p=metodo&m=atualizar&id=<?php echo $metodo->idMetodo ?>" method="post" enctype="multipart/form-data">
    <h2>Atualize os Dados do Método</h2>
    <span></span>
    <div class="form">
      <div class="input">
        <label for="tituloMetodo">Título:</label>
        <input type="text" name="tituloMetodo" id="tituloMetodo" value="<?php echo $metodo->tituloMetodo ?>" required>
        <label for="textoMetodo">Texto:</label>
        <textarea name="textoMetodo" id="textoMetodo" cols="30" rows="10" required><?php echo $metodo->textoMetodo ?></textarea>
        <div class="form-check mb-2">
          <input class="form-check-input" type="checkbox" id="statusMetodo" name="statusMetodo" style="width:30px; margin-right: 10px;" value="ATIVO">
          <label class="form-check-label checkbox" for="statusMetodo">ATIVO</label>
        </div>
        <input class="btn" type="submit" value="Atualizar">
      </div>
    </div>
  </form>
</section>
