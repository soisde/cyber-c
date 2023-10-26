<?php
require_once('class/usuario.php');

$ListaUsuario = new UsuarioClass();
$listaUsuario = $ListaUsuario->ListarUsuario();
?>



<div>


    <td><a class="button" href="index.php?p=usuario&u=inserir">INSERIR</a></td>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Foto</th>
                <th>Email</th>
                <th>senha</th>
                <th>Telefone</th>
                <th>Status</th>
                <th>ATUALIZAR</th>
                <th>DESATIVAR</th>
            </tr>
        </thead>


        <tbody>

            <?php foreach ($listaUsuario as $linha) : ?>

                <tr>
                    <td><?php echo $linha['idUsuario'] ?></td>
                    <td><?php echo $linha['nomeUsuario'] ?></td>
                    <td><?php echo    '<a href="../img/' . $linha['fotoUsuario'] . '" data-lightbox="image-1" data-title="Nome do Usuário">
    <img class="imgTabela" src="../img/' . $linha['fotoUsuario'] . '" alt="' . $linha['fotoUsuario'] . '"></a>' ?></td>
                    <td><?php echo $linha['emailUsuario'] ?></td>
                    <td><?php echo $linha['senhaUsuario'] ?></td>
                    <td><?php echo $linha['foneUsuario'] ?></td>
                    <td><?php echo $linha['statusUsuario'] ?></td>
                    <td><a href="index.php?p=usuario&u=atualizar&id=<?php echo $linha['idUsuario']?>" class="atualizar">ATUALIZAR</a></td>
                    <td><a href="index.php?p=usuario&u=desativar&id=<?php echo $linha['idUsuario']?>" class="desativar">DESATIVAR</a></td>
                </tr>

            <?php endforeach ?>
            
        </tbody>

    </table>
</div>