<?php
require_once('class/solucoes.php');
$id = $_GET ['id'];
$solucoes = new SolucoesClass($id);
$solucoes->idSolucoes = $id;
$solucoes->Desativar() ?>