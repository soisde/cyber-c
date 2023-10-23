<?php 
require_once('conexao.php')
class Login{

//ATRIBUTOS

public $idUsuario;
public $nomeUsuario;
public $imgUsuario;
public $emailUsuario;
public $foneUsuario;
public $senhaUsuario;
public $statusUsuario;




//METODOS


public function VerificarLogin(){

    if(isset($this->emailUsuario)){
        $query = "SELECT * FROM tblusuario WHERE emailUsuario = ' ".$this->emailUsuario."' AND senha = '".$this->senha."'";
    }else{
        if(isset($this->idUsuario)){
            $query = "SELECT * FROM tblusuario WHERE emailUsuario = ' ".$this->emailUsuario."'";
        }
    }

    $query = "SELECT * FROM tblusuario WHERE emailUsuario = ' ".$this->emailUsuario."' AND senha = '".$this->senha."'";
    $conn = Conexao::LigarConexao();
    $resultado = $conn -> query($query);
    $lista = $resultado->fetch(PDO::FETCH_ASSOC)
    return $lista;

}







}


?>