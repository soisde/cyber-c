<?php
require_once('class/entrega.php');
$id = $_GET ['id'];
$entrega = new EntregaClass($id);
$entrega->idEntrega = $id;
$entrega->Desativar() ?>