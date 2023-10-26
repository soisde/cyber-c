<?php 

require_once('conexao.php');

class MetodosClass{
    // ATRIBUTOS
    
public $idMetodo;
public $tituloMetodo;
public $textoMetodo;
public $statusMetodo;




    //MÉTODOS
    public function __construct($id = false)
    {
        if($id){
            $this->idMetodo = $id;
            $this->Carregar();
        }
    }

    public function ListarMetodo() {
        $query = "SELECT * FROM tblmetodo WHERE statusMetodo= 'ATIVO' ORDER BY idMetodo";
        $conn = Conexao :: LigarConexao();
        $resultado = $conn ->query($query);
        $listaMetodo = $resultado->fetchAll();
        return $listaMetodo;

    }
    public function Inserir(){
        $query = "INSERT INTO tblmetodo(
                tituloMetodo, 
                textoMetodo, 
                statusMetodo) 

        VALUES (
            '" . $this->tituloMetodo . "',
            '" . $this->textoMetodo . "',
            '" . $this->statusMetodo . "'
            )";

        $conn = Conexao::LigarConexao();
        $conn->exec($query);
        echo "<script>document.location='index.php?p=metodo'</script>";
    }
    public function Carregar(){
        $query = "SELECT * FROM tblmetodo WHERE idMetodo =" . $this->idMetodo;
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $listaMetodo = $resultado->fetchAll();

        foreach($listaMetodo as $linha){

            $this->tituloMetodo                = $linha['tituloMetodo'];
            $this->textoMetodo                 = $linha['textoMetodo'];
            $this->statusMetodo                = $linha['statusMetodo'];
        }

}
 
public function Atualizar(){

    $query = "UPDATE tblmetodo SET
                tituloMetodo     = '".$this -> tituloMetodo."',
                textoMetodo    = '".$this -> textoMetodo."',
                statusMetodo    = '".$this -> statusMetodo."'

                WHERE tblmetodo.idMetodo = " . $this -> idMetodo;

            $conn = Conexao::LigarConexao();
            $conn->exec($query);

            echo "<script>document.location='index.php?p=metodo'</script>";

}

public function Desativar(){
    $query = "UPDATE tblmetodo SET 
    statusMetodo  = 'DESATIVADO'
    WHERE tblmetodo.idMetodo = ". $this->idMetodo;

     $conn = Conexao::LigarConexao();
     $conn->exec($query);
     echo "<script> document.location='index.php?p=metodo'</script>";

}
}