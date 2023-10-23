<?php 

require_once('conexao.php');

class ProjetosClass{
    // ATRIBUTOS
    
public $idprojetos;
public $tituloprojetos;
public $imgprojeto;
public $urlprojeto;
public $statusprojetos;


    //MÉTODOS

    public function Listar() {
        $query = "SELECT `statusprojetos` FROM `tblprojetos` WHERE idprojetos = 1 ORDER BY tituloprojetos";
        $conn = Conexao :: LigarConexao();
        $resultado = $conn ->query($query);
        $lista = $resultado->fetchAll();
        return $lista;

    }
}