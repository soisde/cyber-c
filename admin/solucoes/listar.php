<?php
require_once('class/solucoes.php');

$ListaSolucoes = new SolucoesClass();
$ListaSolucoes = $ListaSolucoes->ListarSolucoes();
?>



<div>


    <td><a class="button" href="index.php?p=S$solucoes&e=inserir">INSERIR</a></td>

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

            <?php foreach ($ListaSolucoes as $linha) : ?>

                <tr>
                    <td><?php echo $linha['idSolucoes'] ?></td>
                    <td><?php echo $linha['subTituloSolucoes'] ?></td>
                    <td><?php echo $linha['textoSolucoes'] ?></td>
                    <td><?php echo $linha['statusSolucoes'] ?></td>
                    <td><a href="index.php?p=solucoes&s=atualizar&id=<?php echo $linha['idSolucoes']?>" class="atualizar">ATUALIZAR</a></td>
                    <td><a href="index.php?p=solucoes&s=desativar&id=<?php echo $linha['idSolucoes']?>" class="desativar">DESATIVAR</a></td>
                </tr>

            <?php endforeach ?>
            
        </tbody>

    </table>
</div>