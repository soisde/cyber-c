 <!-- Como Trabalhamos -->
    <section class="Aentrega site" id="entrega">

      <div class="entregamos site">
        <img data-aos="zoom-in-right" src="img/banner/banner4.png" alt="">

        <div class="txtEntrega" >
        <h2><i class="fa-solid fa-list-check" style="color:  #000000;"></i> A entrega</h2>
          <?php foreach ($listaEntrega as $linha) : ?>

          <h3><?php echo $linha['subTituloEntrega'] ?></h3>
          <p><?php echo $linha['textoEntrega'] ?></p>
          <?php endforeach; ?>
        </div>
      </div>

    </section>
