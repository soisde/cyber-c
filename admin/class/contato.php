<?php

require_once('conexao.php');

class contatoClass{

    // atributos

    public $idformulario;
    public $nomeFormulario;
    public $emailFormulario;
    public $telefoneFormulario;
    public $mensagemFormulario;
    public $envioFormulario;

    //metodos

    public function InserirContato(){
        
        $sql = "INSERT INTO tblformulario(    
            nomeFormulario, 
            emailFormulario, 
            telefoneFormulario, 
            mensagemFormulario, 
            envioFormulario) 
    VALUES(
        '".$this->nomeFormulario."',
        '".$this->emailFormulario."',
        '".$this->telefoneFormulario."',
        '".$this->mensagemFormulario."',
        '".$this->envioFormulario."',
        )";

        
        $conn = Conexao::LigarConexao();
        $conn->exec($sql);

    }
}
