<?php

require_once('conexao.php');

class EntregaClass
{
    // ATRIBUTOS

    public $idEntrega;
    public $imgEntrega;
    public $descricaoImgEntrega	;
    public $tituloEntrega;
    public $subTituloEntrega;
    public $textoEntrega;
    public $statusEntrega;


    //MÉTODOS
    public function __construct($id = false)
    {
        if($id){
            $this->idEntrega = $id;
            $this->Carregar();
        }
    }
    public function ListarEntraga()
    {

        $query = "SELECT * FROM tblentrega WHERE statusEntrega= 'ATIVO'";

        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $listaEntrega = $resultado->fetchAll();
        return $listaEntrega;
    }

    public function Inserir(){
        $query = "INSERT INTO tblentrega(
                subTituloEntrega, 
                textoEntrega, 
                statusEntrega) 

        VALUES (
            '" . $this->subTituloEntrega . "',
            '" . $this->textoEntrega . "',
            '" . $this->statusEntrega . "')";

        $conn = Conexao::LigarConexao();
        $conn->exec($query);
        echo "<script>document.location='index.php?p=entrega'</script>";
    }

    public function Carregar(){
        $query = "SELECT * FROM tblentrega WHERE idEntrega =" . $this->idEntrega;
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $listaEntrega = $resultado->fetchAll();

        foreach($listaEntrega as $linha){

            $this->subTituloEntrega             = $linha['subTituloEntrega'];
            $this->textoEntrega                 = $linha['textoEntrega'];
            $this->statusEntrega                = $linha['statusEntrega'];
        }

}
 
public function Atualizar(){

    $query = "UPDATE tblentrega SET

                subTituloEntrega   = '".$this->subTituloEntrega."',
                textoEntrega    = '".$this->textoEntrega."',
                statusEntrega    = '".$this->statusEntrega."'
                WHERE idEntrega = " .$this->idEntrega;

            $conn = Conexao::LigarConexao();
            $conn->exec($query);

            echo "<script>document.location='index.php?p=entrega'</script>";

}

public function Desativar(){
    $query = "UPDATE tblentrega SET 
    statusEntrega  = 'DESATIVADO'
    WHERE idEntrega = ". $this->idEntrega;

     $conn = Conexao::LigarConexao();
     $conn->exec($query);
     echo "<script>document.location='index.php?p=entrega'</script>";

}
}
