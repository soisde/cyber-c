<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 539a96932d4ccd59691abb140a3082b48f69d7ae
>>>>>>> 22aaec47541840dbacfceae7dc4152489de27b29
<?php
require_once('conexao.php');

class Login
{

    //ATRIBUTOS

    public $idUsuario;
    public $nomeUsuario;
    public $fotoUsuario;
    public $emailUsuario;
    public $foneUsuario;
    public $senhaUsuario;
    public $statusUsuario;
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
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
>>>>>>> 8c763046dc35be026ff6ddeb8cbeac9aee3f10c3
>>>>>>> 539a96932d4ccd59691abb140a3082b48f69d7ae
>>>>>>> 22aaec47541840dbacfceae7dc4152489de27b29




<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 539a96932d4ccd59691abb140a3082b48f69d7ae
>>>>>>> 22aaec47541840dbacfceae7dc4152489de27b29
    //METODOS


    public function VerificarLogin()
    {

         if(isset($this->emailUsuario)){
        $query = "SELECT * FROM tblusuario WHERE emailUsuario = '".$this->emailUsuario."' AND senhaUsuario = '".$this->senhaUsuario."'";
    }else{
        if(isset($this->idUsuario)){
            $query = "SELECT * FROM tblusuario WHERE idUsuario = '".$this->idUsuario."'";
        }
    }

      
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $lista = $resultado->fetch(PDO::FETCH_ASSOC);
        return $lista;
    }


}
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
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
>>>>>>> 8c763046dc35be026ff6ddeb8cbeac9aee3f10c3
>>>>>>> 539a96932d4ccd59691abb140a3082b48f69d7ae
>>>>>>> 22aaec47541840dbacfceae7dc4152489de27b29
