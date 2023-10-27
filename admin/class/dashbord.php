<?php

require_once('conexao.php');


class  DashbordClass{
    
    public function qtdMetodo()
    {

        $query = "SELECT COUNT(*) AS idMetodo FROM tblmetodo";

        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $listaEntrega = $resultado->fetch();
        return $listaEntrega;
    }


    public function qtdSolucoes()
    {

        $query = "SELECT COUNT(*) AS idSolucoes FROM tblsolucoes";

        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $listaEntrega = $resultado->fetch();
        return $listaEntrega;
    }


    public function qtdEntrega()
    {

        $query = "SELECT COUNT(*) AS idEntrega FROM tblentrega";

        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $listaEntrega = $resultado->fetch();
        return $listaEntrega;
    }


    public function qtdOrcamento()
    {

        $query = "SELECT COUNT(*) AS idOrcamento FROM tblorcamento";

        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $listaEntrega = $resultado->fetch();
        return $listaEntrega;
    }

    public function qtdFaq()
    {

        $query = "SELECT COUNT(*) AS idFaq FROM tblfaq";

        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $listaEntrega = $resultado->fetch();
        return $listaEntrega;
    }
    public function qtdUsuario()
    {

        $query = "SELECT COUNT(*) AS idUsuario FROM tblusuario";

        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $listaEntrega = $resultado->fetch();
        return $listaEntrega;
    }
}