<?php 
require_once('class/metodo.php');

$listaMetodo = new MetodosClass();
$lista = $listaMetodo->ListarMetodo();
//var_dump($listar);
?>

<div>


<td><a class="button" href="index.php?p=metodo&m=inserir">INSERIR</a></td>
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>TITULO</th>
                <th>TEXTO</th>
                <th>STATUS</th>
                <th>ATUALIZAR</th>
                <th>DESATIVAR</th>
            </tr>
        </thead>


        <tbody>
            <?php foreach($lista as $linha): ?>
            <tr>
                <td><?php echo $linha['idMetodo'] ?></td>
                <td><?php echo $linha['tituloMetodo'] ?></td>
                <td><?php echo $linha['textoMetodo'] ?></td>
                <td><?php echo $linha['statusMetodo'] ?></td>
                <td><a href="index.php?p=metodo&m=atualizar&id=<?php echo $linha['idMetodo']?>" class="atualizar">ATUALIZAR</a></td>
                <td><a href="index.php?p=metodo&m=desativar&id=<?php echo $linha['idMetodo']?>" class="desativar">DESATIVAR</a></td>
            </tr>
            <?php endforeach ?>
        </tbody>






    </table>
</div>