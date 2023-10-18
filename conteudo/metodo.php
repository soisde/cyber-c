<div class="site metodo" id="metodo">

<?php  foreach( array_slice($listar, 0, 3) as $linha): ?>


        <div class="card" data-aos="zoom-in">
          <div class="content">
           <h3 class="heading"> <?php echo $linha ['tituloMetodo']?> </h3> 
            <p class="para">
            <?php echo $linha ['textoMetodo'] ?>
            </p>
          </div>
        </div>


        <?php endforeach; ?>
      </div>
    </section>