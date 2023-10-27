<?php

require_once('conexao.php');

class UsuarioClass
{
    // ATRIBUTOS

    public $idUsuario;
    public $nomeUsuario;
    public $fotoUsuario;
    public $emailUsuario;
    public $foneUsuario;
    public $senhaUsuario;
    public $statusUsuario;


    //MÉTODOS
    public function __construct($id = false)
    {
        if ($id) {
            $this->idUsuario = $id;
            $this->Carregar();
        }
    }

    public function Carregar()
    {
        $query = "SELECT * FROM tblusuario WHERE idUsuario =" . $this->idUsuario;
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $listaUsuario = $resultado->fetchAll();

        foreach ($listaUsuario as $linha) {


            $this->nomeUsuario     =$linha['nomeUsuario']; 
            $this->fotoUsuario     =$linha['fotoUsuario'];
            $this->emailUsuario    =$linha['emailUsuario'];
            $this->foneUsuario     =$linha['foneUsuario'];
            $this->senhaUsuario    =$linha['senhaUsuario'];
            $this->statusUsuario   =$linha['statusUsuario'];


          
        }
    }
    public function ListarUsuario()
    {

        $query = "SELECT * FROM tblusuario WHERE statusUsuario= 'ATIVO'";

        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $listaUsuario = $resultado->fetchAll();
        return $listaUsuario;
    }
    public function ListarUsuarioDesativado()
    {

        $query = "SELECT * FROM tblusuario WHERE statusUsuario= 'DESATIVADO'";

        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $listaUsuario = $resultado->fetchAll();
        return $listaUsuario;
    }

    public function Inserir()
    {
        $query = "INSERT INTO tblusuario(
                    nomeUsuario,
                    fotoUsuario,
                    emailUsuario,
                    foneUsuario,
                    senhaUsuario,
                    statusUsuario)

        VALUES (
             '".$this->nomeUsuario."',
             '".$this->fotoUsuario."',
             '".$this->emailUsuario."',
             '".$this->foneUsuario."',
            '".$this->senhaUsuario."',
            '".$this->statusUsuario."')";

        $conn = Conexao::LigarConexao();
        $conn->exec($query);
        echo "<script>document.location='index.php?p=usuario'</script>";
    }


    public function Atualizar()
    {

        $query = "UPDATE tblusuario SET
          nomeUsuario  = '".$this->nomeUsuario."',
          fotoUsuario   = '".$this->fotoUsuario."',
          emailUsuario   = '".$this->emailUsuario."',
          foneUsuario  = '".$this->foneUsuario."',
          senhaUsuario = '".$this->senhaUsuario."',
          statusUsuario  = '".$this->statusUsuario."'

            WHERE idUsuario = ".$this->idUsuario;

        $conn = Conexao::LigarConexao();
        $conn->exec($query);

        echo "<script>document.location='index.php?p=usuario'</script>";
    }

    public function Desativar()
    {
        $query = "UPDATE tblusuario SET 
    statusUsuario  = 'DESATIVADO'
    WHERE idUsuario = ".$this->idUsuario;

        $conn = Conexao::LigarConexao();
        $conn->exec($query);
        echo "<script>document.location='index.php?p=usuario'</script>";
    }


    public function Ativar()
    {
        $query = "UPDATE tblusuario SET 
    statusUsuario  = 'ATIVO'
    WHERE idUsuario = ".$this->idUsuario;

        $conn = Conexao::LigarConexao();
        $conn->exec($query);
        echo "<script>document.location='index.php?p=usuario'</script>";
    }
}
