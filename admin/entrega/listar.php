<?php
require_once('class/entrega.php');

$ListaEntrega = new EntregaClass();
$listaEntrega = $ListaEntrega->ListarEntraga();
?>



<div>


    <td><a class="button" href="index.php?p=entrega&e=inserir">INSERIR</a></td>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Sub-Titulo</th>
                <th>Texto</th>
                <th>Status</th>
                <th>ATUALIZAR</th>
                <th>DESATIVAR</th>
            </tr>
        </thead>


        <tbody>

            <?php foreach ($listaEntrega as $linha) : ?>

                <tr>
                    <td><?php echo $linha['idEntrega'] ?></td>
                    <td><?php echo $linha['subTituloEntrega'] ?></td>
                    <td><?php echo $linha['textoEntrega'] ?></td>
                    <td><?php echo $linha['statusEntrega'] ?></td>
                    <td><a href="index.php?p=entrega&e=atualizar&id=<?php echo $linha['idEntrega']?>" class="atualizar">ATUALIZAR</a></td>
                    <td><a href="index.php?p=entrega&e=desativar&id=<?php echo $linha['idEntrega']?>" class="desativar">DESATIVAR</a></td>
                </tr>

            <?php endforeach ?>
            
        </tbody>

    </table>
</div>