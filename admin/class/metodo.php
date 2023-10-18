<?php 

require_once('conexao.php');

class MetodosClass{
    // ATRIBUTOS
    
public $idMetodo;
public $tituloMetodo;
public $textoMetodo;
public $statusMetodo;
public $linkMetodo;
public $imgMetodo;




    //MÉTODOS

    public function ListarMetodo() {
        $query = "SELECT * FROM tblmetodo WHERE statusMetodo= 'ATIVO' ORDER BY tituloMetodo";
        $conn = Conexao :: LigarConexao();
        $resultado = $conn ->query($query);
        $lista = $resultado->fetchAll();
        return $lista;

    }

    public function Inserir(){
        $query = "INSERT INTO tblmetodo (tituloMetodo, textoMetodo, statusMetodo, linkMetodo, imgMetodo) VALUES ('".$this->tituloMetodo."',
        '".$this->textoMetodo."', '".$this->statusMetodo."', '".$this->linkMetodo."', '".$this->imgMetodo."');";
        
        $conn = Conexao:: LigarConexao();
        $conn->exec($query);
        echo " <script> document.location='index.php?p=metodo&m=inserir'</script>";

    }
}