<?php
require_once('class/metodo.php');
$id = $_GET ['id'];
$metodo = new MetodosClass($id);
$metodo->idMetodo = $id;
$metodo->Desativar() ?>