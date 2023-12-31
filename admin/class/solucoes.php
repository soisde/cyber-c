<?php

require_once('conexao.php');

class SolucoesClass
{
    // ATRIBUTOS

    public $idSolucoes;
    public $subTituloSolucoes;
    public $textoSolucoes;
    public $statusSolucoes;


    //MÉTODOS
    public function __construct($id = false)
    {
        if($id){
            $this->idSolucoes = $id;
            $this->Carregar();
        }
    }
    public function ListarSolucoes()
    {

        $query = "SELECT * FROM tblsolucoes WHERE statusSolucoes= 'ATIVO'";

        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $listaSolucoes = $resultado->fetchAll();
        return $listaSolucoes;
    }

    public function Inserir(){
        $query = "INSERT INTO tblsolucoes(
                subTituloSolucoes, 
                textoSolucoes, 
                statusSolucoes) 

        VALUES (
            '" . $this->subTituloSolucoes . "',
            '" . $this->textoSolucoes . "',
            '" . $this->statusSolucoes . "')";

        $conn = Conexao::LigarConexao();
        $conn->exec($query);
<<<<<<< HEAD
        echo "<script>document.location='index.php?p=solucoes'</script>";
=======
<<<<<<< HEAD
        echo "<script>document.location='index.php?p=solucoes'</script>";
=======
        echo "<script>document.location='index.php?p=Solucoes'</script>";
>>>>>>> 539a96932d4ccd59691abb140a3082b48f69d7ae
>>>>>>> 22aaec47541840dbacfceae7dc4152489de27b29
    }

    public function Carregar(){
        $query = "SELECT * FROM tblsolucoes WHERE idSolucoes =" . $this->idSolucoes;
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $listaSolucoes = $resultado->fetchAll();

        foreach($listaSolucoes as $linha){

            $this->subTituloSolucoes             = $linha['subTituloSolucoes'];
            $this->textoSolucoes                 = $linha['textoSolucoes'];
            $this->statusSolucoes                = $linha['statusSolucoes'];
        }

}
 
public function Atualizar(){

    $query = "UPDATE tblsolucoes SET

                subTituloSolucoes   = '".$this->subTituloSolucoes."',
                textoSolucoes    = '".$this->textoSolucoes."',
                statusSolucoes    = '".$this->statusSolucoes."'
                WHERE idSolucoes = " .$this->idSolucoes;

            $conn = Conexao::LigarConexao();
            $conn->exec($query);

<<<<<<< HEAD
            echo "<script>document.location='index.php?p=solucoes'</script>";
=======
<<<<<<< HEAD
            echo "<script>document.location='index.php?p=solucoes'</script>";
=======
            echo "<script>document.location='index.php?p=Solucoes'</script>";
>>>>>>> 539a96932d4ccd59691abb140a3082b48f69d7ae
>>>>>>> 22aaec47541840dbacfceae7dc4152489de27b29

}

public function Desativar(){
<<<<<<< HEAD
    $query = "UPDATE tblsolucoes SET 
=======
<<<<<<< HEAD
    $query = "UPDATE tblsolucoes SET 
=======
    $query = "UPDATE tblsplucoes SET 
>>>>>>> 539a96932d4ccd59691abb140a3082b48f69d7ae
>>>>>>> 22aaec47541840dbacfceae7dc4152489de27b29
    statusSolucoes  = 'DESATIVADO'
    WHERE idSolucoes = ". $this->idSolucoes;

     $conn = Conexao::LigarConexao();
     $conn->exec($query);
<<<<<<< HEAD
     echo "<script>document.location='index.php?p=solucoes'</script>";
=======
<<<<<<< HEAD
     echo "<script>document.location='index.php?p=solucoes'</script>";
=======
     echo "<script>document.location='index.php?p=Solucoes'</script>";
>>>>>>> 539a96932d4ccd59691abb140a3082b48f69d7ae
>>>>>>> 22aaec47541840dbacfceae7dc4152489de27b29

}
}
